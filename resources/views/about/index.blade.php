@extends('layouts.app')

@section('content')

<div class="container mt-2">

    <div class="row">
        <div class="col-lg-12 margin-tb">
            <div class="pull-left">
                <h2>About Table</h2>
            </div>
            <div class="pull-right mb-2">
                <!-- <a class="btn btn-success" href="{{ route('abouts.create') }}"> Create About Yourself</a> -->
            </div>
        </div>
    </div>

    @if ($message = Session::get('success'))
        <div class="alert alert-success">
            <p>{{ $message }}</p>
        </div>
    @endif

    <table class="table table-bordered custom-table">
        <tr>
            <th>#</th>
            <th>Description</th>
            <th>Birthday</th>
            <th>Religion</th>
            <th>Degree</th>
            <th>City</th>
            <th>Age</th>
            <th>Phone Number</th>
            <th>Email</th>
            <th>Gender</th>
            <th>Action</th>
        </tr>
        @foreach ($abouts as $about)
        <tr>
            <td>{{ $about->id }}</td>
            <td>{{ $about->description }}</td>
            <td>{{ $about->birthday }}</td>
            <td>{{ $about->religion }}</td>
            <td>{{ $about->degree }}</td>
            <td>{{ $about->city }}</td>
            <td>{{ $about->age }}</td>
            <td>{{ $about->phone_number }}</td>
            <td>{{ $about->email }}</td>
            <td>{{ $about->gender }}</td>
            <td>
                <form action="{{ route('abouts.destroy',$about->id) }}" method="Post">

                    <a class="btn btn-primary" href="{{ route('abouts.edit',$about->id) }}">Edit</a>

                    @csrf
                    @method('DELETE')

                    <!-- <button type="submit" class="btn btn-danger">Delete</button> -->
                </form>
            </td>
        </tr>
        @endforeach
    </table>


</body>
</html>
@endsection