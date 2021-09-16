
<!-- 色分け -->
<style>
      span.media {
        background-color:#aa89bd;
        color:white;
        padding: 0.25rem 0.625rem;
        border-radius: 0.1875rem;
        font-size: 0.75rem;
        font-weight: bold;
        margin-right: 50px;
      }
      span.company-information {
        background: #619cc2;
        padding: 0.25rem 0.625rem;
        border-radius: 0.1875rem;
        font-size: 0.75rem;
        color: #fff;
        font-weight: bold;
        margin-right: 50px;
      }
    </style>
<!DOCTYPE html>
<html lang="ja">
<head>
 <?php get_header();?>
</head>
<body>
  <div class="wrapper">

  <header id="header">
      <?php get_template_part('includes/header-default-img'); ?>
  </header>

  <main>
    <section id="news" class="inner">
      <div class="news_items">
        <h2 class="sec-title">WHAT`S NEW</h2>
        <nav>
        <ul class="info_list">
        <?php if(have_posts()) : while(have_posts()) : the_post(); ?>
        <li>
            <a class="info_set" href="<?php the_permalink(); ?>">
              <div class="info_set_in">
                <time><?php the_time('Y-m-d'); ?></time>
                <span class="<?php $cat = get_the_category(); $cat = $cat[0]; { echo $cat->slug; } ?>"> <?php $cat = get_the_category(); $cat = $cat[0]; { echo $cat->cat_name; }  ?> </span>
              </div>
              <h3><?php the_title(); ?></h3>
            </a>
            </li> 
        <?php endwhile; ?>
        <?php endif; ?>
        </ul>
        </nav>
        <nav class="btn_list">
          <ul class="btn_nav">
            <li>
              <a href="<?php echo home_url();?>/category/news" class="btn001">MORE</a>
            </li>
          </ul>
        </nav>
      </div>
    </section>

    <div id="js-accordion" class="accordion">
      <?php get_template_part('includes/accordion');?>
    </div>
  
  </main>

  <footer id="footer">
    <?php get_template_part('includes/footer'); ?>
  </footer>
     <?php get_footer();?>

</div>
</body>
</html>