<!doctype html>
<html <?php language_attributes(); ?> >
	<head>
		<meta charset="<?php bloginfo('charset'); ?>">
		<title><?php wp_title(''); ?><?php if(wp_title('', false)) { echo ' :'; } ?> <?php bloginfo('name'); ?></title>

		
    <link rel="stylesheet" href='<?php echo html5blank_styles(); ?>' type="text/css" media="screen">
       
    <script src='<?php echo html5blank_header_scripts(); ?>' type="text/javascript"></script>
    
	<!--[if lt IE 8]>
    <div style=' clear: both; text-align:center; position: relative;'>
        <a href="http://windows.microsoft.com/en-US/internet-explorer/products/ie/home?ocid=ie6_countdown_bannercode">
        	<img src="http://storage.ie6countdown.com/assets/100/images/banners/warning_bar_0000_us.jpg" border="0" height="42" width="820" alt="You are using an outdated browser. For a faster, safer browsing experience, upgrade for free today." />
        </a>
    </div>
	<![endif]-->
    <!--[if lt IE 9]>
   		<script type="text/javascript" src="<?php echo get_template_directory_uri(); ?>/js/html5.js"></script>
        <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/ie.css" type="text/css" media="screen">
	<![endif]-->

	</head>

	<body <?php body_class(); ?>>

		
			<!-- header -->
			<header>
                <div class="main">
                    <div class="wrapper">
                        <h1><a href="http://avtomag.url.ph">logo</a></h1>
                        <div class="fright">
                            <div class="indent">
                                <span class="address">вул. Степана Бандери, 12, Львів, Львівська область, 79000</span>
                                <span class="phone">Tel: +38 0322 724 733</span>
                            </div>
                        </div>
                    </div>
                   
			<nav class="nav" role="navigation">
				<ul class="menu">
				<?php html5blank_nav(); ?>
				 </ul>
			</nav>


                    
                </div>
            </header>
			<!-- /header -->
