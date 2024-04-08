@extends('layouts.app')

@section('content')
    <meta charset="UTF-8">
    <title>Educational Attainment</title>

    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" >
</head>
<body>

<div class="container mt-2">

<div class="row">
        <div class="col-lg-12 margin-tb">
            <div class="pull-left">
                <h2>Educational Attainment</h2>
            </div>
            <div class="pull-right mb-2">
            <a class="btn btn-success" href="{{ route('educational_attainments.create') }}"> Create</a>
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

            <th>Description</th>
            <th>Grade Level</th>
            <th>Year Graduate</th>
            <th>Name of School</th>
            <th width="280px">Action</th>
        </tr>
        @foreach ($educational_attainments as $educational_attainment)
        <tr>
            <td>{{ $educational_attainment->id }}</td>
            <td>{{ $educational_attainment->description }}</td>
            <td>{{ $educational_attainment->grade_level }}</td>
            <td>{{ $educational_attainment->year_graduate }}</td>
            <td>{{ $educational_attainment->name_school }}</td>

            <td>
                <form action="{{ route('educational_attainments.destroy',$educational_attainment->id) }}" method="Post">
                <!-- <a class="btn btn-success" href="{{ route('educational_attainments.create') }}"> Create</a> -->
                    <a class="btn btn-primary" href="{{ route('educational_attainments.edit',$educational_attainment->id) }}">Edit</a>
   
         <!-- Delete Button -->
<button type="button" class="btn btn-danger" data-toggle="modal" data-target="#deleteModal{{ $educational_attainment->id }}">Delete</button>

<!-- Delete Modal -->
<div class="modal fade" id="deleteModal{{$educational_attainment->id}}" tabindex="-1" role="dialog" aria-labelledby="deleteModalLabel{{$educational_attainment->id}}" aria-hidden="true">
    <div class="modal-dialog modal-dialog-scrollable" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="deleteModalLabel{{$educational_attainment->id}}">Delete Confirmation</h5>
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
                <form id="deleteForm{{$educational_attainment->id}}" action="{{ route('educational_attainments.destroy', $educational_attainment->id) }}" method="POST" style="display: inline;">
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