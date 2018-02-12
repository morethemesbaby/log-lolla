<?php
  /**
   * Template part for displaying the footer credits
   *
   * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
   *
   * @package Log_Lolla
   */
?>
<aside class="footer-credits">
  <h3 hidden>Footer credits</h3>

  <div class="text">
    <div class="powered-by">
      <?php
        /* translators: %s: CMS name, i.e. WordPress. */
        printf( esc_html__( 'powered by %1$s', 'log-lolla' ), '<a class="link" href="https://wordpress.org/" title="Wordpress">Wordpress</a>' );
      ?>
    </div>

    <div class="theme-by">
      <?php
				/* translators: 1: Theme name, 2: Theme author. */
				printf( esc_html__( 'and the %1$s', 'log-lolla' ), '<a class="link" href="https://mothemes.baby/log-lolla" title="Log Lolla Theme">Log Lolla theme</a>' );
			?>
    </div>
  </div>
</aside>
