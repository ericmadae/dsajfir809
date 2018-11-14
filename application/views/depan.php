
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>design blog - free css template</title>
<meta name="keywords" content="" />
<meta name="description" content="" />
<link href="<?= base_url('assets/frontend') ?>/css/templatemo_style.css" rel="stylesheet" type="text/css" />
<script language="javascript" type="text/javascript">
function clearText(field)
{
    if (field.defaultValue == field.value) field.value = '';
    else if (field.value == '') field.value = field.defaultValue;
}
</script>
</head>
<body>

<div id="templatemo_body_wrapper">
<div id="templatemo_wrapper">
    
    <div id="templatemo_header">
            
        <div id="site_title">
            <a href="#">Design 
            	<span>Blog</span>
                <span class="tagline">Designed by Free CSS Templates</span>
            </a>
        </div> <!-- end of site_title -->
        
        <div id="search_box">
            <form action="#" method="get">
                <input type="text" value="Enter keyword here..." name="q" size="10" id="searchfield" title="searchfield" onfocus="clearText(this)" onblur="clearText(this)" />
              <input type="submit" name="Search" value="Search" id="searchbutton" title="Search" />
            </form>
        </div>
    
   
        <div class="cleaner"></div>
        
    </div> <!-- end of header -->
    
    <div id="templatemo_menu">
        <ul>
            <li><a href="#" class="current"><span></span>Home</a></li>
            <li><a href="#"><span></span>Web 2.0</a></li>
            <li><a href="#"><span></span>Wordpress</a></li>
            <li><a href="#"><span></span>Graphics</a></li>
            <li><a href="#"><span></span>Inspirations</a></li>
            <li><a href="#"><span></span>Freebies</a></li>
        </ul>    	
        
        <div id="register_box">
        	Already Registered? Click <a href="#" class="signup">Here</a> | <a href="#" class="new_reg">Register</a>
        </div>
    </div> <!-- end of templatemo_menu -->
    
 <div id="templatemo_main">
    <?= $contents ?>
 </div>
</div>
<div class="cleaner"></div>
</div>


<div id="templatemo_footer_wrapper">
	<div id="templatemo_footer">
    
    	<div class="footer_box col_w300">
        	<h4>Related Posts</h4>
            <ul class="footer_menu">
            	<li><a href="#">Duis vitae velit sed lesuada dignissim</a></li>
                <li><a href="#">Donec mollis aliquet ligula</a></li>
                <li><a href="#">Maecenas adipiscing elementum ipsum</a></li>
                <li><a href="#">Vivamus leo velit, convallis id</a></li>
                <li><a href="#">Curabitur condimentum porttitor</a></li>
            </ul>     
        </div>
        
        <div class="footer_box col_w160">
        	<h4>Authors</h4>
            <ul class="footer_menu">
            	<li><a href="#">Lesuada digni</a></li>
                <li><a href="#">Aliquet ligula</a></li>
                <li><a href="#">Convallis id</a></li>
                <li><a href="#">Maecenas adipis</a></li>
                <li><a href="#">Porttitor</a></li>
            </ul>     
        </div>
        
        <div class="footer_box col_w160">
        	<h4>Partners</h4>
            <ul class="footer_menu">
            	<li><a href="#">Flash Components</a></li>
                <li><a href="#">Website Templates</a></li>
                <li><a href="#">Web Design</a></li>
                <li><a href="#">CSS Templates</a></li>
                <li><a href="#">Flash Web Gallery</a></li>
            </ul>     
        </div>

        <div class="footer_box col_w260 fb_last">
        	<h4>Tag Cloud</h4>
            	<a href="#" style="font-size:12px">Aenean</a> <a href="#" style="font-size:11px">Cursus</a> <a href="#" style="font-size:16px">Maecenas</a> <a href="#" style="font-size:11px">Aliquam Ligula</a> <a href="#" style="font-size:20px">Egestas</a> <a href="#" style="font-size:16px">Suscipit</a> <a href="#" style="font-size:12px">Sapien</a> <a href="#" style="font-size:28px">Dignissim</a> <a href="#" style="font-size:14px">Vestibulum</a> <a href="#" style="font-size:12px">Lorem</a> <a href="#" style="font-size:14px">Urnain</a> <a href="#" style="font-size:20px">Neque</a> <a href="#" style="font-size:12px">Aenean</a>
        </div>
    
    	<div class="cleaner"></div>
    </div>
</div>

<div id="templatemo_copyright">
    Copyright © 2048 <a href="#">Your Company Name</a> <!-- Credit: www.templatemo.com -->| 
    Validate <a href="http://validator.w3.org/check?uri=referer">XHTML</a> &amp; 
    		 <a href="http://jigsaw.w3.org/css-validator/check/referer">CSS</a>
</div>
<!-- templatemo 242 design blog -->
<!-- 
Design Blog Template 
http://www.templatemo.com/preview/templatemo_242_design_blog 
-->
</body>
</html>