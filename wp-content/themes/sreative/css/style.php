<?php
header("Content-Type: text/css; charset=utf-8");
$absolute_path = __FILE__;
$path_to_file = explode( 'wp-content', $absolute_path );
$path_to_wp = $path_to_file[0];
require_once( $path_to_wp.'/wp-load.php' );
$templateurl = get_template_directory_uri();
if ( function_exists( 'ot_get_option') ) {	
	
	/* highlight color */
		if(ot_get_option( 'highlight_color' )!=""){
		 $highlight_color = ot_get_option( 'highlight_color' );
		 }else{
		 $highlight_color = '#febd0e';
	     }
	     if(ot_get_option( 'highlight_sub_color' )!=""){
		 $highlight_sub_color = ot_get_option( 'highlight_sub_color' );
		 }else{
		 $highlight_sub_color = '#00cadf';
	     }
	if(ot_get_option( 'nav_mar_top' )!=""){
		 $nav_mar_top = ot_get_option( 'nav_mar_top' );
		 }else{
		 $nav_mar_top = '-70px';
	     }
	$highlight_footer_color = ot_get_option( 'highlight_footer_color' );
	$highlight_sub_footer_color = ot_get_option( 'highlight_sub_footer_color' );
	$hover_color = ot_get_option( 'hover_color' );

	/*  Background & pattern  */	
	if(ot_get_option( 'bg_quote' )!=""){
		 $bg_quote = ot_get_option( 'bg_quote' );
		 }else{
		 $bg_quote = get_template_directory_uri() . '/images/hero2.jpg';
	     }
	if(ot_get_option( 'bg_pattern' )!=""){
		 $bg_pattern = ot_get_option( 'bg_pattern' );
		 }else{
		 $bg_pattern = get_template_directory_uri() . '/images/pattern/pt_06.png';
	     }
	$bg_about = ot_get_option( 'bg_about' );
	/* Fonts */
    $google_font = ot_get_option( 'google_font');
	$google_font_2 = ot_get_option( 'google_font_2');
	$menu_font_size = ot_get_option( 'menu_font_size');
	$body_font_size = ot_get_option( 'font_body_size');
	$h1 = ot_get_option( 'font_h1'); 
	$h2 = ot_get_option( 'font_h2'); 
	$h3 = ot_get_option( 'font_h3'); 
	$h4 = ot_get_option( 'font_h4'); 
	$h5 = ot_get_option( 'font_h5'); 
	$h6 = ot_get_option( 'font_h6'); 
	
}
?>
/*

@Author: Themezinho
@URL: http://www.themezinho.net
 
This file contains the styling for the actual theme, this
is the file you need to edit to change the look of the
theme.

	<-- TABLE OF CONTENTS -->

	1. Body
		1.1 Elements of body
		1.2 Form Elements
		1.3 Links
		1.4 Spacing 
		1.5 Html Elements
		1.6 Table Valign
		
	2. Loading
		2.1 Elements of Loading
		2.2 Transition elements
		2.3 Yellow Background
		
	3. Side Menu
		3.1 Elements of side menu
		3.2 Form & Inputs
		3.3 Social Media Icons
		
	4. Header
		4.1 Elements of header
		4.2 Slide Content Box
		4.3 Internal Header
		
	5. Navigation
		5.1 Elements of navigation
		5.2 Site Logo
		5.3 Navbar
		5.4 Dropdown
		5.5 Fixed Navigation
		
	6. About Us
		6.1 Elements of about us
		6.2 Left side
		6.3 Right side
		
	7. Services
		7.1 Elements of services
		7.2 Box
		7.3 Icon
		7.4 Expand button
		7.5 Expanded List
		
	8. Team Members
		8.1 Elements of team-members
		8.2 Member Image
		8.3 Member Info
		
	9. Fun Facts
		9.1 Elements of fun facts
		9.2 Box
		9.3 Icon
		9.4 Counting numbers
		
	10. Latest Work
		10.1 Elements of works
		10.2 Transition
		10.3 Section title
		10.4 Works Filter
		10.5 List of works
		10.6 Hover Caption
		
	11. Works
		11.1 Elements of works
		11.2 Transition
		11.3 Section title
		11.4 Works Filter
		11.5 List of works
		11.6 Hover Caption
		
	12. Logos
		12.1 Elements of logos
		12.2 Carousel
		12.3 Controls - Arrows
		
	13. Latest News
		13.1 Elements of news
		13.2 Section title
		13.3 News box
		
	14. Quote 
		14.1 Elements of quote
		14.2 Section title
		14.3 Paragraph
		14.4 Button
		
	15. Blog
		15.1 Elements of blog
		15.2 Transitions
		14.3 Blog posts
		14.4 Pagination
		
	16. Side Bar
		16.1 Elements of sidebar
		16.2 Widgets
		16.3 Social Media
		16.4 Search
		16.5 Tags
		16.6 Categories
		16.7 Gallery
		
	17. Contact Info
		17.1 Elements of contact info
		17.2 Section Title
		17.3 Form Elements
		17.4 Map
		
	18. Contact 
		18.1 Elements of contact
		18.2 Icons
		18.3 Spacing
		
	19. Footer
		19.1 Elements of footer
		19.2 Transition
		19.3 Section Titles
		19.4 Gallery
		19.5 Form elements
		
	20. Sub Footer 
		20.1 Elements of sub-footer
		
	21. Responsive Fixes
		21.1 Tablet Fixes
		21.2 Mobile Fixes

*/

