@extends ('layouts.app')

@section ('body')

@if ($errors->any())
    <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif

<h1>{{ $blog->title }}</h1>
<h2>{{ $blog->date }}</h2>
<h4>Author: {{ $blog->author }}</h4>
<p>{{ $blog->page_content }}</p>
<br>
<h4>Scrijf hier uw commentaar:</h4>
<form action="{{ route('comment.store') }}" method="POST">
    @csrf
    <input type="hidden" name="blog_id" value="{{$blog->id}}">
    <input id="comment" type="hidden" name="comment">
    <trix-editor input="comment"></trix-editor>
    <input type="submit">

</form>

@endsection ('body')
