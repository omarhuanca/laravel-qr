@extends('layouts.app')

<h1> User Profile </h1>

@section('content')

<div>
    <div>
        <div>
            <div>
                <label for="status">Status</label>
                <div>{{$user->adus_status}}</div>
            </div>
            <div>
                <label for="status">First Name</label>
                <div>{{$user->adus_first_names}}</div>
            </div>
            <div>
                <label for="status">Last Name</label>
                <div>{{$user->adus_last_names}}</div>
            </div>
            <div>
                <label for="status">Email</label>
                <div>{{$user->adus_email}}</div>
            </div>
            <div>
                <h5>Code QR</h5>
                <img src= "{{ asset('storage/' . 'picture.png') }}" alt="Code QR" width="300" height="300">
            </div>
        </div>
    </div>
</div>

@endsection