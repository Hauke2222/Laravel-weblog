@extends ('layouts.app')

@section ('body')
<input style="width:70%" type="text" id="myInput" onkeyup="searchInRows()" placeholder="Zoek op titel, datum, auteur, of categorie..">
    <br><br>
    <h4>Blog Artikelen</h4>
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

<h4>Gebruikers</h4>
<table id="myTable" style="width:70%">
    <tr>
        <th>Naam</th>
        <th>e-mail</th>
        <th>Abonnement</th>
        <th>Bewerk</th>
        <th>Verwijder</th>
    </tr>
    <?php foreach($usersFromDatabase as $user) { ?>
    <tr>
        <td><?php echo $user->name; ?></td>
        <td><?php echo $user->email; ?></td>
        <td><?php echo $user->subscription_status; ?></td>
        <td><a href="{{ route('users.update', $user->id) }}"><button><span style='font-size:25px;'>&#9998;</span></button></a></td>
        <td>
            <form method="post" action="{{ route('users.destroy', $user->id) }}">
                @method('DELETE')
                @csrf
                <button type="submit"><span style='font-size:25px;'>&#10007;</span></button>
            </form>
        </td>
    </tr>
    <?php } ?>
</table>

@endsection ('body')
