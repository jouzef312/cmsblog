@extends('back.admin.admin')
 
@section('contenu')
 
           <div class="box">
                     <div class="box-body">
              <table class="table table-bordered">
                <tr>
                  <th style="width: 10px">ID</th>
                  <th> name</th>

                  <th> </th>
                
                </tr>

                   @foreach ($tag as $tags)
                <tr>
                  <td>{{ $tags->id }}</td>
                
                  <td>{{ $tags->title }}</td>
             
                 
              
             
                  <td >
                 <ul class="list-inline">
  <li class="list-inline-item"> <a  href="{{ route('tag.edit',$tags->id) }}"  class="btn btn-info">edit</a> </li>
  <li class="list-inline-item"><form action="{{ Route('tag.destroy',$tags->id) }}" method="POST">
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
@endsection