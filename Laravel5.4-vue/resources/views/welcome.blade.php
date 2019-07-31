<!doctype html>
<html lang="{{ app()->getLocale() }}">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Proyecto Laravel 5.2 y VueJS</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Raleway:100,600" rel="stylesheet" type="text/css">
        <!-- Styles -->
            <!-- Boostrap 3.3.7 -->
            <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css"
            integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">

    </head>
    <body>
        {{-- Contenido --}}
        <div id="main" class="container">
            {{-- Sitio web Random Users --}}
            <div class="row">
                <div class="col-12 text-center mb-4">
                    <h3>Miniproyecto con Axios | CursoVueJs2 | <a href="https://cursovuejs2.it/menu.html">Ir al Menú</a></h3>
                </div>
                <div class="col-sm-7">
                    <h1>Lista VueJs - Ajax con Axios</h1>
                    <ul class="list-group">
                    <li v-for="item in lists" class="list-group-item">
                        {{-- Para el sitio web Random Users --}}
                        {{-- {{ item.name.first }} {{ item.name.last }}  --}}
                        {{-- Para el sitio web jsonplaceholder --}}
                        {{-- @{{ item.name }} --}}
                        {{-- El array estático enviado desde la ruta users del archivo web.php no conoce la propiedad name, se le quita --}}
                        {{-- @{{ item }} --}}
                        {{-- datos recibidos de la Base de Datos que si tienenla propiedad name --}}
                        @{{ item.name }} <strong>@{{ item.email }}</strong>
                    </li>
                    </ul>
                </div>
                <div class="col-sm-5">
                    <h1>JSON</h1>
                    <pre>
                    @{{ $data }}
                    </pre>
                </div>
            </div>
        </div>
        <!-- fin-contenido -->

        {{-- Scripts --}}
        {{-- VueJs 2 --}}
        <script src="https://cdnjs.cloudflare.com/ajax/libs/vue/2.2.0/vue.js"></script>
        {{-- Axios --}}
        <script src="https://cdnjs.cloudflare.com/ajax/libs/axios/0.19.0/axios.min.js"></script>
        {{-- Script modificado (Se reemplazo lo que tenía el archivo app.js) --}}
        <script src="{{ asset('js/app.js') }}"></script>
    </body>
</html>
