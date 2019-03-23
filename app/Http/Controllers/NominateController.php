<?php

namespace App\Http\Controllers;

use App\PrizeNominate;
use Illuminate\Http\Request;

class NominateController extends Controller
{
    public function index()
    {
        return view('nominate.index', ['lists' => PrizeNominate::with('type')->get()]);
    }

    public function create($id)
    {
        return view('nominate.form', ['id' => $id]);
    }

    public function store(Request $request, $id)
    {
        $this->validate($request, ['name' => 'required']);
        $data = $request->only(['name', 'prize_type_id']);
        if ($type = PrizeNominate::create($data)) {
            return redirect('types');
        }

        return back();
    }
}
