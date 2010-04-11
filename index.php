<?php
	session_start();
	include('header.php');
	include('panel.php');
?>

<!-- Site Container -->
<div id="Wrapper">
	<div id="PageWrapper">
		<div class="pageTop"></div>
		<div id="Header">
		
			<?php include('navigation.php'); ?>

		<?php include('slideshow.php'); ?>
		
		<div class="pageMain">
		
			<?php include('showcase.php'); ?>
			
			<?php include('page.php'); ?>
			
		</div>
		
		<?php include('footer.php'); ?>
