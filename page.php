			<!-- Page Content -->
			<div class="contentArea">
			
				<div class="two-thirds">
					<?php if(isset($_SESSION['SESS_NAME'])) { ?>
					<!-- Welcome Message / Page Headline -->
					<h1 class="headline">Welcome <strong><?php echo $_SESSION['SESS_NAME']; ?></strong></h1>
					<?php } else { ?>
					<p class="impact">Unite takes a clean, organized approach to presenting content so it’s easier to find what you want. The theme includes page layouts for: <a href="sample-layout.html#full_page">full page</a>, <a href="sample-layout.html#multi_column_page">multi-column</a>, <a href="sample-blog.html">blog</a>, <a href="sample-portfolio.html">portfolio</a>, <br /><a href="sample-contact.html">contact form</a> and an <a href="sample-login.html" class="login" title="Custom Login Page|This theme includes 2 different login forms. Apply either with your admin portal for a cohesive, stylish website. (click for preveiw)">administrative login</a> (<a href="#ContentPanel" class="topReveal" title="Alternate Admin Login|Preview the alternate login.">alternate</a>).</p>
					<?php } ?>	
					<!-- Featured Content -->
					<div class="ribbon">
						<div class="wrapAround"></div>
						<div class="tab">
							<span>Featured Content</span>
						</div>
					</div>
	
					<div class="featuredContent">
						<!-- Featured Item -->
						<div class="featuredItem">
							<a href="images/content/demo-only/featured-1.jpg" class="featuredImg img zoom" rel="featured"><img src="images/content/demo-only/featured-1-thumb.jpg" alt="featured item" /></a>
							<div class="featuredText">
								<h1 class="title">
									Dynamic Functionality
									<span>jQuery integrated to provide high quality, dynamic design features.</span>
								</h1>
								<a href="#">More information...</a>
							</div>
						</div>
						<!-- Featured Item -->
						<div class="featuredItem">
							<a href="images/content/demo-only/featured-2.jpg" class="featuredImg img zoom" rel="featured"><img src="images/content/demo-only/featured-2-thumb.jpg" alt="featured item" /></a>
							<div class="featuredText">
								<h1 class="title">
									Cross Browser Compatible
									<span>Compatible with all major browsers. IE 6,7 and 8, Firefox 3.5+, Opera 10+, Google Chrome and Safari 4+.</span>
								</h1>
								<a href="#">More information...</a>
							</div>
						</div>
						
						<!-- Featured Item -->
						<div class="featuredItem">
							<a href="images/content/demo-only/featured-3.jpg" class="featuredImg img zoom" rel="featured"><img src="images/content/demo-only/featured-3-thumb.jpg" alt="featured item" /></a>
							<div class="featuredText">
								<h1 class="title">
									Various Text and Page Layouts
									<span>A wide range of text styling and page layouts for corporate, portfolio and other uses.</span>
								</h1>
								<a href="#">More information...</a>
							</div>
						</div>
						<!-- Featured Item -->
						<div class="featuredItem">
							<a href="images/content/demo-only/featured-4.jpg" class="featuredImg img zoom" rel="featured"><img src="images/content/demo-only/featured-4-thumb.jpg" alt="featured item" /></a>
							<div class="featuredText">
								<h1 class="title">
									5 Pre-made Skins
									<span>Choose from an array of five unique style variations.</span>
								</h1>
								<a href="#">More information...</a>
							</div>
						</div>
						
						<!-- End of Content -->
						<div class="clear"></div>
	
					</div>
					
				</div>
				
				<?php include('sidebar.php'); ?>
				
				<!-- End of Content -->
				<div class="clear"></div>
			
			</div>