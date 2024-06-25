<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    {{-- CDN Bootstrap --}}
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <title>Login</title>
</head>

<body>
    <div class="container m-auto my-5">
        <div class="row">
            <div class="offset-3 col-5">
                <form action="{{ route('login') }}" method="POST" class="form-control">
                    @csrf
                    <h4 class="text-center">Login</h4>
                    @if (session('message'))
                        <div class="alert alert-warning alert-dismissible fade show" role="alert">
                            <strong>{{ session('message') }}</strong>
                            <button type="button" class="btn-close" data-bs-dismiss="alert"
                                aria-label="Close"></button>
                        </div>
                    @endif
                    Email:<input type="email" name="email" class="form-control" placeholder="Enter emial">
                    Password:<input type="password" name="password" class="form-control" placeholder="Enter Password">
                    <button class="btn btn-success form-control my-2">Login</button>
                    <a href="{{ route('registerPage') }}" class=" text-decoration-none btn btn-danger form-control"><b
                            class=" text-success">Don't have an
                            account?</b>Register</a>
                </form>
            </div>
        </div>
    </div>
</body>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous">
</script>

</html>
