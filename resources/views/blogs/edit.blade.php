
@extends ('layouts.app')

@section ('edit')

<form action="{{ route('blogs.update', $blog->id) }}" method="POST" enctype="multipart/form-data">
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

        <label for="categories">Kies een categorie:</label>
        <select name="categories[]" id="categories" multiple>
            @foreach($blogCategoriesFromDatabase as $category)
            <!--<option value="{{ $category->id }}">{{ $category->name }} </option> -->
            @php ($blog->categories->contains($category->id)) ? $selected = 'selected' : $selected = '' @endphp
            <option value="{{ $category->id }}" {{$selected}}>{{ $category->name }}</option>
            }
            @endforeach

        </select>
        <?php foreach( $selectedCategories as $selectedCategory){echo $selectedCategory->name . ', ';} ?>

        <label for="image"></label>
        <input type="file" name="image">

        <br><br>

        <input id="page_content" value="{{ $blog->page_content }}" type="hidden" name="page_content">
        <trix-editor input="page_content"></trix-editor>
        <br>
        <button type="submit" value="Submit" class="button">Submit</button>

    </form>
@endsection ('edit')
