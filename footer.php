</div>
  </div>
	<footer class="site-footer">
		<div class="container-fluid site-footer">
			<div class="row">
				<div class="container">
				<?php if( get_field('footer_widget', 'option') == 'Show' ): ?>
					<div class="row">
						<div class="col-md-6 col-sm-6 col-sx-12">
							<?php dynamic_sidebar('footer-left');?>
						</div>
						
							<?php // dynamic_sidebar('footer-middle');?>
						
						<div class="col-md-6 col-sm-6 col-sx-12">
							<?php dynamic_sidebar('footer-right');?>
						</div>
					</div>
				<?php endif; 
					if( get_field('footer_widget', 'option') == 'Hide' ): 
					endif; ?>
					<div class="row"><div class="col-md-12"> 
				<?php echo '<div class="footer-info">'; bloginfo('name'); echo " &copy; " .date("Y");	?>
						</div>
				<?php // Footer Address					
					echo '<div class="footer-address"><address>';
						$streetad = get_field('address_street', 'option'); 
						$cityad = get_field('address_city', 'option'); 
						$statead = get_field('address_state', 'option'); 
						$zipad = get_field('address_zip', 'option');
						echo $streetad." ".$cityad." ".$statead." ".$zipad."</address></div> ";
						
					$phone = get_field('phone_number', 'option');
					$phoneurl = preg_replace('/[^\p{L}\p{N}\s]/u', '', $phone);
						if( get_field('phone_number', 'option') ): 
							echo ('<a class="footer-phone" title="Call Now '.$phone.'" href="tel:'.$phoneurl.'"/>Phone: '.$phone.'</a>'); 
							endif; 
				// Footer Navigation
					wp_nav_menu( array( 'theme_location' => 'footer-menu' ) ); echo ' <a href="http://peytongregory.com/" title="Site Designed By Peyton Gregory" target="_blank">Site Design</a>'; 
					get_template_part ('includes/social'); 
					?>
					</div></div>
				</div>
			</div>
		</div>
	</footer>
<script defer src="<?php echo esc_url( get_template_directory_uri() ) ?>/js/jquery-2.1.4.min.js"></script>
<?php if( get_field('google_analytics', 'option') ): the_field('google_analytics', 'option'); endif; 
wp_footer(); ?>
</body>
</html>