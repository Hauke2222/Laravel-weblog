@extends ('layouts.app')

@section ('create')

<form action="{{ route('blogs.store') }}" method="POST" enctype="multipart/form-data">
    @csrf
    <input type="hidden" name="user_id" value="{{ Auth::user()->id }}">

    <label for="date">Datum:</label>
    <input id="date" type="date" name="date">

    <label for="title">Titel:</label>
    <input id="title" type="text" name="title">

    <label for="author">Auteur:</label>
    <input id="author" type="text" name="author" value="{{ Auth::user()->name }}">

    <label for="premium_content_status">Premium</label>
    <input type="checkbox" name="premium_content_status">

    <label for="categories">Kies een categorie:</label>
    <select name="categories[]" id="categories" multiple>
        <?php foreach($blogCategoriesFromDatabase as $category) { ?>
        <option value="{{ $category->id }}">{{ $category->name }}</option>
        <?php } ?>
    </select>

    <label for="image"></label>
    <input type="file" name="image">

    <br><br>

    <input id="page_content" type="hidden" name="page_content">
    <trix-editor input="page_content"></trix-editor>
    <br>
    <input type="submit" class="button">


    </form>
@endsection ('create')
