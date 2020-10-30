@extends ('layouts.app')

@section ('create')

@if ($errors->any())
    <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif

<form action="{{ route('blogs.store') }}" method="POST">
    @csrf
        <br>
        <label for="name">Product:</label>
        <input type="text" id="name" name="name" required>

        <label for="amount">Aantal:</label>
        <input type="number" id="amount" name="amount" required>

        <label for="price">Prijs:</label>
        <input type="number" id="price" name="price" required>

        <button type="submit" value="Submit">Submit</button>

    </form>
@endsection ('create')
