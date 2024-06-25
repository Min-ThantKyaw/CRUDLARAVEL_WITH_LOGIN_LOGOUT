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
                <h2 class="btn btn-danger my-2">Edit Your Articles</h2>
                <form action="{{ route('update') }}" method="Post" class="form-control m-auto">
                    @csrf
                    <input type="hidden" name="articleId" value="{{ $articles['id'] }}">
                    <label for="" class="form-label my-2">Title</label>
                    @error('title')
                        <div class="alert alert-danger">This field is required.</div>
                    @enderror
                    <input type="text" name='title' value="{{ $articles['title'] }}"
                        class="form-control @error('title')
                        is-invalid
                    @enderror">
                    <label for="" class="form-label my-2">Description</label>
                    @error('description')
                        <div class="alert alert-danger">This field is required.</div>
                    @enderror
                    <input type="text" name='description' value="{{ $articles['description'] }}"
                        class="form-control @error('description')
                    is-invalid
                @enderror">
                    <button class="btn btn-success mt-2" type="submit">Update</button>
                    <a href="{{ route('homePage') }}" class="btn btn-success mt-2">Back</a>
                </form>
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
