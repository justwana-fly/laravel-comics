<!-- resources/views/comics/index.blade.php -->

<!DOCTYPE html>
<html>
<head>
    <title>DC Comics</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
</head>
<body>
    <div class="container">
        <h1 class="my-4">DC Comics</h1>
        <div class="row">
            @foreach ($comics as $comic)
                <div class="col-lg-4 col-md-6 mb-4">
                    <div class="card h-100">
                        <img class="card-img-top" src="{{ $comic['thumb'] }}" alt="{{ $comic['title'] }}">
                        <div class="card-body">
                            <h4 class="card-title">{{ $comic['title'] }}</h4>
                            <p class="card-text">{{ $comic['description'] }}</p>
                            <p class="card-text"><strong>Price:</strong> {{ $comic['price'] }}</p>
                            <p class="card-text"><strong>Series:</strong> {{ $comic['series'] }}</p>
                            <p class="card-text"><strong>Sale Date:</strong> {{ $comic['sale_date'] }}</p>
                            <p class="card-text"><strong>Type:</strong> {{ $comic['type'] }}</p>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
</body>
</html>
