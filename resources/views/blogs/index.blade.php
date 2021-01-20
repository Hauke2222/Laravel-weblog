@extends ('layouts.app')

@section ('body')
<br><br>

<div class="center">
    <input style="width:70%" type="text" id="myInput" onkeyup="searchInRows()" placeholder="Zoek op titel, datum, auteur, of categorie..">
</div>

<br><br>
<ul id="cardList">
<?php foreach($blogItemsFromDatabase as $blog) { ?>
<div class="center">
    <div class="card">
        <li>
        <a href="{{ route('blogs.show', $blog->id) }}">
            <div class="blog-card-img"><img src="{{Storage::url($blog->image)}}" class="blog-card-img"></div>
            <div class="blog-card-title"><?php echo $blog->title; ?></div>
            <div class="blog-card-author-date"><?php echo $blog->author . ' ' . $blog->date ; ?></div>
            <div class="blog-card-category">Categorie:<?php foreach( $blog->categories as $category){echo ' ' . $category->name . ', ';} ?></div>
        </a>
        </li>
    </div>
</div>
<br>
<?php } ?>
</ul>


    <script>
        function searchInRows() {
        let input = document.getElementById("myInput");
        let filter = input.value.toUpperCase();
        let ul = document.getElementById("cardList");
        let li = ul.getElementsByTagName("li");

        // Loop through all table rows, and hide those who do not match the search query
        for (i = 0; i < li.length; i++) {
            a = li[i].getElementsByTagName("a")[0];
            txtValue = a.textContent || a.innerText;
            if (txtValue.toUpperCase().indexOf(filter) > -1) {
                li[i].style.display = "";
            } else {
            li[i].style.display = "none";
        }
  }
    }
    </script>

@endsection ('body')
