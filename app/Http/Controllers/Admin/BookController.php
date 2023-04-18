<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Book;
use App\Traits\ApiResponse;
use App\Validators\BookValidator;
use Illuminate\Support\Facades\DB;

class BookController extends Controller
{
    use ApiResponse;
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $books = Book::latest()->get();
        return view('admin.book.index', compact('books'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.book.add');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function bookStore(Request $request,BookValidator $bookValidator)
    {
        try {
            DB::beginTransaction();

            if (!$bookValidator->with($request->all())->passes()) {
                return $this->failResponse([
                    "message" => $bookValidator->getErrors()[0],
                    "messages" => $bookValidator->getErrors()
                ], 422);
            }

            $book = new Book();
            $book->title = $request->title;
            $book->author = $request->author;
            $book->genre = $request->genre;
            $book->isbn = $request->isbn;
            $book->published = $request->published;
            $book->publisher = $request->publisher;
            $book->description = $request->description;

            if ($request->hasFile('image') && $request->file('image')) {

                $image = $request->file('image')->store('public/books');
                $image = 'books/'.pathinfo($image)['basename'];
                $book->image = $image;

            }

            $book->save();
            DB::commit();

            return $this->successResponse([
                'message' => "Books Added successfully!"
            ]);

        } catch (\Exception $e) {
            return $this->failResponse([
                "message" => $e->getMessage(),
            ], 500);
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(Book $book)
    {

        return view('admin.book.show', compact('book'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Book $book)
    {
        return view('admin.book.edit', compact('book'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function bookUpdate(Request $request, BookValidator $bookValidator)
    {
        try {
            DB::beginTransaction();

            if (!$bookValidator->with($request->all())->passes()) {
                return $this->failResponse([
                    "message" => $bookValidator->getErrors()[0],
                    "messages" => $bookValidator->getErrors()
                ], 422);
            }

            $book = Book::find($request->_id);

            if (!$book) {
                $response = ['message'=> "Something went wrong please try again!"];
                return $this->failResponse($response, 400);
            }

            $book->title = $request->title;
            $book->author = $request->author;
            $book->genre = $request->genre;
            $book->isbn = $request->isbn;
            $book->published = $request->published;
            $book->publisher = $request->publisher;
            $book->description = $request->description;

            if ($request->hasFile('image') && $request->file('image')) {

                $image = $request->file('image')->store('public/books');
                $image = 'books/'.pathinfo($image)['basename'];
                $book->image = $image;

            }

            $book->save();
            DB::commit();

            return $this->successResponse([
                'message' => "Books update successfully!"
            ]);

        } catch (\Exception $e) {
            return $this->failResponse([
                "message" => $e->getMessage(),
            ], 500);
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $book =  Book::find($id);

        if (!$book) {
            return back()->with('error', "Something went wrong please try again!");
        }
        $book->delete();

        return back()->with('success', "book delete Successfully!");
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function bookDestroy(Request $request)
    {
        $book =  Book::find($request->id);

        if (!$book) {
            $response = ['message'=> "Something went wrong please try again!"];
            return $this->failResponse($response, 400);
        }
        $book->delete();

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
                                ->orderBy('id', 'DESC')->latest()->paginate(10);
        $pagination = $books->lastPage();
        return view('admin.book.table', compact('books','pagination', 'page')) ->with('i', ($page - 1) * 10);
    }

      /**
     * get books the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function booksGet(Request $request)
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
                                    ->orderBy('id', 'DESC')->latest()->paginate(10);
        $pagination = $books->lastPage();
        return view('admin.book.table', compact('books','pagination', 'page')) ->with('i', ($page - 1) * 10);

    }
}
