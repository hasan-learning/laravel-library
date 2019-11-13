<?php


namespace App\Http\Controllers;


use App\Author;
use Illuminate\Http\Request;
use Illuminate\Http\Response;

class AuthorsController extends Controller
{
    public function index()
    {
        return response()->json(Author::all(), Response::HTTP_OK);
    }

    public function show($id)
    {
        return response()->json(Author::findOrFail($id), Response::HTTP_OK);
    }

    public function store(Request $request)
    {
        return \response()->json(Author::create($request->all()), Response::HTTP_CREATED);
    }

    public function update($id, Request $request)
    {
        $author = Author::find($id);
        $author->update($request->all());

        return \response()->json($author, Response::HTTP_OK);
    }

    public function destroy($id)
    {
        $author = Author::find($id);
        $author->delete();

        return \response()->json(null, Response::HTTP_NO_CONTENT);
    }
}
