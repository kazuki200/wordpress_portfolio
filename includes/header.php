 <?php
  if(has_post_thumbnail()):
    $id = get_post_thumbnail_id();
    $img = wp_get_attachment_image_src($id,'large');
  else:
    $img = array(get_template_directory_uri() . '/img/accordion/3050788_s.jpg');
  endif;
    ?>
    <img class="mainvisual" src="<?php echo $img[0];?>" alt="">

 <div class="text">
    <h2>NEWS</h2>
</div>

    <nav>
      
     <a href="<?php echo home_url();?>">
       <img src="<?php bloginfo('template_url');?>/img/—Pngtree—three-color company logo_764665.png" alt="logo">
      </a>
      
      <ul>
        <li class="contact-us"><a href="">お問合せ</a></li>
        <li class="hamburger-menu" id="hamburger-menu">
          <div></div>
          <div></div>
          <div></div>
        </li>
        <nav id="nav">
          <ul>
            <li><a href="">companyについて</a></li>
            <li><a href="">事業内容</a></li>
            <li><a href="">会社概要</a></li>
            <li><a href="">採用情報</a></li>
            <li><a href="">お問合せ</a></li>
            <li><a href="">個人情報保護方針</a></li>
          </ul>
        </nav>
      </ul>
    </nav>