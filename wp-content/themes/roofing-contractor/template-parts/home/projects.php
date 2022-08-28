<?php
/**
 * Template part for displaying projects section
 *
 * @package Roofing Contractor
 * @subpackage roofing_contractor
 */
?>

<section id="projetcs-sec" class="py-5">
  <div class="container">
    <div class="row mb-4">
      <div class="col-lg-4 col-md-4 col-sm-4">
        <div class="title-head">
          <?php if( get_theme_mod('roofing_contractor_projetcs_main_text') != '' ){ ?>
            <h6><?php echo esc_html(get_theme_mod('roofing_contractor_projetcs_main_text',''));?></h6>
          <?php }?>
          <?php if( get_theme_mod('roofing_contractor_projetcs_main_heading') != '' ){ ?>
            <h3><?php echo esc_html(get_theme_mod('roofing_contractor_projetcs_main_heading',''));?></h3>
          <?php }?>
        </div>
      </div>
      <div class="col-lg-8 col-md-8 col-sm-8 text-center text-md-right">
        <div class="tab">
          <?php
            $featured_post = get_theme_mod('roofing_contractor_projetcs_number', '');
            for ( $j = 1; $j <= $featured_post; $j++ ){ ?>
            <button class="tablinks" onclick="roofing_contractor_projetcs_tab(event, '<?php $main_id = get_theme_mod('roofing_contractor_projetcs_text'.$j); $tab_id = str_replace(' ', '-', $main_id); echo $tab_id; ?> ')">
            <?php echo esc_html(get_theme_mod('roofing_contractor_projetcs_text'.$j)); ?></button>
          <?php }?>
        </div>
      </div>
    </div>

    <?php for ( $j = 1; $j <= $featured_post; $j++ ){ ?>
      <div id="<?php $main_id = get_theme_mod('roofing_contractor_projetcs_text'.$j); $tab_id = str_replace(' ', '-', $main_id); echo $tab_id; ?>"  class="tabcontent mt-3">
        <div class="row">
          <?php
          $roofing_contractor_catData = get_theme_mod('roofing_contractor_projetcs_category'.$j);
          if($roofing_contractor_catData){
            $page_query = new WP_Query(array( 'category_name' => esc_html( $roofing_contractor_catData ,'roofing-contractor')));
            $bgcolor = 1; ?>
            <?php while( $page_query->have_posts() ) : $page_query->the_post(); ?>
              <div class="col-lg-3 col-md-6">
                <?php if(has_post_thumbnail()) {?>
                  <div class="box mb-4">
                    <?php the_post_thumbnail(); ?>
                    <div class="box-content">
                      <h4 class="title"><a href="<?php the_permalink();?>"><?php the_title();?><span class="screen-reader-text"><?php the_title(); ?></span></a></h4>
                      <p class="mb-0"><?php $excerpt = get_the_excerpt();echo esc_html( construction_hub_string_limit_words( $excerpt,8 ) ); ?></p>
                    </div>
                  </div>
                <?php }?>
              </div>
            <?php if($bgcolor >= 6){ $bgcolor = 0; } $bgcolor++; endwhile;
            wp_reset_postdata();
          } ?>
        </div>
      </div>
    <?php }?>      
  </div>
</section>