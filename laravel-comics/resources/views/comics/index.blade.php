<!-- resources/views/comics/index.blade.php -->

<!DOCTYPE html>
<html>
<head>
    <title>DC Comics</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
    <link rel="stylesheet" href="{{ asset('css/styles.css') }}"> 
</head>
<body>

<!-- Includi l'header -->
@include('header')

<!-- Includi il main -->
@include('main')

<!-- Includi il footer -->
@include('footer')


</body>
</html>
