<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    @vite('resources/css/app.css')

    {{-- npm i
    npm run dev --}}

    <title> @yield('title') </title>
</head>

<body>

    <header>
        <div class="box_lien">
            <a href="{{ route('home') }}">Acceuil</a>
            <a href="{{ route('contacts.create') }}">Créer fiche contact</a>
            <a href="{{ route('entreprises.create') }}">Créer fiche entreprises</a>
            <a href="{{ route('contacts.index') }}">Liste des contacts</a>
            <a href="{{ route('entreprises.index') }}">Liste des entreprises</a>
            <a href="{{ route('list_facture') }}">Liste des facture</a>
        </div>
    </header>

    <h1> @yield('title-page') </h1>

    <main>

        @yield('content')

    </main>

</body>

</html>
