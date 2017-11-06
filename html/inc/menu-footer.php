	<footer>
		<div class="container-fluid">
				<div class="row">
					<div class="col-md-offset-1 col-md-10">
						<div class="footerContainer">
							<div class="footerBox">
								<ul> 
									<li><a href="about.php">About Us</a></li>
									<li><a href="terms-of-service.php">Terms of Service</a></li>
									<li><a href="privacy-policy.php">Privacy Policy</a></li>
									<li><a href="#">Help</a></li>
									<li><a href="advertise-on-blysty.php">Advertise on Blysty</a></li>
								</ul>
							</div>
							<div class="footerBox text-right power">
								<p>Powered by: <a href="https://www.imarkinfotech.com/" target="_blank">iMark Infotech</a></p>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</footer>

	<!-- Bootstrap JavaScript -->
	<script src="js/bootstrap.min.js"></script>
	<!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->

	<script type="text/javascript">
		var a = window.location.pathname;
		$('.main-menu li').each(function() {
			var b = $(this).find('a').attr('href');
			if (a.indexOf(b) > -1) {
				console.log(a + ' = ' + b);
				$(this).addClass('current-menu-item');
				$(this).siblings().removeClass('current-menu-item');
			} else {
				$(this).removeClass('current-menu-item');
			}
		});
	</script>
</body>
</html>