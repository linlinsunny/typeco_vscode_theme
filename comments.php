<?php if (!defined('__TYPECHO_ROOT_DIR__')) exit; ?>

<div id="comments" class="comments-area">
    <?php $this->comments()->to($comments); ?>

    <?php if ($comments->have()): ?>
        <h3><?php $this->commentsNum(_t('// 0 Comments'), _t('// 1 Comment'), _t('// %d Comments')); ?></h3>

        <?php $comments->listComments(); ?>

        <?php $comments->pageNav('&laquo; Prev', 'Next &raquo;'); ?>
    <?php endif; ?>

    <?php if($this->allow('comment')): ?>
        <div id="<?php $this->respondId(); ?>" class="respond">
            <div class="cancel-comment-reply">
                <?php $comments->cancelReply(); ?>
            </div>

            <h3 id="response"><?php _e('// Add new comment'); ?></h3>
            <form method="post" action="<?php $this->commentUrl() ?>" id="comment-form" role="form">
                <?php if($this->user->hasLogin()): ?>
                    <p><?php _e('Logged in as'); ?> <a href="<?php $this->options->profileUrl(); ?>"><?php $this->user->screenName(); ?></a>. <a href="<?php $this->options->logoutUrl(); ?>" title="Logout"><?php _e('Logout &raquo;'); ?></a></p>
                <?php else: ?>
                    <p>
                        <label for="author" class="required"><?php _e('Name'); ?></label>
                        <input type="text" name="author" id="author" class="text" value="<?php $this->remember('author'); ?>" required />
                    </p>
                    <p>
                        <label for="mail" class="required<?php if ($this->options->commentsRequireMail): ?> required<?php endif; ?>"><?php _e('Email'); ?></label>
                        <input type="email" name="mail" id="mail" class="text" value="<?php $this->remember('mail'); ?>"<?php if ($this->options->commentsRequireMail): ?> required<?php endif; ?> />
                    </p>
                    <p>
                        <label for="url"<?php if ($this->options->commentsRequireURL): ?> class="required"<?php endif; ?>><?php _e('Website'); ?></label>
                        <input type="url" name="url" id="url" class="text" placeholder="<?php _e('http://'); ?>" value="<?php $this->remember('url'); ?>"<?php if ($this->options->commentsRequireURL): ?> required<?php endif; ?> />
                    </p>
                <?php endif; ?>
                <p>
                    <label for="textarea" class="required"><?php _e('Content'); ?></label>
                    <textarea rows="8" name="text" id="textarea" class="textarea" required ><?php $this->remember('text'); ?></textarea>
                </p>
                <p>
                    <button type="submit" class="submit"><?php _e('Submit Comment'); ?></button>
                </p>
            </form>
        </div>
    <?php else: ?>
        <h3><?php _e('// Comments are closed.'); ?></h3>
    <?php endif; ?>
</div>

