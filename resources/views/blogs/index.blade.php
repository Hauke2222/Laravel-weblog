@extends ('layouts.app')

@section ('body')
<table style="width:50%">
    <tr>
        <th>Titel</th>
        <th>Datum</th>
        <th>Auteur</th>
    </tr>
    <?php foreach($blogItemsFromDatabase as $blog) { ?>
    <tr>
        <td><a href="{{ route('blogs.show', $blog->id) }}"><?php echo $blog->title; ?></a></td>
        <td><?php echo $blog->date; ?></td>
        <td><?php echo $blog->author; ?></td>
    </tr>
    <?php } ?>
</table>

@endsection ('body')
