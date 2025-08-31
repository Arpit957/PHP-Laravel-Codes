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

            <x-input type="text" name="name" label="Please Enter your Name"/>
            <x-input type="email" name="email" label="Please Enter your Email"/>
            <x-input type="password" name="password" label="Please Enter your Password"/>
            <x-input type="password" name="password" label="Please Confirm your Password"/>

            <button type="submit" class="btn btn-primary">Submit</button>
        </form>
    </div>
</body>

</html>