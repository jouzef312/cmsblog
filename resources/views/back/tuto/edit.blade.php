@extends('back.admin.admin')
 
@section('contenu')
<div class="box box-info">
            <div class="box-header with-border">
              <h3 class="box-title">Edit Tuto</h3>
            </div>
             <form action="{{ Route('tuto.update',$tuto->id) }}" class="form-horizontal" method="POST">
                    {{ csrf_field() }}
                    {{ method_field('PATCH') }}

            <!-- /.box-header -->
            <!-- form start -->
            
              <div class="box-body">
                  <div class="form-group">
                  <label for="title" class="col-sm-2 control-label">title</label>

                  <div class="col-sm-10">
                    <input type="text" class="form-control" name="title" id="title" value="{{ $tuto->title }}" placeholder="title" >
                   
                  </div>
                </div>


                <div class="form-group">
                  <label for="body" class="col-sm-2 control-label">body</label>

                  <div class="col-sm-10">
                    <input type="text" class="form-control" id="body" value="{{ $tuto->body }}" name="body" placeholder="body">
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