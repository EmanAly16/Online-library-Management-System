<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Models\Book;
use App\Models\BroBook;

use Illuminate\Support\Facades\DB;
class BorrowedController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $brobooks = DB::table('bro_books')->get();
        return view('borrowed',compact('brobooks'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
      /*  $post = new Book;
        $post->bookTitle=$request->bookTitle;
        $post->author=$request->author;
      //  $post->user_id=1;
        $post->save();
         return redirect('/borrowed');*/
         return view("create");

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
        $post = new BroBook;
        $post->bookTitle=$request->bookTitle;
        $post->author=$request->author;
      //  $post->user_id=1;
        $post->save();
        return redirect('/borrowed');

    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        
        $bro=BroBook::find($id);
        return view('show',['bro'=>$bro]);
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
    public function softDelete(  $id)
    {

        $brobooks = Book::find($id)->delete();

        return redirect('/borrowed')
        ->with('success','product deleted successflly') ;
    }

    
    public function backFromSoftDelete( $id)
    {


        $product = Book::onlyTrashed()->where('id' , $id)->first()->restore() ;
      //dd($product);

        return redirect()->route('allbooks')
        ->with('success','product back successfully') ;
    }
}
