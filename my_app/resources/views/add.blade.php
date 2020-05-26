@extends('base')

@section('content')
    <h2>Add new Users</h2>

    <form action="/add" method="POST">

        <div class="form-row mb-2">
            <div class="col-md">
                <label for="fname">First Name</label>
                <input type="text" class="form-control" id="fname" placeholder="First name">
            </div>
            <div class="col-md">
                <label for="lname">Last Name</label>
                <input type="text" class="form-control" id="lname" placeholder="Last name">
            </div>
        </div>
        <div class="form-row mb-2">
            <div class="col-md-5">

                <label for="exampleInputEmail1">Email address</label>
                <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter email">
              
            </div>
        </div>
        
        <button type="submit" class="btn btn-primary">Add User</button>
      </form>
    
@endsection
