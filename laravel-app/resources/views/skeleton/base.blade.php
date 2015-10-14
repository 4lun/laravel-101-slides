<!DOCTYPE html>
<html>
<head>
    <title>@yield('title', 'Laravel App')</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
</head>
<body>
    <header>
        <div class="container">
            <h1>Employees</h1>
        </div>
    </div>
    <div class="container">
        @yield('content')
    </div>
</body>
</html>
