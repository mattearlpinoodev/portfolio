@extends('layouts.app')

@section('content')

    <meta charset="UTF-8">
    <title>Blogs</title>

    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" >
</head>
<body>

<div class="container mt-2">

<div class="row">
        <div class="col-lg-12 margin-tb">
            <div class="pull-left">
                <h2>Blogs</h2>
            </div>
            <div class="pull-right mb-2">
            <a class="btn btn-success" href="{{ route('blogs.create') }}"> Create</a>
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

            <th>Title</th>
            <th>Image</th>
            <th>Content</th>
            <th width="280px">Action</th>
        </tr>
        @foreach ($blogs as $blog)
        <tr>
        <td>{{ $loop->iteration }}</td>
            <td>{{ $blog->title }}</td>
            <td> @if($blog->image)
                        <img src="{{'storage/' . $blog->image}}" alt="" style="width: 50px; height:50px;">
                        @else
                        <img src="assets/img/ils.jpg" alt="" style="width: 50px; height:50px;">
                        @endif</td>
            <td>{{ $blog->content }}</td>
           
          <td>
             <form action="{{ route('blogs.destroy',$blog->id) }}" method="Post">
                   <!-- <a class="btn btn-success" href="{{ route('blogs.create') }}"> Create</a> -->
                    <a class="btn btn-primary" href="{{ route('blogs.edit',$blog->id) }}">Edit</a>


                   <!-- Delete Button -->
<button type="button" class="btn btn-danger" data-toggle="modal" data-target="#deleteModal{{ $blog->id }}">Delete</button>

<!-- Delete Modal -->
<div class="modal fade" id="deleteModal{{$blog->id}}" tabindex="-1" role="dialog" aria-labelledby="deleteModalLabel{{$blog->id}}" aria-hidden="true">
    <div class="modal-dialog modal-dialog-scrollable" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="deleteModalLabel{{$blog->id}}">Delete Confirmation</h5>
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
                <form id="deleteForm{{$blog->id}}" action="{{ route('blogs.destroy', $blog->id) }}" method="POST" style="display: inline;">
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