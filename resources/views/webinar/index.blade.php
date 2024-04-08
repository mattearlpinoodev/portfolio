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
            @if(Auth::user()->role === 'admin')
            <a class="btn btn-success" href="{{ route('webinars.create') }}"> Create</a>
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

            <th>Certificate</th>
            <th>Agenda</th>
            <th>Host Name</th>
            <th>Date</th>
            @if(Auth::user()->role === 'admin')
            <th width="280px">Action</th>
            @endif
        </tr>
        @foreach ($webinars as $webinar)
        <tr>
            <td>{{ $webinar->id }}</td>
            <td> @if($webinar->certificate)
                        <img src="{{'storage/' . $webinar->certificate}}" alt="" style="width: 50px; height:50px;">
                        @else
                        <img src="assets/img/ils.jpg" alt="" style="width: 50px; height:50px;">
                        @endif</td>
            
            <td>{{ $webinar->agenda }}</td>
            <td>{{ $webinar->host_name }}</td>
            <td>{{ $webinar->date }}</td>
           

            <td>
                <form action="{{ route('webinars.destroy',$webinar->id) }}" method="Post">
                @if(Auth::user()->role === 'admin')
                <!-- <a class="btn btn-success" href="{{ route('webinars.create') }}"> Create</a> -->
                    <a class="btn btn-primary" href="{{ route('webinars.edit',$webinar->id) }}">Edit</a>
                @endif

                                  <!-- Delete Button -->
              @if(Auth::user()->role === 'admin')
<button type="button" class="btn btn-danger" data-toggle="modal" data-target="#deleteModal{{ $webinar->id }}">Delete</button>
                @endif
<!-- Delete Modal -->
<div class="modal fade" id="deleteModal{{$webinar->id}}" tabindex="-1" role="dialog" aria-labelledby="deleteModalLabel{{$webinar->id}}" aria-hidden="true">
    <div class="modal-dialog modal-dialog-scrollable" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="deleteModalLabel{{$webinar->id}}">Delete Confirmation</h5>
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
                <form id="deleteForm{{$webinar->id}}" action="{{ route('webinars.destroy', $webinar->id) }}" method="POST" style="display: inline;">
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