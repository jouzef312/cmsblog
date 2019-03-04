@extends('back.admin.admin')
 
@section('contenu')
                  
<div class="box box-info">
            <div class="box-header with-border">
              <h3 class="box-title">create Permission</h3>
            </div>
 <form action="{{ url('permission') }}" enctype="multipart/form-data" class="form-horizontal" method="POST">
  {{ csrf_field() }}
            <!-- /.box-header -->
            <!-- form start -->
           
              <div class="box-body">
                  <div class="form-group">
                  <label for="name" class="col-sm-2 control-label">name</label>

                  <div class="col-sm-10">
                    <input type="text" class="form-control" name="name" id="name" placeholder="name" value="{{ old('name') }}">
                   
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