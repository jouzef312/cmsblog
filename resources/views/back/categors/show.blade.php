@extends('back.admin.admin')
 
@section('contenu')
 
           <div class="box">
                     <div class="box-body">
            
                  {{ $categors->name}} :  

  <table class="table table-bordered table-striped">
                <tr>
                  <th>title</th>
                    <th>body</th>
                  <th> image</th>
                 
                
                
              
                
                </tr>
                

                @foreach ($categors->posts()->get() as $poste)

<tr>
                <td>
                     {{$poste->title}} </td>
                     <td>

                     {{$poste->body}}  </td>

                      <td class="margin">
                    <img src="{{ url('thumbs/' . $poste->file) }}"

 >

                  </td>



                  @endforeach

    </tr>
           </table>  
            </div>
                

                 

                    

                </div>
@endsection