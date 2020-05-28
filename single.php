<?php get_header() ?>

  <main class="w3-col m9 l9">
    <section>
      <?php if(have_posts()) : ?>
        <?php while(have_posts()) : the_post() ?>
        <article class="post">
          <p class="meta">
            Posted on <?php the_date()?> by <a href="<?php echo get_author_posts_url(get_the_author_meta('ID'))?>"><?php the_author()?></a>
          </p>
          <hr>
          <?php if(has_post_thumbnail()) : ?>
            <div class="post-image">
              <?php
                $attr = array(
                  "class" => "w3-animate-right"
                );
              ?>
              <?php the_post_thumbnail($id, "large", $attr)?>
            </div>
          <?php endif ?>

          <div class="w3-row">
            <div class="w3-col l2">
              <br>
              <a class="w3-btn w3-red" href="<?php echo site_url('/')?>">Back</a>
            </div>
            <div class="w3-col l10">
              <h1><?php the_title()?></h1>
              <?php the_content()?>
            </div>
          </div>
        </article>
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