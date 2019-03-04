<?php

namespace App\Http\Controllers\back;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Tuto;
use App\Comment;
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
          return view('back.tuto.create');
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
         $tuto = new Tuto();
          $tuto->title = $request->title;
        $tuto->body = $request->body;
        $tuto->save();
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

        $tuto = Tuto::find($id);
        return view('back.tuto.edit',compact('tuto'));

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
         $tutos = Tuto::All();
         return view('back.tuto.index',compact('tutos'));

    }
}