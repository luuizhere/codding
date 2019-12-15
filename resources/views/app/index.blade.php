<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <style>
        body{
            padding: 20px;
        }
        .navbar{
            margin-bottom: 5px;
        }
    </style>
    <title>CRUD - Codding</title>
</head>
<body>
    <div class="container">
                @component('componente_navbar',["current" => $current])
                @endcomponent
        <main role="main">
            @hasSection ('body')
                @yield('body')   
            @endif    
        </main>
    </div>
    <script src="https://ajax.aspnetcdn.com/ajax/jQuery/jquery-3.4.1.min.js"></script>

    @hasSection('javascript')
        @yield('javascript')
    @endif
</body>
</html>