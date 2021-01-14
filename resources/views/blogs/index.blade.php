@extends ('layouts.app')

@section ('body')
<input style="width:70%" type="text" id="myInput" onkeyup="searchInRows()" placeholder="Zoek op titel, datum, auteur, of categorie..">
    <br><br>
<table id="myTable" style="width:70%">
    <tr>
        <th>Titel</th>
        <th>Datum</th>
        <th>Auteur</th>
        <th>Categorieën</th>
    </tr>
    <?php foreach($blogItemsFromDatabase as $blog) { ?>
    <tr>
        <td><a href="{{ route('blogs.show', $blog->id) }}"><?php echo $blog->title; ?></a></td>
        <td><?php echo $blog->date; ?></td>
        <td><?php echo $blog->author; ?></td>
        <td><?php foreach( $blog->categories as $category){echo $category->name . ', ';} ?></td>
    </tr>
    <?php } ?>
</table>
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
