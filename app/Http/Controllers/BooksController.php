<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Book;
use App\Http\Models\BroBook;

use Illuminate\Support\Facades\DB;
class BooksController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        /*
        $book=Book::all();
        return view('allbooks',['book'=>$book]);*/
        $books = DB::table('books')->get();
        return view('allbooks',compact('books'));

    }
    public function trashedBooks()
    {
        $books= Book::withTrashed()->latest()->paginate(4);
        return view('trash',compact('books'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view("create");
    }
    public function search(Request $request)
    {
    $search=$request->get('search');
    $books=DB::table('books')->where('bookTitle','like','%',$search,'%')->pginate(5);
    return view('books.index',['books'=>$books]);
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
       /* $validatedData=$request->validate([
            'title'=>'required|unique:posts'
            ,'body'=>'required',
         ]);*/
       //  $request['user_id']=1;
        // Book::create($request->all());
        $post = new Book;
        $post->bookTitle=$request->bookTitle;
        $post->author=$request->author;
      //  $post->user_id=1;
        $post->save();
         return redirect('/books');
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
        $bro=Book::find($id);
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
        $post= Book::find($id);
       return view('edit',["post"=>$post]);
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
      /*  $validatedData=$request->validate([
            'bookTitle'=>'required'
            ,'author'=>'required'
         ]);*/
        /* $post=Book::find($id);
         $post->update($request->all());
      */
       $post = Book::find($id);
       $post->bookTitle=$request->bookTitle;
       $post->author=$request->author;
       $post->save();
         return redirect('/books');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Book::find($id)->delete();     
        return redirect('/books');
    }
    public function softDelete(  $id)
    {

        // Book::find($id)->delete();
         $post = Book::find($id);
       
        
        return redirect('/borrowed')
        ->with('success','product deleted successflly');
    }


    
    public function backFromSoftDelete( $id)
    {


        $product = Book::onlyTrashed()->where('id' , $id)->first()->restore() ;
      //dd($product);

        return redirect()->route('books.index')
        ->with('success','product back successfully') ;
    }
}
