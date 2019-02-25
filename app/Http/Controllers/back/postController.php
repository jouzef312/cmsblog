<?php

namespace App\Http\Controllers\back;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Http\Requests\PostRequest;
use Illuminate\Support\Facades\Storage;
use Intervention\Image\Facades\Image as InterventionImage;
use App\Post;
use App\User;
use App\Categors;
use App\Tag;

class postController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
       
$tag = Tag::All();
        $post = Post::All();
        $categors = Categors::All();
        
          return view('back.post.index',compact('post'),compact('categors'),compact('tag'));
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
        $categor = Categors::All();
          return view('back.post.create',compact('categor'),compact('tag'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
         $this->validate($request,[
            'title'=>'required',
            'body' => 'required',
            ]);
  $path = Storage::disk('images')->put('', $request->file('file'));
    // Save thumb


    $img = InterventionImage::make($request->file('file'))->widen(100);


    Storage::disk('thumbs')->put($path, $img->encode());
        $post = new Post();
        $post->title = $request->title;
        $post->body = $request->body;
        $post->categors_id = $request->categors;
        $post->file = $path;
        
        $post->save();

$post->tags()->sync($request->tag, false);


        
      return redirect('post');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
     //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
         $user = User::All();
          $tags = Tag::All();
        $postedit = Post::find($id);
            $categor = Categors::All();
          return view('back.post.edit'  ,compact('postedit','categor','tags'));
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
        //
         // Save the data to the database
        $this->validate($request,[
            'title'=>'required',
            'body' => 'required',
            ]);
    //     $path = Storage::disk('images')->put('', $request->file('file'));
    // // Save thumb
    // $image = InterventionImage::make($request->file('file'))->widen(100);
    // Storage::disk('thumbs')->put($path, $image->encode());
        $post = post::find($id);
        $post->title = $request->title;
       
        $post->body = $request->body;
       $post->categors_id = $request->categors;
        $post->save();

$post->tags()->sync($request->tag);
            
       


        return redirect('post');
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

         $item = post::find($id);
        
$item->tags()->detach();
         $image_path = $item->file;  // the value is : localhost/project/image/filename.format
  
       //Image::destroy($image_path);
 
    $item->delete();
    return redirect('post');


    }
}
