<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\PhoneBook;

class PhoneBookController extends Controller
{
    public function index(){
        $phonebooks = PhoneBook::get()->toJson();
        return response($phonebooks, 200);
    }
    public function store(Request $request)
    {
        $phonebook = PhoneBook::create($request->all());
        return response()->json($phonebook, 201);
    }
}
