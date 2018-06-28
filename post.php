<?php if (!defined('__TYPECHO_ROOT_DIR__')) exit; ?>
<?php $this->need('header.php'); ?>
<main id="main" class="main">
  <div class="main-inner">
    <div id="content" class="content">
        <div id="posts" class="posts-expand">
            <article class="post post-type-normal " itemscope itemtype="http://schema.org/Article">
              <header class="post-header">

                  <h1 class="post-title" itemprop="name headline">
                     <?php $this->title() ?>
                 </h1>

                 <div class="post-meta">
                 <span class="post-meta-item-icon">
                <i class="fa fa-calendar-o"></i>
              </span>
        <span class="post-time">
          发表于
          <time itemprop="dateCreated" datetime="<?php $this->date('c');?>" content="<?php $this->date('yy-m-d');?>">
            <?php $this->date('Y-m-d');?>
          </time>
        </span>
  
        <span class="post-comments-count">
        <span class="post-meta-divider">|</span>
        <span class="post-meta-item-icon">
                  <i class="fa fa-file-word-o"></i>
                </span>
                <span class="post-meta-item-text">本文字数：</span>
                <span title="本文字数"><?php art_count($this->cid);?></span>
                <span class="post-meta-divider">|</span>
        <span class="post-meta-item-icon">
                  <i class="fa fa-comment-o"></i>
                </span>
              <?php if (!empty($this->options->next_comments)): ?>
               <a rel="nofollow" href="<?php $this->permalink()?>#comments"><span class="ds-thread-count" data-thread-key="<?php echo $this->cid; ?>" data-count-type="comments"></span></a>
              <?php else: ?>
              <a rel="nofollow" href="<?php $this->permalink()?>#comments"><?php $this->commentsNum('暂无评论', '1 条评论', '%d 条评论');?></a>
              <?php endif;?>
       </span>

      </div>
  </header>

  <div class="post-body">


    <span itemprop="articleBody">
        <?php $this->content(); ?>
    </span>

</div>

<footer class="post-footer">

    <div class="post-tags">
        <?php $this->tags(' ', true); ?>
    </div>

    <div class="post-nav">
    <div class="post-nav-next post-nav-item">
        <?php $this->thePrev('%s' , '没有了');?>
    </div>  
    <span class="post-nav-divider"></span>
    <div class="post-nav-prev post-nav-item">
        <?php  $this->theNext('%s', '没有了'); ?>
    </div>

</div>

</footer>
</article>

</div>
</div>
<?php $this->need('comments.php'); ?>
</div>
<?php $this->need('sidebar.php'); ?>
</main>

<?php $this->need('footer.php'); ?>
