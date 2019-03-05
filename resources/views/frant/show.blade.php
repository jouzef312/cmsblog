@extends('frant.temp')
 
@section('contenu')


        

 <section id="content-wrap" class="blog-single">
   	<div ">
   		<div class=" " style="    text-align: -webkit-center;">

   		

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

					
<br><br>
					
						<div>
							<h1 class="page-title"  style="    text-align: -webkit-auto;">Commenter  </h1>	

							 <form action="{{ route('commenterpost',$poste->id) }}" class="form-horizontal" method="POST">
                    {{ csrf_field() }}
                 

            <!-- /.box-header -->
            <!-- form start -->
            
              <div class="box-body">
                  <div class="group-controle">

                  <div class="col-sm-10">
                    <input type="text" class="form-control" style = " width: -webkit-fill-available; " name="commenter" id="commenter"  placeholder="new commenter" >
                   
                  </div>
                </div>
              </div>
              <div class="box-footer">
              
                <button type="submit" class="btn btn-info pull-right">commente</button><br> <br>
              </div>

            </form>
						</div>

							<div class="entry-meta" >
														<h1 style="    text-align: -webkit-auto;"  class="page-title">Commenter  </h1>	

							<div  style="    text-align: -webkit-auto;"> {{   $poste->comments()->count() }}  commentere</div>
						
@foreach ($poste->comments()->latest()->get(); as $commenter)
                 
                  
               				<h5  style="    text-align: -webkit-auto;">{{$commenter->commenter}} </h5>
               					<p  style="    text-align: -webkit-auto;">{{$commenter->created_at}} </p><br>


               			@endforeach	


						</div>



					
						

		  			  <!-- end author-profile -->						

					</div> <!-- end entry-primary -->		




	  			   

				</article>
   	

			</div> <!-- end col-twelve -->
   	</div> <!-- end row -->

		
   </section> 


   @endsection