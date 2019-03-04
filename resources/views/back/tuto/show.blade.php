@extends('back.admin.admin')
 
@section('contenu')
<div class="box box-info">
            <div class="box-header with-border">
              <h3 class="box-title">Comment Tuto</h3>
            </div>
             <form action="{{ route('commenter',$tuto->id) }}" class="form-horizontal" method="POST">
                    {{ csrf_field() }}
                 

            <!-- /.box-header -->
            <!-- form start -->
            
              <div class="box-body">
                  <div class="form-group">
                  <label for="title" class="col-sm-2 control-label">Commenter</label>

                  <div class="col-sm-10">
                    <input type="text" class="form-control" name="commenter" id="commenter"  placeholder="comenter" >
                   
                  </div>
                </div>


                

              
           



               
                
              </div>
              <div class="box-footer">
              
                <button type="submit" class="btn btn-info pull-right">commente</button>
                <a href="javascript:history.back()" class="btn btn-default">Back</a> 
              </div>

            </form>
            </div>
@endsection