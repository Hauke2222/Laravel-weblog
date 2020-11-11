@extends ('layouts.app')

@section ('body')
<h1>{{ $blog->title }}</h1>
<h2>{{ $blog->date }}</h2>
<p>{{ $blog->page_content }}</p>
<h4>Author: {{ $blog->author }}</h4>

@endsection ('body')
