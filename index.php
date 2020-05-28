<?php get_header() ?>

  <main class="w3-col m9 l9">
    <section>
      <?php if(have_posts()) : ?>
        <?php while(have_posts()) : the_post() ?>
          <?php get_template_part("template-parts/content", get_post_format()) ?>
        <?php endwhile ?>
      <?php else : ?>
        <?php echo wpautop("No posts found.") ?>
      <?php endif ?>
    </section>
  </main>
</div>

<!-- Mostrar barra de administración (admin bar) -->
<?php wp_footer()?>

<?php get_footer()?>