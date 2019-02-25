@extends('back/admin/admin')
 
@section('contenu')
 
           <div class="box">
                     <div class="box-body">
              <table class="table table-bordered">
                <tr>
                  <th style="width: 10px">ID</th>
                  <th>Name</th>
                  <th>Email</th>
                  <th> </th>
                </tr>
                   @foreach ($user as $uses)
                <tr>
                  <td>{{ $uses->id }}</td>
                  <td>{{ $uses->name  }}</td>
             
                  <td><span >{{ $uses->email }}</span></td>
                  <td> 

                



<ul class="list-inline">
  <li class="list-inline-item"><button type="button" class="btn btn-block btn-info">edit</button></li>
  <li class="list-inline-item"><button type="button" class="btn btn-block btn-danger">Delete</button></li>
 
</ul>

</td>
                </tr>
                @endforeach
                
              </table>
             
            </div>
                

                 

                    

                </div>
@endsection