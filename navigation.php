			<!-- Main Menu -->
			<div id="MenuWrapper">
				<div id="MainMenu">
					<div id="MmLeft"></div>
					<div id="MmBody">
						
						<!-- Main Menu Links -->
						<ul class="sf-menu">
							<li class="current"><a href="index.php">Home</a></li>
							<li>
								<a href="#">Features</a>
								<ul>
									<li><a href="#">Home page</a>
										<ul>
											<li><a href="index.html">Home 1 (default)</a></li>
											<li><a href="index-2.html">Home 2 (CU3ER)</a></li>
											<li><a href="index-3.html">Home 3 (GalleryView)</a></li>
										</ul>
									</li>
									<li><a href="sample-portfolio.html">Portfolio</a></li>
									<li><a href="sample-blog.html">Blog</a></li>
									<li>
										<a href="sample-login.html" class="login">Login</a>
										<ul>
											<li><a href="sample-login.html" class="login">Style 1 (popup)</a></li>
											<li><a href="#ContentPanel" class="topReveal">Style 2 (slide)</a></li>
										</ul>
									</li>
									<li><a href="sample-text.html">Text Styles</a></li>
									<li><a href="theme-information.html">About the Theme</a></li>
								</ul>
							</li>
							<li>
								<a href="#">Skins</a>
								<ul>

									<li>
										<a href="#" onclick="switchSkin('1');">Skin 1</a>
										<ul>
											<li style="text-align:center;"><a href="#" onclick="switchSkin('1');"><img class="skin" src="images/content/skin-changer/skin-1.jpg" height="250" alt="Skin 1" /></a></li>
										</ul>
									</li>
									<li>
										<a href="#" onclick="switchSkin('2');">Skin 2</a>
										<ul>
											<li style="text-align:center;"><a href="#" onclick="switchSkin('2');"><img class="skin" src="images/content/skin-changer/skin-2.jpg" height="250" alt="Skin 2" /></a></li>
										</ul>
									</li>
									<li>
										<a href="#" onclick="switchSkin('3');">Skin 3</a>
										<ul>
											<li style="text-align:center;"><a href="#" onclick="switchSkin('3');"><img class="skin" src="images/content/skin-changer/skin-3.jpg" height="250" alt="Skin 3" /></a></li>
										</ul>
									</li>
									<li>
										<a href="#" onclick="switchSkin('4');">Skin 4</a>
										<ul>
											<li style="text-align:center;"><a href="#" onclick="switchSkin('4');"><img class="skin" src="images/content/skin-changer/skin-4.jpg" height="250" alt="Skin 4" /></a></li>
										</ul>
									</li>
									<li>
										<a href="#" onclick="switchSkin('5');">Skin 5</a>
										<ul>
											<li style="text-align:center;"><a href="#" onclick="switchSkin('5');"><img class="skin" src="images/content/skin-changer/skin-5.jpg" height="250" alt="Skin 5" /></a></li>
										</ul>
									</li>
								</ul>
							</li>
							<li>
								<a href="sample-layout.html">Layout</a>
								<ul>
									<li><a href="sample-layout.html">Default Page</a></li>
									<li><a href="sample-layout.html#full_page">Full Page</a></li>
									<li><a href="sample-layout.html#blog_page">Blog</a></li>
									<li><a href="sample-layout.html#multi_column_page">2 &amp; 3 Column</a></li>
								</ul>
							</li>	
							<li><a href="sample-contact.html">Contact</a></li>	
						</ul>
						
						<div class="mmDivider"></div>				
						
						<!-- Extra Menu Links -->
						<ul id="MmOtherLinks" class="sf-menu">
							<li>
								<a href="#"><span class="mmFeeds">Feeds</span></a>
								<ul>
									<li><a href="#"><span class="mmRSS">RSS</span></a></li>
									<li><a href="#"><span class="mmFacebook">Facebook</span></a></li>
									<li><a href="#"><span class="mmTwitter">Twitter</span></a></li>
								</ul>
							</li>
							<?php if(isset($_SESSION['SESS_MEMBER_ID'])) { ?>
							<li><a href="scripts/logout.php"><span class="mmLogin">Logout</span></a></li>
							<?php } else { ?> 
							<li><a href="#ContentPanel" class="topReveal"><span class="mmLogin">Login</span></a></li>
							<?php } ?>
						</ul>
						
					</div>
					<div id="MmRight"></div>
				</div>
			</div>
			
			<!-- Search -->
			<div id="Search">
				<form action="#" id="SearchForm" method="post">
					<p style="margin:0;"><input type="text" name="SearchInput" id="SearchInput" value="" /></p>
					<p style="margin:0;"><input type="submit" name="SearchSubmit" id="SearchSubmit" class="noStyle" value="" /></p>
				</form>
			</div>
			
			<!-- Logo -->
			<div id="Logo">
				<a href="index.html"></a>
			</div>
			
			<!-- End of Content -->
			<div class="clear"></div>
		
		</div>