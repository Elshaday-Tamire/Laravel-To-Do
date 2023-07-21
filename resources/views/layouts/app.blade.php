<!-- resources/views/layouts/app.blade.php -->

<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>{{ config('app.name', 'Laravel') }}</title>
</head>
<body>
    <div id="app">
        <nav>
            <!-- Add your navigation links here, if needed -->
        </nav>
        
        <main>
            @yield('content')
        </main>
    </div>
</body>
</html>
