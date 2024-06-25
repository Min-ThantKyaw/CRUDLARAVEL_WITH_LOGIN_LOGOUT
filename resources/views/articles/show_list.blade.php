<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    {{-- CDN Bootstrap --}}
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <title>Home</title>
</head>

<body>
    <div class="container">
        <div class="row">
            <div class="offset-2 col-8 bg-light my-5">
                <div class=" d-flex justify-content-around my-3">
                    <a href="{{ route('createPage') }}" class="btn btn-dark">Add Article</a>
                    <form action="{{ route('logout') }}" method="post">
                        @csrf
                        <button class="btn btn-danger" type="submit">Logout</button>

                    </form>
                    <button class="btn btn-info disabled">Total-{{ $datas->total() }}</button>
                </div>
                @foreach ($datas as $articles)
                    <h3 class="form-control-plaintext">{{ $articles->title }}</h3>
                    <p class="form-control-plaintext">{{ $articles->description }}</p>
                    <a href="{{ route('editPage', $articles['id']) }}" class="btn btn-success">Edit</a>
                    <a href="{{ route('delete', $articles['id']) }}" class="btn btn-danger">Delete</a>
                @endforeach
                <div>
                    {{ $datas->links() }}

                </div>
            </div>

        </div>
    </div>
    {{-- <form action="{{ route('logout') }}" method="POST">
        @csrf
        <button type="submit">Logout</button>
    </form> --}}
</body>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous">
</script>

</html>
