<?php get_header(); ?>

<main id="contact">
  <?php get_template_part( "template/contact-headline" ); ?>
  <?php get_template_part( "template/contact-step" ); ?>
  <?php echo do_shortcode('[mwform_formkey key="56"]'); ?>
</main>

<?php get_footer(); ?>