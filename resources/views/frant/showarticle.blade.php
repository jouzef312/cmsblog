@extends('frant.temp')
 
@section('contenu')
   

   <!-- content
   ================================================== -->
  


   	 <section id="bricks">

   	<div class="row card text-white bg-dark" style="    text-align: -webkit-center;">

   		<!-- brick-wrapper -->
         <div class="bricks-wrapper" >

         	<div class="grid-sizer"></div>















         	@foreach ($categorss->posts()->get() as $posts)

         	

         	<article class="brick entry format-standard animate-this animated fadeInUp " style="    width: 300px;     ">

               <div class="entry-thumb">
                  <a href="{{ route('article.show',$posts->id) }}" class="thumb-link">
	                  <img src="{{ url('images/' . $posts->file) }}" style="    width: 300px;     height: 300px;" alt="building">             
                  </a>
               </div>

               <div class="entry-text">
               	<div class="entry-header">

               		<div class="entry-meta">
               			<span class="cat-links">
               				@foreach ($posts->tags()->get() as $tagpost)
                 
                  
               				<a href="{{ url('articletag/' .$tagpost->id) }}">{{$tagpost->title}} </a> 
               			@endforeach	              				
               			</span>			
               		</div>

               		<h1 class="entry-title"><a href="{{  route('article.show',$posts->id) }}">{{ $posts->title  }}</a></h1>
               		
               	</div>
						
               </div>

        		</article> <!-- end article -->

           
 @endforeach

        		 <!-- end article -->

         </div> <!-- end brick-wrapper --> 

   	</div> <!-- end row -->

   



		
   </section> <!-- end content -->


@endsection
  