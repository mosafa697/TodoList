<!DOCTYPE html>
<html>
    <head>
        <meta charset = "utf-8">
        <title>TodoList</title>
        <link rel = "stylesheet" href = "/css/app.css">
    </head>
    <body>
    @include('inc.navbar')
        <div class = "container">
        <br>
        @include('inc.messages')

            @yield('content')
        </div>
        <footer id = "footer" class = "text-center">
            <p>Copyright &copy; 2019 TODOLIST</p>
        </footer>
    </body>
</html>