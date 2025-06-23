<?php $this->need('header.php'); ?>

<article class="post">
    <h1 class="post-title"><?php $this->title() ?></h1>
    <div class="post-meta">
        <span><?php _e('// '); ?></span>
        <span><?php _e('Author: '); ?><?php $this->author(); ?></span>
        <span>&nbsp; | &nbsp;</span>
        <span><?php _e('Date: '); ?><?php $this->date('Y-m-d'); ?></span>
    </div>
    <div class="post-content">
        <?php $this->content(); ?>
    </div>
</article>

<!-- 这里可以添加评论区 -->
<?php $this->need('comments.php'); ?>

<?php $this->need('footer.php'); ?>
