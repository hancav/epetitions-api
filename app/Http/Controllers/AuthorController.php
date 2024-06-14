<?php

namespace App\Http\Controllers;

use App\Models\Author;
use Illuminate\Http\Request;
use App\Http\Resources\AuthorCollection;
use App\Http\Resources\AuthorResource;

class AuthorController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
        return new AuthorCollection(Author::all());
    }

    /**
     * Display the specified resource.
     */
    public function show(Author $author)
    {
        //
        return new AuthorResource($author);
    }

}
