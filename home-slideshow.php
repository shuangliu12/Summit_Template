<!-- Carousel
    ================================================== -->
    <div id="myCarousel" class="carousel slide" data-ride="carousel">
      <div class="carousel-inner">
	  <?php $wl_theme_options = weblizar_get_options(); $j=1;
			for($i=1; $i<=3; $i++){  ?>
			<?php if($wl_theme_options['slide_image_'.$i]!='') {
              			?>
        <div class="item <?php if($j==1) echo "active"; ?>">

          <img src="<?php echo esc_url($wl_theme_options['slide_image_'.$i]); ?>" class="img-responsive" alt="<?php echo esc_attr($wl_theme_options['slide_title_'.$i]); ?>">
		  <div class="container">
            <div class="carousel-caption">
			<?php if($wl_theme_options['slide_title_'.$i]!='') {  ?>
			<div class="carousel-text">
            <h1 class="animated bounceInRight"><?php echo esc_attr($wl_theme_options['slide_title_'.$i]); ?></h1>
			<?php
			 if($wl_theme_options['slide_desc_'.$i]!='') {  ?>
			  <ul class="list-unstyled carousel-list">
			 <li class="animated bounceInLeft"><?php echo esc_attr($wl_theme_options['slide_desc_'.$i]); ?></li>
			 </ul>
			 <?php }
			if($wl_theme_options['slide_btn_text_'.$i]!='') { ?>
            <a class="enigma_blog_read_btn animated bounceInUp" href="<?php if($wl_theme_options['slide_btn_link_'.$i]!='') { echo esc_url($wl_theme_options['slide_btn_link_'.$i]); } ?>" role="button"><?php echo esc_attr($wl_theme_options['slide_btn_text_'.$i]); ?></a>
			<?php } ?>
            </div>
			<?php } ?>
			</div>
          </div>
        </div>
			<?php $j++; }  } ?>
      </div>
    </div>
