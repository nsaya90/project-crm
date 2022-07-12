@extends ('layouts.app')

@section('title', 'NOS CONTACTS')

@section('title-page', 'Profil individuel')

@section('content')

<p>Votre profil par ID.</p>


{{$profil->firstname}}
{{$profil->lastname}}
{{$profil->phone}}
{{$profil->email}}

@endsection