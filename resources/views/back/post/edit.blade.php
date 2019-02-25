@extends('back.admin.admin')
 
@section('contenu')
<div class="box box-info">
            <div class="box-header with-border">
              <h3 class="box-title">Edit post</h3>
            </div>
             <form action="{{ Route('post.update',$postedit->id) }}" class="form-horizontal" method="POST">
                    {{ csrf_field() }}
                    {{ method_field('PATCH') }}

            <!-- /.box-header -->
            <!-- form start -->
            
              <div class="box-body">
                  <div class="form-group">
                  <label for="title" class="col-sm-2 control-label">title</label>

                  <div class="col-sm-10">
                    <input type="text" class="form-control" name="title" id="title" value="{{ $postedit->title }}" placeholder="title" >
                   
                  </div>
                </div>


                <div class="form-group">
                  <label for="body" class="col-sm-2 control-label">body</label>

                  <div class="col-sm-10">
                    <input type="text" class="form-control" id="body" value="{{ $postedit->body }}" name="body" placeholder="body">
                  </div>
                </div>

                 <div class="form-group">
                   <label for="file" class="col-sm-2 control-label">    <img src="{{ url('thumbs/' . $postedit->file) }}"
</label>
                    <input type="file" name="file" id="file">

                 
                </div>
                <div class="form-group">
                  <div class="col-sm-10">
                  <label>Select catégorie</label>
                  <select class="form-control" id="categors" name="categors">
                     @foreach ($categor as $categors)
                      @if($categors->id == $postedit->categors_id )
                    <option value="{{ $categors->id }}" selected>{{ $categors->name }}</option>
                    @else
                    <option value="{{ $categors->id }}">{{ $categors->name }}</option>

                   @endif
                    

                    @endforeach
                  </select>
                </div>
                </div>




                 <div class="form-group">
                  <div class="col-sm-2">
                  <label class="control-label">Select Tag</label>
                 <select  class="form-control"  id="tag[]" name="tag[]"  multiple="multiple"  data-actions-box="true" > 
                 
                     @foreach ($tags as $tag)
                  


                   <option value="{{ $tag->id }}">  {{ $tag->title }}</option>
                
                 




          
                   

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