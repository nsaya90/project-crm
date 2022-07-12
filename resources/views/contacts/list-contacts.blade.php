@extends ('layouts.app')

@section('title', 'NOS CONTACTS')

@section('title-page', 'Liste Contacts')

@section('content')

    <ul>
        @foreach ($infos as $info)
            <li>Prénom : {{ $info->firstname }}</li>
            <li>Nom : {{ $info->lastname }}</li>
            <li>Tel : {{ $info->phone }}</li>
            <li>Email : {{ $info->email }}</li>

            <a href="{{ route('contacts.show', [$info->id]) }}">Détail</a>
            <a href="{{ route('contacts.edit', [$info->id]) }}">Editer</a>
            <form action="{{ route('contacts.destroy', [$info->id]) }}" method="post">
                @csrf
                @method('DELETE')
                <input type="submit" value="Supprimer" />
            </form>

            <a href="{{ route('form_facture', [$info->id]) }}">Editer une facture</a>
        @endforeach
    </ul>

@endsection
