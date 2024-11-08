<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Http;

class TodoController extends Controller
{
    public function index()
    {
        // Mengambil data dari API
        $todos = Http::get('https://jsonplaceholder.typicode.com/todos')
            ->json();

        // Mengirim data ke view
        return view('todos.index', ['todos' => $todos]);
    }
}