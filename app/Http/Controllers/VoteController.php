<?php

namespace App\Http\Controllers;

use App\Vote;
use Illuminate\Http\Request;

class VoteController extends Controller
{
    public function up($type, $nominate)
    {
        $data = [
            'prize_type_id' => $type,
            'prize_nominate_id' => $nominate,
            'user_id' => auth()->user()->id,
            'vote' => 1,
        ];
        if ($vote = Vote::create($data)) {
            return back();
        }

        return back()->withErrors();
    }

    public function down($type, $nominate)
    {
        $data = [
            'prize_type_id' => $type,
            'prize_nominate_id' => $nominate,
            'user_id' => auth()->user()->id,
            'vote' => 0,
        ];
        if ($vote = Vote::create($data)) {
            return back();
        }

        return back()->withErrors();
    }
}
