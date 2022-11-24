<h1>APP-MIMAKE| @yield('title')</h1>
<nav>
    <ul>
        {{-- http://localhost:8000/home --}}
        <li><a href="{{ url('home') }}">Home</a></li>
        <li><a href="{{ url('about') }}">About</a></li>
        <li><a href="{{ url('eskul') }}">Eskul</a></li>
        <li><a href="{{ url('prestasi') }}">Prestasi</a></li>
        <li><a href="{{ url('pesertadidik') }}">Pesertadidik</a></li>
    </ul>
</nav>
<hr />
<div>
    @yield('content')
</div>