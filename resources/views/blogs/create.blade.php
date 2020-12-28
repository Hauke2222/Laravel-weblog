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
    <label for="date">Datum:</label>
    <input id="date" type="date" name="date">

    <label for="title">Titel:</label>
    <input id="title" type="text" name="title">

    <label for="author">Auteur:</label>
    <input id="author" type="text" name="author">

    <label for="premium_content_status">Premium</label>
    <input type="checkbox" name="premium_content_status">

    <label for="categories">Kies een categorie:</label>
    <select name="categories[]" id="categories" multiple>
        <?php foreach($blogCategoriesFromDatabase as $category) { ?>
        <option value="{{ $category->id }}">{{ $category->name }}</option>
        <?php } ?>
    </select>

    <br><br>

    <input id="page_content" type="hidden" name="page_content">
    <trix-editor input="page_content"></trix-editor>
    <input type="submit">


    </form>
    <script src="{{ asset('js/trix.js') }}"></script>
    <script src="{{ asset('js/attachments.js') }}"></script>
@endsection ('create')
