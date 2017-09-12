			<!-- footer -->
			<!-- <div class="blank primarybackground">
			</div>
			<div class="blank whitebackground">
			</div> -->
			<footer class="footer" role="contentinfo">
				<div class="logo">
					<a href="<?php echo home_url(); ?>">
						<!-- svg logo - toddmotto.com/mastering-svg-use-for-a-retina-web-fallbacks-with-png-script -->
						<img src="<?php echo get_template_directory_uri(); ?>/img/logo-neg.svg" alt="Logo" class="logo-footer">
					</a>
				</div>
				<!-- copyright -->
				<p>
					Grindelhof 59  |  20146 Hamburg  |  T +49 (0)40 4321 3 666
				</p>
				<p>
					<a href="mailto: hotel@das-kleine-grindel.com" class="email">hotel@das-kleine-grindel.com</a>
				</p>
				<p class="copyright">
					&copy; <?php echo date('Y'); ?> Copyright <?php bloginfo('name'); ?>.
				</p>
				<!-- /copyright -->
			</footer>
			<!-- /footer -->
		</div>
		<!-- /wrapper -->

		<?php wp_footer(); ?>

		<!-- analytics -->
		<script>
  (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
  (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
  m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
  })(window,document,'script','https://www.google-analytics.com/analytics.js','ga');

  ga('create', 'UA-10932812-7', 'auto');
  ga('send', 'pageview');

</script>

	</body>
</html>
