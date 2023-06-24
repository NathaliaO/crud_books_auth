<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use Hash;
use Session;
use App\Models\Book;

class BookController extends Controller
{
    function index()
    {
        return view('register_book');
    }

    function save_book(Request $request)
    {
        $request->validate([
            'name'         =>   'required',
            'isbn'         =>   'required|numeric',
            'value'        =>   'required'
        ]);

        $data = $request->all();

        Book::create([
            'name'  =>  $data['name'],
            'isbn'  =>  $data['isbn'],
            'value' => $data['value']
        ]);

        return redirect('dashboard')->with('success', 'Book Registration Completed!');
    }

    function delete($id)
    {
        $book = Book::find($id);
        return $book->delete();
    }

    function edit($id)
    {
        $book = Book::find($id);
        return view('edit_book', [
            'book' => $book
        ]);
    }

    function update(Request $request, $id)
    {
        $request->validate([
            'name'         =>   'required',
            'isbn'         =>   'required|numeric',
            'value'        =>   'required'
        ]);

        $data = $request->all();

        $book = Book::find($id);
        $book->name = $data['name'];
        $book->isbn = $data['isbn'];
        $book->value = $data['value'];
        $book->save();

        return redirect('dashboard')->with('success', 'Book Updated!');
    }

}