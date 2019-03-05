@extends('back.admin.admin')
 
@section('contenu')
                
<div class="box box-info">
            <div class="box-header with-border">
              <h3 class="box-title">creat Tuto</h3>
            </div>
 <form action="{{ url('tuto') }}" enctype="multipart/form-data" class="form-horizontal" method="POST">
  {{ csrf_field() }}
            <!-- /.box-header -->
            <!-- form start -->
            <form class="form-horizontal">
              <div class="box-body">
                  <div class="form-group">
                  <label for="title" class="col-sm-2 control-label">title</label>

                  <div class="col-sm-10">
                    <input type="text" class="form-control" name="title" id="title" placeholder="title" value="{{ old('title') }}">
                   
                  </div>
                </div>


                <div class="form-group">
                  <label for="body" class="col-sm-2 control-label">body</label>

                  <div class="col-sm-10">
                    <input type="text" class="form-control" id="body" value="{{ old('body') }}" name="body" placeholder="body">
                  </div>
                </div>

                    <div class="form-group">
                  <div class="col-sm-2">
                  <label class="control-label">Select Tag</label>
                 <select  class="form-control"  id="tag[]" name="tag[]"  multiple="multiple"  data-actions-box="true" > 
                 
                     @foreach ($tag as $tags)
                    <option value="{{ $tags->id }}">{{ $tags->title }}</option>
                    

                    @endforeach
                  </select>
                </div>
                </div>






               
        



                
             
              <div class="box-footer">
                              <a href="javascript:history.back()" class="btn btn-default">Back</a> 

                <button type="submit" class="btn btn-info pull-right">Add</button>
              </div>
</div>
            </form>

        
@endsection