@extends ('layouts.app')

@section('title', 'Liste Facture')

@section('title-page', 'Factures')

@section('content')

    <h2>Liste des factures</h2>
    @foreach ($list as $elem)
        <ul>
            <li> Nom de le facture : {{ $elem->titre }}</li>
            <li> Prix : {{ $elem->prixHT }}</li>
            <li> TVA : {{ $elem->tva }}</li>
            <li> PrixTTC : {{ $elem->prixttc }}</li>
            <li> Date : {{ $elem->date }}</li>
            <li> Bon de facture : {{ $elem->numero_facture }}</li>
        </ul>
    @endforeach

@endsection
