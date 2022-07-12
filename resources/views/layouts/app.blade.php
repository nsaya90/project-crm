<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css"
        integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>

    @vite('resources/css/app.css')

    {{-- npm i
    npm run dev --}}

    <title> @yield('title') </title>
</head>

<body>

    <header>
        <a href="{{ route('contacts.index') }}">Accueil</a>
        <a href="{{ route('contacts.create') }}">Créer contact</a>
        <a href="{{ route('entreprises.create') }}">Créer contact companie</a>
        <a href="{{ route('entreprises.index') }}">List des conctacts companie</a>
        {{-- <a href="{{ route('factures.create') }}">Facturation</a> --}}
    </header>

    <h1> @yield('title-page') </h1>

    <main>

        @yield('content')

    </main>

</body>

</html>
