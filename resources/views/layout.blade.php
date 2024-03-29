<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Animes Control</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <script src="https://kit.fontawesome.com/dccdc6df75.js" crossorigin="anonymous"></script>
</head>
<body>
    <nav class="navbar navbar-expand-lg navbar-light bg-light mb-2 d-flex justify-content-between">
        <a class="navbar-brand" href="{{ route('listAnimes') }}">Home</a>
        @auth
        <a href="/sair" class="text-danger">Logout</a>
        @endauth

        @guest
        <a href="/entrar" class="text-danger">Sign In</a>
        @endguest
    </nav>

    <div class="container">
        <div class="mt-4 p-5 bg-danger text-white rounded mb-4">
            <h1 class="d-flex justify-content-center align-itens-center">@yield('title')</h1>
        </div>

        @yield('content')
    </div>
</body>
</html>