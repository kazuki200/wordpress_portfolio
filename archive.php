
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
 <link rel="stylesheet" href= "<?php echo get_template_directory_uri();?>/style2.css">
</head>
<body>
  <div class="wrapper">

  <header id="header">
      <?php get_template_part('includes/header'); ?>
  </header>

  <main>

  <div id="information">

   <nav class="sidebar">
     <ul>
       <li><h4>Category</h4></li>
       <li><a href="<?php echo home_url();?>/category/news">ALL</a></li>
       <li><a href="<?php echo home_url();?>/category/media">メディア</a></li>
       <li><a href="<?php echo home_url();?>/category/company-information">会社情報</a></li>
     </ul>
   </nav>
   
   <section id="news" class="inner">
    <div id="info_inner">
      <div class="news_items">
        <h2 class="sec-title">News list</h2>
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
        </div>
      </div>
    </div>
    </section>
  <div id="js-accordion"><a href=""></a></div>

  </main>

   <footer id="footer">
    <?php get_template_part('includes/footer'); ?>
  </footer>

     <?php get_footer();?>
      <script src="<?php get_template_directory_uri().'portfolio_2.js';?>"></script>
</div>
</body>
</html>
