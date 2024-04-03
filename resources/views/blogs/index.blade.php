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
            <td>{{ $blog->id }}</td>
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
                    <a class="btn btn-primary" href="{{ route('blogs.edit',$blog->id) }}">Update</a>
   
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