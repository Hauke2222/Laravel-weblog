@extends ('layouts.app')

@section ('edit')

@if ($errors->any())
    <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif

userid: {{ $user->id }}
<form action="{{ route('users.update',  ['user' => $user->id]) }}" method="POST" enctype="multipart/form-data">
    @csrf
    @method('PUT')
        <br>
        <label for="name">Naam:</label>
        <input type="name" id="name" name="name" value="{{ $user->name }}">

        <label for="email">E-mail:</label>
        <input type="text" id="email" name="email" value="{{ $user->email }}">

        <label for="subscription_status">Abonnement:</label>
        <input type="checkbox" id="subscription_status" name="subscription_status"
        value="{{ $user->subscription_status }}"
        @if ($user->subscription_status) checked @endif>

        <button type="submit" value="Submit" class="button">Submit</button>

    </form>
@endsection ('edit')