@import url(http://fonts.googleapis.com/css?family=Raleway:400,500,300,700);
@import url(http://fonts.googleapis.com/css?family=Pacifico);

.layer {
	width: 100%;
	height: 100%;
	position: absolute;
	transform-style: preserve-3d;
	opacity: 0;
	animation: q 5s infinite alternate ease-in-out -7.5s, o 0.1s 1;
	animation-fill-mode: forwards;
	transform: rotateY(40deg) rotateX(33deg) translateZ(0);
}
.layer:after {
	font: 150px/0.65 'Pacifico', cursive, Helvetica, sans-serif;
	content: 'Sreative';
	white-space: pre;
	text-align: center;
	height: 100%;
	width: 100%;
	position: absolute;
	top: 50px;
	color: whitesmoke;
	letter-spacing: -2px;
	text-shadow: 4px 0 10px rgba(0, 0, 0, 0.13);
}

 @keyframes q {
 100% {
 transform: rotateY(-40deg) rotateX(-43deg);
}
}
@keyframes o {
 100% {
 opacity: 1;
}
}
<!-- Important has to be inline CSS -->


*{ outline:none;}
body{ margin:0; padding:0; font-family: 'Raleway', sans-serif; -webkit-font-smoothing: antialiased;}
html, body{ height:100%;}

.page_inner { padding: 100px 0px;}

/* FORM ELEMENTS */
input[type="text"]{ height:42px; padding:0 10px; border:1px solid #eee;}
button[type="submit"]{ height:42px; padding:0 20px; border:none; font-weight:700;}
button[type="button"]{ height:42px; padding:0 20px; border:none; font-weight:700;}
textarea{ height:120px; padding:10px; border:1px solid #eee;}

.displace {position: absolute;left: -9999px;}
.error{color: #CC0000; }

.float_left	   { float:left;}
.float_right   { float:right;}

.right { float: right !important; }
.left { float: left !important; }


.size-auto, 
.size-full,
.size-large,
.size-medium,
.size-thumbnail {
	max-width: 100%;
	height: auto;
}


/* LINKS */
a{color:<?php echo esc_attr($highlight_color) ?>;}
a:hover{text-decoration:underline;}
a:focus{text-decoration:none;}



/* SPACING */
.no-margin{ margin:0;}
.no-padding{ padding:0;}
.clear{clear: both;}


/* CUSTOMIZED HTML ELEMENTS */
p{ margin-bottom:15px;}
b{ font-weight:700;}
ul{ margin:0; padding:0;}
ul li{ margin:0; padding:0; list-style:square;} 

ul {
	list-style: square;
	margin: 0 0 18px 1.5em;
}
ol {
	list-style: decimal;
	margin: 0 0 18px 1.5em;
}
ol ol {
	list-style: upper-alpha;
}
ol ol ol {
	list-style: lower-roman;
}
ol ol ol ol {
	list-style: lower-alpha;
}

/* Image Back ground and pattern Back ground */

#pattern_bg { position: fixed; width: 100%; height: 100%; left: 0; top: 0; background: url(<?php echo esc_attr($bg_pattern) ?>) repeat;  z-index: -1; }
#background { position: fixed; z-index: -1;  }

/* Style selector */

            #config_holder	{	position:fixed; top:0px; left:0px;width:0px;height:0px; overflow:visible;z-index:1500; color:#000;}
			#menu_config { z-index:10000;position:fixed; top:70px; left:-200px; background:#fff;max-width:250px;width:200px;
							box-shadow: 0px 0px 3px 1px rgba(128,128,128,0.2);
							-webkit-box-shadow: 0px 0px 3px 1px rgba(128,128,128,0.2);
							-moz-box-shadow: 0px 0px 3px 1px rgba(128,128,128,0.2);
							
							-webkit-transition: all 1s ease-in-out;
							-moz-transition: all 1s ease-in-out;
							-o-transition: all 1s ease-in-out;
							-ms-transition: all 1s ease-in-out;
							transition: all 1s ease-in-out;							
						}
			#menu_config.active { left:0px;}

			.config-navigator { width:20px; height:20px; position:absolute;right:35px;top:0px;display:none;}

			.config_slider {	position:absolute; width:40px; height:40px; background-color:#00cadf; top:0px;right:-40px;cursor:pointer;
							-webkit-transition: all 0.4s ease-in-out;
							-moz-transition: all 0.4s ease-in-out;
							-o-transition: all 0.4s ease-in-out;
							-ms-transition: all 0.4s ease-in-out;
							transition: all 0.4s ease-in-out;
							}
			.config_slider:hover { color:#777;}

			#menu_config.active { right:0px;}
			.config_style_text { background:#00cadf; line-height:40px; color:#fff; text-align:center;font-weight:bold;font-size:14px;}
			#menu_config ul { border:1px solid #eee; margin:0;}

			#menu_config ul li { line-height:40px; text-align:center; padding:0px 10px;color:#000; text-align:center;font-weight:bold;font-size:12px;
							border-bottom:1px solid #eee; margin-bottom: 0;cursor:pointer;
							}
			#menu_config ul li:hover { color:#5ccaab;}
			#menu_config ul li.selected,#menu_config ul li.selectedss { color:#5ccaab;}
			#menu_config ul li.config_select { background: url(../images/pattern/pt1.gif) repeat; cursor:default; color:#000 !important; font-size: 14px;}
			
.icon_setting { 
background:url("../images/setting.png") no-repeat; width:30px; height:30px; float: right; margin-right: 7px; margin-top: 6px;
}
.tp-caption a { color: #fff !important; }

#full_page { background: #fff; }
#full_page .fun-facts { padding: 0px; }

/*  Comment form  */

#comments .navigation {
	padding: 0 0 16px 0;
}

h4.comments_title i { margin-right: 12px; color: #ccc;}
h4.comments_title{
	font-weight: bold; color: #777; font-size: 16px;
}
.commentlist {
	list-style: none;
	padding: 10px;
	margin-bottom:50px;
}
.commentlist a{text-decoration:none ;color:<?php echo esc_attr($highlight_color) ?> !important;}

.commentlist li.comment {
	margin: 30px 0 10px 0px;
	padding: 0 0 10px 0px;
	position: relative !important;
	border-bottom:solid 1px #e0e0e0;
}
.commentlist li.comment ul.children{margin:0 0 0 0; margin-left:4%; border-top:solid 1px #e0e0e0; padding:30px 0 0 0;}
.commentlist li.comment ul.children li{border-bottom:0 !important; margin:0; padding:0}
#comments .comment_text ul,

#comments .comment_text ol {
	margin-bottom: 0;
}
.commentlist ol {
	list-style: decimal; 
}
.commentlist .avatar {
	padding:4px;background-color:#e2e2e2;margin-right:10px;margin-top:-5px;
}
.comment_text cite {
	font-style: normal;
	font-size:12px;
	line-height:14px;
	font-weight:bold;
}
.comment_text cite  a, .comment_text cite  a:visited{color:#828282;}
.comment_text cite  a:hover{text-decoration:none}
.comment_author .says {
	font-style: normal;
}
.comment-meta {
	font-size: 12px;
	margin: 0 0 18px 0;
}
.comment-meta a:link,
.comment-meta a:visited {
	text-decoration: none;
}
.comment-meta a:active,
.comment-meta a:hover {
	color: #ff4b33;
}
.commentlist .even {
}
.commentlist .bypostauthor {
}
.reply {
    font-style:italic;
	padding: 0 0 0px 0;
	float:right;
}
.reply a,
a.comment-edit-link {
	color:#828282;
	text-decoration:none;
	font-size: 12px;
}
.reply a:hover,
a.comment-edit-link:hover {
	text-decoration:none
}
.commentlist .children {
	list-style: none;
}
.commentlist .children li {
}
.nopassword,
.nocomments {
	display: none;
}
#comments .pingback {
	margin-bottom: 18px;
	padding-bottom: 18px;
}
.commentlist li.comment+li.pingback {
	margin-top: -6px;
}
#comments .pingback p {
	display: block;
	font-size: 12px;
	line-height: 18px;
	margin: 0;
}
#comments .pingback .url {
	font-size: 13px;
}
.con_comment{padding:0 0 0 0}
.commentlist .comment_author{ float:left; margin-top:7px; margin-right:10px;}
.commentlist .comment_text{width:auto; margin-bottom:20px !important; }
.commentlist .comment_text p{margin-bottom:20px !important}
.commentlist ul.children .comment_author{}
.commentlist ul.children .comment_text{}
.commentlist .comment_text{margin-top:-15px}
.comment_text .time{font-size:11px; margin-bottom:2px; display:block;}
.comment_text .time a, .comment_text .time a:visited{color:#828282;}
.comment_text .boldtext{font-weight:normal; font-size:22px}

/*  Forms  */

#respond { padding-top: 10px; padding-bottom: 40px; }
#respond h4 { margin-bottom:20px; }
#respond form textarea { width: 100% ; height: 150px; }	
#respond form textarea, #respond input[type="text"] {
	color: #65686d;
	border: none;
	padding: 10px;
	background: #fafafa;
	
	border: 1px solid #e2e2e2;
	border-top: 1px solid #d4d4d4;
	outline: none;
	
	color: #65686d;
	line-height: 1.6;
    border-radius: 2px;
	-moz-box-sizing: border-box;
	box-sizing: border-box;

	-webkit-transition: all 0.2s ease-in-out;
	transition: all 0.2s ease-in-out;
	margin-bottom: 25px;
	font-size: 16px;
}
#respond  a.button:hover { color: #fff;}
#respond input[type="text"] {
	width: 100%;
	height: 40px;
}

.margin-input {
	margin: 0 0.5%;
}

#respond input[type="submit"] {
	border-radius: 2px;
	-moz-border-radius: 2px;
	-webkit-border-radius: 2px;
	padding: 11px 10px 9px 10px;
	border: none;
	color: #fff;
	font-size: 12px;
	cursor: pointer;
	transition: all 0.2s ease 0s;
	-moz-transition: all 0.2s ease 0s;
	-webkit-transition: all 0.2s ease 0s;
	-ms-transition: all 0.2s ease 0s;
}

#respond input[type="submit"]:hover {
	color:#515a5f;
}


/* Flickr */

.flickr_wrap {padding:15px 0 10px 0px;}
.flickr_badge_image {float:left;padding:0 10px 7px 0;}
.flickr_badge_image img {float: left; border: 3px solid #e3e3e3; width: 95px; height: 95px;}
.flickr_badge_image img:hover {border: 3px solid <?php echo esc_attr($highlight_color) ?>;}
.flickr_badge_image img:nth-child(3n+1) {margin-right:0px;}


/* BOXED LAYOUT*/
body.boxlayout { padding:0px 0px;}
.boxlayout #main_wrapper	{ max-width:1200px; margin:auto; }
.gray-background{ background:#eee;}
.boxed-container{max-width:1200px; margin:0 auto;}
.boxed-wrapper {width:100%; float:left; background:#fff;}



/* TABLE VALIGN MIDDLE */
.table{ width:100%; height:100% !important; display:table; margin:0;}
.table .inner{ display:table-cell; vertical-align:middle;}
.img-full{ width:100%;}



/* LOADING */
.loading{ width:100%; height:100%; text-align:center; position:fixed; left:0; top:0; z-index:99999; }
.loading img{ height:14px; margin-bottom:30px; display:inline-block;}
.loading .spinner{ width:30px; height:30px; border:3px solid rgba(255,255,255,0.2); border-top:3px solid #fff; border-radius:30px; display:inline-block;}
.loading .spinner{-webkit-animation: spinner 0.5s infinite linear;
  animation: spinner 0.5s infinite linear;}
.fade-out{ opacity:0; visibility:hidden; transition-duration: 700ms; -webkit-transition-duration: 700ms; transition-timing-function: cubic-bezier(0.86, 0, 0.07, 1); -webkit-transition-timing-function: cubic-bezier(0.86, 0, 0.07, 1);}



/* TRANSITION */
.transition-overlay{ width:100%; height:100%; position:fixed; left:0; top:0; z-index:99999; opacity:0; visibility:hidden;}
.transition-overlay.show-me{ opacity:1; visibility:visible;}
.transition-overlay{ transition-duration: 700ms; -webkit-transition-duration: 700ms; transition-timing-function: cubic-bezier(0.86, 0, 0.07, 1); -webkit-transition-timing-function: cubic-bezier(0.86, 0, 0.07, 1);}



/* YELLOW BACKGROUND */
.yellow-bg{background: #fcc50f; background: -moz-linear-gradient(left,  #fcc50f 0%, #fed20f 40%, #fed20f 100%); background: -webkit-gradient(linear, left top, right top, color-stop(0%,#fcc50f), color-stop(40%,#fed20f), color-stop(100%,#fed20f)); background: -webkit-linear-gradient(left,  #fcc50f 0%,#fed20f 40%,#fed20f 100%); background: -o-linear-gradient(left,  #fcc50f 0%,#fed20f 40%,#fed20f 100%); background: -ms-linear-gradient(left,  #fcc50f 0%,#fed20f 40%,#fed20f 100%); background: linear-gradient(to right,  #fcc50f 0%,#fed20f 40%,#fed20f 100%); 
filter: progid:DXImageTransform.Microsoft.gradient( startColorstr='#fcc50f', endColorstr='#fed20f',GradientType=1 );}



/* SIDE MENU */
.side-menu{ width:270px; height:100%; position:fixed; right:-270px; top:0; background:#535353; padding:20px; z-index:9999;}
.side-menu{transition-duration: 500ms; -webkit-transition-duration: 500ms; transition-timing-function: cubic-bezier(0.86, 0, 0.07, 1); -webkit-transition-timing-function: cubic-bezier(0.86, 0, 0.07, 1);}
.side-menu.show-me{ right:0;}
.side-menu .side-menu-close{ position:absolute; right:0; top:0; padding:27px 20px; cursor:pointer;}
.side-menu .side-menu-close i{ font-size:20px; color:#fff;}
.side-menu h4{ color:#fff; font-size:20px; font-weight:700; margin-bottom:30px;}
.side-menu form{ width:100%; float:left;}
.side-menu form input[type="text"],.side-menu form input[type="email"]{ width:100%; height:44px; float:left; padding:0 10px; background:#5d5b5c; border:none; margin-bottom:16px;}
.side-menu form textarea{width:100%; height:124px; float:left; padding:10px; background:#5d5b5c; border:none; margin-bottom:16px;}
.side-menu form button[type="button"],input[type=submit]{ width:100%; height:44px; float:left; background:#00cae0; color:#fff; font-size:17px; font-weight:700; border:none;}
.side-menu ul{ width:100%; position:absolute; bottom:0; left:0; padding:20px;}
.side-menu ul li{ width:34px; height:34px; line-height:34px; float:left; text-align:center; background:red; margin-right:4px;}
.side-menu ul li a{ display:inline-block; font-size:17px; color:#fff;}
.side-menu ul li.facebook{ background:#3b5999;}
.side-menu ul li.twitter{ background:#00bcf8;}
.side-menu ul li.googleplus{ background:#d3492d;}
.side-menu ul li.instagram{ background:#5989b9;}
.side-menu ul li.pinterest{ background:#f63234;}
.side-menu ul li.youtube{ background:#fe0000;}




/* HEADER */
header{ width:100%; height:100%; float:left; background:<?php echo esc_attr($highlight_color) ?>; color:#fff;}
.home-intro { background:<?php echo esc_attr($highlight_color) ?>;}
.home-intro .banner{ width:100%; }
.home-intro .table {position: absolute;}
.home-intro .slide-content{ width:600px; text-align:center; display:inline-block; color:#fff; position:relative; z-index:99;}
.home-intro .slide-content.spacing{ margin-top:220px;}
.home-intro .slide-content h1{ font-weight:700; margin-top:0; margin-bottom:30px; font-size:60px;}
.home-intro .slide-content h5{ width:600px; font-size:17px; line-height:24px; font-weight:500; margin-bottom:30px;}
.home-intro .slide-content a{ color:#fff; display:inline-block; padding:25px 50px; background:#00cadf; font-size:15px; font-weight:700;}
.home-intro .slide-content a:hover{ text-decoration:none;}
.home-intro .slide-content .icon{ display:inline-block; margin-top:30px;}
.home-intro video{min-width:100%; min-height:100%; transform: scale(1.3); float:left; opacity:0.3; left:0; top:0;}

.home-intro2 { background:<?php echo esc_attr($highlight_color) ?>; height: 800px;}
.home-intro2 .banner{ width:100%; }
.home-intro2 .table {position: absolute;}
.home-intro2 .slide-content{ width:600px; text-align:center; display:inline-block; color:#fff; position:relative; z-index:99;}
.home-intro2 .slide-content.spacing{ margin-top:220px;}
.home-intro2 .slide-content h1{ font-weight:700; margin-top:0; margin-bottom:30px; font-size:60px;}
.home-intro2 .slide-content h5{ width:600px; font-size:17px; line-height:24px; font-weight:500; margin-bottom:30px;}
.home-intro2 .slide-content a{ color:#fff; display:inline-block; padding:25px 50px; background:#00cadf; font-size:15px; font-weight:700;}
.home-intro2 .slide-content a:hover{ text-decoration:none;}
.home-intro2 .slide-content .icon{ display:inline-block; margin-top:30px;}
.home-intro2 video{min-width:100%; min-height:100%; transform: scale(1.3); float:left; opacity:0.3; left:0; top:0;}

.title-wrapper { height:300px; background: <?php echo esc_attr($highlight_color) ?>;}
.title-wrapper .title{ width:100%; float:left; font-size:40px; font-weight:700; color:#fff; margin-top:150px; text-transform: uppercase;}
.title-wrapper .sub-title{ width:100%; float:left; font-size:19px; font-weight:500; color:#fff;}


/* 3D Typography */
.stage { height: 300px; width: 500px; margin: auto; position: absolute; top: 0; right: 0; bottom: 0; left: 0; perspective: 9999px; transform-style: preserve-3d; }
.layer:nth-child(1):after {	transform: translateZ(0px);}
.layer:nth-child(2):after {	transform: translateZ(-2px);}
.layer:nth-child(3):after {	transform: translateZ(-4px);}
.layer:nth-child(4):after {	transform: translateZ(-6px);}
.layer:nth-child(5):after {	transform: translateZ(-8px);}
.layer:nth-child(6):after {	transform: translateZ(-10px);}
.layer:nth-child(7):after {	transform: translateZ(-12px);}
.layer:nth-child(8):after {	transform: translateZ(-14px);}
.layer:nth-child(9):after {	transform: translateZ(-16px);}
.layer:nth-child(10):after {	transform: translateZ(-18px);}
.layer:nth-child(11):after {	transform: translateZ(-20px);}
.layer:nth-child(12):after {	transform: translateZ(-22px);}
.layer:nth-child(13):after {	transform: translateZ(-24px);}
.layer:nth-child(14):after {	transform: translateZ(-26px);}
.layer:nth-child(15):after {	transform: translateZ(-28px);}
.layer:nth-child(16):after {	transform: translateZ(-30px);}
.layer:nth-child(17):after {	transform: translateZ(-32px);}
.layer:nth-child(18):after {	transform: translateZ(-34px);}
.layer:nth-child(19):after {	transform: translateZ(-36px);}
.layer:nth-child(20):after {	transform: translateZ(-38px);}
.layer:nth-child(n+10):after {	-webkit-text-stroke: 3px rgba(0, 0, 0, 0.25);}
.layer:nth-child(n+11):after {	-webkit-text-stroke: 15px dodgerblue; text-shadow: 6px 0 6px #00366b, 5px 5px 5px #002951, 0 6px 6px #00366b;}
.layer:nth-child(n+12):after {	-webkit-text-stroke: 15px #0077ea;}
.layer:last-child:after {	-webkit-text-stroke: 17px rgba(0, 0, 0, 0.1);}
.layer:first-child:after {	color: #fff; text-shadow: none;}




/* NAVIGATION */
.navbar-default{ height:85px; padding-top:4px; border-radius:0; background:url(../images/rainbow-bar.jpg) top repeat-x; border-bottom:1px solid rgba(255,255,255,0.4);}
.navbar-default {-moz-transition: all 0.2s ease; -o-transition: all 0.2s ease; -ms-transition: all 0.2s ease; transition: all 0.2s ease;}
.navbar-default .navbar-brand{ height:auto;}
.navbar-default .navbar-brand img{ height:22px; margin-top:15px;}
.navbar-default .navbar-nav{ float:right;}
.navbar-default .navbar-nav>li{ float:left;}
.navbar-default .navbar-nav>li>a{ padding-top:30px; padding-bottom:30px; color:#fff; font-weight:700; text-transform: uppercase;}
.navbar-default .navbar-nav>li>a:hover{border-bottom:3px solid #fff; color:#fff;}
.navbar-default .navbar-nav>li>a:focus{color:#fff;}
.navbar-default .navbar-nav>li>a.hamburger-menu{ float:left; margin-top:-3px; font-size:26px;}
.navbar-default .navbar-nav>li:hover .dropdown-menu{ display:block;}
.navbar-default .navbar-nav>li:hover a{border-bottom:3px solid #fff; color:#fff;}
.navbar-default .navbar-nav>.open>a, .navbar-default .navbar-nav>.open>a:focus, .navbar-default .navbar-nav>.open>a:hover{ background:none; color:#fff;}
.navbar-default .dropdown-menu{ float:left; margin-right:-8px; background:none; color:#fff; box-shadow:none; border-radius:0; border:none; display:none;}
.navbar-default .dropdown-menu li{ width:100%; float:left; text-align:right;}
.navbar-default .dropdown-menu li a{ color:#fff; font-weight:700; border:none !important;}
.navbar-default .dropdown-menu li a:hover{background:none; opacity:0.8;}
.fixed-nav{ background:url(../images/rainbow-bar.jpg) top repeat-x rgba(255,255,255,0.92) !important;}
.fixed-nav a{color:<?php echo esc_attr($highlight_color) ?> !important;}
.fixed-nav img{ -webkit-filter: brightness(1) invert(1); filter: brightness(1) invert(1); }
.fixed-nav .dropdown-menu{ background:<?php echo esc_attr($highlight_color) ?>;}
.fixed-nav .dropdown-menu a{ color:#fff !important;}

/* ABOUT US*/
.about-us{ width:100%; float:left;}
.about-us .left-side{ height:500px; background:url(<?php echo esc_url($bg_about) ?>) no-repeat; }
.about-us .right-side{height:500px; background:#f5f5f5;} 
.about-us .right-side .table{ width:100%; padding:30px;}
.about-us .right-side h3{ color:<?php echo esc_attr($highlight_color) ?>; font-size:30px; margin-bottom:30px;}
.about-us .right-side h3 span{ display:inline-block; font-weight:700;}
.about-us .right-side p{ font-size:18px; line-height:26px; margin-bottom:20px;}
.about-us .right-side a{ font-size:18px; font-weight:700; border-bottom:3px solid <?php echo esc_attr($highlight_color) ?>; padding-bottom:6px; color:<?php echo esc_attr($highlight_color) ?>;}
.about-us .right-side a:hover{text-decoration:none;}




/* SERVICES */
.services{ width:100%; float:left; padding:100px 0; background-color: #fff;}
.services .box{ width:100%; padding:40px 20px; margin-bottom:40px; position:relative;}
.services *{-moz-transition: all 0.2s ease; -o-transition: all 0.2s ease; -ms-transition: all 0.2s ease; transition: all 0.2s ease;}
.services .box:hover img{ margin-bottom:45px;}
.services .box img{ height:80px; display:inline-block; margin-bottom:20px;}
.services .box h4{ font-weight:700; color:#fff; margin-bottom:25px;}
.services .box p{ color:#fff; line-height:22px; font-weight:500;}
.services .box .expand{ width:70px; height:75px; float:left; text-indent:-9999px; background:url(../images/icon-expand.png) top left no-repeat; background-size:cover; position:absolute; right:0; bottom:0;}
.services .box ul{ height:0; overflow:hidden;}
.services .box ul li{ width:100%; float:left; color:#fff; font-weight:700; margin:3px 0;}
.services .box ul.show-me{ height:auto;}



/* TEAM MEMBERS*/
.team-members{ width:100%; float:left; padding:100px 0; background-color: #fff;}
.team-members *{-moz-transition: all 0.2s ease; -o-transition: all 0.2s ease; -ms-transition: all 0.2s ease; transition: all 0.2s ease;}
.team-members figure{ width:100%; float:left; text-align:center;}
.team-members figure:hover img{ margin-left:-30px;}
.team-members figcaption{ width:100%; float:left; text-align:center;}



/* FUN FACTS*/
.fun-facts{ width:100%; float:left; background:#f5f5f5; padding:100px 0; text-align:center;}
.fun-facts *{-moz-transition: all 0.2s ease; -o-transition: all 0.2s ease; -ms-transition: all 0.2s ease; transition: all 0.2s ease;}
.fun-facts .content-box{ width:100%; float:left; padding:50px 10%;}
.fun-facts .content-box:hover{ background:#fed20f;}
.fun-facts .content-box:hover i{ color:#fff;}
.fun-facts .content-box:hover span{ color:#fff;}
.fun-facts .content-box:hover h5{ color:#fff;}
.fun-facts i{ display:inline-block; color:#fed20f; font-size:40px;}
.fun-facts span{ display:block; color:#babac2; font-size:40px; font-weight:700;} 
.fun-facts h5{ display:inline-block; color:#babac2; font-size:18px;}




/* LATEST WORKS */
.latest-works{ width:100%; float:left; padding-top:100px; text-align:center; background-color: #fff;}
.latest-works *{-moz-transition: all 0.2s ease; -o-transition: all 0.2s ease; -ms-transition: all 0.2s ease; transition: all 0.2s ease;}
.latest-works h3{ color:<?php echo esc_attr($highlight_color) ?>; font-size:30px; margin-bottom:30px;}
.latest-works h3 span{ display:inline-block; font-weight:700;}
.latest-works .works-filter {width:100%; float:left; margin-bottom:30px;}
.latest-works .works-filter a{ display:inline-block; margin:0 10px; padding-bottom:6px; font-weight:500; color:<?php echo esc_attr($highlight_color) ?>; font-size: 14px !important; text-transform: uppercase;}
.latest-works .works-filter a:hover{text-decoration:none;}
.latest-works .works-filter a.current{ border-bottom:2px solid <?php echo esc_attr($highlight_color) ?>;}
.latest-works ul{ width:100%; float:left;}
.latest-works ul li{ width:33.33333%; float:left;}
.latest-works ul li figure{ width:100%; height:100%; float:left; position:relative;}
.latest-works ul li figure:hover figcaption{ opacity:1; padding:10px;}
.latest-works ul li figure img{ width:100%; float:left;}
.latest-works ul li figure figcaption{ width:100%; height:100%; position:absolute; left:0; top:0; opacity:0;}
.latest-works ul li figure figcaption h4{ font-weight:700; color:#fff; font-size:20px;}
.latest-works ul li figure figcaption h4 a{color:#fff;}
.latest-works ul li figure figcaption h4 a:hover{color:#fff; text-decoration:none;}
.latest-works ul li figure figcaption small{ color:#fff; font-weight:500;}
.latest-works ul li figure figcaption .table{background:rgba(254,210,15,0.8);}



/* WORKS */
.works{ width:100%; float:left; padding:100px 0; text-align:center; background-color: #fff;}
.works *{-moz-transition: all 0.2s ease; -o-transition: all 0.2s ease; -ms-transition: all 0.2s ease; transition: all 0.2s ease;}
.works h3{ color:<?php echo esc_attr($highlight_color) ?>; font-size:30px; margin-bottom:30px;}
.works h3 span{ display:inline-block; border-top:3px solid <?php echo esc_attr($highlight_color) ?>; font-weight:700;}
.works .works-filter {width:100%; float:left; margin-bottom:30px; text-transform: uppercase;}
.works .works-filter a{ display:inline-block; margin:0 10px; padding-bottom:6px; font-weight:500; color:<?php echo esc_attr($highlight_color) ?>;}
.works .works-filter a:hover{text-decoration:none;}
.works .works-filter a.current{ border-bottom:2px solid <?php echo esc_attr($highlight_color) ?>;}
.works ul{ width:100%; float:left;}
.works ul.spacing{ width:100%;}
.works ul.spacing li{ padding:10px;}
.works ul.masonry{ width:100%;}
.works ul li{ width:33.33333%; float:left;}
.works ul li figure{ width:100%; height:100%; float:left; position:relative;}
.works ul li figure:hover figcaption{ opacity:1; padding:10px;}
.works ul li figure img{ width:100%; float:left;}
.works ul li figure figcaption{ width:100%; height:100%; position:absolute; left:0; top:0; opacity:0;}
.works ul li figure figcaption h4{ font-weight:700; color:#fff; font-size:20px;}
.works ul li figure figcaption h4 a{color:#fff;}
.works ul li figure figcaption h4 a:hover{color:#fff; text-decoration:none;}
.works ul li figure figcaption small{ color:#fff; font-weight:500;}
.works ul li figure figcaption .table{background:rgba(254,210,15,0.8);}


/* PROJECT DETIAL */
.project-detail{ width:100%; float:left; padding:100px 0; background-color: #fff;}
.project-detail .project-header{ width:100%; float:left; padding-bottom:40px; border-bottom:1px solid #eee;}
.project-detail .about-project{ width:100%; float:left; margin-top:40px; padding:0 20%;}
.project-detail .screenshot{ margin-bottom:50px;}


/* LOGOS */
.logos{ width:100%; float:left; padding:100px 0; background-color: #fff;}
.logos h2{ font-size:0;}
.logos figure{ width:100%; float:left;}
.logos figure img{ width:100%;}
.logos .owl-nav{ width:100%; float:left; text-align:center;}
.logos .owl-nav .owl-prev{ display:inline-block; text-indent:-9999px; margin:0 15px; padding:10px;} 
.logos .owl-nav .owl-prev:hover{opacity:0.4;}
.logos .owl-nav .owl-prev:after{content:'\f124'; font-family:ionicons; font-size:20px; float:left; text-indent:0;}
.logos .owl-nav .owl-next{ display:inline-block; text-indent:-9999px; margin:0 15px; padding:10px;} 
.logos .owl-nav .owl-next:hover{opacity:0.4;}
.logos .owl-nav .owl-next:after{content:'\f125'; font-family:ionicons; font-size:20px; float:left; text-indent:0;}




/* LATEST NEWS */
.latest-news{ width:100%; float:left; padding:100px 0; background:#f5f5f5;}
.latest-news h3{ width:100%; text-align:center; color:<?php echo esc_attr($highlight_color) ?>; font-size:30px; margin-bottom:30px;}
.latest-news h3 span{ display:inline-block; font-weight:700;}
.latest-news .news-box{ width:100%; float:left;}
.latest-news .news-box figure{ width:100%; float:left; margin-bottom:20px; position:relative;}
.latest-news .news-box figure img{ width:100%;}
.latest-news .news-box h4{ width:100%; float:left; font-weight:700;}
.latest-news .news-box small{ display:block; font-size:12px; color:#999; margin-bottom:30px;}
.latest-news .news-box p{ line-height:26px; font-size:15px; margin-bottom:20px;}
.latest-news .news-box .link{ float:left; padding:10px 20px; background:<?php echo esc_attr($highlight_color) ?>; color:#fff; font-weight:700;}




/* QUOTE */
.quote{ width:100%; float:left; padding:100px 0; background:url(<?php echo esc_url($bg_quote) ?>) repeat; text-align:center;}
.quote h3{ display:block; margin:0; margin-bottom:30px; color:#fff; font-weight:700;}
.quote p{ display:block; margin-bottom:50px; padding:0 10%; color:#fff; font-size:18px; line-height:25px;}
.quote a{ display:inline-block; background:<?php echo esc_attr($highlight_color) ?>; color:#fff; font-weight:700; font-size:20px; padding:15px 30px;}
.quote a:hover{ text-decoration:none; background:#fff; color:<?php echo esc_attr($highlight_color) ?>;}




/* BLOG */
.blog{ width:100%; float:left; padding: 0px 0px 100px 0px; background-color: #fff;}
.blog_inner { padding-top: 100px;}
.blog_inner iframe,.blog_inner embed {max-width: 700px;}
.blog *{-moz-transition: all 0.3s ease; -o-transition: all 0.3s ease; -ms-transition: all 0.3s ease; transition: all 0.3s ease;}
.blog .blog-post{ width:100%; float:left; padding-right:20px; margin-bottom:100px;}
.blog figure{ width:100%;float:left; margin-bottom:20px; position:relative; background:<?php echo esc_attr($highlight_color) ?>;}
.blog .blog_inner figure img{ width:100%; float:left;}
.blog figure:hover img{ opacity:0.7;}
.blog h3{ display:block; margin-top:0; color:<?php echo esc_attr($highlight_color) ?>;}
.blog small{ display:block; margin-bottom:10px; color:#98989a; font-weight:700;}
.blog .border{ width:38px; height:3px; display:inline-block; margin-bottom:30px; background:<?php echo esc_attr($highlight_color) ?>;}
.blog .link {font-size:18px; font-weight:700; border-bottom:3px solid <?php echo esc_attr($highlight_color) ?>; padding-bottom:6px; color:<?php echo esc_attr($highlight_color) ?>;}
.blog .link:hover{ text-decoration:none;}
.blog .pagination{ width:100%; float:left;}
.blog .pagination>li{ float:left;}
.blog .pagination>li a{ float:left; border:1px dotted #ccc; font-weight:700; font-size:12px; padding:6px 22px; color:#2f2e33; border-radius:0 !important;}
.blog .pagination>.active>a, .pagination>.active>a:focus, .pagination>.active>a:hover, .pagination>.active>span, .pagination>.active>span:focus, .pagination>.active>span:hover{ background:<?php echo esc_attr($highlight_color) ?>; color:#fff;}

/* Pagination */
	
.pagi { float:right; margin-top: 35px; }
.pagi ul{ float: left; }
.pagi li { display: inline; float: left; border-left: none; margin-left: 5px; }
.pagi li a{
	display: block;
	cursor: pointer;
	padding: 6px 15px;
	text-align: center;
	font: bold 13px/150% "Helvetica Neue", Helvetica, Arial, Geneva, sans-serif;
	color: #ffffff !important;
	text-decoration: none;
	border: 1px solid #ddd;
	text-shadow: 0px -1px 0px #0E5E85;
	background: <?php echo esc_attr($highlight_color) ?>; /* Old browsers */
	-webkit-border-radius: 5px;
    -moz-border-radius: 5px;
    -ms-border-radius: 5px;
    border-radius: 5px;
    
}	
.pagi li a:hover{ color: #ffffff !important;}	

.pagi li .selected{ color: #fff; background: <?php echo esc_attr($highlight_sub_color) ?>; cursor: default; }
.pagi a:hover {color:#333 !important;}


/* SIDEBAR */
.blog-sidebar{ width:100%; padding-left:30px;}
.blog-sidebar .widgets{ width:100%; float:left; margin-bottom:40px;}
.blog-sidebar .social-media{ width:100%; float:left;}
.blog-sidebar .social-media ul{ width:100%; float:left;}
.blog-sidebar .social-media ul li{ width:34px; height:34px; line-height:34px; float:left; text-align:center; background:red; margin-right:4px;}
.blog-sidebar .social-media ul li a{ display:inline-block; font-size:17px; color:#fff;}
.blog-sidebar .social-media ul li.facebook{ background:#3b5999;}
.blog-sidebar .social-media ul li.twitter{ background:#00bcf8;}
.blog-sidebar .social-media ul li.googleplus{ background:#d3492d;}
.blog-sidebar .social-media ul li.instagram{ background:#5989b9;}
.blog-sidebar .social-media ul li.pinterest{ background:#f63234;}
.blog-sidebar .social-media ul li.youtube{ background:#fe0000;}
.blog-sidebar .search{ width:100%; float:left;}
.blog-sidebar .search form{ width:100%; float:left;}
.blog-sidebar .search form input[type="text"]{ width:80%; float:left;}
.blog-sidebar .search form button[type="submit"]{ width:20%;  padding:0; text-align:center; float:left; background:<?php echo esc_attr($highlight_color) ?>; color:#fff; margin-left:-3px;}
.blog-sidebar .tags{ width:100%; float:left;}
.blog-sidebar .tags a{ float:left; padding-bottom:5px; border-bottom:2px solid #eee; font-size:12px; color:#999; margin-right:10px; margin-bottom:10px;}
.blog-sidebar .tags a:hover{text-decoration:none; color:#00cadf;}
.blog-sidebar .categories{ width:100%; float:left;}
.blog-sidebar .categories ul{ width:100%; float:left;}
.blog-sidebar .categories ul li{ width:100%; float:left; margin:4px 0;}
.blog-sidebar .categories ul li a{ float:left; color:<?php echo esc_attr($highlight_color) ?>; font-weight:500;}
.blog-sidebar .categories ul li a:hover{color:#00cadf;}
.blog-sidebar .gallery-thumbs{ width:100%; float:left; margin-left:-5px; margin-right:-5px;}
.blog-sidebar .gallery-thumbs a{ width:33.33333%; float:left; padding:5px;}
.blog-sidebar .gallery-thumbs a img{ width:100%; float:left;}




/* CONTACT INFO */
.contact-info{ width:100%; float:left; padding:100px 0; background-color: #fff;}
.contact-info h3{ font-weight:700;}
.contact-info h5{ margin-bottom:20px; color:#ccc;}
.contact-info a{ text-decoration:underline; font-weight:500;}
.contact-info form{ width:100%; max-width:600px; display:inline-block;}
.contact-info form .form-group{ width:100%; float:left; margin-bottom:10px;}
.contact-info form input[type="text"]{ width:49%; float:left;}
.contact-info form .spacing{ margin-right:2%;}
.contact-info form  textarea{ width:100%; max-width:600px;}
.contact-info form button[type="button"]{ background:<?php echo esc_attr($highlight_color) ?>; color:#fff;}
.map{ width:100%; height:400px;}



/* CONTACT */
.contact{ width:100%; float:left; background:<?php echo esc_attr($highlight_color) ?>;}
.contact h2{ font-size:0;}
.contact figure{ float:left; margin-right:20px; margin-top:10px; margin-bottom:20px;}
.contact dl{ display:block;}
.contact dl dt{ font-size:18px; font-weight:700; color:#fff; margin-bottom:10px;}
.contact dl dd{ color:#fff; font-weight:500;}
.contact .container{ padding-bottom:80px; padding-top:100px; border-bottom:1px solid rgba(255,255,255,0.4);}




/* FOOTER */
footer{ width:100%; float:left; padding:100px 0; background:<?php echo esc_attr($highlight_color) ?>; color:#fff;}
footer .logo{ height:20px; margin-bottom:30px;}
footer *{ -moz-transition: all 0.2s ease; -o-transition: all 0.2s ease; -ms-transition: all 0.2s ease; transition: all 0.2s ease;}
footer p{ line-height:22px; font-weight:500;}
footer h4{ font-weight:700; margin-top:0; margin-bottom:30px; text-transform: uppercase;}
footer .gallery{ width:100%; float:left; margin-left:-5px;}
footer .gallery li{ width:33.33333%; float:left; padding:5px;}
footer .gallery li img{ width:100%; float:left;}
footer .gallery li figure{ width:100%; float:left; position:relative;}
footer .gallery li figure figcaption{ width:100%; height:100%; position:absolute; text-align:center; left:0; top:0; background:rgba(254,210,15,0.8); opacity:0;}
footer .gallery li figure figcaption a{ color:#fff;}
footer .gallery li figure figcaption i{ margin-top:20%; display:inline-block; font-size:30px;}
footer .gallery li figure:hover figcaption{ opacity:1;}
footer  form{ width:100%; float:left;}
footer  form input[type="text"]{ color: #ccc; width:100%; max-width:280px;  height:42px; border:none; padding:0 10px; margin-bottom:6px;}
footer  form button[type="submit"]{  height:42px; border:none; background:#00cadf; padding:0 20px; margin-bottom:6px;}
ul li.p_widget_inner { margin-bottom: 15px;}
.pad90 { padding: 90px 0px;}

.widget_wysija_cont .wysija-submit {
  color: #fff;
  height: 42px;
  border: none;
  background: #00cadf;
  padding: 0 20px;
  margin-bottom: 6px;
}


/* SUB FOOTER */
.sub-footer{ width:100%; float:left; background:#FDB312; padding:20px 0;}
.sub-footer h6{ font-size:12px; color:#fff; font-weight:700; text-transform:uppercase;}
.blog-sidebar .widget h4.widget_title { text-transform: uppercase !important;}


/* Tag Cloud */

.tagcloud { display: inline-block; }
.tagcloud a{ float: left;
  padding-bottom: 5px;
  border-bottom: 2px solid #eee;
  font-size: 14px !important;
  color: #555;
  margin-right: 10px;
  margin-bottom: 10px;
  padding: 10px 5px;}
.tagcloud a:hover{
	text-decoration:none; color:#00cadf;
}

@media only screen and (max-width: 989px), only screen and (max-device-width: 989px) {
	
.navbar-default .navbar-brand img{ height:18px;}
.navbar-default .nav>li>a{ padding:30px 10px;}
.latest-works ul li{ width:50%;}
.works ul li{ width:50%;}
.team-members figure img{ width:100%;}
.blog-sidebar{ padding-left:0;}
.blog .blog-post{ padding-right:0;}
.contact-info form input[type="text"]{ width:100%; margin-bottom:10px;}
.contact-info form .form-group{ margin-bottom:0;}
.contact-info form .spacing{ margin-right:0;}
}

@media only screen and (max-width: 767px), only screen and (max-device-width: 767px) {
	
	
.navbar-default .navbar-toggle{border:none; background:none; margin-top:20px;}
.navbar-default .navbar-toggle:hover{ background:none;}
.navbar-default .navbar-toggle:focus{ background:none;}
.navbar-default .navbar-toggle .icon-bar{ background:#fff;}
.navbar-default .navbar-nav{ width:100%;}
.navbar-default .navbar-nav>li{ width:100%; padding:0;} 
.navbar-default .navbar-nav>li a{ width:100%; float:left; padding:10px 0;}
.navbar-default .navbar-nav>li a:hover{border:none; opacity:0.7;}
.navbar-default .navbar-nav>li:hover a{ border:none;}
.navbar-nav>li>.dropdown-menu{ width:100%; position:static;}
.navbar-default .dropdown-menu li{ text-align:left;}
.navbar-default .navbar-collapse{background:<?php echo esc_attr($highlight_color) ?>; border:none; margin-top:11px;}
.services .no-padding{ padding:0 30px;}
header .slide-content h5{ width:auto; font-size:14px;}
.fun-facts h5{ font-size:16px;}
.latest-works ul li{ width:100%; padding:20px; padding-top:0; padding-bottom:10px;}
.latest-news .news-box{ margin-bottom:40px;}
footer .gallery{ margin-bottom:40px;}
.sub-footer h6{ float:left !important;}
	
}