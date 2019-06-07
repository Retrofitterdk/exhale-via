<footer class="app-footer">
  <div class="wrapper">
    <?php Exhale\Template\Footer::displayCredit() ?>
    <?php Hybrid\View\display( 'nav/menu', 'social', [ 'location' => 'social' ] ) ?>
  </div>
  <?php $attr = array (
    'before' => '<div class="wrapper">',
    'after'  => '</div>'
  );
  the_biz_info($attr) ?>
</footer>
</div><!-- .app -->
<?php wp_footer() ?>
</body>
</html>
