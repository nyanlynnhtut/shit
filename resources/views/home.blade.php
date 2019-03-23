@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        @foreach ($lists as $list)
            <div class="col-md-12">
                <h4>{{ $list->title }}</h4>
                <table class="table table-bordered">
                    @foreach ($list->nominates as $nominate)
                        <tr>
                            <td>{{ $nominate->name }}</td>
                            @if (auth()->user())
                                @if (auth()->user()->voted($list->id, $nominate->id))
                                    <td>
                                        <a href="{{ route('vote', [$list->id, $nominate->id]) }}"
                                            onclick="event.preventDefault();
                                                     document.getElementById('vote-form').submit();">Vote
                                        </a> | 
                                        <a href="{{ route('unvote', [$list->id, $nominate->id]) }}" 
                                                onclick="event.preventDefault();
                                                     document.getElementById('unvote-form').submit();">UnVote</a>

                                        <form id="vote-form" action="{{ route('vote', [$list->id, $nominate->id]) }}" method="POST" style="display: none;">
                                            @csrf
                                        </form>
                                        <form id="unvote-form" action="{{ route('unvote', [$list->id, $nominate->id]) }}" method="POST" style="display: none;">
                                            @csrf
                                        </form>
                                    </td>
                                @else
                                    <td>Voted</td>
                                @endif
                            @else
                                <td>Vote</td>
                            @endif
                        </tr>
                    @endforeach
                </table>
            </div>
        @endforeach
    </div>
</div>
@endsection