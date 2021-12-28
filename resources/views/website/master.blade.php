<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>City Corporation Municipal Problem </title>
<meta name="keywords" content="city blog, theme, free templates, website templates, CSS, HTML" />
<meta name="description" content="City Blog Theme is a free website template provided by tooplate.com" />
<link href="{{url('website/css_pirobox/tooplate_style.css')}}" rel="stylesheet" type="text/css" />
<!--   Free Website Template by t o o p l a t e . c o m   -->
</head>
<body>


@include('website.fixed.header')
<div id="tooplate_main_wrapper">
    <div id="tooplate_top"></div>
	
    @yield('content')
    
    <div id="tooplate_bottom"></div>
</div> <!-- end of main wrapper -->

@include('website.fixed.footer')
<!--   Free Website Template by t o o p l a t e . c o m   -->


</body>
</html>