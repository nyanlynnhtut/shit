<?php

namespace App\Http\Controllers;

use App\PrizeType;
use Illuminate\Http\Request;

class TypeController extends Controller
{
    public function index()
    {
        return view('type.index', ['lists' => PrizeType::all()]);
    }

    public function create()
    {
        return view('type.form');
    }

    public function store(Request $request)
    {
        $this->validate($request, ['title' => 'required']);

        if ($type = PrizeType::create($request->only('title'))) {
            return redirect('types');
        }

        return back();
    }
}
