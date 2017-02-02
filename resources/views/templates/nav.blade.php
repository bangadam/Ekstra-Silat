<!-- Navbar -->
<div class="navbar-fixed">
	<nav class="grey darken-2">
	<a href="#!" class="brand-logo">   Eskul silat</a>
			<div class="container">

			  <div class="nav-wrapper">
				
				<!-- activate side-bav in mobile view -->
				<a href="#" data-activates="mobile-demo" class="button-collapse"><i class="fa fa-bars"></i></a>
				<ul class="right hide-on-med-and-down">
					<li><a href="{{ route('daftar.pelatih')}}" class="animasi">Daftar Pelatih</a></li>
					<li><a href="{{ route('daftar.siswa')}}">Daftar siswa</a></li>
					<li><a href="{{ route('daftar.kegiatan')}}">Daftar Kegiatan</a></li>
					<li><a href="{{ url('user/absensi')}}">Daftar Absensi</a></li>
					<li><a href="{{ route('auth.login') }}" class="btn blue lighten-2">Login</a></li>
				</ul>
				<!-- navbar for mobile -->
				<ul class="side-nav" id="mobile-demo">
					<li><a href="{{ route('auth.login') }}" class="btn blue blue accent-2">Login</a></li>
				</ul>
			  </div>
			</div>
		</nav>
</div>