@extends ('layouts.app')

@section ('body')
<br><br>

<div class="center">
    <input style="width:70%" type="text" id="myInput" onkeyup="searchInRows()" placeholder="Zoek op titel, datum, auteur, of categorie..">
</div>

<br><br>
<?php foreach($blogItemsFromDatabase as $blog) { ?>
<div class="center">
    <div class="card">
        <a href="{{ route('blogs.show', $blog->id) }}">
            <div class="blog-card-img"><img src="{{Storage::url($blog->image)}}" class="blog-card-img"></div>
            <div class="blog-card-title"><?php echo $blog->title; ?></div>
            <div class="blog-card-author-date"><?php echo $blog->author . ' ' . $blog->date ; ?></div>
            <div class="blog-card-category">Categorie:<?php foreach( $blog->categories as $category){echo ' ' . $category->name . ', ';} ?></div>
        </a>
    </div>
</div>
<br>
<?php } ?>


    <script>
        function searchInRows() {
        let input = document.getElementById("myInput");
        let filter = input.value.toUpperCase();
        let table = document.getElementById("myTable");
        let tr = table.getElementsByTagName("tr");

        // Loop through all table rows, and hide those who do not match the search query
        for (let i = 1; i < tr.length; i++) {
            let td = tr[i];
            if (td) {
                let txtValue = td.textContent || td.innerText;
                if (txtValue.toUpperCase().indexOf(filter) > -1) {
                    tr[i].style.display = "";
                } else {
                    tr[i].style.display = "none";
                }
            }
        }
    }
    </script>

@endsection ('body')
