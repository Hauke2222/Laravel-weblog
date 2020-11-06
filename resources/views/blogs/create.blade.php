@extends ('layouts.app')

<!-- Include stylesheet -->
<link href="https://cdn.quilljs.com/1.3.6/quill.snow.css" rel="stylesheet">

<!-- Include the Quill library -->
<script src="https://cdn.quilljs.com/1.3.6/quill.js"></script>

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

    <label for="title">Auteur:</label>
    <input id="author" type="text" name="author">

    <label for="premium">Premium</label>
    <input type="checkbox" name="premium_check_box" value="premium">

    <input name="page_content" type="hidden">
    <!-- Create the editor container -->

    <div id="editor"></div>
    <br>
    <script>
        var quill = new Quill('#editor', {
            theme: 'snow',
            placeholder: 'Schrijf hier uw blog...',
        });

        var form1 = document.querySelector('form');
        form1.onsubmit = function() {
        // Populate hidden form on submit
        var page_content = document.querySelector('input[name=page_content]');
        about.value = JSON.stringify(quill.getContents());

        console.log("Submitted", $(form1).serialize(), $(form1).serializeArray());

        // No back end to actually submit to!
        alert('Open the console to see the submit data!')
        return false;
        };
    </script>

    <button type="submit" value="Submit">Submit</button>

    </form>
@endsection ('create')
