@extends('frant.temp')
 
@section('contenu')


        

 <section id="content-wrap" class="blog-single">
   	<div class="row">
   		<div class="col-twelve">

   		

   			<article class="format-standard">  

   				<div class="content-media">
						<div class="post-thumb">
							<img src="{{ url('images/' . $poste->file) }}"> 
						</div>  
					</div>

					<div class="primary-content">

						<h1 class="page-title">{{ $poste->title  }}</h1>	

						<ul class="entry-meta">
							<li class="date">{{ $poste->created_at  }}</li>						
							<li class="cat">

										@foreach ($poste->tags()->get() as $tagpost)
                 
                  
               				<a href="#">{{$tagpost->title}} </a> 
               			@endforeach	

							</li>				
						</ul>						

						<p class="lead">{{ $poste->body  }}</p> 

					
						


					
						

		  			  <!-- end author-profile -->						

					</div> <!-- end entry-primary -->		  			   

	  			   

				</article>
   	

			</div> <!-- end col-twelve -->
   	</div> <!-- end row -->

		
   </section> 


   @endsection