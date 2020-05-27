@extends('base')

@section('content')
<h2>View {{$user->fname}}</h2>

    <div class="text-white bg-dark mb-3 p-3">
        {{-- <button class="btn btn-info float-right">View</button> --}}
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
        

@endsection
