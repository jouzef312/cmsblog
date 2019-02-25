@extends('back.admin.admin')
 
@section('contenu')
 <a  href="{{ route('permission.create') }}"  class="btn btn-info">Add</a>
           <div class="box">
                     <div class="box-body">
              <table class="table table-bordered">
                <tr>
                  <th style="width: 10px">ID</th>
                  <th> name</th>

                  <th> </th>
                
                </tr>

                   @foreach ($permissions as $permission)
                <tr>
                  <td>{{ $permission->id }}</td>
                
                  <td>{{ $permission->name }}</td>
             
                 
              
             
                  <td >
                 <ul class="list-inline">
  <li class="list-inline-item"> <a  href="{{ route('permission.edit',$permission->id) }}"  class="btn btn-info">edit</a> </li>
  <li class="list-inline-item"><form action="{{ Route('permission.destroy',$permission->id) }}" method="POST">
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