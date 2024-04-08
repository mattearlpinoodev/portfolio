<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Add Educational Attainments</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
</head>
<body>

<div class="container mt-4">
    <div class="row justify-content-center">
        <div class="col-lg-6">
            <div class="card">
                <div class="card-header text-center">
                    <h2>Add Educational Attainment</h2>
                </div>
                <div class="card-body">
                    @if(session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif
                    <form action="{{ route('educational_attainments.store') }}" method="POST" enctype="multipart/form-data">
                        @csrf
                        <!-- <div class="form-group">
                            <label for="name">Name</label>
                            <input type="text" name="name" id="name" class="form-control" placeholder="Name">
                            @error('name')
                            <div class="alert alert-danger mt-1">{{ $message }}</div>
                            @enderror
                        </div> -->
                    
                        <div class="form-group">
                            <label for="grade_level">Description</label>
                            <input type="text" name="description" id="description" class="form-control" placeholder="Description">
                            @error('description')
                            <div class="alert alert-danger mt-1">{{ $message }}</div>
                            @enderror
                        </div>
                        <div class="form-group">
                            <label for="grade_level">Grade Level</label>
                            <input type="text" name="grade_level" id="grade_level" class="form-control" placeholder="Grade Level">
                            @error('grade_level')
                            <div class="alert alert-danger mt-1">{{ $message }}</div>
                            @enderror
                        </div>
                        <div class="form-group">
                            <label for="year_graduate">Year Graduate</label>
                            <input type="text" name="year_graduate" id="year_graduate" class="form-control" placeholder="Year Graduate">
                            @error('year_graduate')
                            <div class="alert alert-danger mt-1">{{ $message }}</div>
                            @enderror
                        </div>
                        <div class="form-group">Name of School</label>
                            <input type="text" name="name_school" id="name_school" class="form-control" placeholder="Name of School">
                            @error('name_school')
                            <div class="alert alert-danger mt-1">{{ $message }}</div>
                            @enderror
                        </div>

                        <div class="text-center">
                            <button type="submit" class="btn btn-primary">Add Educational Attainment</button>
                            <a class="btn btn-outline-danger ml-2" href="{{ route('educational_attainments.index') }}">Back</a>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>

</body>
</html>
