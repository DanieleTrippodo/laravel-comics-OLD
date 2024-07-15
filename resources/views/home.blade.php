<!-- resources/views/home.blade.php -->

<!DOCTYPE html>
<html lang="it">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Comics - Home</title>
    <link href="{{ mix('scss/main.scss') }}" rel="stylesheet">
</head>



<body>
    @include('header')

    <h1>Benvenuto nel mio progetto Laravel</h1>
    <p>Questa è la mia prima pagina HTML con Laravel 10 e Bootstrap.</p>

    @include('footer', ['infoItems' => $infoItems, 'footerSections' => $footerSections])

    <script src="{{ mix('js/app.js') }}"></script>
</body>
</html>
