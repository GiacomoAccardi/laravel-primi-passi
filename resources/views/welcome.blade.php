<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>laravel</title>
</head>
<body>
    
    <header>
        <a href="{{ route('home') }}">Home</a>
        <a href="{{ route('info') }}">Info</a>
        <a href="{{ route('contacts') }}">Contact</a>
        <hr>
    </header>

    <h1>Hello world!</h1>
    <p>{{ $message }}</p>
</body>
</html>