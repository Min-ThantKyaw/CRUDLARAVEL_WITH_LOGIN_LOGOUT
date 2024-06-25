<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    {{-- CDN Bootstrap --}}
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <title>Register</title>
</head>

<body>
    <div class="container m-auto my-5">
        <div class="row">
            <div class="offset-3 col-5">
                <form action="{{ route('createUser') }}" method="get" class="form-control">
                    @csrf
                    <h4 class="text-center">Register</h4>
                    Name:<input type="text" name="name" class="form-control" placeholder="Enter name">
                    Email:<input type="email" name="email" class="form-control" placeholder="Enter emial">
                    Password:<input type="password" name="password" class="form-control" placeholder="Enter Password">
                    {{-- Confirm Password:<input type="password" name="password_confirmation" class="form-control"
                        placeholder="Confirm Password"> --}}
                    <button class="btn btn-success form-control my-2" type="submit">Register</button>
                    <a href="{{ route('loginPage') }}" class=" text-decoration-none btn btn-danger form-control"><b
                            class=" text-success">Do you have an
                            account?</b>Login</a>
                </form>
            </div>
        </div>
    </div>
</body>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous">
</script>

</html>
