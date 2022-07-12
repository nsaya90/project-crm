@extends ('layouts.app')

@section('title', 'NOS CONTACTS')

@section('title-page', 'Création Form Contacts')

@section('content')


    <form class="login-form" action="{{ route('contacts.store') }}" method="post">

        @csrf

        <div class="login-form">
            <label for="firstname"></label>
            <input type="text" name="firstname" placeholder="Prénom">
        </div>


        <div class="login-form">
            <label for="lastname"></label>
            <input type="text" name="lastname" placeholder="Nom">
        </div>


        <div class="login-form">
            <label for="phone"></label>
            <input type="text" name="phone" placeholder="Phone">
        </div>


        <div class="login-form">
            <label for="email"></label>
            <input type="email" name="email" placeholder="Email">
        </div>

        <div class="btn btn-primary btn-ghost">
            <input type="submit" value="Valider">
        </div>

        @if ($errors->any())
            @foreach ($errors->all() as $error)
                <p> {{ $error }} </p>
            @endforeach
        @endif

    </form>



@endsection
