@extends('frant.temp')
 
@section('contenu')
   

   <!-- content
   ================================================== -->
  


   	 <section id="bricks" title="Posts">
<div style="text-align: -webkit-center;"><h1>Posts</h1></div>
   	<div class="row masonry">

   		<!-- brick-wrapper -->
         <div class="bricks-wrapper">


         	<div class="grid-sizer"></div>














         	@foreach ($post as $posts)

         	

         	<article class="brick entry format-standard animate-this">

               <div class="entry-thumb">
                  <a href="{{ route('article.show',$posts->id) }}" class="thumb-link">
	                  <img src="{{ url('images/' . $posts->file) }}" alt="building">             
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

    <section id="bricks" title="tuto">
<div style="text-align: -webkit-center;"><h1>Tuto</h1></div>
      <div class="row masonry">

         <!-- brick-wrapper -->
         <div class="bricks-wrapper">


            <div class="grid-sizer"></div>














            @foreach ($tutos as $tuto)

            

            <article class="brick entry format-standard animate-this">

               <div class="entry-thumb">
                  <a href="{{ route('articletuto',$tuto->id) }}" class="thumb-link">
                     <img src="{{ url('images/' . $tuto->file) }}" alt="building">             
                  </a>
               </div>

               <div class="entry-text">
                  <div class="entry-header">

                     <div class="entry-meta">
                        <span class="cat-links">
                           @foreach ($tuto->tags()->get() as $tagtuto)
                 
                  
                           <a href="{{ url('articletag/' .$tagtuto->id) }}">{{$tagtuto->title}} </a> 
                        @endforeach                         
                        </span>        
                     </div>

                     <h1 class="entry-title"><a href="{{  route('articletuto',$tuto->id) }}">{{ $tuto->title  }}</a></h1>
                     
                  </div>
                  
               </div>

            </article> <!-- end article -->

           
 @endforeach

             <!-- end article -->

         </div> <!-- end brick-wrapper --> 

      </div> <!-- end row -->

   



      
   </section> <!-- end content -->


@endsection
  