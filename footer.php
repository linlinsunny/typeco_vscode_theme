    </main> <!-- end .main-content -->
</div> <!-- end .vscode-container -->

<!-- Status Bar -->
<footer class="status-bar">
    <div>&copy; <?php echo date('Y'); ?> <a href="<?php $this->options->siteUrl(); ?>" style="color: #fff; text-decoration: none;"><?php $this->options->title(); ?></a></div>
    <div>
        <span>Powered by <a href="http://typecho.org" style="color: #fff; text-decoration: none;">Typecho</a></span>
    </div>
</footer>

<?php $this->footer(); ?>
<link rel="stylesheet" href="//cdnjs.cloudflare.com/ajax/libs/highlight.js/11.7.0/styles/vs2015.min.css">
<script src="//cdnjs.cloudflare.com/ajax/libs/highlight.js/11.7.0/highlight.min.js"></script>
<script>hljs.highlightAll();</script>
</body>
</html>
