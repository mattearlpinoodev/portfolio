@extends('layouts.app')

@section('content')
<div class="container mt-4">
    <div class="row justify-content-center">
        <div class="col-lg-6">
            <div class="card">
                <div class="card-header">
                    <h2 class="text-center">Add Users</h2>
                </div>
                <div class="card-body">
                    @if(session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif
                    <form action="{{ route('users.store') }}" method="POST" enctype="multipart/form-data">
                        @csrf   
                        <div class="form-group">
                            <label for="name">Avatar</label>
                            <input type="file" name="avatar" id="avatar" class="form-control" placeholder="Enter Avatar">
                            @error('avatar')
                                <div class="alert alert-danger mt-1">{{ $message }}</div>
                            @enderror
                        </div>
                        <div class="form-group">
                            
                            <label for="role">Role</label>
                            <select name="role" id="role" class="form-control">
                            <option value="" selected disabled>Role</option>
                                
                            <option value="admin">Admin</option>
                            <option value="spectator">Spectator</option>
                               
                            </select>
                            @error('role')
                                <div class="alert alert-danger mt-1">{{ $message }}</div>
                            @enderror
                        </div>
                        <div class="form-group">
                            <label for="name">Name</label>
                            <input type="text" name="name" id="name" class="form-control" placeholder="Enter Name">
                            @error('name')
                                <div class="alert alert-danger mt-1">{{ $message }}</div>
                            @enderror
                        </div>
                        <div class="form-group">
                            <label for="email">Email</label>
                            <input type="email" name="email" id="email" class="form-control" placeholder="Enter Email">
                            @error('email')
                                <div class="alert alert-danger mt-1">{{ $message }}</div>
                            @enderror
                        </div>
                        <div class="form-group">
                            <label for="password">Password</label>
                            <input type="password" name="password" id="password" class="form-control" placeholder="Enter Password">
                            @error('password')
                                <div class="alert alert-danger mt-1">{{ $message }}</div>
                            @enderror
                        </div>
                        <div class="text-center">
                            <button type="submit" class="btn btn-primary">Add User</button>
                            <a href="{{ route('users.index') }}" class="btn btn-outline-secondary ml-2">Back</a>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
