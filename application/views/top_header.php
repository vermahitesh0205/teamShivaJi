<!-- ======================Top-Header============Fix========= -->

<!-- ======================Top-Header============Fix========= -->
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta charset="utf-8">
<meta name="viewport" content="initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0,target-densitydpi=device-dpi, user-scalable=no" >

<meta name="format-detection" content="telephone=no">
<title><?php echo get_settings('app_title'); ?></title>
<meta name="author" content="<?php echo get_settings('app_title'); ?>">
<meta name="description" content="<?php echo get_settings('app_description'); ?>">
<meta name="keywords" content="<?php echo get_settings('app_keywords'); ?>">

<!-- META TAGS -->
<meta name="format-detection" content="telephone=no">
<meta name=distribution content=global>
<meta name=revisit-after content="Daily">
<meta name=rating content="general">
<meta name=robots content="index, follow">
<meta name=googlebot content="index, follow ">
<meta name=bingbot content=" index, follow ">
<meta name="abstract" content="<?php echo get_settings('app_title'); ?>">
<meta name="alexa" content="100">


<!-- SOCIAL MEDIA META -->
<meta property="og:description" content="<?php echo get_settings('app_description'); ?>">
<meta property="og:image" content="assets/images/og.png">
<meta property="og:site_name" content="<?php echo get_settings('app_title'); ?>">
<meta property="og:title" content="<?php echo get_settings('app_title'); ?>">
<meta property="og:type" content="website">
<meta property="og:url" content="<?php echo get_settings('app_website'); ?>">

<!-- TWITTER META -->
<meta name="twitter:card" content="summary">
<meta name="twitter:site" content="@<?php echo get_settings('app_title'); ?> ">
<meta name="twitter:creator" content="@<?php echo get_settings('app_title'); ?>">
<meta name="twitter:title" content="<?php echo get_settings('app_title'); ?>">
<meta name="twitter:description" content="<?php echo get_settings('app_description'); ?>">
<meta name="twitter:image" content="assets/images/og.png">


<!-- Favicon Icon -->
<link rel="icon" type="image/png" sizes="32x32" href="<?php echo base_url('assets/images/Icon2.png')?>">
<link rel="apple-touch-icon" href="<?php echo base_url('assets/images/Icon2.png')?>">
<link rel="icon" type="image/png" href="<?php echo base_url('assets/images/Icon2.png')?>">



<!-- <?php $hp_title = get_settings('app_name'); ?>	
<title><?php echo (!empty($pagename)) ? $hp_title." | ".$pagename : $hp_title ; ?></title> -->

<?php $fav_img = base_url('assets/images/fav.png'); 
//$fav_img_title = get_settings('app_icon');
if (!empty($fav_img_title)) { if (file_exists('admin/uploads/'.$fav_img_title)){
  $fav_img = base_url('admin/uploads/').$fav_img_title;
} }
?>


<!-- Stylesheets -->
<?php echo link_tag('http://fonts.googleapis.com/css?family=Roboto:400,700,500'); 
 echo link_tag('assets/vendor/unicons-2.0.1/css/unicons.css'); 
 echo link_tag('assets/css/vertical-responsive-menu.min.css'); 
 echo link_tag('assets/css/style.css'); 
 echo link_tag('assets/css/responsive.css'); 
 echo link_tag('assets/css/night-mode.css'); ?>

<!-- Vendor Stylesheets -->
<?php 
 echo link_tag('assets/vendor/fontawesome-free/css/all.min.css'); 
 echo link_tag('assets/vendor/OwlCarousel/assets/owl.carousel.css'); 
 echo link_tag('assets/vendor/OwlCarousel/assets/owl.theme.default.min.css'); 
 echo link_tag('assets/vendor/bootstrap/css/bootstrap.min.css'); 
 echo link_tag('assets/vendor/semantic/semantic.min.css'); ?>
<!-- ======================Top-Header============Fix========= -->

<!-- ======================Top-Header============Fix========= -->
<style type="text/css">
	.crop-body-text{
		max-width: 30ch;
	    white-space: nowrap;
	    overflow: hidden;
	    text-overflow: ellipsis;
	}
	.noselect {
  -webkit-touch-callout: none; 
    -webkit-user-select: none; 
     -khtml-user-select: none; 
       -moz-user-select: none; 
        -ms-user-select: none; 
            user-select: none; /* Non-prefixed version, currently
                                  supported by Chrome, Edge, Opera and Firefox */
}
</style>
<!-- =====================/Top-Header============Fix========= -->

<!-- ======================Top-Header============Fix========= -->
<!-- <body oncontextmenu="return false" class="noselect"> -->
