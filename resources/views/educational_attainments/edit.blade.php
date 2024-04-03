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
                    <h2>Edit Educational Attainment</h2>
                </div>
                <div class="card-body">
                    @if(session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif
                    <form action="{{ route('educational_attainments.update', $educational_attainment->id) }}" method="POST" enctype="multipart/form-data">
                        @csrf
                        @method('PUT')
                        <!-- <div class="form-group">
                            <label for="name">Name:</label>
                            <input type="text" name="name" value="{{ $educational_attainment->name }}" class="form-control" placeholder="Name">
                            @error('name')
                            <div class="alert alert-danger mt-1">{{ $message }}</div>
                            @enderror
                        </div> -->
                        <div class="form-group">
                            <label for="description">Description:</label>
                            <input type="description" name="description" value="{{ $educational_attainment->description }}" class="form-control" placeholder="Description">
                            @error('description')
                            <div class="alert alert-danger mt-1">{{ $message }}</div>
                            @enderror
                        </div>
                        <!-- <div class="form-group">
                            <label for="description">Description:</label>
                            <input type="description" name="description" value="{{ $educational_attainment->description }}" class="form-control" placeholder="Description">
                            @error('description')
                            <div class="alert alert-danger mt-1">{{ $message }}</div>
                            @enderror
                        </div> -->
                        <div class="form-group">
                            <label for="grade_level">Grade Level:</label>
                            <input type="text-number" name="grade_level" value="{{ $educational_attainment->grade_level }}" class="form-control" placeholder="Year Level">
                            @error('description')
                            <div class="alert alert-danger mt-1">{{ $message }}</div>
                            @enderror
                        </div>
                        <div class="form-group">
                            <label for="year_graduate">Year Graduate:</label>
                            <input type="text" name="year_graduate" value="{{ $educational_attainment->year_graduate }}" class="form-control" placeholder="Year Graduate">
                            @error('year_graduate')
                            <div class="alert alert-danger mt-1">{{ $message }}</div>
                            @enderror
                        </div>
                        <div class="form-group">
                            <label for="name_school">Name of School:</label>
                            <input type="text" name="name_school" value="{{ $educational_attainment->name_school }}" class="form-control" placeholder="Name of School">
                            @error('name_school')
                            <div class="alert alert-danger mt-1">{{ $message }}</div>
                            @enderror
                        </div>

                        <div class="text-center">
                            <button type="submit" class="btn btn-primary">Update</button>
                            <a class="btn btn-outline-secondary ml-2" href="{{ route('skills.index') }}">Back</a>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>

</body>
</html>
