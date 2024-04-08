
    <title>Edit Abouts</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <style>
       body {
            background-color: #f8f9fa; /* Light gray background color */
        }
    </style>
</head>
<body>

<div class="container mt-4">
    <div class="row justify-content-center">
        <div class="col-lg-6">
            <div class="card">
                <div class="card-header text-center">
                    <h2>Edit About</h2>
                </div>
                <div class="card-body">
                    @if(session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif
                    <form action="{{ route('abouts.update', $about->id) }}" method="POST" enctype="multipart/form-data">
                        @csrf
                        @method('PUT')

                        <div class="form-group">
                            <label for="description">Description:</label>
                            <input type="text" name="description" value="{{ $about->description }}" class="form-control" placeholder="Description">
                            @error('description')
                                <div class="alert alert-danger mt-1">{{ $message }}</div>
                            @enderror
                        </div>

                        <div class="form-group">
                            <label for="birthday">Birthday:</label>
                            <input type="text" name="birthday" value="{{ $about->birthday }}" class="form-control" placeholder="Birthday">
                            @error('birthday')
                                <div class="alert alert-danger mt-1">{{ $message }}</div>
                            @enderror
                        </div>
                        <div class="form-group">
                            <label for="religion">Religion:</label>
                            <input type="text" name="religion" value="{{ $about->religion }}" class="form-control" placeholder="Religion">
                            @error('religion')
                                <div class="alert alert-danger mt-1">{{ $message }}</div>
                            @enderror
                        </div>
                        <div class="form-group">
                            <label for="degree">Degree:</label>
                            <input type="text" name="degree" value="{{ $about->degree }}" class="form-control" placeholder="Degree">
                            @error('degree')
                                <div class="alert alert-danger mt-1">{{ $message }}</div>
                            @enderror
                        </div>
                        <div class="form-group">
                            <label for="city">City:</label>
                            <input type="text" name="city" value="{{ $about->city }}" class="form-control" placeholder="City">
                            @error('city')
                                <div class="alert alert-danger mt-1">{{ $message }}</div>
                            @enderror
                        </div>
                        <div class="form-group">
                            <label for="age">Age:</label>
                            <input type="number" name="age" value="{{ $about->age }}" class="form-control" placeholder="Age">
                            @error('age')
                                <div class="alert alert-danger mt-1">{{ $message }}</div>
                            @enderror
                        </div>
                        <div class="form-group">
                            <label for="phone_number">Phone Number:</label>
                            <input type="number" name="phone_number" value="{{ $about->phone_number }}" class="form-control" placeholder="Phone Number">
                            @error('phone_number')
                                <div class="alert alert-danger mt-1">{{ $message }}</div>
                            @enderror
                        </div>
                        <div class="form-group">
                            <label for="email">Email:</label>
                            <input type="email" name="email" value="{{ $about->email }}" class="form-control" placeholder="Email">
                            @error('email')
                                <div class="alert alert-danger mt-1">{{ $message }}</div>
                            @enderror
                        </div>
                        <div class="form-group">
                            <label for="gender">Gender:</label>
                            <input type="text" name="gender" value="{{ $about->gender }}" class="form-control" placeholder="Gender">
                            @error('gender')
                                <div class="alert alert-danger mt-1">{{ $message }}</div>
                            @enderror
                        </div>
                        <div class="text-center">
                            <button type="submit" class="btn btn-primary">Update</button>
                            <a class="btn btn-outline-danger ml-2" href="{{ route('abouts.index') }}">Back</a>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>

</body>
</html>
