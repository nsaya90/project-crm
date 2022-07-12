@extends ('layouts.app')

@section('title', 'NOS COMPANIES')

@section('title-page', 'Listes des Companies')

@section('content')

<ul>
    @foreach ($entreprises as $info)
        <li>Nom entreprise : {{ $info->name }}</li>
        <li>Status : {{ $info->status }}</li>
        <li>Tel : {{ $info->phone }}</li>
        <li>Email : {{ $info->email }}</li>

        <a href="{{ route('contacts.show', [$info->id]) }}">Détail</a>
        <a href="{{ route('contacts.edit', [$info->id]) }}">Editer</a>
        <form action="{{ route('contacts.destroy', [$info->id]) }}" method="post">
            @csrf
            @method('DELETE')
            <input type="submit" value="Supprimer" />
        </form>
    @endforeach
</ul>

@endsection