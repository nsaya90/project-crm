@extends ('layouts.app')

@section('title', 'FACTURATION')

@section('title-page', 'Création Formulaire Factures')

@section('content')


    <form action="{{ route('post_factureClient') }}" method="POST">
        @csrf


        <input type="number"  name="id_contact" value="{{ $id_facture }}">

        <label for="titre">Titre</label>
        <input type="text" name="titre">

        <label for="price_ht">Prix HT</label>
        <input type="number" name="price_ht" id="price_ht" min="1" placeholder="Prix HT">

        <label for="tva">TVA</label>
        <select name="tva">

            <option></option>
            <option type="float" name="option_1" value="5.5">5,5%</option>
            <option type="float" name="option_2" value="10">10%</option>
            <option type="float" name="option_3" value="20">20%</option>
        </select>

        <label for="date">Date de Facture</label>
        <input type="date" name="date">


        <input type="submit" value="Valider">
    </form>

    @if ($errors->any())
        @foreach ($errors->all() as $error)
            <p> {{ $error }} </p>
        @endforeach
    @endif

    </form>
@endsection
