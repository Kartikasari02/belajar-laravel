<h1>APP-MIMAKE| @yield('title')</h1>
<nav>
    <ul>
        {{-- http://localhost:8000/home --}}
        <li><a href="{{ url('home') }}">Home</a></li>
        <li><a href="{{ url('about') }}">About</a></li>
<<<<<<< HEAD
        <li><a href="{{ url('eskul') }}">Eskul</a></li>
        <li><a href="{{ url('prestasi') }}">Prestasi</a></li>
        <li><a href="{{ url('pesertadidik') }}">Pesertadidik</a></li>
=======
        <li><a href="{{ url('barang') }}">Barang</a></li>
        <li><a href="{{ url('konsumen') }}">konsumen</a></li>
>>>>>>> b3ef6f7d11a59f23ce42b0cb3e021ef4715dbf10
    </ul>
</nav>
<hr />
<div>
    @yield('content')
</div>