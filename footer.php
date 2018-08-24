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
					Grindelhof 59  |  20146 Hamburg <br>T +49 (0)40 4321 3 666
				</p>
				<p>
					<a href="mailto: hotel@das-kleine-grindel.com" class="email"><img src="https://das-kleine-grindel.com/wp-content/uploads/2018/08/email-image.jpg" alt="" width="245" height="29"></a><br><a href="https://das-kleine-grindel.com/de/impressum/" class="email">Impressum & Datenschutz</a>
				</p>
				<p class="copyright">
				<a href="https://www.das-kleine-grindel.com/wp-content/uploads/2018/08/AGB-Das-kleine-Grindel.pdf" class="email" target="_blank">Allgemeine Geschäftsbedingungen / Terms and Conditions</a><br>
					&copy; <?php echo date('Y'); ?> Copyright <?php bloginfo('name'); ?>.
				</p>
				<!-- /copyright -->
			</footer>
			<!-- /footer -->
		</div>
		<!-- /wrapper -->
		<?php wp_footer(); ?>
		<!-- analytics -->
	</body>
</html>