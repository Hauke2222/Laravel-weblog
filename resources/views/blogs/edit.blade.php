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

<form action="{{ route('blogs.update', $blog->id) }}" method="POST">
    @csrf
    @method('PUT')
        <br>
        <label for="date">Datum:</label>
        <input type="date" id="date" name="date" value="{{ $blog->date }}">

        <label for="title">Titel:</label>
        <input type="text" id="title" name="title" value="{{ $blog->title }}">

        <label for="author">Auteur:</label>
        <input type="text" id="author" name="author" value="{{ $blog->author }}">

        <label for="premium_content_status">Premium:</label>
        <input type="checkbox" id="premium_content_status" name="premium_content_status"
        value="{{ $blog->premium_content_status }}"
        @if ($blog->premium_content_status) checked @endif>

        <br><br>

        <input id="page_content" value="{{ $blog->page_content }}" type="hidden" name="page_content">
        <trix-editor input="page_content"></trix-editor>

        <button type="submit" value="Submit">Submit</button>

    </form>
@endsection ('edit')
