<?php
/**
 * 移植Hexo主题Next.Muse 基于Mixt改
 *
 * @package Next.Muse
 * @author linxy
 * @version 1.0.0
 * @link http://loliko.me/archives/typecho-theme-next-muse.html
 */

if (!defined('__TYPECHO_ROOT_DIR__')) {
    exit;
}

$this->need('header.php');
?>
<main id="main" class="main">
      <div class="main-inner">
        <div class="content-wrap">
        <div id="content" class="content">
<section id="posts" class="posts-expand">

  <?php while ($this->next()): ?>
  <article class="post post-type-normal " itemscope itemtype="http://schema.org/Article">
  <div class="post-block" >
  <header class="post-header" >
        <h1 class="post-title" itemprop="name headline">
              <a class="post-title-link" href="<?php $this->permalink()?>" itemprop="url">
                <?php $this->title()?>
              </a>
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
        <?php $this->content('阅读全文 »');?>
    </div>

    <footer class="post-footer">

        <div class="post-eof"></div>

    </footer>
    </div>
  </article>
<?php endwhile;?>
  </section>
   <?php $this->pageNav('&laquo; ', ' &raquo;', 5, '...', array('wrapTag' => 'nav', 'wrapClass' => 'pagination', 'itemTag' => '', 'prevClass' => 'extend prev', 'nextClass' => 'extend next', 'currentClass' => 'page-number current'));?>
  </div>
      </div>

<?php $this->need('sidebar.php');?>
</div>
    </main>

<?php $this->need('footer.php');?>
