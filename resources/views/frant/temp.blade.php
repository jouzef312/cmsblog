<!DOCTYPE html>
<!--[if IE 8 ]><html class="no-js oldie ie8" lang="en"> <![endif]-->
<!--[if IE 9 ]><html class="no-js oldie ie9" lang="en"> <![endif]-->
<!--[if (gte IE 9)|!(IE)]><!--><html class="no-js" lang="en"> <!--<![endif]-->
<head>

   <!--- basic page needs
   ================================================== -->
   <meta charset="utf-8">
	<title>Standard Format Post - Abstract</title>
	<meta name="description" content="">  
	<meta name="author" content="">

   <!-- mobile specific metas
   ================================================== -->
	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">

 	<!-- CSS
   ================================================== -->
   <link rel="stylesheet" href="css/base.css">
   <link rel="stylesheet" href="css/vendor.css">  
   <link rel="stylesheet" href={{ asset('css/main.css') }}>
        

   <!-- script
   ================================================== -->
	<script src="js/modernizr.js"></script>
	<script src="js/pace.min.js"></script>

   <!-- favicons
	================================================== -->
	<link rel="shortcut icon" href="favicon.ico" type="image/x-icon">
	<link rel="icon" href="favicon.ico" type="image/x-icon">

</head>

<body id="top">

	<!-- header 
   ================================================== -->
   <header class="short-header">   

   	<div class="gradient-block"></div>	

   	<div class="row header-content">

   		<div class="logo">
	         <a href="index.html">Author</a>
	      </div>

	   	<nav id="main-nav-wrap">
				<ul class="main-navigation sf-menu">
					
					<li >
						<a href="{{ url('article') }}" title="">Blog</a>
						
					</li>


           <li class="has-children">
                  <a href="" title="">Categories</a>
                  <ul class="sub-menu">
                      @foreach ($categors as $categor)
                     <li><a href="{{ url('articlecategors/' .$categor->id) }}">{{ $categor->name }}</a></li>
                      @endforeach
                  
                  </ul>
               </li>
                <li class="has-children">
                  <a href="" title="">Tag</a>
                  <ul class="sub-menu">
                      @foreach ($tags as $tag)
                     <li><a href="{{ url('articletag/' .$tag->id) }}">{{ $tag->title }}</a></li>
                      @endforeach
                  
                  </ul>
               </li>

					
					<li><a href="{{ url('contact') }}" title="">Contact</a></li>
          <li >
            <a href="{{ route('login') }}">Login</a>
            
          </li>										
				</ul>
			</nav> <!-- end main-nav-wrap -->

			
			
   		
   	</div>     		
   	
   </header> 



@yield('contenu')



   
   

   <div id="preloader"> 
    	<div id="loader"></div>
   </div> 

   <!-- Java Script
   ================================================== --> 
   <script src={{ asset('js/jquery-2.1.3.min.js') }}></script>
   <script src={{ asset('js/plugins.js') }}></script>
   <script src={{ asset('js/main.js') }}></script>

</body>

</html>