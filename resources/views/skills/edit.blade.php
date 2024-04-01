<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Edit Company Form - Laravel 10 CRUD Tutorial</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
</head>
<body>

<div class="container mt-4">

    <div class="row">
        <div class="col-lg-12">
            <h2 class="float-left">Edit Company</h2>
            <a class="btn btn-primary float-right" href="{{ route('skills.index') }}"> Back</a>
        </div>
    </div>

    @if(session('status'))
    <div class="row">
        <div class="col-lg-12">
            <div class="alert alert-success" role="alert">
                {{ session('status') }}
            </div>
        </div>
    </div>
    @endif

    <form action="{{ route('skills.update', $skill->id) }}" method="POST" enctype="multipart/form-data">
        @csrf
        @method('PUT')

        <div class="row">
            <div class="col-md-6">
                <div class="form-group">
                    <label for="birthday">Skill Name:</label>
                    <input type="text" name="skill_name" value="{{ $skill->skill_name }}" class="form-control" placeholder="Skill Name">
                    @error('skill_name')
                    <div class="alert alert-danger mt-1">{{ $message }}</div>
                    @enderror
                </div>
            </div>
            <div class="col-md-6">
                <div class="form-group">
                    <label for="css">Percentage:</label>
                    <input type="number" name="percentage" value="{{ $skill->percentage }}" class="form-control" placeholder="percentage">
                    @error('percentage')
                    <div class="alert alert-danger mt-1">{{ $message }}</div>
                    @enderror
                </div>
            </div>
        </div>

        <!-- <div class="row">
            <div class="col-md-6">
                <div class="form-group">
                    <label for="degree">Javascript:</label>
                    <input type="number" name="javascript" value="{{ $skill->javascript }}" class="form-control" placeholder="Javascript">
                    @error('javascript')
                    <div class="alert alert-danger mt-1">{{ $message }}</div>
                    @enderror
                </div>
            </div>
            <div class="col-md-6">
                <div class="form-group">
                    <label for="city">PHP:</label>
                    <input type="number" name="php" value="{{ $skill->php }}" class="form-control" placeholder="PHP">
                    @error('php')
                    <div class="alert alert-danger mt-1">{{ $message }}</div>
                    @enderror
                </div>
            </div>
        </div> -->

        <!-- <div class="row">
            <div class="col-md-6">
                <div class="form-group">
                    <label for="age">Laraval:</label>
                    <input type="number" name="laravel" value="{{ $skill->laravel }}" class="form-control" placeholder="Laravel">
                    @error('laravel')
                    <div class="alert alert-danger mt-1">{{ $message }}</div>
                    @enderror
                </div>
            </div>
            <div class="col-md-6">
                <div class="form-group">
                    <label for="phone_number">Photoshop:</label>
                    <input type="number" name="photoshop" value="{{ $skill->photoshop }}" class="form-control" placeholder="Photoshop">
                    @error('phone_number')
                    <div class="alert alert-danger mt-1">{{ $message }}</div>
                    @enderror
                </div>
            </div>
        </div> -->



        <div class="row">
            <div class="col-md-12">
                <button type="submit" class="btn btn-primary ml-3">Submit</button>
            </div>
        </div>

    </form>
</div>

</body>
</html>