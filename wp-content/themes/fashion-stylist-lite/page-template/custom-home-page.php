<?php
/**
 * Template Name: Custom Home Page
 */
get_header(); ?>

<main id="content">
  <?php if( get_option('fashion_stylist_lite_slider_arrows') == '1'){ ?>
    <section id="slider">    
      <?php
        $slider_category=  get_theme_mod('fashion_designer_studio_slider_setting');if($slider_category){
        $page_query = new WP_Query(array( 'category_name' => esc_html($slider_category ,'fashion-stylist-lite')));?>
        <div class="owl-carousel">
          <?php while( $page_query->have_posts() ) : $page_query->the_post(); ?>
              <div class="slide-box mb-2">
              <?php if(has_post_thumbnail()){ ?>
                <img src="<?php the_post_thumbnail_url('full'); ?>"/>
              <?php }else { ?><div class="bg-color"></div> <?php } ?>
                <div class="slide-box-content">
                  <h3 class="mb-3"><?php the_title();?></h3>
                  <a href="<?php the_permalink(); ?>" class="text-center"><?php esc_html_e('SHOP NOW','fashion-stylist-lite'); ?></a>
                </div>
              </div>
          <?php endwhile; ?>
        </div>
        <?php wp_reset_postdata();
      }?>   
    </section>
<?php }?>
<?php if( get_option('fashion_designer_studio_section_show_hide') == '1'){ ?>
  <section id="home-mission" class="py-5">
    <div class="container">
      <?php if( get_theme_mod('fashion_designer_studio_mission_category_title') != '' ){ ?>
        <h3 class="coll-head"><?php echo esc_html(get_theme_mod('fashion_designer_studio_mission_category_title','')); ?></h3>
      <?php }?>
      <div class="row pt-4">
        <?php
          $project_category=  get_theme_mod('fashion_designer_studio_mission_category_setting');if($project_category){
          $page_query = new WP_Query(array( 'category_name' => esc_html($project_category ,'fashion-stylist-lite')));?>
            <?php while( $page_query->have_posts() ) : $page_query->the_post(); ?>
              <div class="col-lg-3 col-md-4 col-sm-4 text-center mb-4">
                <div class="box">
                  <?php the_post_thumbnail(); ?>
                  <div class="box-content">
                    <h3 class="title m-0"><?php the_title();?></h3>
                  </div>                              
                </div>
                <a href="<?php the_permalink(); ?>" class="coll-btn text-center"><?php esc_html_e('View More','fashion-stylist-lite'); ?></a>
              </div>
            <?php endwhile;
          wp_reset_postdata();
        }?>
      </div>
    </div>
  </section>
<?php }?>
</main>

<?php get_footer(); ?>