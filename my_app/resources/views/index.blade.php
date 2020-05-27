@extends('base')

@section('content')
    <h2>View Users</h2>

    @foreach($users as $user)

        <div class="text-white bg-dark mb-3 p-3">
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
