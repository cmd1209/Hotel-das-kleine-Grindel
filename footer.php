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
		(function(f,i,r,e,s,h,l){i['GoogleAnalyticsObject']=s;f[s]=f[s]||function(){
		(f[s].q=f[s].q||[]).push(arguments)},f[s].l=1*new Date();h=i.createElement(r),
		l=i.getElementsByTagName(r)[0];h.async=1;h.src=e;l.parentNode.insertBefore(h,l)
		})(window,document,'script','//www.google-analytics.com/analytics.js','ga');
		ga('create', 'UA-XXXXXXXX-XX', 'yourdomain.com');
		ga('send', 'pageview');
		</script>

	</body>
</html>
