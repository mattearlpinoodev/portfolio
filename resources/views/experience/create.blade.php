<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Add Skill Form</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
</head>
<body>

<div class="container mt-4">
    <div class="row justify-content-center">
        <div class="col-lg-6">
            <div class="card">
                <div class="card-header text-center">
                    <h2>Add Experience</h2>
                </div>
                <div class="card-body">
                    @if(session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif
                    <form action="{{ route('experiences.store') }}" method="POST" enctype="multipart/form-data">
                        @csrf
                        <!-- <div class="form-group">
                            <label for="name">Name</label>
                            <input type="text" name="name" id="name" class="form-control" placeholder="Name">
                            @error('name')
                            <div class="alert alert-danger mt-1">{{ $message }}</div>
                            @enderror
                        </div> -->
                        <div class="form-group">
                            <label for="grade_level">Work Experience</label>
                            <input type="text" name="work_experience" id="work_experience" class="form-control" placeholder="Work Experience">
                            @error('work_experience')
                            <div class="alert alert-danger mt-1">{{ $message }}</div>
                            @enderror
                        </div>
                        <div class="form-group">
                            <label for="date_hired">Date Hired</label>
                            <input type="date" name="date_hired" id="date_hired" class="form-control" placeholder="Date Hired">
                            @error('date_hired')
                            <div class="alert alert-danger mt-1">{{ $message }}</div>
                            @enderror
                        </div>
                        <div class="form-group">
                            <label for="year_graduate">Address</label>
                            <input type="text" name="address" id="address" class="form-control" placeholder="Address">
                            @error('address')
                            <div class="alert alert-danger mt-1">{{ $message }}</div>
                            @enderror
                        </div>
                        <div class="form-group">Description</label>
                            <input type="text" name="description" id="description" class="form-control" placeholder="Description">
                            @error('description')
                            <div class="alert alert-danger mt-1">{{ $message }}</div>
                            @enderror
                        </div>

                        <div class="text-center">
                            <button type="submit" class="btn btn-primary">Add Experience</button>
                            <a class="btn btn-outline-danger ml-2" href="{{ route('experiences.index') }}">Back</a>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>

</body>
</html>
