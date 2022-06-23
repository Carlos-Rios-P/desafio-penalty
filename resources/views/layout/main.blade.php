<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    <!--Import Google Icon Font-->
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">

    <!-- Compiled and minified CSS -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/css/materialize.min.css">

    <title>Penalty</title>
</head>
<body>

    {{-- Menu superior --}}
   <nav class="grey darken-4">
        <div class="container">
            <div class="nav-wrapper">
                <a href="#" class="brand-logo">Penalty</a>
                <ul class="right">
                    <li><a href="#">Representante</a></li>
                    <li><a href="#">Cliente</a></li>
                </ul>
            </div>
        </div>
   </nav>

    {{-- Coteúdo da página --}}

    <div class="container">
        @yield('conteudo-pagina')
    </div>

    <!-- Compiled and minified JavaScript -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/js/materialize.min.js"></script>

    <script>
        @if (session('sucesso'))
            M.toast({html: "{{session('sucesso')}}"});
        @endif

        document.addEventListener('DOMContentLoaded', function() {
            var elems = document.querySelectorAll('select');
            var instances = M.FormSelect.init(elems);
        });
    </script>

</body>
</html>