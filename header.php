<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	<meta name="author" content="Parallelus" />
	<meta name="description" content="A brief description of this website or your business." />
	<meta name="keywords" content="keywords, or phrases, associated, with each page, are best" />
	<title>Unite - Together is Better (created by Parallelus)</title>
	
	<!-- Favorites icon -->
	<link rel="shortcut icon" href="http://para.llel.us/favicon.ico" />
	
	<!-- Style sheets -->
	<link rel="stylesheet" type="text/css" href="css/reset.min.css" />
	<link rel="stylesheet" type="text/css" href="css/menu.min.css" />
	<link rel="stylesheet" type="text/css" href="css/fancybox.css" />
	<link rel="stylesheet" type="text/css" href="css/tooltip.min.css" />
	<link rel="stylesheet" type="text/css" href="css/default.css" />
	<link rel="stylesheet" type="text/css" href="css/skins/skin-5.css" />
	
	<!-- jQuery framework and utilities -->
	<script type="text/javascript" src="js/jquery-1.4.min.js"></script>
	<script type="text/javascript" src="js/jquery-ui-1.7.2.min.js"></script>
	<script type="text/javascript" src="js/jquery.easing.1.3.min.js"></script>
	<script type="text/javascript" src="js/hoverIntent.min.js"></script>
	<script type="text/javascript" src="js/jquery.bgiframe.min.js"></script>
	<!-- Drop down menus -->
	<script type="text/javascript" src="js/superfish.min.js"></script>
	<script type="text/javascript" src="js/supersubs.min.js"></script>
	<!-- Tooltips -->
	<script type="text/javascript" src="js/jquery.cluetip.min.js"></script>
	<!-- Input labels -->
	<script type="text/javascript" src="js/jquery.overlabel.min.js"></script>
	<!-- Anchor tag scrolling effects -->
	<script type="text/javascript" src="js/jquery.scrollTo-min.js"></script>
	<script type="text/javascript" src="js/jquery.localscroll-min.js"></script>
	<!-- Inline popups/modal windows -->
	<script type="text/javascript" src="js/jquery.fancybox-1.2.6.pack.js"></script>
	
	<!-- Slide shows -->
		<!-- Cycle 	(default) -->
		<script type="text/javascript" src="js/jquery.cycle.all.min.js"></script>
		<script type="text/javascript">
			// initialize slideshow (Cycle)
			$(document).ready(function() {
				if ($('#Slides').length > 0) {
					$('#Slides').cycle({ 
						fx: 'scrollHorz',
						speed: 750,
						timeout: 6000, 
						randomizeEffects: false, 
						easing: 'easeOutCubic',
						next:   '.slideNext', 
						prev:   '.slidePrev',
						pager:  '#slidePager',
						cleartypeNoBg: true
					});
				}
			});
		</script>
		
	<!-- Font replacement (cuf�n) -->
	<script src="js/cufon-yui.js" type="text/javascript"></script>
	<script src="js/LiberationSans.font.js" type="text/javascript"></script>

	<!-- IE only includes (PNG Fix and other things for sucky browsers -->
	
	<!--[if lt IE 7]>
		<link rel="stylesheet" type="text/css" href="css/ie-only.css">
		<script type="text/javascript" src="js/pngFix.min.js"></script>
		<script type="text/javascript"> 
			$(document).ready(function(){ 
				$(document.body).supersleight();
			}); 
		</script> 
	<![endif]-->
	<!--[if IE]><link rel="stylesheet" type="text/css" href="css/ie-only-all-versions.css"><![endif]-->
	

	<!-- Functions to initialize after page load -->
	<script type="text/javascript" src="js/onLoad.min.js"></script>

	
</head>
<body>