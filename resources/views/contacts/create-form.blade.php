@extends ('layouts.app')

@section('title', 'NOS CONTACTS')

@section('title-page', 'Création Form Contacts')

@section('content')

  
        <form action="{{ route('contacts.store') }}" method="post">

            @csrf


            <label for="firstname"></label>
            <input type="text" name="firstname" placeholder="Prénom">



            <label for="lastname"></label>
            <input type="text" name="lastname" placeholder="Nom">



            <label for="phone"></label>
            <input type="text" name="phone" placeholder="Phone">



            <label for="email"></label>
            <input type="email" name="email" placeholder="Email">


            <input type="submit" value="Valider">

            @if ($errors->any())
                @foreach ($errors->all() as $error)
                    <p> {{ $error }} </p>
                @endforeach
            @endif

        </form>




    @endsection
