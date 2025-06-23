<?php
/**
 * 这是 VS Code 风格主题的首页
 *
 * @package Vscode Theme
 * @author Your Name
 * @version 1.0
 * @link https://your-website.com
 */

$this->need('header.php');
?>

<?php while($this->next()): ?>
    <article class="post">
        <h2 class="post-title">
            <a href="<?php $this->permalink() ?>"><?php $this->title() ?></a>
        </h2>
        <div class="post-meta">
            <span><?php _e('// '); ?></span>
            <span><?php _e('Author: '); ?><?php $this->author(); ?></span>
            <span>&nbsp; | &nbsp;</span>
            <span><?php _e('Date: '); ?><?php $this->date('Y-m-d'); ?></span>
            <span>&nbsp; | &nbsp;</span>
            <span><?php _e('Category: '); ?><?php $this->category(','); ?></span>
        </div>
        <div class="post-content">
            <?php $this->content('Continue reading...'); ?>
        </div>
    </article>
<?php endwhile; ?>

<?php $this->pageNav('&laquo; Prev', 'Next &raquo;'); ?>

<?php $this->need('footer.php'); ?>
