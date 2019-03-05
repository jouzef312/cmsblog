<?php

namespace App\Http\Controllers\front;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Post;
use App\Categors;
use App\Tag;
class articleController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //

        $post = Post::All();
     $categors = Categors::All();
     $tags = Tag::All();
          return view('frant.index',compact('post','tags','categors'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
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
 $categors = Categors::All();
 $poste = Post::find($id);
     $categors = Categors::All();
      $tags = Tag::All();
          return view('frant.show',compact('poste'),compact('tags','categors'));
    }



 public function showarticle($id)
    {
        //
$categors = Categors::All();
$categorss = Categors::find($id);
 $tags = Tag::All();
   
          return view('frant.showarticle',compact('categorss','tags','categors'));
    }


 public function showtag($id)
    {
        //
$categors = Categors::All();
 $tags = Tag::All();
$tagfind = Tag::find($id);

   
          return view('frant.showtag',compact('tagfind','tags','categors'));
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
    }
}
