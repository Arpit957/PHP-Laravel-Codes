<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Bootstrap Form</title>
    <!-- Bootstrap CSS CDN -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
</head>

<body>

    <div class="container mt-5">
        <h2 class="text-center">Registration</h2>
        <!-- it means base url is appended with /register -->
        <form action="{{ url('/') }}/register" method="POST">
            @csrf



            <!-- <div class="form-group mb-3">
        <label for="name" class="form-label">Name</label>
        <input type="text" class="form-control" id="name" name="name" placeholder="Enter your name" value="{{ old('name') }}">
        <span class="text-danger">
            @error('name')
                {{ $message }}
            @enderror
    </div> -->

            <!-- <div class="mb-3">
        <label for="email" class="form-label">Email address</label>
        <input type="email" class="form-control" id="email" name="email" placeholder="Enter your email">
        <span class="text-danger">
            @error('email')
                {{ $message }}
            @enderror
    </div>
    <div class="mb-3">
        <label for="password" class="form-label">Password</label>
        <input type="password" class="form-control" id="password" name="password" placeholder="Enter your password">
        <span class="text-danger">
            @error('password')
                {{ $message }}
            @enderror
    </div>
    <div class="mb-3">
    <label for="password_confirmation" class="form-label">Confirm Password</label>
    <input type="password" class="form-control" id="password_confirmation" name="password_confirmation" placeholder="Confirm your password">
    <span class="text-danger">
        @error('password_confirmation')
            {{ $message }}
        @enderror
    </span> -->



            <button type="submit" class="btn btn-primary">Submit</button>
        </form>
    </div>
</body>

</html>