@extends('back.admin.admin')
 
@section('contenu')
<div class="box box-info">
            <div class="box-header with-border">
              <h3 class="box-title">Edit Role</h3>
            </div>
             <form action="{{ Route('role.update',$role->id) }}" class="form-horizontal" method="POST">
                    {{ csrf_field() }}
                    {{ method_field('PATCH') }}

            <!-- /.box-header -->
            <!-- form start -->
            
              <div class="box-body">
                  <div class="form-group">
                  <label for="title" class="col-sm-2 control-label">name</label>

                  <div class="col-sm-10">
                    <input type="text" class="form-control" name="name" id="name" value="{{ $role->name }}" placeholder="name" >
                   
                  </div>



                   <div class="form-group">
                  <div class="col-sm-2">
                  <label class="control-label">Select permission</label>
                 <select  class="form-control"  id="permission[]" name="permission[]"  multiple="multiple"  data-actions-box="true" > 
                 
                     @foreach ($permissions as $permission)
                    <option value="{{ $permission->id }}">{{ $permission->name }}</option>
                    

                    @endforeach
                  </select>
                </div>
                </div>




                </div>



               
              <div class="box-footer">
              
                <button type="submit" class="btn btn-info pull-right">Edit</button>
                <a href="javascript:history.back()" class="btn btn-default">Back</a> 
              </div>

            </form>
            </div>
@endsection