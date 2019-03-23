@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div>
            <a href="{{ route('type.create') }}" class="btn btn-success">Create</a>
        </div>
        <table class="table table-bordered">
            <tr style="background: #fff;">
                <th>Title</th>
                <th>Actions</th>
            </tr>
            @foreach ($lists as $list)
                <tr>
                    <td>{{ $list->title }}</td>
                    <td>
                        <a href="{{ route('nominate.create',$list) }}">Create Nominates</a>
                    </td>
                </tr>
            @endforeach 
        </table>
    </div>
</div>
@endsection