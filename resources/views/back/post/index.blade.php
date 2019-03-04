@extends('back.admin.admin')
 
@section('contenu')
 
           <div class="box">
                     <div class="box-body">
                       <div class="col-xs-12"">
              <table class="table table-bordered table-striped">
                <tr>
                  <th style="width: 10px">ID</th>
                  <th> image</th>
                  <th>title</th>
                  <th>body</th>
                  <th> catégorie</th>
                  <th>Tag </th>
                  <th> </th>
                
                </tr>
                   @foreach ($post as $posts)
                <tr>
                  <td>{{ $posts->id }}</td>
                  <td class="margin">
                    <img src="{{ url('thumbs/' . $posts->file) }}"

 >

                  </td>
                  <td><a href="{{ route('post.show',$posts->id) }}">{{ $posts->title  }}</a></td>
             
                  <td><span >{{ $posts->body }}</span></td>


                  <td>
                     @foreach ($categors as $categorspost)
                    @if($categorspost->id ==$posts->categors_id )

                    {{ $categorspost->name }}
                    @endif
                       @endforeach

                  </td>


                  <td>
                    
                @foreach ($posts->tags()->get() as $tagpost)


                     {{$tagpost->title}} ,
                    
                 




                  @endforeach


                  </td>
              
             
                  <td >
                 
<ul class="list-inline">
  <li class="list-inline-item"> <a  href="{{ route('post.edit',$posts->id) }}"  class="btn btn-info">edit</a> </li>
  <li class="list-inline-item"> <form action="{{ Route('post.destroy',$posts->id) }}" method="POST">
                    {{ csrf_field() }}
                    {{ method_field('DELETE') }}
                
<!-- <a  href="{{ route('post.destroy',$posts->id) }}" class="btn btn-block btn-danger">Delete</a>
 -->
                <button type="submit"  class="btn  btn-danger">Delete</button>
              
            

            </form></li>

</ul>
                 
                   

                   

</td>
                </tr>
                @endforeach
                
              </table>
            </div>
             
            </div>
                

                 

                    

                </div>
@endsection