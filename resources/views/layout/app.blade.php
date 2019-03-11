<!DOCTYPE html>
    <html>

    <head>
        <link href="{{ asset('css/app.css') }}" rel="stylesheet">
        <title>Cadastro de Produtos</title>
        <meta name="csrf-token" content="{{ csrf_token() }}">
    </head>

    <body>
        <div class="container">
            <main role="main">
                @hasSection('body')
                    @yield('body')
                @endif
            </main>
        </div>

        <script src="{{ asset('js/app.js') }}" type="text/javascript"></script>
    </body>

    </html> 