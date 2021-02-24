@extends ('layouts.app')

@section ('body')

    <h1>{{ $blog->title }}</h1>
    <h2>{{ $blog->date }}</h2>
    <h4>Author: {{ $blog->author }}</h4>
    <img src="{{Storage::url($blog->image)}}" class="responsive-img">
    <p>{{ $blog->page_content }}</p>
    <br>
    <h4>Commentaar:</h4>
    <?php foreach($blog->comments as $comment) { ?>
    <p><?php echo $comment->comment; ?></p>
    <br>
    <?php } ?>
    <h4>Scrijf hier uw commentaar:</h4>
    <form action="{{ route('comment.store') }}" method="POST">
        @csrf
        <input type="hidden" name="blog_item_id" value="{{$blog->id}}">
        <input id="comment" type="hidden" name="comment">
        <trix-editor input="comment"></trix-editor>
        <br>
        <input type="submit" class="button">

    </form>



@endsection ('body')
