<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>City Blog Theme - Free Website Template</title>
<meta name="keywords" content="city blog, theme, free templates, website templates, CSS, HTML" />
<meta name="description" content="City Blog Theme is a free website template provided by tooplate.com" />
<link href="{{url('website/css_pirobox/tooplate_style.css')}}" rel="stylesheet" type="text/css" />
<!--   Free Website Template by t o o p l a t e . c o m   -->
</head>
<body>






@include('website.fixed.header')











<div id="tooplate_main_wrapper">
    <div id="tooplate_top"></div>
	
    <div id="tooplate_main">



        @yield('content')
        




        <div id="tooplate_sidebar_wrapper">
            <div id="tooplate_sidebar_top"></div>
			
            <div id="tooplate_sidebar">
            	
                <div class="ads_250x250">
                	<a href="#"><img src="{{url('images/tooplate_ads.jpg')}}" alt="banner" /></a>
                </div>
   
                <div class="sb_box">
                    <h3>Categories</h3>
                    <ul class="tooplate_list">
                        <li><a href="#">Aenean lacinia nunc id</a></li>
                        <li><a href="#">Cras sed neque et eros</a></li>
                        <li><a href="#">Donec eget massa eget</a></li>
                        <li><a href="#">Etiam eu velit sapien</a></li>
                        <li><a href="#">Integer hendrerit nisi</a></li>
                        <li><a href="#">Maecenas sit odio ut</a></li>
                        <li><a href="#">Phasellus tempus metus</a></li>
                        <li><a href="#">Sed iaculis orci eget est</a></li>
                    </ul>
                </div>
            
                <div class="sb_box">
                    <h3>Recent comments</h3>
                    <div class="recent_comment_box">
                        <a href="#">Praesent malesuada turpis</a>
                        <p>Duis mi elit, aliquet id euismod egestas, venenatis sit amet lectus.</p>
                    </div>
                    
                    <div class="recent_comment_box">
                        <a href="#">Nullam consequat mauris </a>
                        <p>Etiam porttitor metus ac est mattis luctus. Integer mi tortor, tempus eget.</p>
                    </div>
                    
                    <div class="recent_comment_box ">
                        <a href="#"> Sed bibendum augue in</a>
                        <p>Curabitur ullamcorper ultricies nisi.  Nam eget dui. Validate <a href="http://validator.w3.org/check?uri=referer" rel="nofollow"><strong>XHTML</strong></a> and <a href="http://jigsaw.w3.org/css-validator/check/referer" rel="nofollow"><strong>CSS</strong></a>.</p>
                    </div>
                    
                    <div class="recent_comment_box">
                        <a href="#">Aenean feugiat mattis </a>
                        <p>Sed ultricies erat nec leo semper nec sollicitudin odio accumsan. </p>
                    </div>
                    
                    <a href="#" class="more float_r">Read more</a>
                    <div class="cleaner"></div>
                </div>
                
                <div class="cleaner"></div>
            </div>
			
            <div id="tooplate_sidebar_bottom"></div>
        
        </div> <!-- end of sidebar wrapper -->
        
        <div class="cleaner"></div>
    </div>
    
    <div id="tooplate_bottom"></div>
</div> <!-- end of main wrapper -->


@include('website.fixed.footer')


</body>
</html>