@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <table class="table table-bordered">
            <tr style="background: #fff;">
                <th>Nominate</th>
                <th>Type</th>
            </tr>
            @foreach ($lists as $list)
                <tr>
                    <td>{{ $list->name }}</td>
                    <td>{{ $list->type->title }}</td>
                </tr>
            @endforeach 
        </table>
    </div>
</div>
@endsection