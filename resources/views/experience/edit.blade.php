<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Edit Skill</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
</head>
<body>

<div class="container mt-4">
    <div class="row justify-content-center">
        <div class="col-lg-6">
            <div class="card">
                <div class="card-header text-center">
                    <h2>Edit Experience</h2>
                </div>
                <div class="card-body">
                    @if(session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif
                    <form action="{{ route('experiences.update', $experience->id) }}" method="POST" enctype="multipart/form-data">
                        @csrf
                        @method('PUT')
                        
                        <div class="form-group">
                            <label for="description">Work Experience:</label>
                            <input type="text" name="work_experience" value="{{ $experience->work_experience }}" class="form-control" placeholder="Description">
                            @error('work_experience')
                            <div class="alert alert-danger mt-1">{{ $message }}</div>
                            @enderror
                        </div>
                        <!-- <div class="form-group">
                            <label for="description">Description:</label>
                            <input type="description" name="description" value="{{ $experience->description }}" class="form-control" placeholder="Description">
                            @error('description')
                            <div class="alert alert-danger mt-1">{{ $message }}</div>
                            @enderror
                        </div> -->
                        <div class="form-group">
                            <label for="date_hired">Date Hired:</label>
                            <input type="text-number" name="date_hired" value="{{ $experience->date_hired }}" class="form-control" placeholder="Date Hired">
                            @error('date_hired')
                            <div class="alert alert-danger mt-1">{{ $message }}</div>
                            @enderror
                        </div>
                        <div class="form-group">
                            <label for="address">Address:</label>
                            <input type="text" name="address" value="{{ $experience->address }}" class="form-control" placeholder="Address">
                            @error('address')
                            <div class="alert alert-danger mt-1">{{ $message }}</div>
                            @enderror
                        </div>
                        <div class="form-group">
                            <label for="description">Description:</label>
                            <input type="text" name="description" value="{{ $experience->description }}" class="form-control" placeholder="Name of School">
                            @error('description')
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
