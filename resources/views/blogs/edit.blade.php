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

<form action="{{ route('blogs.update', $blog->id) }}" method="POST">
    @csrf
    @method('PUT')
        <br>
        <label for="date">Datum:</label>
        <input type="date" id="name" name="name" value="{{ $blog->date }}" required>

        <label for="title">Titel:</label>
        <input type="text" id="title" name="title" value="{{ $blog->title }}" required>

        <label for="author">Auteur:</label>
        <input type="text" id="price" name="author" value="{{ $blog->author }}" required>

        <label for="premium_check_box">Premium:</label>
        <input type="checkbox" id="premium_check_box" name="premium_check_box" value="{{ $blog->premium_content_status }}" required>

        <input id="page_content" value="{{ $blog->page_content }}" type="hidden" name="page_content">
        <trix-editor input="page_content"></trix-editor>

        <button type="submit" value="Submit">Submit</button>

    </form>
@endsection ('create')
