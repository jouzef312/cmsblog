@extends('back.admin.admin')
 
@section('contenu')
 <a  href="{{ route('role.create') }}"  class="btn btn-info">Add</a>
           <div class="box">
                     <div class="box-body">
              <table class="table table-bordered">
                <tr>
                  <th style="width: 10px">ID</th>
                  <th> name</th>

                  <th>permissions </th>
                  <th> </th>
                
                </tr>

                   @foreach ($roles as $role)
                <tr>
                  <td>{{ $role->id }}</td>
                
                  <td>{{ $role->name }}</td>

                    <td> 
 @foreach ($role->getAllpermissions() as $Permission)


                     {{$Permission->name}} ,
                    
                 




                  @endforeach

                    </td>
             
                 
              
             
                  <td >
                 <ul class="list-inline">
  <li class="list-inline-item"> <a  href="{{ route('role.edit',$role->id) }}"  class="btn btn-info">edit</a> </li>
  <li class="list-inline-item"><form action="{{ Route('role.destroy',$role->id) }}" method="POST">
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