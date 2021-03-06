@extends ('layouts.app')

@section ('body')
    <br><br>
<table id="myTable" style="width:70%">
    <tr>
        <th>Titel</th>
        <th>Datum</th>
        <th>Auteur</th>
        <th>Bewerk</th>
        <th>Verwijder</th>
    </tr>
    <?php foreach($blogItemsFromDatabase as $blog) { ?>
    <tr>
        <td><a href="{{ route('blogs.show', $blog->id) }}"><?php echo $blog->title; ?></a></td>
        <td><?php echo $blog->date; ?></td>
        <td><?php echo $blog->author; ?></td>
        <td><a href="{{ route('blogs.edit', $blog->id) }}"><button><span style='font-size:25px;'>&#9998;</span></button></a></td>
        <td>
            <form method="post" action="{{ route('blogs.destroy', $blog->id) }}">
                @method('DELETE')
                @csrf
                <button type="submit"><span style='font-size:25px;'>&#10007;</span></button>
            </form>
        </td>
    </tr>
    <?php } ?>
</table>

@endsection ('body')
