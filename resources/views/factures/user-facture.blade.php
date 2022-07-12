@extends ('layouts.app')

@section('title', 'Liste Facture')

@section('title-page', 'Factures')

@section('content')

    <h2>Liste des companies</h2>
    <ul>
        @foreach ($list_companie as $info)
            <li>Nom : {{ $info->name }}</li>
            <li>Status : {{ $info->status }}</li>
            <li>N°SIREN : {{ $info->siren }}</li>
            <li>Email : {{ $info->email }}</li>
            <li>Telephone : {{ $info->phone }}</li>
            <a href="{{ route('factures.edit', [$info->id]) }}">Editer une facture</a>
        @endforeach
    </ul>

    <h2>Liste des contacts</h2>
    <ul>
        @foreach ($list_contact as $info)
            <li>Prénom : {{ $info->firstname }}</li>
            <li>Nom : {{ $info->lastname }}</li>
            <li>Email : {{ $info->email }}</li>
            <li>Telephone : {{ $info->phone }}</li>
            <a href="{{ route('factures.edit', [$info->id]) }}">Editer une facture</a>
        @endforeach
    </ul>

    <h2>Liste des factures</h2>

    <ul>

        @foreach ($list as $elem)
            <li>Nom de la facture : {{ $elem->titre }}</li>
            <li>Prix HT : {{ $elem->prixHT }}</li>
            <li>TVA : {{ $elem->tva }}</li>
            <li>Date de facturation : {{ $elem->date }}</li>
            <li>Numero de facture : {{ $elem->numero_facture }}</li>
            <li>Prix TTC : {{ $elem->prixttc }}</li>
        @endforeach

    </ul>
@endsection
