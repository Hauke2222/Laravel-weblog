@extends ('layouts.app')

@section ('payments')

<h1>Abonnement</h1>

<form action="{{ route('payments.store') }}" method="POST" enctype="multipart/form-data">
    @csrf
    <label for="name">Naam:</label>
    <input id="name" type="text" name="email" value="{{ Auth::user()->name }}">
    <br><br>
    <label for="email">E-mail:</label>
    <input id="email" type="text" name="email" value="{{ Auth::user()->email }}">
    <br><br>
    <label for="premium_content_status">Premium €2,- (per maand)</label>
    <input type="checkbox" name="premium_content_status">
    <br><br>
    <input type="submit" class="button">


    </form>

@endsection ('payments')
