@extends('layouts.app')

<h1> Users </h1>

@section('content')

<div class="card shadow mb-4">
    <div class="card-header py-3">
        <h6 class="m-0 font-weight-bold text-primary"> Users </h6>
    </div>
    <div class="card-body">
        <div class="table-responsive">
            <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                <thead>
                    <tr>
                        <th> ID </th>
                        <th> Status </th>
                        <th> First Name </th>
                        <th> Last Name </th>
                        <th> Email </th>
                    </tr>
                </thead>
                    @foreach($users as $user)
                    <tr>
                        <td>{{$user->adus_uid}}</td>
                        <td>{{$user->adus_status}}</td>
                        <td>{{$user->adus_first_names}}</td>
                        <td>{{$user->adus_last_names}}</td>
                        <td>{{$user->adus_email}}</td>
                    <tr>
                    @endforeach
                <tbody>
                </tbody>
            </table>
        </div>
    </div>
</div>

@endsection
