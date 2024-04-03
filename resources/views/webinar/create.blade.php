<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Add Webinar</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
</head>
<body>

<div class="container mt-4">
    <div class="row justify-content-center">
        <div class="col-lg-6">
            <div class="card">
                <div class="card-header text-center">
                    <h2>Add Webinar</h2>
                </div>
                <div class="card-body">
                    @if(session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif
                    <form action="{{ route('webinars.store') }}" method="POST" enctype="multipart/form-data">
                        @csrf
                    
                        <div class="form-group">
                            <label for="certificate">Certificate</label>
                            <input type="file" name="certificate" id="certificate" class="form-control" placeholder="Certificate">
                            @error('certificate')
                            <div class="alert alert-danger mt-1">{{ $message }}</div>
                            @enderror
                        </div>
                        <div class="form-group">
                            <label for="agenda">Agenda</label>
                            <input type="text" name="agenda" id="agenda" class="form-control" placeholder="Agenda">
                            @error('image')
                            <div class="alert alert-danger mt-1">{{ $message }}</div>
                            @enderror
                        </div>
                        <div class="form-group">
                            <label for="host_name">Host Name</label>
                            <input type="text" name="host_name" id="host_name" class="form-control" placeholder="Host Name">
                            @error('host_name')
                            <div class="alert alert-danger mt-1">{{ $message }}</div>
                            @enderror
                        </div>
                        <div class="form-group">
                            <label for="date">Date</label>
                            <input type="date" name="date" id="date" class="form-control" placeholder="Date">
                            @error('date')
                            <div class="alert alert-danger mt-1">{{ $message }}</div>
                            @enderror
                        </div>

                        <div class="text-center">
                            <button type="submit" class="btn btn-primary">Add Blogs</button>
                            <a class="btn btn-outline-danger ml-2" href="{{ route('webinars.index') }}">Back</a>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>

</body>
</html>
