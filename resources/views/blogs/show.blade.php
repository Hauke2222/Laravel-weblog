@extends ('layouts.app')

@section ('body')
<h1>{{ $blog->title }}</h1>
<h2>{{ $blog->date }}</h2>
<h4>Author: {{ $blog->author }}</h4>
<p>{{ $blog->page_content }}</p>
<br>
<form action="" method="POST">
    @csrf
    <input id="comments" type="hidden" name="comments">
    <trix-editor input="comments"></trix-editor>
    <input type="submit">

</form>

@endsection ('body')
