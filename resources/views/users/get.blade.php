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
                <h5>Dummy file.png</h5>
            </div>
            <div>
                <img src="{{ FileHelper::getBinaryFile() }}"/>
            </div>
            <div>
                <img src="data:image/jpg;charset=utf8;base64,{{ Storage::get('file.png') }}"/>
            </div>
            <div>
                <h5>Email picture.png</h5>
            </div>
            <div>
                <img src="data:image/jpg;charset=utf8;base64,{{ Storage::get('picture.png') }}"/>
            </div>

        </div>
    </div>
</div>

@endsection