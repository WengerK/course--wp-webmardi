<?php
/**
 * The template for displaying archive pages.
 */

get_header();

$description = get_the_archive_description();
?>

<?php if ( have_posts() ) : ?>
    <header class="page-header alignwide">
      <?php the_archive_title( '<h1 class="page-title">', '</h1>' ); ?>
      <?php if ( $description ) : ?>
          <div class="archive-description"><?php echo wp_kses_post( wpautop( $description ) ); ?></div>
      <?php endif; ?>
    </header><!-- .page-header -->

    <!-- TODO: Here is your archive page code. -->
    <!-- TODO: Suggest to create archive-[content-type] template for each content type. -->
    <ul>
      <?php while ( have_posts() ) : ?>
        <?php the_post(); ?>
          <li><?php the_title() ?></li>
      <?php endwhile; ?>
    </ul>

<?php else : ?>
  <?php get_template_part( 'template-parts/content/content-none' ); ?>
<?php endif; ?>

<?php
get_footer();
