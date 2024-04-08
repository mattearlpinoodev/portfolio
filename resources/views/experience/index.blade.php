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
            @if(Auth::user()->role === 'admin')
            <a class="btn btn-success" href="{{ route('experiences.create') }}"> Create</a>
           @endif
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
            @if(Auth::user()->role === 'admin')
            <th width="280px">Action</th>
            @endif
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
                @if(Auth::user()->role === 'admin')
                    <a class="btn btn-primary" href="{{ route('experiences.edit',$experience->id) }}">Edit</a>
                @endif
                  <!-- Delete Button -->
                  @if(Auth::user()->role === 'admin')
<button type="button" class="btn btn-danger" data-toggle="modal" data-target="#deleteModal{{ $experience->id }}">Delete</button>
                    @endif
<!-- Delete Modal -->
<div class="modal fade" id="deleteModal{{$experience->id}}" tabindex="-1" role="dialog" aria-labelledby="deleteModalLabel{{$experience->id}}" aria-hidden="true">
    <div class="modal-dialog modal-dialog-scrollable" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="deleteModalLabel{{$experience->id}}">Delete Confirmation</h5>
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
                <!-- Delete Button (inside the form) -->
                <form id="deleteForm{{$experience->id}}" action="{{ route('experiences.destroy', $experience->id) }}" method="POST" style="display: inline;">
                    @csrf
                    @method('DELETE')
                    <button type="submit" class="btn btn-danger">Delete</button>
                </form>
            </div>
        </div>
    </div>
</div>




                    @csrf
                    @method('DELETE')
      

                </form>
            </td>
        </tr>
        @endforeach
    </table>


</body>
</html>
@endsection