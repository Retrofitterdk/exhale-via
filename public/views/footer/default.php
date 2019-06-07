<footer class="app-footer">
	<?php Exhale\Template\Footer::displayCredit() ?>
	<?php the_biz_info(array('4', '<div id="biz-info>', '</div>')) ?>
	<?php Hybrid\View\display( 'nav/menu', 'social', [ 'location' => 'social' ] ) ?>
</footer>
</div><!-- .app -->
<?php wp_footer() ?>
</body>
</html>
