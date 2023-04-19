<?php

namespace App\Http\Controllers\Web;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Book;
use App\Traits\ApiResponse;
use App\Validators\BookValidator;
use Illuminate\Support\Facades\DB;

class BookStoreController extends Controller
{
    use ApiResponse;
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('web.index');
    }


    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function getBookDetail(Request $request,$id)
    {
        $book = Book::find($id);
        $page = $request->page;
        return view('web.book-show', compact('book','page'));
    }

      /**
     * get books the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function getAllBooks(Request $request)
    {
        $page = $request->input('page', 1);
        $books = Book::select('*')
                            ->where(function($query) use ($request){
                                            if ($request->title) {
                                                $query->where('title','LIKE','%'.$request->title.'%');
                                            }
                                            if ($request->author) {
                                                $query->where('author','LIKE','%'.$request->author.'%');
                                            }
                                            if ($request->genre) {
                                                $query->where('genre','LIKE','%'.$request->genre.'%');
                                            }
                                            if ($request->isbn) {
                                                $query->where('isbn','LIKE','%'.$request->isbn.'%');
                                            }
                                            if ($request->publisher) {
                                                $query->where('publisher','LIKE','%'.$request->publisher.'%');
                                            }
                                            if ($request->published) {
                                                $query->where('published', $request->published);
                                            }

                                        })
                                    ->orderBy('id', 'DESC')->latest()->paginate(8);
        $pagination = $books->lastPage();
        return view('web.book-page', compact('books','pagination', 'page')) ->with('i', ($page - 1) * 8);

    }

     /**
     * get books the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function showContent(Request $request)
    {
        $page = $request->page;
        return view('web.content', compact('page'));

    }
}
