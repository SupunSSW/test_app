@extends('base')

@section('content')
    <h2>View Users</h2>

    @foreach($users as $user)

        <div class="text-white bg-dark mb-3 p-3">
        <a href="/{{ $user->id }}" class="btn btn-info float-right">View</a>
            <li>
                {{$user->fname}}
            </li>
            <li>
                {{$user->lname}}
            </li>
            <li>
                {{$user->email}}
            </li>
        </div>
        
    @endforeach

@endsection
