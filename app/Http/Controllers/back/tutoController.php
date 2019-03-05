<?php

namespace App\Http\Controllers\back;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Storage;
use Intervention\Image\Facades\Image as InterventionImage;
use App\Tuto;
use App\Comment;
use App\Tag;
class tutoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $tutos = Tuto::All();
        return view('back.tuto.index',compact('tutos'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
         $tag = Tag::All();
          return view('back.tuto.create',compact('tag'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
         $this->validate($request,[
            'title'=>'required',
            'body' => 'required',
            ]);

          $path = Storage::disk('images')->put('', $request->file('file'));
    // Save thumb
    $img = InterventionImage::make($request->file('file'))->widen(100);
    Storage::disk('thumbs')->put($path, $img->encode());
         $tuto = new Tuto();
          $tuto->title = $request->title;
        $tuto->body = $request->body;
        $tuto->file = $path;
        $tuto->save();
        $tuto->tags()->sync($request->tag, false);
        $tutos = Tuto::All();
         return view('back.tuto.index',compact('tutos'));

    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
         $tuto = Tuto::find($id);
        return view('back.tuto.show',compact('tuto'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
$tag = Tag::All();
        $tuto = Tuto::find($id);
        return view('back.tuto.edit',compact('tuto','tag'));

    }



  public function addcommenter(Request $request, $id)
    {
        //
        
 $this->validate($request,[
            'commenter'=>'required',
            
            ]);
$commenter = new Comment();

$commenter->commenter = $request->commenter;

$tuto = Tuto::find($id);
$tuto->comments()->save($commenter);



$commenter->save();
return back();






       

    }


    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
          $this->validate($request,[
            'title'=>'required',
            'body' => 'required',
            ]);    
 $tuto = Tuto::find($id);
          $tuto->title = $request->title;
        $tuto->body = $request->body;
        $tuto->save();
        $tuto->tags()->sync($request->tag);
        $tutos = Tuto::All();
         return view('back.tuto.index',compact('tutos'));
}
    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //

         $tuto = Tuto::find($id);
         $tuto->delete();
         $tuto->tags()->detach();
         $tutos = Tuto::All();
         return view('back.tuto.index',compact('tutos'));

    }
}
