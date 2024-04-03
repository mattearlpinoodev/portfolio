@extends('layouts.app')

@section('content')
    <meta charset="UTF-8">
    <title>Experiences</title>

    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" >
</head>
<body>

<div class="container mt-2">

<div class="row">
        <div class="col-lg-12 margin-tb">
            <div class="pull-left">
                <h2>Experience</h2>
            </div>
            <div class="pull-right mb-2">
            <a class="btn btn-success" href="{{ route('experiences.create') }}"> Create</a>
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

            <th>Work Experience</th>
            <th>Date Hired</th>
            <th>Address</th>
            <th>Description</th>
            <th width="280px">Action</th>
        </tr>
        @foreach ($experiences as $experience)
        <tr>
            <td>{{ $experience->id }}</td>
            <td>{{ $experience->work_experience }}</td>
            <td>{{ $experience->date_hired }}</td>
            <td>{{ $experience->address }}</td>
            <td>{{ $experience->description }}</td>

            <td>
                <form action="{{ route('experiences.destroy',$experience->id) }}" method="Post">
                <!-- <a class="btn btn-success" href="{{ route('experiences.create') }}"> Create</a> -->
                    <a class="btn btn-primary" href="{{ route('experiences.edit',$experience->id) }}">Update</a>
   
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