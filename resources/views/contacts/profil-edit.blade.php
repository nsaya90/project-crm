@extends ('layouts.app')

@section('title', 'NOS CONTACTS')

@section('title-page', 'Profil individuel')

@section('content')

<p>Modifier votre profil par ID.</p>


<form action="{{route('contacts.update', [$profil_edit->id])}}" method="post">

    @csrf
    @method('PUT')

    <div>
    <label for="firstname"></label>
    <input type="text" name="firstname" placeholder="Prénom" value="{{$profil_edit->firstname}}">
    </div>
<br>
    <div>
    <label for="lastname"></label>
    <input type="text" name="lastname" placeholder="Nom" value="{{$profil_edit->lastname}}">
    </div>
<br>
    <div>
    <label for="phone"></label>
    <input type="text" name="phone" placeholder="Phone" value="{{$profil_edit->phone}}">
    </div>
<br>
    <div>
    <label for="email"></label>
    <input type="email" name="email" placeholder="Email" value="{{$profil_edit->email}}">
    </div>
<br>
    <input type="submit" value="Valider">


@endsection