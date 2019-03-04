@extends('back.admin.admin')
 
@section('contenu')
 
           <div class="box">
                     <div class="box-body">
                       <div class="col-xs-12"">
              <table class="table table-bordered table-striped">
                <tr>
                  <th style="width: 10px">ID</th>
                 
                  <th>title</th>
                  <th>body</th>
                               <th> </th>
                
                </tr>
                   @foreach ($tutos as $tuto)
                <tr>
                  <td>{{ $tuto->id }}</td>
                
                  <td><a href="{{ route('tuto.show',$tuto->id) }}">{{ $tuto->title  }}</a></td>
             
                  <td><span >{{ $tuto->body }}</span></td>




               
                  <td >
                 
<ul class="list-inline">
  <li class="list-inline-item"> <a  href="{{ route('tuto.edit',$tuto->id) }}"  class="btn btn-info">edit</a> </li>
  <li class="list-inline-item"> <form action="{{ Route('tuto.destroy',$tuto->id) }}" method="POST">
                    {{ csrf_field() }}
                    {{ method_field('DELETE') }}
                

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