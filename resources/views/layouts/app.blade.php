<!DOCTYPE html>
<html lang="en">
<head>
    <link rel="stylesheet" href="/css/style.css">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Laravel weblog - @yield('title')</title>
    @trixassets
</head>
<body>
    <nav>
        <ul>
            <li><a href="/blogs">Blog Lijst</a></li>
            <li><a href="{{ route('blogs.create') }}">Blog Schrijfen</a></li>
            <li><a href="{{ route('admins.index') }}">Admin Overzicht</a></li>
            <li><a href="{{ route('writers.index') }}">Schrijvers Overzicht</a></li>

            @guest
            @if (Route::has('login'))
                <li class="nav-item">
                    <a class="nav-link" href="{{ route('login') }}">{{ __('Login') }}</a>
                </li>
            @endif

            @if (Route::has('register'))
                <li class="nav-item">
                    <a class="nav-link" href="{{ route('register') }}">{{ __('Register') }}</a>
                </li>
            @endif
            @else
                <li class="nav-item dropdown">
                    <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                    {{ Auth::user()->name }}
                    </a>
                        <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                            <a class="dropdown-item" href="{{ route('logout') }}"
                                onclick="event.preventDefault();
                                document.getElementById('logout-form').submit();">
                                {{ __('Logout') }}
                            </a>
                                <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                @csrf
                                </form>
                                    </div>
                                </li>
                                @endguest
        </ul>
    </nav>
    <br>
    @yield('body')
    @yield('create')
    @yield('edit')
    @yield('content')
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
</body>
</html>
