@extends('layouts.app')

@section('content')
<div class="container mt-2">

<div class="row">
        <div class="col-lg-12 margin-tb">
            <div class="pull-left">
                <h2>Users Table</h2>
            </div>
            <div class="pull-right mb-2">
                <a class="btn btn-success" href="{{ route('users.create') }}"> Create Users</a>
            </div>
        </div>
    </div>
   
    @if ($message = Session::get('success'))
        <div class="alert alert-success">
            <p>{{ $message }}</p>
        </div>
    @endif
   
    <table class="table table-bordered">
        <tr>
            <th>#</th>
            <th>Avatar</th>
            <th>Role:</th>
            <th>Username:</th>
            <th>Email:</th>
            <th width="450">Action</th>
        </tr>
        @foreach ($users as $user)
        <tr>
            <td>{{ $loop->iteration }}</td>
            <td>@if($user->avatar)
                        <img src="{{'storage/' . $user->avatar}}" alt="" style="width: 50px; height:50px;">
                        @else
                        <img src="assets/img/ils.jpg" alt="" style="width: 50px; height:50px;">
                        @endif</td>
            <td>{{ $user->role }}</td>
            <td>{{ $user->name }}</td>
            <td>{{ $user->email }}</td>
            <td>
                <!-- <a class="btn btn-success" href="{{ route('users.create') }}"> Create</a> -->
                <a class="btn btn-primary" href="{{ route('users.edit',$user->id) }}">Edit</a>
                <button type="submit" class="btn btn-danger" data-toggle="modal" data-target="#deleteModal{{ $user->id }}">Delete</button>
                
                <div class="modal fade" id="deleteModal{{$user->id}}" tabindex="-1" role="dialog" aria-labelledby="deleteModalLabel{{$user->id}}" aria-hidden="true">
                     <div class="modal-dialog modal-dialog-scrollable" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="deleteModalLabel{{$user->id}}">Delete Confirmation</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    Are you sure you want to delete?
                </div>
                <div class="modal-footer">
                    <!-- Cancel Button -->
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancel</button>
                    <!-- Delete Button -->
                    <form id="deleteForm{{$user->id}}" action="{{ route('users.destroy', $user->id) }}" method="POST" style="display: inline;">
                        @csrf
                        @method('DELETE')
                        <button type="submit" class="btn btn-danger">Delete</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
                </td>
            </tr>
            @endforeach
        </table>
    
    @endsection