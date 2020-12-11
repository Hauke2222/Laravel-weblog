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

@endsection ('body')
