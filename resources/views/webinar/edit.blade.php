<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Edit Webinar</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
</head>
<body>

<div class="container mt-4">
    <div class="row justify-content-center">
        <div class="col-lg-6">
            <div class="card">
                <div class="card-header text-center">
                    <h2>Edit Webinar</h2>
                </div>
                <div class="card-body">
                    @if(session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif
                    <form action="{{ route('webinars.update', $webinar->id) }}" method="POST" enctype="multipart/form-data">
                        @csrf
                        @method('PUT')
                        
                        <div class="form-group">
                            <label for="certificate">Certificate:</label>
                            <input type="file" name="certificate" value="{{ $webinar->certificate }}" class="form-control" placeholder="Certificate">
                            @error('certificate')
                            <div class="alert alert-danger mt-1">{{ $message }}</div>
                            @enderror
                        </div>
                        <div class="form-group">
                            <label for="agenda">Agenda:</label>
                            <input type="agenda" name="agenda" value="{{ $webinar->agenda }}" class="form-control" placeholder="Agenda">
                            @error('agenda')
                            <div class="alert alert-danger mt-1">{{ $message }}</div>
                            @enderror
                        </div>
                        <div class="form-group">
                            <label for="host_name">Host Name:</label>
                            <input type="text" name="host_name" value="{{ $webinar->host_name }}" class="form-control" placeholder="Webinar">
                            @error('host_name')
                            <div class="alert alert-danger mt-1">{{ $message }}</div>
                            @enderror
                        </div>
                        <div class="form-group">
                            <label for="date">Date:</label>
                            <input type="date" name="date" value="{{ $webinar->date }}" class="form-control" placeholder="Date">
                            @error('date')
                            <div class="alert alert-danger mt-1">{{ $message }}</div>
                            @enderror
                        </div>

                        <div class="text-center">
                            <button type="submit" class="btn btn-primary">Update</button>
                            <a class="btn btn-outline-secondary ml-2" href="{{ route('experiences.index') }}">Back</a>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>

</body>
</html>
