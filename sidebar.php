<aside class="side-bar">
    <div class="widget">
        <h3 class="widget-title">> RECENT POSTS</h3>
        <ul>
            <?php $this->widget('Widget_Contents_Post_Recent', 'pageSize=5')->parse('<li><a href="{permalink}">{title}</a></li>'); ?>
        </ul>
    </div>

    <div class="widget">
        <h3 class="widget-title">> CATEGORIES</h3>
        <?php $this->widget('Widget_Metas_Category_List')->list(); ?>
    </div>

    <div class="widget">
        <h3 class="widget-title">> ARCHIVES</h3>
        <ul>
            <?php \Widget\Contents\Post\Date::alloc('type=month&format=F Y')->parse('<li><a href="{permalink}">{date}</a></li>'); ?>
        </ul>
    </div>
</aside>
