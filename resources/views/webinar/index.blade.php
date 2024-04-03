@extends('layouts.app')

@section('content')
    <meta charset="UTF-8">
    <title>Webinar</title>

    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" >
</head>
<body>

<div class="container mt-2">

<div class="row">
        <div class="col-lg-12 margin-tb">
            <div class="pull-left">
                <h2>Webinar</h2>
            </div>
            <div class="pull-right mb-2">
            <!-- <a class="btn btn-success" href="{{ route('webinars.create') }}"> Create</a> -->
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

            <th>Certificate</th>
            <th>Agenda</th>
            <th>Host Name</th>
            <th>Date</th>
            <th width="280px">Action</th>
        </tr>
        @foreach ($webinars as $webinar)
        <tr>
            <td>{{ $webinar->id }}</td>
            <td>{{ $webinar->certificate }}</td>
            <td>{{ $webinar->agenda }}</td>
            <td>{{ $webinar->host_name }}</td>
            <td>{{ $webinar->date }}</td>
           

            <td>
                <form action="{{ route('webinars.destroy',$webinar->id) }}" method="Post">
                <a class="btn btn-success" href="{{ route('webinars.create') }}"> Create</a>
                    <a class="btn btn-primary" href="{{ route('webinars.edit',$webinar->id) }}">Update</a>
   
                    @csrf
                    @method('DELETE')
      
                    <button type="submit" class="btn btn-danger">Delete</button>
                </form>
            </td>
        </tr>
        @endforeach
    </table>


</body>
</html>
@endsection