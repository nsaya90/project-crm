@extends ('layouts.app')

@section('title', 'NOS COMPANIES')

@section('title-page', 'Création Formulaire Companies')

@section('content')

    <form action="{{ route('entreprises.store') }}" method="post">

        @csrf

        <div>
            <label for="name"></label>
            <input type="text" name="name" placeholder="Nom de la companie">
        </div>
        
        <div>
            <label for="status"></label>
            <input type="text" name="status" placeholder="Status de l'entreprise">
        </div>
        
        <div>
            <label for="siren"></label>
            <input type="text" name="siren" placeholder="Numéro de siren">
        </div>
        
        <div>
            <label for="phone"></label>
            <input type="number" name="phone" placeholder="Phone">
        </div>
        
        <div>
            <label for="email"></label>
            <input type="email" name="email" placeholder="Email">
        </div>

        
        <input type="submit" value="Valider">

        @if ($errors->any())
            @foreach ($errors->all() as $error)
                <p> {{ $error }} </p>
            @endforeach
        @endif

    </form>

@endsection
