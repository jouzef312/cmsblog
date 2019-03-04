@extends('back.admin.admin')
 
@section('contenu')
                  
<div class="box box-info">
            <div class="box-header with-border">
              <h3 class="box-title">create Role</h3>
            </div>
 <form action="{{ url('role') }}" enctype="multipart/form-data" class="form-horizontal" method="POST">
  {{ csrf_field() }}
            <!-- /.box-header -->
            <!-- form start -->
           
              <div class="box-body">
                  <div class="form-group">
                  <label for="name" class="col-sm-2 control-label">name</label>

                  <div class="col-sm-10">
                    <input type="text" class="form-control" name="name" id="name" placeholder="name" value="{{ old('name') }}">
                   
                  </div>



               
            
            
                  <div class="col-sm-2">
                      <div class="col-sm-">
                  <label class="control-label">Select permission</label>
                 <select  class="form-control"  id="permission[]" name="permission[]"  multiple="multiple"  data-actions-box="true" > 
                 
                     @foreach ($permission as $per)
                    <option value="{{ $per->id }}">{{ $per->name }}</option>
                    

                    @endforeach
                  </select>
                </div>
                </div>
              </div>
                </div>


              
               
                
              </div>
              <div class="box-footer">
                              <a href="javascript:history.back()" class="btn btn-default">Back</a> 

                <button type="submit" class="btn btn-info pull-right">Add</button>
              </div>

            </form>
          </div>
@endsection