<?php

namespace App\Http\Controllers;

use App\Repositories\AuthorRepository;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Route;

class AuthorController extends Controller
{
    protected $authorRepository;
    public function __construct(AuthorRepository $authorRepository) //instance
    {
        $this->authorRepository = $authorRepository;
    }

    //
    public function index()
    {
       $authors = $this->authorRepository->getAll();
        return view("backend.author.list",compact("authors"));
    }
    public function showFormCreate()
    {
        return view("backend.author.create");
    }

    public function create(Request $request)
    {
        $this->authorRepository->create($request);
        return redirect()->route("authors.index");
    }

    public function show($id)
    {
        $author = $this->authorRepository->getById($id);
        return view("author.detail",compact("author"));
    }

    public function destroy($id)
    {
        DB::table('authors')->where('id', $id)->delete();
        return redirect()->route("authors.index");
    }
}
