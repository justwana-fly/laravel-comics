<!-- resources/views/comics/index.blade.php -->

<!DOCTYPE html>
<html>
<head>
    <title>DC Comics</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
    <link rel="stylesheet" href="{{ asset('css/styles.css') }}"> 
</head>
<body>
    <!-- Header -->
    <header class="bg-dark text-white text-center py-4">
        <h1>DC Comics Collection</h1>
    </header>

    <!-- Main Content -->
    <main class="container my-4">
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
    </main>

    <!-- Footer -->
    <footer class="bg-dark text-white text-center py-4">
        <p>&copy; 2024 DC Comics. All rights reserved.</p>
    </footer>
</body>
</html>
