<?php 
/*
* Display Logo and contact details
*/
?>

<div class="headerbox py-3">
  <div class="container">
    <div class="row">
      <div class="col-lg-5 col-md-4 align-self-center">
        <?php if( get_theme_mod( 'construction_hub_call_text' ) != '' || get_theme_mod( 'construction_hub_call' ) != '') { ?>
          <p class="mb-0"><i class="fas fa-phone mr-2"></i><span><?php echo esc_html( get_theme_mod('construction_hub_call_text','') ); ?></span> <?php echo esc_html( get_theme_mod('construction_hub_call','') ); ?></p>
        <?php } ?>
      </div>
      <div class="col-lg-4 col-md-4 align-self-center">
        <?php if( get_theme_mod( 'construction_hub_mail_text' ) != '' || get_theme_mod( 'construction_hub_mail' ) != '') { ?>
        <p class="mb-0 text-center text-md-right"><i class="fas fa-envelope mr-2"></i><span><?php echo esc_html( get_theme_mod('construction_hub_mail_text','') ); ?></span> <?php echo esc_html( get_theme_mod('construction_hub_mail','') ); ?></p>
        <?php } ?>
      </div>
      <div class="col-lg-3 col-md-4 social-media text-center text-md-right align-self-center">
        <?php if( get_theme_mod( 'roofing_contractor_facebook_url' ) != '') { ?>
          <a href="<?php echo esc_url( get_theme_mod( 'roofing_contractor_facebook_url','' ) ); ?>"><i class="fab fa-facebook-f mr-3"></i></a>
        <?php } ?>
        <?php if( get_theme_mod( 'roofing_contractor_twitter_url' ) != '') { ?>
          <a href="<?php echo esc_url( get_theme_mod( 'roofing_contractor_twitter_url','' ) ); ?>"><i class="fab fa-twitter mr-3"></i></a>
        <?php } ?>
        <?php if( get_theme_mod( 'roofing_contractor_instagram_url' ) != '') { ?>
          <a href="<?php echo esc_url( get_theme_mod( 'roofing_contractor_instagram_url','' ) ); ?>"><i class="fab fa-instagram mr-3"></i></a>
        <?php } ?>
        <?php if( get_theme_mod( 'roofing_contractor_youtube_url' ) != '') { ?>
          <a href="<?php echo esc_url( get_theme_mod( 'roofing_contractor_youtube_url','' ) ); ?>"><i class="fab fa-youtube mr-3"></i></a>
        <?php } ?>
        <?php if( get_theme_mod( 'roofing_contractor_pint_url' ) != '') { ?>
          <a href="<?php echo esc_url( get_theme_mod( 'roofing_contractor_pint_url','' ) ); ?>"><i class="fab fa-pinterest mr-3"></i></a>
        <?php } ?>
      </div>
    </div>
  </div>
</div>

<?php get_template_part( 'template-parts/navigation/site-nav' ); ?>