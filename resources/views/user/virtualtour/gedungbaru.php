<!DOCTYPE html>
<html lang="en">

<head>
	<title>Gedung Baru FMIPA</title>
	<!--projectdescription-->
	<meta name="description" content="">
	<!--projectdescription-end-->
	<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
	<meta charset="utf-8">
	<meta name="viewport"
		content="initial-scale=1, maximum-scale=1, user-scalable=no, width=device-width, shrink-to-fit=no">

	<link rel="stylesheet" type="text/css" href="/gbrvirtualtour/css/font-awesome.css">
	<link rel="stylesheet" type="text/css" href="/gbrvirtualtour/styles.css">
	<link href="https://cdn.datatables.net/1.10.20/css/dataTables.bootstrap4.min.css" rel="stylesheet"
		crossorigin="anonymous" />

	<!-- Insert this line above script imports  -->
	<script>if (typeof module === 'object') { window.module = module; module = undefined; }</script>

	<script src="/gbrvirtualtour/imagedata.js"></script>
	<script src="/gbrvirtualtour/jquery.js"></script>
	<script src="/gbrvirtualtour/three.min.js"></script>
	<script src="/gbrvirtualtour/panolens.min.js"></script>

	<!-- Insert this line after script imports -->
	<script>if (window.module) module = window.module;</script>

	<style>
		/* SCROLLBAR STYLING */
		/* width */
		::-webkit-scrollbar {
			width: 0.25em;
			height: 0.25em;
		}

		/* Track */
		::-webkit-scrollbar-track {
			background: #2c3643;
		}

		/* Handle */
		::-webkit-scrollbar-thumb {
			background: #0d9e59;
			transition: background .5s;
		}

		/* Handle on hover */
		::-webkit-scrollbar-thumb:hover {
			background: #00e075;
		}


		html,
		body {
			margin: 0;
			width: 100%;
			height: 100%;
			overflow: hidden;
			background-color: white;
			color: white;
		}

		a:link,
		a:visited {
			color: #bdc3c7;
		}

		.fullwrapper {
			position: fixed;
			top: 0;
			left: 0;
			right: 0;
			bottom: 0;
			background-color: white;
		}

		#container {
			width: 100%;
			height: 100%;
		}

		#tmp {
			position: fixed;
			top: 0;
			left: 0;
			right: 0;
			bottom: 0;
			background-color: rgba(0, 0, 0, .5);
			backdrop-filter: blur(5px);
			display: none;
		}
	</style>
</head>

<body>
	<div id="wrapper">
		<div class="nav sidebar-nav">
			<button href="#menu-toggle" id="menu-toggle" class="btn btn-primary shadow-inset ml-8 mt-2"><i
					class="fa fa-bars" style="font-size:20px !Important;" aria-hidden="true" aria-hidden="true"></i>
			</button>
			<div id="sidebar-wrapper">

				<ul class="sidebar-nav" style="margin-left:0;">
					<li class="sidebar-brand">
						<a class="navbar-brand text-gray" href=""><img
								src="/gbrvirtualtour/imgs/Lambang_Universitas_Tanjungpura.png" width="Logo"> FMIPA 360</a>
					</li>

					<table class="table table-borderless" id="dataTable" cellspacing="0">
						<thead>
							<tr>
								<th></th>
							</tr>
						</thead>
						<tbody>
							<tr>
								<td><button type="button" id="lt1-1" class="btn btn-primary btn-block mb-2"
										tabindex="0">R. CS wanita</button></td>
							</tr>
							<tr>
								<td><button type="button" id="lt1-2" class="btn btn-primary btn-block mb-2"
										tabindex="0">Smart area, WC</button></td>
							</tr>
							<tr>
								<td><button type="button" id="lt1-3" class="btn btn-primary btn-block mb-2"
										tabindex="0">H 1.2, H 1.1</button></td>
							</tr>
							<tr>
								<td><button type="button" id="lt1-4" class="btn btn-primary btn-block mb-2"
										tabindex="0">H1.4</button></td>
							</tr>
							<tr>
								<td><button type="button" id="lt1-5" class="btn btn-primary btn-block mb-2"
										tabindex="0">Teller akademik</button></td>
							</tr>
							<tr>
								<td><button type="button" id="lt1-6" class="btn btn-primary btn-block mb-2"
										tabindex="0">R. umum dan perlengkapan</button></td>
							</tr>
							<tr>
								<td><button type="button" id="lt1-7" class="btn btn-primary btn-block mb-2"
										tabindex="0">R. kepegawaian</button></td>
							</tr>
							<tr>
								<td><button type="button" id="lt1-8" class="btn btn-primary btn-block mb-2"
										tabindex="0">R. tamu</button></td>
							</tr>
							<tr>
								<td><button type="button" id="lt1-9" class="btn btn-primary btn-block mb-2"
										tabindex="0">R. baca</button></td>
							</tr>
							<tr>
								<td><button type="button" id="tugu" class="btn btn-primary btn-block mb-2"
										tabindex="0">Tugu f. mipa untan</button></td>
							</tr>



							<tr>
								<td><button type="button" id="lt2-1" class="btn btn-primary btn-block mb-2"
										tabindex="0">R. TIK</button></td>
							</tr>
							<tr>
								<td><button type="button" id="lt2-2" class="btn btn-primary btn-block mb-2"
										tabindex="0">Smart area pria</button></td>
							</tr>
							<tr>
								<td><button type="button" id="lt2-3" class="btn btn-primary btn-block mb-2"
										tabindex="0">H 2.2, H 2.4</button></td>
							</tr>
							<tr>
								<td><button type="button" id="lt2-4" class="btn btn-primary btn-block mb-2"
										tabindex="0">R. dosen kimia</button></td>
							</tr>
							<tr>
								<td><button type="button" id="lt2-5" class="btn btn-primary btn-block mb-2"
										tabindex="0">R. dosen sistem informasi, H 2.3, H 2.6, H 2.8</button></td>
							</tr>
							<tr>
								<td><button type="button" id="lt2-6.7" class="btn btn-primary btn-block mb-2"
										tabindex="0">H 2.10, R. jurusan matematika</button></td>
							</tr>
							<tr>
								<td><button type="button" id="lt2-8" class="btn btn-primary btn-block mb-2"
										tabindex="0">R. Dra. Harlia, M.Si</button></td>
							</tr>
							<tr>
								<td><button type="button" id="lt2-9" class="btn btn-primary btn-block mb-2"
										tabindex="0">Mushola pria</button></td>
							</tr>
							<tr>
								<td><button type="button" id="lt2-10" class="btn btn-primary btn-block mb-2"
										tabindex="0">R. keuangan</button></td>
							</tr>
							<tr>
								<td><button type="button" id="lt2-11" class="btn btn-primary btn-block mb-2"
										tabindex="0">R. senat</button></td>
							</tr>
							<tr>
								<td><button type="button" id="lt2-12" class="btn btn-primary btn-block mb-2"
										tabindex="0">R. dekan, R. dosen matematika, R. dosen ilmu kelautan</button></td>
							</tr>
							<tr>
								<td><button type="button" id="lt2-13" class="btn btn-primary btn-block mb-2"
										tabindex="0">R. wakil dekan</button></td>
							</tr>
							<tr>
								<td><button type="button" id="lt2-14" class="btn btn-primary btn-block mb-2"
										tabindex="0">R. Jurusan Fisika</button></td>
							</tr>
							<tr>
								<td><button type="button" id="lt2-15" class="btn btn-primary btn-block mb-2"
										tabindex="0">R. Prof. Dr. Thamrin Usman, DEA</button></td>
							</tr>


							<tr>
								<td><button type="button" id="lt3-1" class="btn btn-primary btn-block mb-2"
										tabindex="0">R. CIC</button></td>
							</tr>
							<tr>
								<td><button type="button" id="lt3-2" class="btn btn-primary btn-block mb-2"
										tabindex="0">Smart area wanita</button></td>
							</tr>
							<tr>
								<td><button type="button" id="lt3-3" class="btn btn-primary btn-block mb-2"
										tabindex="0">H 3.1</button></td>
							</tr>
							<tr>
								<td><button type="button" id="lt3-4" class="btn btn-primary btn-block mb-2"
										tabindex="0">H 3.2, H 3.4</button></td>
							</tr>
							<tr>
								<td><button type="button" id="lt3-5" class="btn btn-primary btn-block mb-2"
										tabindex="0">H 3.1, H 3.3</button></td>
							</tr>
							<tr>
								<td><button type="button" id="lt3-6" class="btn btn-primary btn-block mb-2"
										tabindex="0">R. sidang, H 3.6</button></td>
							</tr>
							<tr>
								<td><button type="button" id="lt3-7" class="btn btn-primary btn-block mb-2"
										tabindex="0">R. laboratorium sisiem informasi, R. dosen statistik</button></td>
							</tr>
							<tr>
								<td><button type="button" id="lt3-9" class="btn btn-primary btn-block mb-2"
										tabindex="0">Mushola wanita</button></td>
							</tr>
							<tr>
								<td><button type="button" id="lt3-10" class="btn btn-primary btn-block mb-2"
										tabindex="0">H 3.7</button></td>
							</tr>
							<tr>
								<td><button type="button" id="lt3-11" class="btn btn-primary btn-block mb-2"
										tabindex="0">R. laboratorium pemetaan dan pemodelan ilmu kelauan</button></td>
							</tr>
							<tr>
								<td><button type="button" id="lt3-12" class="btn btn-primary btn-block mb-2"
										tabindex="0">R. laboratorium komputasi fisika, H 3.10</button></td>
							</tr>
							<tr>
								<td><button type="button" id="lt3-13" class="btn btn-primary btn-block mb-2"
										tabindex="0">R. kontrol, R. komputer B</button></td>
							</tr>
							<tr>
								<td><button type="button" id="lt3-14" class="btn btn-primary btn-block mb-2"
										tabindex="0">R. komputer A</button></td>
							</tr>
							<tr>
								<td><button type="button" id="lt3-15" class="btn btn-primary btn-block mb-2"
										tabindex="0">H 3.9</button></td>
							</tr>
						</tbody>
					</table>

				</ul>
			</div>
		</div>
		<script>
			$("#menu-toggle").click(function (e) {
				e.preventDefault();
				$("#wrapper").toggleClass("toggled");
			});
		</script>
		<script src="https://cdn.datatables.net/1.10.20/js/jquery.dataTables.min.js" crossorigin="anonymous"></script>
		<script src="https://cdn.datatables.net/1.10.20/js/dataTables.bootstrap4.min.js"
			crossorigin="anonymous"></script>
		<script src="/gbrvirtualtour/datatable.js"></script>
	</div>
</body>

<body id="body">
	<div id="container" style="color: black;"></div>
	<!--customhtml-->
	<div class='customhotspot' id='gbkananhight'></div>
	<div class='customhotspot' id='h'>
		<div onclick='chclickinfospoth4();' id='infospoth4' style='position: fixed; top: 0; left: 0; cursor: pointer;'>
			<img src='/gbrvirtualtour/customhotspots/infospot.png' style='width: 64px; height: 64px;'>
		</div>
	</div>
	<div class='customhotspot' id='i'>
		<div onclick='chclickinfospoti1();' id='infospoti1' style='position: fixed; top: 0; left: 0; cursor: pointer;'>
			<img src='/gbrvirtualtour/customhotspots/infospot.png' style='width: 64px; height: 64px;'>
		</div>
	</div>
	<div class='customhotspot' id='g'>
		<div onclick='chclickinfospotg2();' id='infospotg2' style='position: fixed; top: 0; left: 0; cursor: pointer;'>
			<img src='/gbrvirtualtour/customhotspots/infospot.png' style='width: 64px; height: 64px;'>
		</div>
	</div>
	<div class='customhotspot' id='f'>
		<div onclick='chclickinfospotf2();' id='infospotf2' style='position: fixed; top: 0; left: 0; cursor: pointer;'>
			<img src='/gbrvirtualtour/customhotspots/infospot.png' style='width: 64px; height: 64px;'>
		</div>
		<div onclick='chclickinfospotf3();' id='infospotf3' style='position: fixed; top: 0; left: 0; cursor: pointer;'>
			<img src='/gbrvirtualtour/customhotspots/infospot.png' style='width: 64px; height: 64px;'>
		</div>
	</div>
	<div class='customhotspot' id='e'>
		<div onclick='chclickinfospote2();' id='infospote2' style='position: fixed; top: 0; left: 0; cursor: pointer;'>
			<img src='/gbrvirtualtour/customhotspots/infospot.png' style='width: 64px; height: 64px;'>
		</div>
	</div>
	<div class='customhotspot' id='d'>
		<div onclick='chclickinfospotd2();' id='infospotd2' style='position: fixed; top: 0; left: 0; cursor: pointer;'>
			<img src='/gbrvirtualtour/customhotspots/infospot.png' style='width: 64px; height: 64px;'>
		</div>
	</div>
	<div class='customhotspot' id='c'>
		<div onclick='chclickinfospotc2();' id='infospotc2' style='position: fixed; top: 0; left: 0; cursor: pointer;'>
			<img src='/gbrvirtualtour/customhotspots/infospot.png' style='width: 64px; height: 64px;'>
		</div>
		<div onclick='chclickinfospotc3();' id='infospotc3' style='position: fixed; top: 0; left: 0; cursor: pointer;'>
			<img src='/gbrvirtualtour/customhotspots/infospot.png' style='width: 64px; height: 64px;'>
		</div>
	</div>
	<div class='customhotspot' id='b'>
		<div onclick='chclickinfospotb2();' id='infospotb2' style='position: fixed; top: 0; left: 0; cursor: pointer;'>
			<img src='/gbrvirtualtour/customhotspots/infospot.png' style='width: 64px; height: 64px;'>
		</div>
	</div>
	<div class='customhotspot' id='a'>
		<div onclick='chclickinfospota2();' id='infospota2' style='position: fixed; top: 0; left: 0; cursor: pointer;'>
			<img src='/gbrvirtualtour/customhotspots/infospot.png' style='width: 64px; height: 64px;'>
		</div>
	</div>
	<div class='customhotspot' id='gbkirihight'></div>
	<div class='customhotspot' id='tuguhight'></div>
	<div class='customhotspot' id='tanggakiriA'></div>
	<div class='customhotspot' id='aa'>
		<div onclick='chclickinfospotaa2();' id='infospotaa2'
			style='position: fixed; top: 0; left: 0; cursor: pointer;'><img src='/gbrvirtualtour/customhotspots/infospot.png'
				style='width: 64px; height: 64px;'></div>
	</div>
	<div class='customhotspot' id='bb'>
		<div onclick='chclickinfospotbb2();' id='infospotbb2'
			style='position: fixed; top: 0; left: 0; cursor: pointer;'><img src='/gbrvirtualtour/customhotspots/infospot.png'
				style='width: 64px; height: 64px;'></div>
		<div onclick='chclickinfospotbb3();' id='infospotbb3'
			style='position: fixed; top: 0; left: 0; cursor: pointer;'><img src='/gbrvirtualtour/customhotspots/infospot.png'
				style='width: 64px; height: 64px;'></div>
	</div>
	<div class='customhotspot' id='cc'>
		<div onclick='chclickinfospotcc2();' id='infospotcc2'
			style='position: fixed; top: 0; left: 0; cursor: pointer;'><img src='/gbrvirtualtour/customhotspots/infospot.png'
				style='width: 64px; height: 64px;'></div>
		<div onclick='chclickinfospotcc3();' id='infospotcc3'
			style='position: fixed; top: 0; left: 0; cursor: pointer;'><img src='/gbrvirtualtour/customhotspots/infospot.png'
				style='width: 64px; height: 64px;'></div>
	</div>
	<div class='customhotspot' id='dd'>
		<div onclick='chclickinfospotdd2();' id='infospotdd2'
			style='position: fixed; top: 0; left: 0; cursor: pointer;'><img src='/gbrvirtualtour/customhotspots/infospot.png'
				style='width: 64px; height: 64px;'></div>
	</div>
	<div class='customhotspot' id='ee'>
		<div onclick='chclickinfospotee2();' id='infospotee2'
			style='position: fixed; top: 0; left: 0; cursor: pointer;'><img src='/gbrvirtualtour/customhotspots/infospot.png'
				style='width: 64px; height: 64px;'></div>
		<div onclick='chclickinfospotee3();' id='infospotee3'
			style='position: fixed; top: 0; left: 0; cursor: pointer;'><img src='/gbrvirtualtour/customhotspots/infospot.png'
				style='width: 64px; height: 64px;'></div>
		<div onclick='chclickinfospotee4();' id='infospotee4'
			style='position: fixed; top: 0; left: 0; cursor: pointer;'><img src='/gbrvirtualtour/customhotspots/infospot.png'
				style='width: 64px; height: 64px;'></div>
		<div onclick='chclickinfospotee5();' id='infospotee5'
			style='position: fixed; top: 0; left: 0; cursor: pointer;'><img src='/gbrvirtualtour/customhotspots/infospot.png'
				style='width: 64px; height: 64px;'></div>
	</div>
	<div class='customhotspot' id='fg'>
		<div onclick='chclickinfospotfg2();' id='infospotfg2'
			style='position: fixed; top: 0; left: 0; cursor: pointer;'><img src='/gbrvirtualtour/customhotspots/infospot.png'
				style='width: 64px; height: 64px;'></div>
		<div onclick='chclickinfospotfg3();' id='infospotfg3'
			style='position: fixed; top: 0; left: 0; cursor: pointer;'><img src='/gbrvirtualtour/customhotspots/infospot.png'
				style='width: 64px; height: 64px;'></div>
	</div>
	<div class='customhotspot' id='hh'>
		<div onclick='chclickinfospothh2();' id='infospothh2'
			style='position: fixed; top: 0; left: 0; cursor: pointer;'><img src='/gbrvirtualtour/customhotspots/infospot.png'
				style='width: 64px; height: 64px;'></div>
	</div>
	<div class='customhotspot' id='ii'>
		<div onclick='chclickinfospotii2();' id='infospotii2'
			style='position: fixed; top: 0; left: 0; cursor: pointer;'><img src='/gbrvirtualtour/customhotspots/infospot.png'
				style='width: 64px; height: 64px;'></div>
		<div onclick='chclickinfospotii3();' id='infospotii3'
			style='position: fixed; top: 0; left: 0; cursor: pointer;'><img src='/gbrvirtualtour/customhotspots/infospot.png'
				style='width: 64px; height: 64px;'></div>
	</div>
	<div class='customhotspot' id='jj'>
		<div onclick='chclickinfospotjj2();' id='infospotjj2'
			style='position: fixed; top: 0; left: 0; cursor: pointer;'><img src='/gbrvirtualtour/customhotspots/infospot.png'
				style='width: 64px; height: 64px;'></div>
	</div>
	<div class='customhotspot' id='kk'>
		<div onclick='chclickinfospotkk2();' id='infospotkk2'
			style='position: fixed; top: 0; left: 0; cursor: pointer;'><img src='/gbrvirtualtour/customhotspots/infospot.png'
				style='width: 64px; height: 64px;'></div>
	</div>
	<div class='customhotspot' id='ll'>
		<div onclick='chclickinfospotll2();' id='infospotll2'
			style='position: fixed; top: 0; left: 0; cursor: pointer;'><img src='/gbrvirtualtour/customhotspots/infospot.png'
				style='width: 64px; height: 64px;'></div>
		<div onclick='chclickinfospotll3();' id='infospotll3'
			style='position: fixed; top: 0; left: 0; cursor: pointer;'><img src='/gbrvirtualtour/customhotspots/infospot.png'
				style='width: 64px; height: 64px;'></div>
		<div onclick='chclickinfospotll4();' id='infospotll4'
			style='position: fixed; top: 0; left: 0; cursor: pointer;'><img src='/gbrvirtualtour/customhotspots/infospot.png'
				style='width: 64px; height: 64px;'></div>
	</div>
	<div class='customhotspot' id='mm'>
		<div onclick='chclickinfospotmm2();' id='infospotmm2'
			style='position: fixed; top: 0; left: 0; cursor: pointer;'><img src='/gbrvirtualtour/customhotspots/infospot.png'
				style='width: 64px; height: 64px;'></div>
	</div>
	<div class='customhotspot' id='nn'>
		<div onclick='chclickinfospotnn2();' id='infospotnn2'
			style='position: fixed; top: 0; left: 0; cursor: pointer;'><img src='/gbrvirtualtour/customhotspots/infospot.png'
				style='width: 64px; height: 64px;'></div>
	</div>
	<div class='customhotspot' id='oo'>
		<div onclick='chclickinfospotoo1();' id='infospotoo1'
			style='position: fixed; top: 0; left: 0; cursor: pointer;'><img src='/gbrvirtualtour/customhotspots/infospot.png'
				style='width: 64px; height: 64px;'></div>
	</div>
	<div class='customhotspot' id='tanggatengahA'></div>
	<div class='customhotspot' id='aaa'>
		<div onclick='chclickinfospotaaa2();' id='infospotaaa2'
			style='position: fixed; top: 0; left: 0; cursor: pointer;'><img src='/gbrvirtualtour/customhotspots/infospot.png'
				style='width: 64px; height: 64px;'></div>
	</div>
	<div class='customhotspot' id='bbb'>
		<div onclick='chclickinfospotbbb2();' id='infospotbbb2'
			style='position: fixed; top: 0; left: 0; cursor: pointer;'><img src='/gbrvirtualtour/customhotspots/infospot.png'
				style='width: 64px; height: 64px;'></div>
		<div onclick='chclickinfospotbbb3();' id='infospotbbb3'
			style='position: fixed; top: 0; left: 0; cursor: pointer;'><img src='/gbrvirtualtour/customhotspots/infospot.png'
				style='width: 64px; height: 64px;'></div>
	</div>
	<div class='customhotspot' id='ccc'>
		<div onclick='chclickinfospotccc2();' id='infospotccc2'
			style='position: fixed; top: 0; left: 0; cursor: pointer;'><img src='/gbrvirtualtour/customhotspots/infospot.png'
				style='width: 64px; height: 64px;'></div>
	</div>
	<div class='customhotspot' id='ddd'>
		<div onclick='chclickinfospotddd2();' id='infospotddd2'
			style='position: fixed; top: 0; left: 0; cursor: pointer;'><img src='/gbrvirtualtour/customhotspots/infospot.png'
				style='width: 64px; height: 64px;'></div>
		<div onclick='chclickinfospotddd3();' id='infospotddd3'
			style='position: fixed; top: 0; left: 0; cursor: pointer;'><img src='/gbrvirtualtour/customhotspots/infospot.png'
				style='width: 64px; height: 64px;'></div>
	</div>
	<div class='customhotspot' id='eee'>
		<div onclick='chclickinfospoteee2();' id='infospoteee2'
			style='position: fixed; top: 0; left: 0; cursor: pointer;'><img src='/gbrvirtualtour/customhotspots/infospot.png'
				style='width: 64px; height: 64px;'></div>
	</div>
	<div class='customhotspot' id='fff'>
		<div onclick='chclickinfospotfff2();' id='infospotfff2'
			style='position: fixed; top: 0; left: 0; cursor: pointer;'><img src='/gbrvirtualtour/customhotspots/infospot.png'
				style='width: 64px; height: 64px;'></div>
		<div onclick='chclickinfospotfff3();' id='infospotfff3'
			style='position: fixed; top: 0; left: 0; cursor: pointer;'><img src='/gbrvirtualtour/customhotspots/infospot.png'
				style='width: 64px; height: 64px;'></div>
	</div>
	<div class='customhotspot' id='ggg'>
		<div onclick='chclickinfospotggg2();' id='infospotggg2'
			style='position: fixed; top: 0; left: 0; cursor: pointer;'><img src='/gbrvirtualtour/customhotspots/infospot.png'
				style='width: 64px; height: 64px;'></div>
		<div onclick='chclickinfospotggg3();' id='infospotggg3'
			style='position: fixed; top: 0; left: 0; cursor: pointer;'><img src='/gbrvirtualtour/customhotspots/infospot.png'
				style='width: 64px; height: 64px;'></div>
	</div>
	<div class='customhotspot' id='hhh'></div>
	<div class='customhotspot' id='iii'>
		<div onclick='chclickinfospotiii2();' id='infospotiii2'
			style='position: fixed; top: 0; left: 0; cursor: pointer;'><img src='/gbrvirtualtour/customhotspots/infospot.png'
				style='width: 64px; height: 64px;'></div>
		<div onclick='chclickinfospotiii3();' id='infospotiii3'
			style='position: fixed; top: 0; left: 0; cursor: pointer;'><img src='/gbrvirtualtour/customhotspots/infospot.png'
				style='width: 64px; height: 64px;'></div>
	</div>
	<div class='customhotspot' id='jjj'>
		<div onclick='chclickinfospotjjj2();' id='infospotjjj2'
			style='position: fixed; top: 0; left: 0; cursor: pointer;'><img src='/gbrvirtualtour/customhotspots/infospot.png'
				style='width: 64px; height: 64px;'></div>
	</div>
	<div class='customhotspot' id='kkk'>
		<div onclick='chclickinfospotkkk2();' id='infospotkkk2'
			style='position: fixed; top: 0; left: 0; cursor: pointer;'><img src='/gbrvirtualtour/customhotspots/infospot.png'
				style='width: 64px; height: 64px;'></div>
	</div>
	<div class='customhotspot' id='lll'>
		<div onclick='chclickinfospotlll2();' id='infospotlll2'
			style='position: fixed; top: 0; left: 0; cursor: pointer;'><img src='/gbrvirtualtour/customhotspots/infospot.png'
				style='width: 64px; height: 64px;'></div>
		<div onclick='chclickinfospotlll3();' id='infospotlll3'
			style='position: fixed; top: 0; left: 0; cursor: pointer;'><img src='/gbrvirtualtour/customhotspots/infospot.png'
				style='width: 64px; height: 64px;'></div>
	</div>
	<div class='customhotspot' id='mmm'>
		<div onclick='chclickinfospotmmm2();' id='infospotmmm2'
			style='position: fixed; top: 0; left: 0; cursor: pointer;'><img src='/gbrvirtualtour/customhotspots/infospot.png'
				style='width: 64px; height: 64px;'></div>
		<div onclick='chclickinfospotmmm3();' id='infospotmmm3'
			style='position: fixed; top: 0; left: 0; cursor: pointer;'><img src='/gbrvirtualtour/customhotspots/infospot.png'
				style='width: 64px; height: 64px;'></div>
	</div>
	<div class='customhotspot' id='nnn'>
		<div onclick='chclickinfospotnnn2();' id='infospotnnn2'
			style='position: fixed; top: 0; left: 0; cursor: pointer;'><img src='/gbrvirtualtour/customhotspots/infospot.png'
				style='width: 64px; height: 64px;'></div>
	</div>
	<div class='customhotspot' id='ooo'>
		<div onclick='chclickinfospotooo1();' id='infospotooo1'
			style='position: fixed; top: 0; left: 0; cursor: pointer;'><img src='/gbrvirtualtour/customhotspots/infospot.png'
				style='width: 64px; height: 64px;'></div>
	</div>
	<div class='customhotspot' id='tanggakiriB'></div>
	<div class='customhotspot' id='tanggatengahB'></div>
	<!--customhtml-end-->
	<div>
		<div id="tmp">
			<div class="modal-dialog modal-dialog-centered modal-lg" role="document">
				<div class="modal-content shadow-inset">
					<div class="modal-body">
						<button type="button" class="btn btn-primary close mb-2" onclick="hideTemp()">
							<span aria-hidden="true">×</span>
						</button>
						<div id="tmpcontent">
						</div>
					</div>
				</div>
			</div>
		</div>


		<div id="loading" class="fullwrapper" style="display: table; width: 100%; height: 100%;">
			<div
				style="display: table-cell; vertical-align: middle; text-align: center; color: black; font-size: 30px; padding: 50px;">
				<!--loadingtext-->Loading...
				<!--loadingtext-end-->
			</div>
		</div>
	</div>
	<script>

		var container = document.querySelector('#container');
		/*panolens*/

		var viewer = new PANOLENS.Viewer({ container: container, controlBar: false, output: 'console', autoHideInfospot: false, });

		/*panolens-end*/

		viewer.addUpdateCallback(function () { });

		/*panoramas*/

		var gbkananhight = new PANOLENS.ImagePanorama("/gbrvirtualtour/panoramas/gbkananhight.jpg");
		gbkananhight.addEventListener('progress', function (e) {
			$("#loading").show();
		});
		gbkananhight.addEventListener('load', function (e) {
			$("#loading").fadeOut();
		});
		gbkananhight.addEventListener('click', function (e) {
		});


		var infospotgbkananhight0 = new PANOLENS.Infospot(512, hotspotIcons[6].data, true);
		infospotgbkananhight0.position.set(4964.27, -493.79, -158.36);
		gbkananhight.add(infospotgbkananhight0);

		infospotgbkananhight0.addEventListener('click', function () {

			ChangePanorama('h');

		});

		viewer.add(gbkananhight);

		var h = new PANOLENS.ImagePanorama("/gbrvirtualtour/panoramas/h.jpg");
		h.addEventListener('progress', function (e) {
			$("#loading").show();
		});
		h.addEventListener('load', function (e) {
			$("#loading").fadeOut();
		});
		h.addEventListener('click', function (e) {
		});


		var infospoth0 = new PANOLENS.Infospot(512, hotspotIcons[6].data, true);
		infospoth0.position.set(4389.15, -2357.05, 326.33);
		h.add(infospoth0);

		infospoth0.addEventListener('click', function () {

			ChangePanorama('gbkananhight');

		});

		var infospoth1 = new PANOLENS.Infospot(512, hotspotIcons[6].data, true);
		infospoth1.position.set(-419.64, -2631.20, 4228.71);
		h.add(infospoth1);

		infospoth1.addEventListener('click', function () {

			ChangePanorama('i');

		});

		var infospoth2 = new PANOLENS.Infospot(512, hotspotIcons[6].data, true);
		infospoth2.position.set(178.39, -2596.08, -4263.04);
		h.add(infospoth2);

		infospoth2.addEventListener('click', function () {

			ChangePanorama('g');

		});

		var infospoth3 = new PANOLENS.Infospot(512, hotspotIcons[11].data, true);
		infospoth3.position.set(-54.59, -4997.83, 7.46);
		h.add(infospoth3);

		infospoth3.addEventListener('click', function () {

			showMedia(1, '/gbrvirtualtour/images/lt1.8.png');

		});

		var infospoth4 = new PANOLENS.Infospot(512, hotspotIcons[0].data, true);
		infospoth4.position.set(-4479.34, 2174.90, -372.23);
		infospoth4.visible = false;
		h.add(infospoth4);

		infospoth4.addEventListener('click', function () {

			showMedia(1, '/gbrvirtualtour/images/tamu.jpg');

		});

		viewer.add(h);

		var i = new PANOLENS.ImagePanorama("/gbrvirtualtour/panoramas/i.jpg");
		i.addEventListener('progress', function (e) {
			$("#loading").show();
		});
		i.addEventListener('load', function (e) {
			$("#loading").fadeOut();
		});
		i.addEventListener('click', function (e) {
		});


		var infospoti0 = new PANOLENS.Infospot(512, hotspotIcons[6].data, true);
		infospoti0.position.set(-264.72, -1637.72, 4707.23);
		i.add(infospoti0);

		infospoti0.addEventListener('click', function () {

			ChangePanorama('h');

		});

		var infospoti1 = new PANOLENS.Infospot(512, hotspotIcons[0].data, true);
		infospoti1.position.set(2299.57, 1007.85, -4312.94);
		infospoti1.visible = false;
		i.add(infospoti1);

		infospoti1.addEventListener('click', function () {

			showMedia(1, '/gbrvirtualtour/images/baca.jpg');

		});

		var infospoti2 = new PANOLENS.Infospot(512, hotspotIcons[11].data, true);
		infospoti2.position.set(-8.91, -4999.40, -12.42);
		i.add(infospoti2);

		infospoti2.addEventListener('click', function () {

			showMedia(1, '/gbrvirtualtour/images/lt1.9.png');

		});

		viewer.add(i);

		var g = new PANOLENS.ImagePanorama("/gbrvirtualtour/panoramas/g.jpg");
		g.addEventListener('progress', function (e) {
			$("#loading").show();
		});
		g.addEventListener('load', function (e) {
			$("#loading").fadeOut();
		});
		g.addEventListener('click', function (e) {
		});


		var infospotg0 = new PANOLENS.Infospot(512, hotspotIcons[6].data, true);
		infospotg0.position.set(-4561.68, -2028.07, 92.82);
		g.add(infospotg0);

		infospotg0.addEventListener('click', function () {

			ChangePanorama('h');

		});

		var infospotg1 = new PANOLENS.Infospot(512, hotspotIcons[6].data, true);
		infospotg1.position.set(3694.48, -3359.33, 75.08);
		g.add(infospotg1);

		infospotg1.addEventListener('click', function () {

			ChangePanorama('f');

		});

		var infospotg2 = new PANOLENS.Infospot(512, hotspotIcons[0].data, true);
		infospotg2.position.set(2185.29, 502.84, -4458.54);
		infospotg2.visible = false;
		g.add(infospotg2);

		infospotg2.addEventListener('click', function () {

			showMedia(1, '/gbrvirtualtour/images/kepegawaian.jpg');

		});

		var infospotg3 = new PANOLENS.Infospot(512, hotspotIcons[11].data, true);
		infospotg3.position.set(25.14, -4998.94, 9.78);
		g.add(infospotg3);

		infospotg3.addEventListener('click', function () {

			showMedia(1, '/gbrvirtualtour/images/lt1.7.png');

		});

		var infospotg4 = new PANOLENS.Infospot(512, hotspotIcons[6].data, true);
		infospotg4.position.set(-572.47, -949.66, 4868.79);
		g.add(infospotg4);

		infospotg4.addEventListener('click', function () {

			ChangePanorama('tanggatengahA');

		});

		viewer.add(g);

		var f = new PANOLENS.ImagePanorama("/gbrvirtualtour/panoramas/f.jpg");
		f.addEventListener('progress', function (e) {
			$("#loading").show();
		});
		f.addEventListener('load', function (e) {
			$("#loading").fadeOut();
		});
		f.addEventListener('click', function (e) {
		});


		var infospotf0 = new PANOLENS.Infospot(512, hotspotIcons[6].data, true);
		infospotf0.position.set(-59.51, -2600.37, 4266.87);
		f.add(infospotf0);

		infospotf0.addEventListener('click', function () {

			ChangePanorama('g');

		});

		var infospotf1 = new PANOLENS.Infospot(512, hotspotIcons[6].data, true);
		infospotf1.position.set(-143.38, -2287.80, -4437.53);
		f.add(infospotf1);

		infospotf1.addEventListener('click', function () {

			ChangePanorama('e');

		});

		var infospotf2 = new PANOLENS.Infospot(512, hotspotIcons[0].data, true);
		infospotf2.position.set(-2945.37, 1455.48, -3757.88);
		infospotf2.visible = false;
		f.add(infospotf2);

		infospotf2.addEventListener('click', function () {

			showMedia(1, '/gbrvirtualtour/images/umper.jpg');

		});

		var infospotf3 = new PANOLENS.Infospot(512, hotspotIcons[0].data, true);
		infospotf3.position.set(2785.79, 1426.14, 3893.08);
		infospotf3.visible = false;
		f.add(infospotf3);

		infospotf3.addEventListener('click', function () {

			showMedia(1, '/gbrvirtualtour/images/akademik.jpg');

		});

		var infospotf4 = new PANOLENS.Infospot(512, hotspotIcons[11].data, true);
		infospotf4.position.set(-14.05, -4996.15, -96.79);
		f.add(infospotf4);

		infospotf4.addEventListener('click', function () {

			showMedia(1, '/gbrvirtualtour/images/lt1.6.png');

		});

		viewer.add(f);

		var e = new PANOLENS.ImagePanorama("/gbrvirtualtour/panoramas/e.jpg");
		e.addEventListener('progress', function (e) {
			$("#loading").show();
		});
		e.addEventListener('load', function (e) {
			$("#loading").fadeOut();
		});
		e.addEventListener('click', function (e) {
		});


		var infospote0 = new PANOLENS.Infospot(512, hotspotIcons[6].data, true);
		infospote0.position.set(-188.72, -2395.15, 4375.03);
		e.add(infospote0);

		infospote0.addEventListener('click', function () {

			ChangePanorama('f');

		});

		var infospote1 = new PANOLENS.Infospot(512, hotspotIcons[6].data, true);
		infospote1.position.set(362.27, -2560.18, -4273.51);
		e.add(infospote1);

		infospote1.addEventListener('click', function () {

			ChangePanorama('d');

		});

		var infospote2 = new PANOLENS.Infospot(512, hotspotIcons[0].data, true);
		infospote2.position.set(4815.43, 1233.34, 514.08);
		infospote2.visible = false;
		e.add(infospote2);

		infospote2.addEventListener('click', function () {

			showMedia(1, '/gbrvirtualtour/images/teller.jpg');

		});

		var infospote3 = new PANOLENS.Infospot(512, hotspotIcons[11].data, true);
		infospote3.position.set(-8.47, -4999.40, 12.73);
		e.add(infospote3);

		infospote3.addEventListener('click', function () {

			showMedia(1, '/gbrvirtualtour/images/lt1.5.png');

		});

		viewer.add(e);

		var d = new PANOLENS.ImagePanorama("/gbrvirtualtour/panoramas/d.jpg");
		d.addEventListener('progress', function (e) {
			$("#loading").show();
		});
		d.addEventListener('load', function (e) {
			$("#loading").fadeOut();
		});
		d.addEventListener('click', function (e) {
		});


		var infospotd0 = new PANOLENS.Infospot(512, hotspotIcons[6].data, true);
		infospotd0.position.set(-30.70, -2746.77, 4171.87);
		d.add(infospotd0);

		infospotd0.addEventListener('click', function () {

			ChangePanorama('e');

		});

		var infospotd1 = new PANOLENS.Infospot(512, hotspotIcons[6].data, true);
		infospotd1.position.set(297.83, -2200.23, -4471.57);
		d.add(infospotd1);

		infospotd1.addEventListener('click', function () {

			ChangePanorama('c');

		});

		var infospotd2 = new PANOLENS.Infospot(512, hotspotIcons[0].data, true);
		infospotd2.position.set(4582.42, 1950.00, 383.78);
		infospotd2.visible = false;
		d.add(infospotd2);

		infospotd2.addEventListener('click', function () {

			showMedia(1, '/gbrvirtualtour/images/h14.jpg');

		});

		var infospotd3 = new PANOLENS.Infospot(512, hotspotIcons[11].data, true);
		infospotd3.position.set(-29.02, -4998.70, 15.93);
		d.add(infospotd3);

		infospotd3.addEventListener('click', function () {

			showMedia(1, '/gbrvirtualtour/images/lt1.4.png');

		});

		viewer.add(d);

		var c = new PANOLENS.ImagePanorama("/gbrvirtualtour/panoramas/c.jpg");
		c.addEventListener('progress', function (e) {
			$("#loading").show();
		});
		c.addEventListener('load', function (e) {
			$("#loading").fadeOut();
		});
		c.addEventListener('click', function (e) {
		});


		var infospotc0 = new PANOLENS.Infospot(512, hotspotIcons[6].data, true);
		infospotc0.position.set(-322.88, -2606.51, 4249.63);
		c.add(infospotc0);

		infospotc0.addEventListener('click', function () {

			ChangePanorama('d');

		});

		var infospotc1 = new PANOLENS.Infospot(512, hotspotIcons[6].data, true);
		infospotc1.position.set(497.35, -2172.18, -4471.18);
		c.add(infospotc1);

		infospotc1.addEventListener('click', function () {

			ChangePanorama('b');

		});

		var infospotc2 = new PANOLENS.Infospot(512, hotspotIcons[0].data, true);
		infospotc2.position.set(3623.39, 1467.38, -3106.12);
		infospotc2.visible = false;
		c.add(infospotc2);

		infospotc2.addEventListener('click', function () {

			showMedia(1, '/gbrvirtualtour/images/h12.jpg');

		});

		var infospotc3 = new PANOLENS.Infospot(512, hotspotIcons[0].data, true);
		infospotc3.position.set(-2827.99, 1115.26, 3964.93);
		infospotc3.visible = false;
		c.add(infospotc3);

		infospotc3.addEventListener('click', function () {

			showMedia(1, '/gbrvirtualtour/images/h11.jpg');

		});

		var infospotc4 = new PANOLENS.Infospot(512, hotspotIcons[11].data, true);
		infospotc4.position.set(-8.40, -4999.65, 2.65);
		c.add(infospotc4);

		infospotc4.addEventListener('click', function () {

			showMedia(1, '/gbrvirtualtour/images/lt1.3.png');

		});

		viewer.add(c);

		var b = new PANOLENS.ImagePanorama("/gbrvirtualtour/panoramas/b.jpg");
		b.addEventListener('progress', function (e) {
			$("#loading").show();
		});
		b.addEventListener('load', function (e) {
			$("#loading").fadeOut();
		});
		b.addEventListener('click', function (e) {
		});


		var infospotb0 = new PANOLENS.Infospot(512, hotspotIcons[6].data, true);
		infospotb0.position.set(-4594.55, -1924.56, -376.12);
		b.add(infospotb0);

		infospotb0.addEventListener('click', function () {

			ChangePanorama('c');

		});

		var infospotb1 = new PANOLENS.Infospot(512, hotspotIcons[6].data, true);
		infospotb1.position.set(-5.19, -2964.08, 4024.98);
		b.add(infospotb1);

		infospotb1.addEventListener('click', function () {

			ChangePanorama('a');

		});

		var infospotb2 = new PANOLENS.Infospot(512, hotspotIcons[6].data, true);
		infospotb2.position.set(4695.33, 606.56, -1587.64);
		infospotb2.visible = false;
		b.add(infospotb2);

		infospotb2.addEventListener('click', function () {

			showMedia(1, '/gbrvirtualtour/images/wc.jpg');

		});

		var infospotb3 = new PANOLENS.Infospot(512, hotspotIcons[11].data, true);
		infospotb3.position.set(-82.82, -4996.74, 0.56);
		b.add(infospotb3);

		infospotb3.addEventListener('click', function () {

			showMedia(1, '/gbrvirtualtour/images/lt1.2.png');

		});

		viewer.add(b);

		var a = new PANOLENS.ImagePanorama("/gbrvirtualtour/panoramas/a.jpg");
		a.addEventListener('progress', function (e) {
			$("#loading").show();
		});
		a.addEventListener('load', function (e) {
			$("#loading").fadeOut();
		});
		a.addEventListener('click', function (e) {
		});


		var infospota0 = new PANOLENS.Infospot(512, hotspotIcons[6].data, true);
		infospota0.position.set(265.95, -2495.29, -4314.90);
		a.add(infospota0);

		infospota0.addEventListener('click', function () {

			ChangePanorama('b');

		});

		var infospota1 = new PANOLENS.Infospot(512, hotspotIcons[6].data, true);
		infospota1.position.set(-91.52, -1780.08, 4663.79);
		a.add(infospota1);

		infospota1.addEventListener('click', function () {

			ChangePanorama('gbkirihight');

		});

		var infospota2 = new PANOLENS.Infospot(512, hotspotIcons[0].data, true);
		infospota2.position.set(4949.68, 11.63, 664.48);
		infospota2.visible = false;
		a.add(infospota2);

		infospota2.addEventListener('click', function () {

			showMedia(1, '/gbrvirtualtour/images/cswanita.jpg');

		});

		var infospota3 = new PANOLENS.Infospot(512, hotspotIcons[11].data, true);
		infospota3.position.set(59.10, -4997.67, -4.97);
		a.add(infospota3);

		infospota3.addEventListener('click', function () {

			showMedia(1, '/gbrvirtualtour/images/lt1.1.png');

		});

		var infospota4 = new PANOLENS.Infospot(512, hotspotIcons[6].data, true);
		infospota4.position.set(3230.68, -1820.91, 3341.39);
		a.add(infospota4);

		infospota4.addEventListener('click', function () {

			ChangePanorama('tanggakiriA');

		});

		viewer.add(a);

		var gbkirihight = new PANOLENS.ImagePanorama("/gbrvirtualtour/panoramas/gbkirihight.jpg");
		gbkirihight.addEventListener('progress', function (e) {
			$("#loading").show();
		});
		gbkirihight.addEventListener('load', function (e) {
			$("#loading").fadeOut();
		});
		gbkirihight.addEventListener('click', function (e) {
		});


		var infospotgbkirihight0 = new PANOLENS.Infospot(512, hotspotIcons[6].data, true);
		infospotgbkirihight0.position.set(4952.83, -577.36, 188.08);
		gbkirihight.add(infospotgbkirihight0);

		infospotgbkirihight0.addEventListener('click', function () {

			ChangePanorama('a');

		});

		var infospotgbkirihight1 = new PANOLENS.Infospot(512, hotspotIcons[6].data, true);
		infospotgbkirihight1.position.set(-2390.25, -755.40, 4320.60);
		gbkirihight.add(infospotgbkirihight1);

		infospotgbkirihight1.addEventListener('click', function () {

			ChangePanorama('tuguhight');

		});

		viewer.add(gbkirihight);

		var tuguhight = new PANOLENS.ImagePanorama("/gbrvirtualtour/panoramas/tuguhight.jpg");
		tuguhight.addEventListener('progress', function (e) {
			$("#loading").show();
		});
		tuguhight.addEventListener('load', function (e) {
			$("#loading").fadeOut();
		});
		tuguhight.addEventListener('click', function (e) {
		});


		var infospottuguhight0 = new PANOLENS.Infospot(512, hotspotIcons[6].data, true);
		infospottuguhight0.position.set(1995.33, -694.13, -4527.75);
		tuguhight.add(infospottuguhight0);

		infospottuguhight0.addEventListener('click', function () {

			ChangePanorama('gbkirihight');

		});

		viewer.add(tuguhight);

		var tanggakiriA = new PANOLENS.ImagePanorama("/gbrvirtualtour/panoramas/tanggakiriA.jpg");
		tanggakiriA.addEventListener('progress', function (e) {
			$("#loading").show();
		});
		tanggakiriA.addEventListener('load', function (e) {
			$("#loading").fadeOut();
		});
		tanggakiriA.addEventListener('click', function (e) {
		});


		var infospottanggakiriA0 = new PANOLENS.Infospot(512, hotspotIcons[6].data, true);
		infospottanggakiriA0.position.set(4417.32, -1901.80, 1354.40);
		tanggakiriA.add(infospottanggakiriA0);

		infospottanggakiriA0.addEventListener('click', function () {

			ChangePanorama('a');

		});

		var infospottanggakiriA1 = new PANOLENS.Infospot(512, hotspotIcons[6].data, true);
		infospottanggakiriA1.position.set(4929.23, 377.93, -701.77);
		tanggakiriA.add(infospottanggakiriA1);

		infospottanggakiriA1.addEventListener('click', function () {

			ChangePanorama('aa');

		});

		var infospottanggakiriA2 = new PANOLENS.Infospot(512, hotspotIcons[11].data, true);
		infospottanggakiriA2.position.set(25.30, -4998.99, -5.02);
		tanggakiriA.add(infospottanggakiriA2);

		infospottanggakiriA2.addEventListener('click', function () {

			showMedia(1, '/gbrvirtualtour/images/tanggakiri1-2.png');

		});

		viewer.add(tanggakiriA);

		var aa = new PANOLENS.ImagePanorama("/gbrvirtualtour/panoramas/aa.jpg");
		aa.addEventListener('progress', function (e) {
			$("#loading").show();
		});
		aa.addEventListener('load', function (e) {
			$("#loading").fadeOut();
		});
		aa.addEventListener('click', function (e) {
		});


		var infospotaa0 = new PANOLENS.Infospot(512, hotspotIcons[6].data, true);
		infospotaa0.position.set(3165.31, -1071.65, 3708.67);
		aa.add(infospotaa0);

		infospotaa0.addEventListener('click', function () {

			ChangePanorama('tanggakiriA');

		});

		var infospotaa1 = new PANOLENS.Infospot(512, hotspotIcons[6].data, true);
		infospotaa1.position.set(392.45, -2534.44, -4286.35);
		aa.add(infospotaa1);

		infospotaa1.addEventListener('click', function () {

			ChangePanorama('bb');

		});

		var infospotaa2 = new PANOLENS.Infospot(512, hotspotIcons[0].data, true);
		infospotaa2.position.set(4906.72, 895.12, 176.66);
		infospotaa2.visible = false;
		aa.add(infospotaa2);

		infospotaa2.addEventListener('click', function () {

			showMedia(1, '/gbrvirtualtour/images/ruangtik.jpg');

		});

		var infospotaa3 = new PANOLENS.Infospot(512, hotspotIcons[11].data, true);
		infospotaa3.position.set(457.96, -4975.67, -93.50);
		aa.add(infospotaa3);

		infospotaa3.addEventListener('click', function () {

			showMedia(1, '/gbrvirtualtour/images/lt2.1.png');

		});

		var infospotaa4 = new PANOLENS.Infospot(512, hotspotIcons[6].data, true);
		infospotaa4.position.set(4101.85, -840.29, 2717.46);
		aa.add(infospotaa4);

		infospotaa4.addEventListener('click', function () {

			ChangePanorama('tanggakiriB');

		});

		viewer.add(aa);

		var bb = new PANOLENS.ImagePanorama("/gbrvirtualtour/panoramas/bb.jpg");
		bb.addEventListener('progress', function (e) {
			$("#loading").show();
		});
		bb.addEventListener('load', function (e) {
			$("#loading").fadeOut();
		});
		bb.addEventListener('click', function (e) {
		});


		var infospotbb0 = new PANOLENS.Infospot(512, hotspotIcons[6].data, true);
		infospotbb0.position.set(-3967.78, -3028.77, -123.63);
		bb.add(infospotbb0);

		infospotbb0.addEventListener('click', function () {

			ChangePanorama('aa');

		});

		var infospotbb1 = new PANOLENS.Infospot(512, hotspotIcons[6].data, true);
		infospotbb1.position.set(304.07, -2657.06, -4217.48);
		bb.add(infospotbb1);

		infospotbb1.addEventListener('click', function () {

			ChangePanorama('cc');

		});

		var infospotbb2 = new PANOLENS.Infospot(512, hotspotIcons[0].data, true);
		infospotbb2.position.set(4830.27, -1254.11, 135.04);
		infospotbb2.visible = false;
		bb.add(infospotbb2);

		infospotbb2.addEventListener('click', function () {

			showMedia(1, '/gbrvirtualtour/images/smartarea.jpg');

		});

		var infospotbb3 = new PANOLENS.Infospot(512, hotspotIcons[0].data, true);
		infospotbb3.position.set(1454.24, 202.16, 4771.41);
		infospotbb3.visible = false;
		bb.add(infospotbb3);

		infospotbb3.addEventListener('click', function () {

			showMedia(1, '/gbrvirtualtour/images/wc.jpg');

		});

		var infospotbb4 = new PANOLENS.Infospot(512, hotspotIcons[11].data, true);
		infospotbb4.position.set(16.64, -4999.34, 2.01);
		bb.add(infospotbb4);

		infospotbb4.addEventListener('click', function () {

			showMedia(1, '/gbrvirtualtour/images/lt2.2.png');

		});

		viewer.add(bb);

		var cc = new PANOLENS.ImagePanorama("/gbrvirtualtour/panoramas/cc.jpg");
		cc.addEventListener('progress', function (e) {
			$("#loading").show();
		});
		cc.addEventListener('load', function (e) {
			$("#loading").fadeOut();
		});
		cc.addEventListener('click', function (e) {
		});


		var infospotcc0 = new PANOLENS.Infospot(512, hotspotIcons[6].data, true);
		infospotcc0.position.set(-472.61, -2411.02, 4349.65);
		cc.add(infospotcc0);

		infospotcc0.addEventListener('click', function () {

			ChangePanorama('bb');

		});

		var infospotcc1 = new PANOLENS.Infospot(512, hotspotIcons[6].data, true);
		infospotcc1.position.set(413.72, -2591.70, -4253.16);
		cc.add(infospotcc1);

		infospotcc1.addEventListener('click', function () {

			ChangePanorama('dd');

		});

		var infospotcc2 = new PANOLENS.Infospot(512, hotspotIcons[0].data, true);
		infospotcc2.position.set(-3843.52, 1653.80, 2727.07);
		infospotcc2.visible = false;
		cc.add(infospotcc2);

		infospotcc2.addEventListener('click', function () {

			showMedia(1, '/gbrvirtualtour/images/h22.jpg');

		});

		var infospotcc3 = new PANOLENS.Infospot(512, hotspotIcons[0].data, true);
		infospotcc3.position.set(-3339.63, 1619.66, -3337.28);
		infospotcc3.visible = false;
		cc.add(infospotcc3);

		infospotcc3.addEventListener('click', function () {

			showMedia(1, '/gbrvirtualtour/images/h24.jpg');

		});

		var infospotcc4 = new PANOLENS.Infospot(512, hotspotIcons[11].data, true);
		infospotcc4.position.set(5.96, -4997.91, -52.92);
		cc.add(infospotcc4);

		infospotcc4.addEventListener('click', function () {

			showMedia(1, '/gbrvirtualtour/images/lt2.3.png');

		});

		viewer.add(cc);

		var dd = new PANOLENS.ImagePanorama("/gbrvirtualtour/panoramas/dd.jpg");
		dd.addEventListener('progress', function (e) {
			$("#loading").show();
		});
		dd.addEventListener('load', function (e) {
			$("#loading").fadeOut();
		});
		dd.addEventListener('click', function (e) {
		});


		var infospotdd0 = new PANOLENS.Infospot(512, hotspotIcons[6].data, true);
		infospotdd0.position.set(21.17, -2368.53, -4398.72);
		dd.add(infospotdd0);

		infospotdd0.addEventListener('click', function () {

			ChangePanorama('cc');

		});

		var infospotdd1 = new PANOLENS.Infospot(512, hotspotIcons[6].data, true);
		infospotdd1.position.set(-207.70, -3020.87, 3969.60);
		dd.add(infospotdd1);

		infospotdd1.addEventListener('click', function () {

			ChangePanorama('ee');

		});

		var infospotdd2 = new PANOLENS.Infospot(512, hotspotIcons[0].data, true);
		infospotdd2.position.set(-4580.71, 1923.35, -538.14);
		infospotdd2.visible = false;
		dd.add(infospotdd2);

		infospotdd2.addEventListener('click', function () {

			showMedia(1, '/gbrvirtualtour/images/dosenkimia.jpg');

		});

		var infospotdd3 = new PANOLENS.Infospot(512, hotspotIcons[11].data, true);
		infospotdd3.position.set(-17.08, -4998.93, -21.09);
		dd.add(infospotdd3);

		infospotdd3.addEventListener('click', function () {

			showMedia(1, '/gbrvirtualtour/images/lt2.4.png');

		});

		viewer.add(dd);

		var ee = new PANOLENS.ImagePanorama("/gbrvirtualtour/panoramas/ee.jpg");
		ee.addEventListener('progress', function (e) {
			$("#loading").show();
		});
		ee.addEventListener('load', function (e) {
			$("#loading").fadeOut();
		});
		ee.addEventListener('click', function (e) {
		});


		var infospotee0 = new PANOLENS.Infospot(512, hotspotIcons[6].data, true);
		infospotee0.position.set(116.11, -2602.94, -4262.46);
		ee.add(infospotee0);

		infospotee0.addEventListener('click', function () {

			ChangePanorama('dd');

		});

		var infospotee1 = new PANOLENS.Infospot(512, hotspotIcons[6].data, true);
		infospotee1.position.set(-221.54, -3132.66, 3880.75);
		ee.add(infospotee1);

		infospotee1.addEventListener('click', function () {

			ChangePanorama('fg');

		});

		var infospotee2 = new PANOLENS.Infospot(512, hotspotIcons[0].data, true);
		infospotee2.position.set(-3576.73, 1743.64, 3012.74);
		infospotee2.visible = false;
		ee.add(infospotee2);

		infospotee2.addEventListener('click', function () {

			showMedia(1, '/gbrvirtualtour/images/dosensisfo.jpg');

		});

		var infospotee3 = new PANOLENS.Infospot(512, hotspotIcons[0].data, true);
		infospotee3.position.set(-3598.72, 1618.78, -3058.67);
		infospotee3.visible = false;
		ee.add(infospotee3);

		infospotee3.addEventListener('click', function () {

			showMedia(1, '/gbrvirtualtour/images/h23.jpg');

		});

		var infospotee4 = new PANOLENS.Infospot(512, hotspotIcons[0].data, true);
		infospotee4.position.set(3686.12, 1583.26, -2971.54);
		infospotee4.visible = false;
		ee.add(infospotee4);

		infospotee4.addEventListener('click', function () {

			showMedia(1, '/gbrvirtualtour/images/h26.jpg');

		});

		var infospotee5 = new PANOLENS.Infospot(512, hotspotIcons[0].data, true);
		infospotee5.position.set(3540.14, 1638.01, 3119.76);
		infospotee5.visible = false;
		ee.add(infospotee5);

		infospotee5.addEventListener('click', function () {

			showMedia(1, '/gbrvirtualtour/images/h28.jpg');

		});

		var infospotee6 = new PANOLENS.Infospot(512, hotspotIcons[11].data, true);
		infospotee6.position.set(5.49, -4999.40, -14.27);
		ee.add(infospotee6);

		infospotee6.addEventListener('click', function () {

			showMedia(1, '/gbrvirtualtour/images/lt2.5.png');

		});

		viewer.add(ee);

		var fg = new PANOLENS.ImagePanorama("/gbrvirtualtour/panoramas/fg.jpg");
		fg.addEventListener('progress', function (e) {
			$("#loading").show();
		});
		fg.addEventListener('load', function (e) {
			$("#loading").fadeOut();
		});
		fg.addEventListener('click', function (e) {
		});


		var infospotfg0 = new PANOLENS.Infospot(512, hotspotIcons[6].data, true);
		infospotfg0.position.set(160.53, -2518.41, -4307.48);
		fg.add(infospotfg0);

		infospotfg0.addEventListener('click', function () {

			ChangePanorama('ee');

		});

		var infospotfg1 = new PANOLENS.Infospot(512, hotspotIcons[6].data, true);
		infospotfg1.position.set(-209.43, -2144.57, 4501.86);
		fg.add(infospotfg1);

		infospotfg1.addEventListener('click', function () {

			ChangePanorama('hh');

		});

		var infospotfg2 = new PANOLENS.Infospot(512, hotspotIcons[0].data, true);
		infospotfg2.position.set(2886.76, 1273.65, -3871.23);
		infospotfg2.visible = false;
		fg.add(infospotfg2);

		infospotfg2.addEventListener('click', function () {

			showMedia(1, '/gbrvirtualtour/images/h210.jpg');

		});

		var infospotfg3 = new PANOLENS.Infospot(512, hotspotIcons[0].data, true);
		infospotfg3.position.set(-3052.43, 1386.63, 3696.13);
		infospotfg3.visible = false;
		fg.add(infospotfg3);

		infospotfg3.addEventListener('click', function () {

			showMedia(1, '/gbrvirtualtour/images/ruangjurusanmtk.jpg');

		});

		var infospotfg4 = new PANOLENS.Infospot(512, hotspotIcons[11].data, true);
		infospotfg4.position.set(-16.25, -4999.36, 2.15);
		fg.add(infospotfg4);

		infospotfg4.addEventListener('click', function () {

			showMedia(1, '/gbrvirtualtour/images/lt2.6-7.png');

		});

		viewer.add(fg);

		var hh = new PANOLENS.ImagePanorama("/gbrvirtualtour/panoramas/hh.jpg");
		hh.addEventListener('progress', function (e) {
			$("#loading").show();
		});
		hh.addEventListener('load', function (e) {
			$("#loading").fadeOut();
		});
		hh.addEventListener('click', function (e) {
		});


		var infospothh0 = new PANOLENS.Infospot(512, hotspotIcons[6].data, true);
		infospothh0.position.set(-65.94, -3042.05, -3960.33);
		hh.add(infospothh0);

		infospothh0.addEventListener('click', function () {

			ChangePanorama('fg');

		});

		var infospothh1 = new PANOLENS.Infospot(512, hotspotIcons[6].data, true);
		infospothh1.position.set(218.33, -2920.17, 4046.18);
		hh.add(infospothh1);

		infospothh1.addEventListener('click', function () {

			ChangePanorama('ii');

		});

		var infospothh2 = new PANOLENS.Infospot(512, hotspotIcons[0].data, true);
		infospothh2.position.set(4046.61, 2006.21, -2125.14);
		infospothh2.visible = false;
		hh.add(infospothh2);

		infospothh2.addEventListener('click', function () {

			showMedia(1, '/gbrvirtualtour/images/drharlia.jpg');

		});

		var infospothh3 = new PANOLENS.Infospot(512, hotspotIcons[6].data, true);
		infospothh3.position.set(3975.69, -1279.93, 2734.20);
		hh.add(infospothh3);

		infospothh3.addEventListener('click', function () {

			ChangePanorama('tanggatengahA');

		});

		var infospothh4 = new PANOLENS.Infospot(512, hotspotIcons[11].data, true);
		infospothh4.position.set(6.19, -4999.44, -12.86);
		hh.add(infospothh4);

		infospothh4.addEventListener('click', function () {

			showMedia(1, '/gbrvirtualtour/images/lt2.8.png');

		});

		var infospothh5 = new PANOLENS.Infospot(512, hotspotIcons[6].data, true);
		infospothh5.position.set(4894.42, -181.83, 970.68);
		hh.add(infospothh5);

		infospothh5.addEventListener('click', function () {

			ChangePanorama('tanggatengahB');

		});

		viewer.add(hh);

		var ii = new PANOLENS.ImagePanorama("/gbrvirtualtour/panoramas/ii.jpg");
		ii.addEventListener('progress', function (e) {
			$("#loading").show();
		});
		ii.addEventListener('load', function (e) {
			$("#loading").fadeOut();
		});
		ii.addEventListener('click', function (e) {
		});


		var infospotii0 = new PANOLENS.Infospot(512, hotspotIcons[6].data, true);
		infospotii0.position.set(-99.87, -2830.17, 4112.52);
		ii.add(infospotii0);

		infospotii0.addEventListener('click', function () {

			ChangePanorama('hh');

		});

		var infospotii1 = new PANOLENS.Infospot(512, hotspotIcons[6].data, true);
		infospotii1.position.set(-277.47, -3025.80, -3962.06);
		ii.add(infospotii1);

		infospotii1.addEventListener('click', function () {

			ChangePanorama('jj');

		});

		var infospotii2 = new PANOLENS.Infospot(512, hotspotIcons[0].data, true);
		infospotii2.position.set(4532.36, 2025.59, 542.51);
		infospotii2.visible = false;
		ii.add(infospotii2);

		infospotii2.addEventListener('click', function () {

			showMedia(1, '/gbrvirtualtour/images/musolapria.jpg');

		});

		var infospotii3 = new PANOLENS.Infospot(512, hotspotIcons[0].data, true);
		infospotii3.position.set(-4753.75, -1426.89, 555.07);
		infospotii3.visible = false;
		ii.add(infospotii3);

		infospotii3.addEventListener('click', function () {

			showMedia(1, '/gbrvirtualtour/images/smartarea.jpg');

		});

		var infospotii4 = new PANOLENS.Infospot(512, hotspotIcons[11].data, true);
		infospotii4.position.set(0.09, -4999.82, -4.55);
		ii.add(infospotii4);

		infospotii4.addEventListener('click', function () {

			showMedia(1, '/gbrvirtualtour/images/lt2.9.png');

		});

		viewer.add(ii);

		var jj = new PANOLENS.ImagePanorama("/gbrvirtualtour/panoramas/jj.jpg");
		jj.addEventListener('progress', function (e) {
			$("#loading").show();
		});
		jj.addEventListener('load', function (e) {
			$("#loading").fadeOut();
		});
		jj.addEventListener('click', function (e) {
		});


		var infospotjj0 = new PANOLENS.Infospot(512, hotspotIcons[6].data, true);
		infospotjj0.position.set(188.48, -2993.90, -3991.87);
		jj.add(infospotjj0);

		infospotjj0.addEventListener('click', function () {

			ChangePanorama('ii');

		});

		var infospotjj1 = new PANOLENS.Infospot(512, hotspotIcons[6].data, true);
		infospotjj1.position.set(246.81, -3425.56, 3624.26);
		jj.add(infospotjj1);

		infospotjj1.addEventListener('click', function () {

			ChangePanorama('kk');

		});

		var infospotjj2 = new PANOLENS.Infospot(512, hotspotIcons[0].data, true);
		infospotjj2.position.set(-2314.11, 505.47, 4392.55);
		infospotjj2.visible = false;
		jj.add(infospotjj2);

		infospotjj2.addEventListener('click', function () {

			showMedia(1, '/gbrvirtualtour/images/keuangan.jpg');

		});

		var infospotjj3 = new PANOLENS.Infospot(512, hotspotIcons[11].data, true);
		infospotjj3.position.set(-0.63, -4999.17, -21.19);
		jj.add(infospotjj3);

		infospotjj3.addEventListener('click', function () {

			showMedia(1, '/gbrvirtualtour/images/lt2.10.png');

		});

		viewer.add(jj);

		var kk = new PANOLENS.ImagePanorama("/gbrvirtualtour/panoramas/kk.jpg");
		kk.addEventListener('progress', function (e) {
			$("#loading").show();
		});
		kk.addEventListener('load', function (e) {
			$("#loading").fadeOut();
		});
		kk.addEventListener('click', function (e) {
		});


		var infospotkk0 = new PANOLENS.Infospot(512, hotspotIcons[6].data, true);
		infospotkk0.position.set(-393.43, -2617.89, 4238.98);
		kk.add(infospotkk0);

		infospotkk0.addEventListener('click', function () {

			ChangePanorama('jj');

		});

		var infospotkk1 = new PANOLENS.Infospot(512, hotspotIcons[6].data, true);
		infospotkk1.position.set(-111.01, -3500.28, -3562.30);
		kk.add(infospotkk1);

		infospotkk1.addEventListener('click', function () {

			ChangePanorama('ll');

		});

		var infospotkk2 = new PANOLENS.Infospot(512, hotspotIcons[0].data, true);
		infospotkk2.position.set(4596.21, 1926.28, -329.27);
		infospotkk2.visible = false;
		kk.add(infospotkk2);

		infospotkk2.addEventListener('click', function () {

			showMedia(1, '/gbrvirtualtour/images/senat.jpg');

		});

		var infospotkk3 = new PANOLENS.Infospot(512, hotspotIcons[11].data, true);
		infospotkk3.position.set(-128.53, -4993.29, -112.11);
		kk.add(infospotkk3);

		infospotkk3.addEventListener('click', function () {

			showMedia(1, '/gbrvirtualtour/images/lt2.11.png');

		});

		viewer.add(kk);

		var ll = new PANOLENS.ImagePanorama("/gbrvirtualtour/panoramas/ll.jpg");
		ll.addEventListener('progress', function (e) {
			$("#loading").show();
		});
		ll.addEventListener('load', function (e) {
			$("#loading").fadeOut();
		});
		ll.addEventListener('click', function (e) {
		});


		var infospotll0 = new PANOLENS.Infospot(512, hotspotIcons[6].data, true);
		infospotll0.position.set(161.91, -3451.80, -3604.45);
		ll.add(infospotll0);

		infospotll0.addEventListener('click', function () {

			ChangePanorama('kk');

		});

		var infospotll1 = new PANOLENS.Infospot(512, hotspotIcons[6].data, true);
		infospotll1.position.set(-4007.96, -2960.33, 386.38);
		ll.add(infospotll1);

		infospotll1.addEventListener('click', function () {

			ChangePanorama('mm');

		});

		var infospotll2 = new PANOLENS.Infospot(512, hotspotIcons[0].data, true);
		infospotll2.position.set(4611.44, 1762.75, 728.12);
		infospotll2.visible = false;
		ll.add(infospotll2);

		infospotll2.addEventListener('click', function () {

			showMedia(1, '/gbrvirtualtour/images/dekan.jpg');

		});

		var infospotll3 = new PANOLENS.Infospot(512, hotspotIcons[0].data, true);
		infospotll3.position.set(-546.28, 1770.79, 4637.25);
		infospotll3.visible = false;
		ll.add(infospotll3);

		infospotll3.addEventListener('click', function () {

			showMedia(1, '/gbrvirtualtour/images/dosenikel.jpg');

		});

		var infospotll4 = new PANOLENS.Infospot(512, hotspotIcons[0].data, true);
		infospotll4.position.set(-4082.80, 947.35, 2707.73);
		infospotll4.visible = false;
		ll.add(infospotll4);

		infospotll4.addEventListener('click', function () {

			showMedia(1, '/gbrvirtualtour/images/dosenmatematika.jpg');

		});

		var infospotll5 = new PANOLENS.Infospot(512, hotspotIcons[11].data, true);
		infospotll5.position.set(41.42, -4997.52, 47.47);
		ll.add(infospotll5);

		infospotll5.addEventListener('click', function () {

			showMedia(1, '/gbrvirtualtour/images/lt2.12.png');

		});

		viewer.add(ll);

		var mm = new PANOLENS.ImagePanorama("/gbrvirtualtour/panoramas/mm.jpg");
		mm.addEventListener('progress', function (e) {
			$("#loading").show();
		});
		mm.addEventListener('load', function (e) {
			$("#loading").fadeOut();
		});
		mm.addEventListener('click', function (e) {
		});


		var infospotmm0 = new PANOLENS.Infospot(512, hotspotIcons[6].data, true);
		infospotmm0.position.set(157.95, -3468.43, 3589.28);
		mm.add(infospotmm0);

		infospotmm0.addEventListener('click', function () {

			ChangePanorama('ll');

		});

		var infospotmm1 = new PANOLENS.Infospot(512, hotspotIcons[6].data, true);
		infospotmm1.position.set(433.70, -3143.67, -3858.01);
		mm.add(infospotmm1);

		infospotmm1.addEventListener('click', function () {

			ChangePanorama('nn');

		});

		var infospotmm2 = new PANOLENS.Infospot(512, hotspotIcons[0].data, true);
		infospotmm2.position.set(4335.63, 1781.30, 1713.56);
		infospotmm2.visible = false;
		mm.add(infospotmm2);

		infospotmm2.addEventListener('click', function () {

			showMedia(1, '/gbrvirtualtour/images/wakildekan.jpg');

		});

		var infospotmm3 = new PANOLENS.Infospot(512, hotspotIcons[11].data, true);
		infospotmm3.position.set(-25.37, -4998.99, 4.62);
		mm.add(infospotmm3);

		infospotmm3.addEventListener('click', function () {

			showMedia(1, '/gbrvirtualtour/images/lt2.13.png');

		});

		viewer.add(mm);

		var nn = new PANOLENS.ImagePanorama("/gbrvirtualtour/panoramas/nn.jpg");
		nn.addEventListener('progress', function (e) {
			$("#loading").show();
		});
		nn.addEventListener('load', function (e) {
			$("#loading").fadeOut();
		});
		nn.addEventListener('click', function (e) {
		});


		var infospotnn0 = new PANOLENS.Infospot(512, hotspotIcons[6].data, true);
		infospotnn0.position.set(-77.51, -2855.60, -4096.70);
		nn.add(infospotnn0);

		infospotnn0.addEventListener('click', function () {

			ChangePanorama('mm');

		});

		var infospotnn1 = new PANOLENS.Infospot(512, hotspotIcons[6].data, true);
		infospotnn1.position.set(88.80, -3370.85, 3683.12);
		nn.add(infospotnn1);

		infospotnn1.addEventListener('click', function () {

			ChangePanorama('oo');

		});

		var infospotnn2 = new PANOLENS.Infospot(512, hotspotIcons[0].data, true);
		infospotnn2.position.set(3766.82, 1641.35, -2837.88);
		infospotnn2.visible = false;
		nn.add(infospotnn2);

		infospotnn2.addEventListener('click', function () {

			showMedia(1, '/gbrvirtualtour/images/jurusanfisika.jpg');

		});

		var infospotnn3 = new PANOLENS.Infospot(512, hotspotIcons[11].data, true);
		infospotnn3.position.set(-49.88, -4997.52, -38.55);
		nn.add(infospotnn3);

		infospotnn3.addEventListener('click', function () {

			showMedia(1, '/gbrvirtualtour/images/lt2.14.png');

		});

		viewer.add(nn);

		var oo = new PANOLENS.ImagePanorama("/gbrvirtualtour/panoramas/oo.jpg");
		oo.addEventListener('progress', function (e) {
			$("#loading").show();
		});
		oo.addEventListener('load', function (e) {
			$("#loading").fadeOut();
		});
		oo.addEventListener('click', function (e) {
		});


		var infospotoo0 = new PANOLENS.Infospot(512, hotspotIcons[6].data, true);
		infospotoo0.position.set(-281.26, -3593.56, -3458.03);
		oo.add(infospotoo0);

		infospotoo0.addEventListener('click', function () {

			ChangePanorama('nn');

		});

		var infospotoo1 = new PANOLENS.Infospot(512, hotspotIcons[0].data, true);
		infospotoo1.position.set(-4401.00, 1743.48, 1582.12);
		infospotoo1.visible = false;
		oo.add(infospotoo1);

		infospotoo1.addEventListener('click', function () {

			showMedia(1, '/gbrvirtualtour/images/drtamrin.jpg');

		});

		var infospotoo2 = new PANOLENS.Infospot(512, hotspotIcons[11].data, true);
		infospotoo2.position.set(27.33, -4998.88, -7.84);
		oo.add(infospotoo2);

		infospotoo2.addEventListener('click', function () {

			showMedia(1, '/gbrvirtualtour/images/lt2.15.png');

		});

		viewer.add(oo);

		var tanggatengahA = new PANOLENS.ImagePanorama("/gbrvirtualtour/panoramas/tanggatengahA.jpg");
		tanggatengahA.addEventListener('progress', function (e) {
			$("#loading").show();
		});
		tanggatengahA.addEventListener('load', function (e) {
			$("#loading").fadeOut();
		});
		tanggatengahA.addEventListener('click', function (e) {
		});


		var infospottanggatengahA0 = new PANOLENS.Infospot(512, hotspotIcons[6].data, true);
		infospottanggatengahA0.position.set(4889.04, 46.70, -1038.56);
		tanggatengahA.add(infospottanggatengahA0);

		infospottanggatengahA0.addEventListener('click', function () {

			ChangePanorama('hh');

		});

		var infospottanggatengahA1 = new PANOLENS.Infospot(512, hotspotIcons[6].data, true);
		infospottanggatengahA1.position.set(3804.01, -2806.99, 1607.93);
		tanggatengahA.add(infospottanggatengahA1);

		infospottanggatengahA1.addEventListener('click', function () {

			ChangePanorama('g');

		});

		var infospottanggatengahA2 = new PANOLENS.Infospot(512, hotspotIcons[11].data, true);
		infospottanggatengahA2.position.set(7.39, -4999.17, 19.77);
		tanggatengahA.add(infospottanggatengahA2);

		infospottanggatengahA2.addEventListener('click', function () {

			showMedia(1, '/gbrvirtualtour/images/tanggatengan1-2.png');

		});

		viewer.add(tanggatengahA);

		var aaa = new PANOLENS.ImagePanorama("/gbrvirtualtour/panoramas/aaa.jpg");
		aaa.addEventListener('progress', function (e) {
			$("#loading").show();
		});
		aaa.addEventListener('load', function (e) {
			$("#loading").fadeOut();
		});
		aaa.addEventListener('click', function (e) {
		});


		var infospotaaa0 = new PANOLENS.Infospot(512, hotspotIcons[6].data, true);
		infospotaaa0.position.set(3373.73, -1450.89, 3379.56);
		aaa.add(infospotaaa0);

		infospotaaa0.addEventListener('click', function () {

			ChangePanorama('tanggakiriB');

		});

		var infospotaaa1 = new PANOLENS.Infospot(512, hotspotIcons[6].data, true);
		infospotaaa1.position.set(-44.77, -3525.57, -3542.40);
		aaa.add(infospotaaa1);

		infospotaaa1.addEventListener('click', function () {

			ChangePanorama('bbb');

		});

		var infospotaaa2 = new PANOLENS.Infospot(512, hotspotIcons[0].data, true);
		infospotaaa2.position.set(4917.88, 874.33, -42.51);
		infospotaaa2.visible = false;
		aaa.add(infospotaaa2);

		infospotaaa2.addEventListener('click', function () {

			showMedia(1, '/gbrvirtualtour/images/ruangcic.jpg');

		});

		var infospotaaa3 = new PANOLENS.Infospot(512, hotspotIcons[11].data, true);
		infospotaaa3.position.set(110.61, -4994.77, 73.59);
		aaa.add(infospotaaa3);

		infospotaaa3.addEventListener('click', function () {

			showMedia(1, '/gbrvirtualtour/images/lt3.1.png');

		});

		viewer.add(aaa);

		var bbb = new PANOLENS.ImagePanorama("/gbrvirtualtour/panoramas/bbb.jpg");
		bbb.addEventListener('progress', function (e) {
			$("#loading").show();
		});
		bbb.addEventListener('load', function (e) {
			$("#loading").fadeOut();
		});
		bbb.addEventListener('click', function (e) {
		});


		var infospotbbb0 = new PANOLENS.Infospot(512, hotspotIcons[6].data, true);
		infospotbbb0.position.set(-3960.43, -2942.01, -801.92);
		bbb.add(infospotbbb0);

		infospotbbb0.addEventListener('click', function () {

			ChangePanorama('aaa');

		});

		var infospotbbb1 = new PANOLENS.Infospot(512, hotspotIcons[6].data, true);
		infospotbbb1.position.set(37.40, -2817.24, -4124.43);
		bbb.add(infospotbbb1);

		infospotbbb1.addEventListener('click', function () {

			ChangePanorama('ccc');

		});

		var infospotbbb2 = new PANOLENS.Infospot(512, hotspotIcons[0].data, true);
		infospotbbb2.position.set(4787.63, -1412.47, -96.48);
		infospotbbb2.visible = false;
		bbb.add(infospotbbb2);

		infospotbbb2.addEventListener('click', function () {

			showMedia(1, '/gbrvirtualtour/images/smartarea.jpg');

		});

		var infospotbbb3 = new PANOLENS.Infospot(512, hotspotIcons[0].data, true);
		infospotbbb3.position.set(1209.95, 509.49, 4814.81);
		infospotbbb3.visible = false;
		bbb.add(infospotbbb3);

		infospotbbb3.addEventListener('click', function () {

			showMedia(1, '/gbrvirtualtour/images/wc.jpg');

		});

		var infospotbbb4 = new PANOLENS.Infospot(512, hotspotIcons[11].data, true);
		infospotbbb4.position.set(-215.06, -4991.16, -65.99);
		bbb.add(infospotbbb4);

		infospotbbb4.addEventListener('click', function () {

			showMedia(1, '/gbrvirtualtour/images/lt3.2.png');

		});

		viewer.add(bbb);

		var ccc = new PANOLENS.ImagePanorama("/gbrvirtualtour/panoramas/ccc.jpg");
		ccc.addEventListener('progress', function (e) {
			$("#loading").show();
		});
		ccc.addEventListener('load', function (e) {
			$("#loading").fadeOut();
		});
		ccc.addEventListener('click', function (e) {
		});


		var infospotccc0 = new PANOLENS.Infospot(512, hotspotIcons[6].data, true);
		infospotccc0.position.set(-41.51, -3073.43, 3936.87);
		ccc.add(infospotccc0);

		infospotccc0.addEventListener('click', function () {

			ChangePanorama('bbb');

		});

		var infospotccc1 = new PANOLENS.Infospot(512, hotspotIcons[6].data, true);
		infospotccc1.position.set(-68.68, -3177.22, -3853.63);
		ccc.add(infospotccc1);

		infospotccc1.addEventListener('click', function () {

			ChangePanorama('ddd');

		});

		var infospotccc2 = new PANOLENS.Infospot(512, hotspotIcons[0].data, true);
		infospotccc2.position.set(3693.74, 1770.93, 2852.26);
		infospotccc2.visible = false;
		ccc.add(infospotccc2);

		infospotccc2.addEventListener('click', function () {

			showMedia(1, '/gbrvirtualtour/images/h31.jpg');

		});

		var infospotccc3 = new PANOLENS.Infospot(512, hotspotIcons[11].data, true);
		infospotccc3.position.set(-35.25, -4994.87, 125.63);
		ccc.add(infospotccc3);

		infospotccc3.addEventListener('click', function () {

			showMedia(1, '/gbrvirtualtour/images/lt3.3.png');

		});

		viewer.add(ccc);

		var ddd = new PANOLENS.ImagePanorama("/gbrvirtualtour/panoramas/ddd.jpg");
		ddd.addEventListener('progress', function (e) {
			$("#loading").show();
		});
		ddd.addEventListener('load', function (e) {
			$("#loading").fadeOut();
		});
		ddd.addEventListener('click', function (e) {
		});


		var infospotddd0 = new PANOLENS.Infospot(512, hotspotIcons[6].data, true);
		infospotddd0.position.set(-99.90, -2855.43, 4095.64);
		ddd.add(infospotddd0);

		infospotddd0.addEventListener('click', function () {

			ChangePanorama('ccc');

		});

		var infospotddd1 = new PANOLENS.Infospot(512, hotspotIcons[6].data, true);
		infospotddd1.position.set(-144.65, -3007.49, -3983.45);
		ddd.add(infospotddd1);

		infospotddd1.addEventListener('click', function () {

			ChangePanorama('eee');

		});

		var infospotddd2 = new PANOLENS.Infospot(512, hotspotIcons[0].data, true);
		infospotddd2.position.set(-3594.59, 1529.58, 3113.85);
		infospotddd2.visible = false;
		ddd.add(infospotddd2);

		infospotddd2.addEventListener('click', function () {

			showMedia(1, '/gbrvirtualtour/images/h32.jpg');

		});

		var infospotddd3 = new PANOLENS.Infospot(512, hotspotIcons[0].data, true);
		infospotddd3.position.set(-3713.08, 1617.21, -2918.37);
		infospotddd3.visible = false;
		ddd.add(infospotddd3);

		infospotddd3.addEventListener('click', function () {

			showMedia(1, '/gbrvirtualtour/images/h34.jpg');

		});

		var infospotddd4 = new PANOLENS.Infospot(512, hotspotIcons[11].data, true);
		infospotddd4.position.set(1.16, -4999.50, -12.67);
		ddd.add(infospotddd4);

		infospotddd4.addEventListener('click', function () {

			showMedia(1, '/gbrvirtualtour/images/lt3.4.png');

		});

		viewer.add(ddd);

		var eee = new PANOLENS.ImagePanorama("/gbrvirtualtour/panoramas/eee.jpg");
		eee.addEventListener('progress', function (e) {
			$("#loading").show();
		});
		eee.addEventListener('load', function (e) {
			$("#loading").fadeOut();
		});
		eee.addEventListener('click', function (e) {
		});


		var infospoteee0 = new PANOLENS.Infospot(512, hotspotIcons[6].data, true);
		infospoteee0.position.set(105.90, -2919.53, 4052.49);
		eee.add(infospoteee0);

		infospoteee0.addEventListener('click', function () {

			ChangePanorama('ddd');

		});

		var infospoteee1 = new PANOLENS.Infospot(512, hotspotIcons[6].data, true);
		infospoteee1.position.set(16.07, -3212.10, -3828.89);
		eee.add(infospoteee1);

		infospoteee1.addEventListener('click', function () {

			ChangePanorama('fff');

		});

		var infospoteee2 = new PANOLENS.Infospot(512, hotspotIcons[0].data, true);
		infospoteee2.position.set(3282.72, 1581.56, -3414.05);
		infospoteee2.visible = false;
		eee.add(infospoteee2);

		infospoteee2.addEventListener('click', function () {

			showMedia(1, '/gbrvirtualtour/images/h33.jpg');

		});

		var infospoteee3 = new PANOLENS.Infospot(512, hotspotIcons[11].data, true);
		infospoteee3.position.set(37.42, -4994.46, -135.72);
		eee.add(infospoteee3);

		infospoteee3.addEventListener('click', function () {

			showMedia(1, '/gbrvirtualtour/images/lt3.5.png');

		});

		viewer.add(eee);

		var fff = new PANOLENS.ImagePanorama("/gbrvirtualtour/panoramas/fff.jpg");
		fff.addEventListener('progress', function (e) {
			$("#loading").show();
		});
		fff.addEventListener('load', function (e) {
			$("#loading").fadeOut();
		});
		fff.addEventListener('click', function (e) {
		});


		var infospotfff0 = new PANOLENS.Infospot(512, hotspotIcons[6].data, true);
		infospotfff0.position.set(-183.39, -2595.93, 4262.86);
		fff.add(infospotfff0);

		infospotfff0.addEventListener('click', function () {

			ChangePanorama('eee');

		});

		var infospotfff1 = new PANOLENS.Infospot(512, hotspotIcons[6].data, true);
		infospotfff1.position.set(-47.29, -3046.85, -3957.53);
		fff.add(infospotfff1);

		infospotfff1.addEventListener('click', function () {

			ChangePanorama('ggg');

		});

		var infospotfff2 = new PANOLENS.Infospot(512, hotspotIcons[0].data, true);
		infospotfff2.position.set(-3795.19, 1670.32, 2785.89);
		infospotfff2.visible = false;
		fff.add(infospotfff2);

		infospotfff2.addEventListener('click', function () {

			showMedia(1, '/gbrvirtualtour/images/h36.jpg');

		});

		var infospotfff3 = new PANOLENS.Infospot(512, hotspotIcons[0].data, true);
		infospotfff3.position.set(-3439.36, 1648.77, -3222.39);
		infospotfff3.visible = false;
		fff.add(infospotfff3);

		infospotfff3.addEventListener('click', function () {

			showMedia(1, '/gbrvirtualtour/images/rsidang.jpg');

		});

		var infospotfff4 = new PANOLENS.Infospot(512, hotspotIcons[11].data, true);
		infospotfff4.position.set(-27.28, -4997.73, -50.78);
		fff.add(infospotfff4);

		infospotfff4.addEventListener('click', function () {

			showMedia(1, '/gbrvirtualtour/images/lt3.6.png');

		});

		viewer.add(fff);

		var ggg = new PANOLENS.ImagePanorama("/gbrvirtualtour/panoramas/ggg.jpg");
		ggg.addEventListener('progress', function (e) {
			$("#loading").show();
		});
		ggg.addEventListener('load', function (e) {
			$("#loading").fadeOut();
		});
		ggg.addEventListener('click', function (e) {
		});


		var infospotggg0 = new PANOLENS.Infospot(512, hotspotIcons[6].data, true);
		infospotggg0.position.set(-320.52, -2997.78, 3981.89);
		ggg.add(infospotggg0);

		infospotggg0.addEventListener('click', function () {

			ChangePanorama('fff');

		});

		var infospotggg1 = new PANOLENS.Infospot(512, hotspotIcons[6].data, true);
		infospotggg1.position.set(-24.66, -3403.49, -3656.30);
		ggg.add(infospotggg1);

		infospotggg1.addEventListener('click', function () {

			ChangePanorama('hhh');

		});

		var infospotggg2 = new PANOLENS.Infospot(512, hotspotIcons[0].data, true);
		infospotggg2.position.set(2716.72, 1065.97, -4048.87);
		infospotggg2.visible = false;
		ggg.add(infospotggg2);

		infospotggg2.addEventListener('click', function () {

			showMedia(1, '/gbrvirtualtour/images/dosenstatistik(2).jpg');

		});

		var infospotggg3 = new PANOLENS.Infospot(512, hotspotIcons[0].data, true);
		infospotggg3.position.set(-3444.99, 1430.20, 3316.54);
		infospotggg3.visible = false;
		ggg.add(infospotggg3);

		infospotggg3.addEventListener('click', function () {

			showMedia(1, '/gbrvirtualtour/images/labsisfo.jpg');

		});

		var infospotggg4 = new PANOLENS.Infospot(512, hotspotIcons[11].data, true);
		infospotggg4.position.set(45.05, -4987.83, -305.92);
		ggg.add(infospotggg4);

		infospotggg4.addEventListener('click', function () {

			showMedia(1, '/gbrvirtualtour/images/lt3.7.png');

		});

		viewer.add(ggg);

		var hhh = new PANOLENS.ImagePanorama("/gbrvirtualtour/panoramas/hhh.jpg");
		hhh.addEventListener('progress', function (e) {
			$("#loading").show();
		});
		hhh.addEventListener('load', function (e) {
			$("#loading").fadeOut();
		});
		hhh.addEventListener('click', function (e) {
		});


		var infospothhh0 = new PANOLENS.Infospot(512, hotspotIcons[6].data, true);
		infospothhh0.position.set(-200.09, -3065.90, 3934.50);
		hhh.add(infospothhh0);

		infospothhh0.addEventListener('click', function () {

			ChangePanorama('ggg');

		});

		var infospothhh1 = new PANOLENS.Infospot(512, hotspotIcons[6].data, true);
		infospothhh1.position.set(347.34, -4126.36, -2793.48);
		hhh.add(infospothhh1);

		infospothhh1.addEventListener('click', function () {

			ChangePanorama('iii');

		});

		var infospothhh2 = new PANOLENS.Infospot(512, hotspotIcons[6].data, true);
		infospothhh2.position.set(-3802.85, -1475.18, -2881.02);
		hhh.add(infospothhh2);

		infospothhh2.addEventListener('click', function () {

			ChangePanorama('tanggatengahB');

		});

		var infospothhh3 = new PANOLENS.Infospot(512, hotspotIcons[11].data, true);
		infospothhh3.position.set(-94.06, -4996.30, -1.11);
		hhh.add(infospothhh3);

		infospothhh3.addEventListener('click', function () {

			showMedia(1, '/gbrvirtualtour/images/lt3.8.png');

		});

		viewer.add(hhh);

		var iii = new PANOLENS.ImagePanorama("/gbrvirtualtour/panoramas/iii.jpg");
		iii.addEventListener('progress', function (e) {
			$("#loading").show();
		});
		iii.addEventListener('load', function (e) {
			$("#loading").fadeOut();
		});
		iii.addEventListener('click', function (e) {
		});


		var infospotiii0 = new PANOLENS.Infospot(512, hotspotIcons[6].data, true);
		infospotiii0.position.set(-197.11, -3161.19, 3859.54);
		iii.add(infospotiii0);

		infospotiii0.addEventListener('click', function () {

			ChangePanorama('hhh');

		});

		var infospotiii1 = new PANOLENS.Infospot(512, hotspotIcons[6].data, true);
		infospotiii1.position.set(347.56, -2866.00, -4075.60);
		iii.add(infospotiii1);

		infospotiii1.addEventListener('click', function () {

			ChangePanorama('jjj');

		});

		var infospotiii2 = new PANOLENS.Infospot(512, hotspotIcons[0].data, true);
		infospotiii2.position.set(4585.38, 1984.23, -26.23);
		infospotiii2.visible = false;
		iii.add(infospotiii2);

		infospotiii2.addEventListener('click', function () {

			showMedia(1, '/gbrvirtualtour/images/musolawanita.jpg');

		});

		var infospotiii3 = new PANOLENS.Infospot(512, hotspotIcons[0].data, true);
		infospotiii3.position.set(-4801.86, -1332.41, -255.71);
		infospotiii3.visible = false;
		iii.add(infospotiii3);

		infospotiii3.addEventListener('click', function () {

			showMedia(1, '/gbrvirtualtour/images/smartarea.jpg');

		});

		var infospotiii4 = new PANOLENS.Infospot(512, hotspotIcons[11].data, true);
		infospotiii4.position.set(-8.93, -4997.81, -55.02);
		iii.add(infospotiii4);

		infospotiii4.addEventListener('click', function () {

			showMedia(1, '/gbrvirtualtour/images/lt3.9.png');

		});

		viewer.add(iii);

		var jjj = new PANOLENS.ImagePanorama("/gbrvirtualtour/panoramas/jjj.jpg");
		jjj.addEventListener('progress', function (e) {
			$("#loading").show();
		});
		jjj.addEventListener('load', function (e) {
			$("#loading").fadeOut();
		});
		jjj.addEventListener('click', function (e) {
		});


		var infospotjjj0 = new PANOLENS.Infospot(512, hotspotIcons[6].data, true);
		infospotjjj0.position.set(-230.03, -3138.56, 3875.65);
		jjj.add(infospotjjj0);

		infospotjjj0.addEventListener('click', function () {

			ChangePanorama('iii');

		});

		var infospotjjj1 = new PANOLENS.Infospot(512, hotspotIcons[6].data, true);
		infospotjjj1.position.set(173.48, -3523.21, -3537.83);
		jjj.add(infospotjjj1);

		infospotjjj1.addEventListener('click', function () {

			ChangePanorama('kkk');

		});

		var infospotjjj2 = new PANOLENS.Infospot(512, hotspotIcons[0].data, true);
		infospotjjj2.position.set(2743.12, 1146.95, 4012.55);
		infospotjjj2.visible = false;
		jjj.add(infospotjjj2);

		infospotjjj2.addEventListener('click', function () {

			showMedia(1, '/gbrvirtualtour/images/h37.jpg');

		});

		var infospotjjj3 = new PANOLENS.Infospot(512, hotspotIcons[11].data, true);
		infospotjjj3.position.set(-206.91, -4990.86, 105.53);
		jjj.add(infospotjjj3);

		infospotjjj3.addEventListener('click', function () {

			showMedia(1, '/gbrvirtualtour/images/lt3.10.png');

		});

		viewer.add(jjj);

		var kkk = new PANOLENS.ImagePanorama("/gbrvirtualtour/panoramas/kkk.jpg");
		kkk.addEventListener('progress', function (e) {
			$("#loading").show();
		});
		kkk.addEventListener('load', function (e) {
			$("#loading").fadeOut();
		});
		kkk.addEventListener('click', function (e) {
		});


		var infospotkkk0 = new PANOLENS.Infospot(512, hotspotIcons[6].data, true);
		infospotkkk0.position.set(10.06, -2892.54, 4075.55);
		kkk.add(infospotkkk0);

		infospotkkk0.addEventListener('click', function () {

			ChangePanorama('jjj');

		});

		var infospotkkk1 = new PANOLENS.Infospot(512, hotspotIcons[6].data, true);
		infospotkkk1.position.set(-174.26, -3317.50, -3727.95);
		kkk.add(infospotkkk1);

		infospotkkk1.addEventListener('click', function () {

			ChangePanorama('lll');

		});

		var infospotkkk2 = new PANOLENS.Infospot(512, hotspotIcons[0].data, true);
		infospotkkk2.position.set(3323.06, 1446.23, 3432.08);
		infospotkkk2.visible = false;
		kkk.add(infospotkkk2);

		infospotkkk2.addEventListener('click', function () {

			showMedia(1, '/gbrvirtualtour/images/labikel.jpg');

		});

		var infospotkkk3 = new PANOLENS.Infospot(512, hotspotIcons[11].data, true);
		infospotkkk3.position.set(8.55, -4999.56, -7.02);
		kkk.add(infospotkkk3);

		infospotkkk3.addEventListener('click', function () {

			showMedia(1, '/gbrvirtualtour/images/lt3.11.png');

		});

		viewer.add(kkk);

		var lll = new PANOLENS.ImagePanorama("/gbrvirtualtour/panoramas/lll.jpg");
		lll.addEventListener('progress', function (e) {
			$("#loading").show();
		});
		lll.addEventListener('load', function (e) {
			$("#loading").fadeOut();
		});
		lll.addEventListener('click', function (e) {
		});


		var infospotlll0 = new PANOLENS.Infospot(512, hotspotIcons[6].data, true);
		infospotlll0.position.set(-178.69, -3063.80, 3937.28);
		lll.add(infospotlll0);

		infospotlll0.addEventListener('click', function () {

			ChangePanorama('kkk');

		});

		var infospotlll1 = new PANOLENS.Infospot(512, hotspotIcons[6].data, true);
		infospotlll1.position.set(3755.42, -3277.30, -359.15);
		lll.add(infospotlll1);

		infospotlll1.addEventListener('click', function () {

			ChangePanorama('mmm');

		});

		var infospotlll2 = new PANOLENS.Infospot(512, hotspotIcons[0].data, true);
		infospotlll2.position.set(-4378.22, 2160.12, -1044.95);
		infospotlll2.visible = false;
		lll.add(infospotlll2);

		infospotlll2.addEventListener('click', function () {

			showMedia(1, '/gbrvirtualtour/images/labfisika.jpg');

		});

		var infospotlll3 = new PANOLENS.Infospot(512, hotspotIcons[0].data, true);
		infospotlll3.position.set(1307.24, 1767.06, -4481.35);
		infospotlll3.visible = false;
		lll.add(infospotlll3);

		infospotlll3.addEventListener('click', function () {

			showMedia(1, '/gbrvirtualtour/images/h310.jpg');

		});

		var infospotlll4 = new PANOLENS.Infospot(512, hotspotIcons[11].data, true);
		infospotlll4.position.set(182.36, -4990.15, -171.56);
		lll.add(infospotlll4);

		infospotlll4.addEventListener('click', function () {

			showMedia(1, '/gbrvirtualtour/images/lt2.12.png');

		});

		viewer.add(lll);

		var mmm = new PANOLENS.ImagePanorama("/gbrvirtualtour/panoramas/mmm.jpg");
		mmm.addEventListener('progress', function (e) {
			$("#loading").show();
		});
		mmm.addEventListener('load', function (e) {
			$("#loading").fadeOut();
		});
		mmm.addEventListener('click', function (e) {
		});


		var infospotmmm0 = new PANOLENS.Infospot(512, hotspotIcons[6].data, true);
		infospotmmm0.position.set(501.79, -3150.15, 3842.06);
		mmm.add(infospotmmm0);

		infospotmmm0.addEventListener('click', function () {

			ChangePanorama('lll');

		});

		var infospotmmm1 = new PANOLENS.Infospot(512, hotspotIcons[6].data, true);
		infospotmmm1.position.set(-2.68, -2449.60, -4354.28);
		mmm.add(infospotmmm1);

		infospotmmm1.addEventListener('click', function () {

			ChangePanorama('nnn');

		});

		var infospotmmm2 = new PANOLENS.Infospot(512, hotspotIcons[0].data, true);
		infospotmmm2.position.set(3988.30, 1467.42, 2617.82);
		infospotmmm2.visible = false;
		mmm.add(infospotmmm2);

		infospotmmm2.addEventListener('click', function () {

			showMedia(1, '/gbrvirtualtour/images/ruangkontrol.jpg');

		});

		var infospotmmm3 = new PANOLENS.Infospot(512, hotspotIcons[0].data, true);
		infospotmmm3.position.set(3841.97, 1466.65, -2836.53);
		infospotmmm3.visible = false;
		mmm.add(infospotmmm3);

		infospotmmm3.addEventListener('click', function () {

			showMedia(1, '/gbrvirtualtour/images/ruangkompterb.jpg');

		});

		var infospotmmm4 = new PANOLENS.Infospot(512, hotspotIcons[11].data, true);
		infospotmmm4.position.set(-25.18, -4999.01, -0.13);
		mmm.add(infospotmmm4);

		infospotmmm4.addEventListener('click', function () {

			showMedia(1, '/gbrvirtualtour/images/lt3.13.png');

		});

		viewer.add(mmm);

		var nnn = new PANOLENS.ImagePanorama("/gbrvirtualtour/panoramas/nnn.jpg");
		nnn.addEventListener('progress', function (e) {
			$("#loading").show();
		});
		nnn.addEventListener('load', function (e) {
			$("#loading").fadeOut();
		});
		nnn.addEventListener('click', function (e) {
		});


		var infospotnnn0 = new PANOLENS.Infospot(512, hotspotIcons[6].data, true);
		infospotnnn0.position.set(9.23, -3268.54, 3781.85);
		nnn.add(infospotnnn0);

		infospotnnn0.addEventListener('click', function () {

			ChangePanorama('mmm');

		});

		var infospotnnn1 = new PANOLENS.Infospot(512, hotspotIcons[6].data, true);
		infospotnnn1.position.set(-140.23, -3844.04, -3186.60);
		nnn.add(infospotnnn1);

		infospotnnn1.addEventListener('click', function () {

			ChangePanorama('ooo');

		});

		var infospotnnn2 = new PANOLENS.Infospot(512, hotspotIcons[0].data, true);
		infospotnnn2.position.set(-3214.04, 1331.62, 3585.20);
		infospotnnn2.visible = false;
		nnn.add(infospotnnn2);

		infospotnnn2.addEventListener('click', function () {

			showMedia(1, '/gbrvirtualtour/images/ruangkomputera.jpg');

		});

		var infospotnnn3 = new PANOLENS.Infospot(512, hotspotIcons[11].data, true);
		infospotnnn3.position.set(-26.37, -4998.96, 1.43);
		nnn.add(infospotnnn3);

		infospotnnn3.addEventListener('click', function () {

			showMedia(1, '/gbrvirtualtour/images/lt3.14.png');

		});

		viewer.add(nnn);

		var ooo = new PANOLENS.ImagePanorama("/gbrvirtualtour/panoramas/ooo.jpg");
		ooo.addEventListener('progress', function (e) {
			$("#loading").show();
		});
		ooo.addEventListener('load', function (e) {
			$("#loading").fadeOut();
		});
		ooo.addEventListener('click', function (e) {
		});


		var infospotooo0 = new PANOLENS.Infospot(512, hotspotIcons[6].data, true);
		infospotooo0.position.set(450.63, -3160.53, 3841.89);
		ooo.add(infospotooo0);

		infospotooo0.addEventListener('click', function () {

			ChangePanorama('nnn');

		});

		var infospotooo1 = new PANOLENS.Infospot(512, hotspotIcons[0].data, true);
		infospotooo1.position.set(4559.51, 1956.09, -575.62);
		infospotooo1.visible = false;
		ooo.add(infospotooo1);

		infospotooo1.addEventListener('click', function () {

			showMedia(1, '/gbrvirtualtour/images/h39.jpg');

		});

		var infospotooo2 = new PANOLENS.Infospot(512, hotspotIcons[11].data, true);
		infospotooo2.position.set(107.13, -4995.25, -55.64);
		ooo.add(infospotooo2);

		infospotooo2.addEventListener('click', function () {

			showMedia(1, '/gbrvirtualtour/images/lt3.15.png');

		});

		viewer.add(ooo);

		var tanggakiriB = new PANOLENS.ImagePanorama("/gbrvirtualtour/panoramas/tanggakiriB.jpg");
		tanggakiriB.addEventListener('progress', function (e) {
			$("#loading").show();
		});
		tanggakiriB.addEventListener('load', function (e) {
			$("#loading").fadeOut();
		});
		tanggakiriB.addEventListener('click', function (e) {
		});


		var infospottanggakiriB0 = new PANOLENS.Infospot(512, hotspotIcons[6].data, true);
		infospottanggakiriB0.position.set(4963.27, 333.40, -450.93);
		tanggakiriB.add(infospottanggakiriB0);

		infospottanggakiriB0.addEventListener('click', function () {

			ChangePanorama('aaa');

		});

		var infospottanggakiriB1 = new PANOLENS.Infospot(512, hotspotIcons[6].data, true);
		infospottanggakiriB1.position.set(4235.76, -2069.01, 1638.02);
		tanggakiriB.add(infospottanggakiriB1);

		infospottanggakiriB1.addEventListener('click', function () {

			ChangePanorama('aa');

		});

		var infospottanggakiriB2 = new PANOLENS.Infospot(512, hotspotIcons[11].data, true);
		infospottanggakiriB2.position.set(162.88, -4992.29, 108.97);
		tanggakiriB.add(infospottanggakiriB2);

		infospottanggakiriB2.addEventListener('click', function () {

			showMedia(1, '/gbrvirtualtour/images/tanggakiri2-3.png');

		});

		viewer.add(tanggakiriB);

		var tanggatengahB = new PANOLENS.ImagePanorama("/gbrvirtualtour/panoramas/tanggatengahB.jpg");
		tanggatengahB.addEventListener('progress', function (e) {
			$("#loading").show();
		});
		tanggatengahB.addEventListener('load', function (e) {
			$("#loading").fadeOut();
		});
		tanggatengahB.addEventListener('click', function (e) {
		});


		var infospottanggatengahB0 = new PANOLENS.Infospot(512, hotspotIcons[6].data, true);
		infospottanggatengahB0.position.set(4947.46, 350.24, -593.60);
		tanggatengahB.add(infospottanggatengahB0);

		infospottanggatengahB0.addEventListener('click', function () {

			ChangePanorama('hhh');

		});

		var infospottanggatengahB1 = new PANOLENS.Infospot(512, hotspotIcons[6].data, true);
		infospottanggatengahB1.position.set(4475.95, -2037.24, 864.36);
		tanggatengahB.add(infospottanggatengahB1);

		infospottanggatengahB1.addEventListener('click', function () {

			ChangePanorama('hh');

		});

		var infospottanggatengahB2 = new PANOLENS.Infospot(512, hotspotIcons[11].data, true);
		infospottanggatengahB2.position.set(-31.64, -4998.38, -26.38);
		tanggatengahB.add(infospottanggatengahB2);

		infospottanggatengahB2.addEventListener('click', function () {

			showMedia(1, '/gbrvirtualtour/images/tanggatengan2-3.png');

		});

		viewer.add(tanggatengahB);

		$(document).ready(function () { ChangePanorama('gbkananhight'); });


		/*panoramas-end*/


		function hideTemp() {
			$("#tmp").fadeOut();
			setTimeout(function () {
				$("#tmpcontent").html("");
			}, 1000);
		}

		function showMedia(type, content) {
			switch (type) {
				case 1:
					//Image
					$("#tmpcontent").html("<img src='" + content + "' style='width: 100%;'>");
					$("#tmp").fadeIn();
					break;
				case 2:
					//Video
					$("#tmpcontent").html("<video id='webvideo' controls autoplay style='width: 100%; height: 100%;'><source src='" + content + "' type='video/mp4'> Your browser does not support the video tag. </video>");
					$("#tmp").fadeIn();
					break;
				case 3:
					//Audio
					$("#tmpcontent").html("<audio controls style='width: 100%;'><source src='" + content + "' type='audio/ogg'>Your browser does not support the audio tag.</audio>");
					$("#tmp").fadeIn();
					break;
				case 4:
					//PDF
					$("#tmpcontent").html("<iframe src='pdfjs/web/viewer.html?file=../../" + content + "' style='width: 100%; height: 99%;'></iframe>");
					$("#tmp").fadeIn();
					break;
			}
		}



		//Update Callback
		viewer.addUpdateCallback(function () {

			/*viewerupdatecallback*/
			if (viewer.panorama == gbkananhight) {
			}

			if (viewer.panorama == h) {
				ShowMyInfospot(infospoth4, 'infospoth4');
			}

			if (viewer.panorama == i) {
				ShowMyInfospot(infospoti1, 'infospoti1');
			}

			if (viewer.panorama == g) {
				ShowMyInfospot(infospotg2, 'infospotg2');
			}

			if (viewer.panorama == f) {
				ShowMyInfospot(infospotf2, 'infospotf2');
				ShowMyInfospot(infospotf3, 'infospotf3');
			}

			if (viewer.panorama == e) {
				ShowMyInfospot(infospote2, 'infospote2');
			}

			if (viewer.panorama == d) {
				ShowMyInfospot(infospotd2, 'infospotd2');
			}

			if (viewer.panorama == c) {
				ShowMyInfospot(infospotc2, 'infospotc2');
				ShowMyInfospot(infospotc3, 'infospotc3');
			}

			if (viewer.panorama == b) {
				ShowMyInfospot(infospotb2, 'infospotb2');
			}

			if (viewer.panorama == a) {
				ShowMyInfospot(infospota2, 'infospota2');
			}

			if (viewer.panorama == gbkirihight) {
			}

			if (viewer.panorama == tuguhight) {
			}

			if (viewer.panorama == tanggakiriA) {
			}

			if (viewer.panorama == aa) {
				ShowMyInfospot(infospotaa2, 'infospotaa2');
			}

			if (viewer.panorama == bb) {
				ShowMyInfospot(infospotbb2, 'infospotbb2');
				ShowMyInfospot(infospotbb3, 'infospotbb3');
			}

			if (viewer.panorama == cc) {
				ShowMyInfospot(infospotcc2, 'infospotcc2');
				ShowMyInfospot(infospotcc3, 'infospotcc3');
			}

			if (viewer.panorama == dd) {
				ShowMyInfospot(infospotdd2, 'infospotdd2');
			}

			if (viewer.panorama == ee) {
				ShowMyInfospot(infospotee2, 'infospotee2');
				ShowMyInfospot(infospotee3, 'infospotee3');
				ShowMyInfospot(infospotee4, 'infospotee4');
				ShowMyInfospot(infospotee5, 'infospotee5');
			}

			if (viewer.panorama == fg) {
				ShowMyInfospot(infospotfg2, 'infospotfg2');
				ShowMyInfospot(infospotfg3, 'infospotfg3');
			}

			if (viewer.panorama == hh) {
				ShowMyInfospot(infospothh2, 'infospothh2');
			}

			if (viewer.panorama == ii) {
				ShowMyInfospot(infospotii2, 'infospotii2');
				ShowMyInfospot(infospotii3, 'infospotii3');
			}

			if (viewer.panorama == jj) {
				ShowMyInfospot(infospotjj2, 'infospotjj2');
			}

			if (viewer.panorama == kk) {
				ShowMyInfospot(infospotkk2, 'infospotkk2');
			}

			if (viewer.panorama == ll) {
				ShowMyInfospot(infospotll2, 'infospotll2');
				ShowMyInfospot(infospotll3, 'infospotll3');
				ShowMyInfospot(infospotll4, 'infospotll4');
			}

			if (viewer.panorama == mm) {
				ShowMyInfospot(infospotmm2, 'infospotmm2');
			}

			if (viewer.panorama == nn) {
				ShowMyInfospot(infospotnn2, 'infospotnn2');
			}

			if (viewer.panorama == oo) {
				ShowMyInfospot(infospotoo1, 'infospotoo1');
			}

			if (viewer.panorama == tanggatengahA) {
			}

			if (viewer.panorama == aaa) {
				ShowMyInfospot(infospotaaa2, 'infospotaaa2');
			}

			if (viewer.panorama == bbb) {
				ShowMyInfospot(infospotbbb2, 'infospotbbb2');
				ShowMyInfospot(infospotbbb3, 'infospotbbb3');
			}

			if (viewer.panorama == ccc) {
				ShowMyInfospot(infospotccc2, 'infospotccc2');
			}

			if (viewer.panorama == ddd) {
				ShowMyInfospot(infospotddd2, 'infospotddd2');
				ShowMyInfospot(infospotddd3, 'infospotddd3');
			}

			if (viewer.panorama == eee) {
				ShowMyInfospot(infospoteee2, 'infospoteee2');
			}

			if (viewer.panorama == fff) {
				ShowMyInfospot(infospotfff2, 'infospotfff2');
				ShowMyInfospot(infospotfff3, 'infospotfff3');
			}

			if (viewer.panorama == ggg) {
				ShowMyInfospot(infospotggg2, 'infospotggg2');
				ShowMyInfospot(infospotggg3, 'infospotggg3');
			}

			if (viewer.panorama == hhh) {
			}

			if (viewer.panorama == iii) {
				ShowMyInfospot(infospotiii2, 'infospotiii2');
				ShowMyInfospot(infospotiii3, 'infospotiii3');
			}

			if (viewer.panorama == jjj) {
				ShowMyInfospot(infospotjjj2, 'infospotjjj2');
			}

			if (viewer.panorama == kkk) {
				ShowMyInfospot(infospotkkk2, 'infospotkkk2');
			}

			if (viewer.panorama == lll) {
				ShowMyInfospot(infospotlll2, 'infospotlll2');
				ShowMyInfospot(infospotlll3, 'infospotlll3');
			}

			if (viewer.panorama == mmm) {
				ShowMyInfospot(infospotmmm2, 'infospotmmm2');
				ShowMyInfospot(infospotmmm3, 'infospotmmm3');
			}

			if (viewer.panorama == nnn) {
				ShowMyInfospot(infospotnnn2, 'infospotnnn2');
			}

			if (viewer.panorama == ooo) {
				ShowMyInfospot(infospotooo1, 'infospotooo1');
			}

			if (viewer.panorama == tanggakiriB) {
			}

			if (viewer.panorama == tanggatengahB) {
			}
			/*viewerupdatecallback-end*/


		});



		var hotspotsvisible = true;
		function ShowMyInfospot(hs, elid) {
			var thehs = toScreenPosition(hs);
			if (thehs.z < 1) {
				$("#" + elid).css({
					"top": (thehs.y - ($("#" + elid).height() / 2)) + "px",
					"left": (thehs.x - ($("#" + elid).width() / 2)) + "px",
				});
				if (hotspotsvisible)
					$("#" + elid).show();
			} else {
				$("#" + elid).hide();
			}

		}

		function toScreenPosition(obj) {
			var vector = new THREE.Vector3();
			var widthHalf = 0.5 * innerWidth;
			var heightHalf = 0.5 * innerHeight;

			//obj.updateMatrixWorld();				
			vector.setFromMatrixPosition(obj.matrixWorld);


			vector.project(viewer.camera);

			vector.x = (vector.x * widthHalf) + widthHalf;
			vector.y = - (vector.y * heightHalf) + heightHalf;


			return {
				x: vector.x,
				y: vector.y,
				z: vector.z,
			};

		};

		var currentPanorama;
		function ChangePanorama(panorama) {
			currentPanorama = panorama;
			HideInfospots();
			//$("#loading").fadeIn();
			//$(".customhotspot").fadeOut();
			setTimeout(function () {
				viewer.setPanorama(window[panorama]);
			}, 500);
			setTimeout(function () {
				$("#" + panorama).fadeIn();
			}, 1500);

		}

		function HideInfospots() {
			$(".customhotspot").fadeOut();
		}

		/*customjs*/
		function chclickinfospoth4() {
			showMedia(1, '/gbrvirtualtour/images/tamu.jpg');

		}

		function chclickinfospoti1() {
			showMedia(1, '/gbrvirtualtour/images/baca.jpg');

		}

		function chclickinfospotg2() {
			showMedia(1, '/gbrvirtualtour/images/kepegawaian.jpg');

		}

		function chclickinfospotf2() {
			showMedia(1, '/gbrvirtualtour/images/umper.jpg');

		}

		function chclickinfospotf3() {
			showMedia(1, '/gbrvirtualtour/images/akademik.jpg');

		}

		function chclickinfospote2() {
			showMedia(1, '/gbrvirtualtour/images/teller.jpg');

		}

		function chclickinfospotd2() {
			showMedia(1, '/gbrvirtualtour/images/h14.jpg');

		}

		function chclickinfospotc2() {
			showMedia(1, '/gbrvirtualtour/images/h12.jpg');

		}

		function chclickinfospotc3() {
			showMedia(1, '/gbrvirtualtour/images/h11.jpg');

		}

		function chclickinfospotb2() {
			showMedia(1, '/gbrvirtualtour/images/wc.jpg');

		}

		function chclickinfospota2() {
			showMedia(1, '/gbrvirtualtour/images/cswanita.jpg');

		}

		function chclickinfospotaa2() {
			showMedia(1, '/gbrvirtualtour/images/ruangtik.jpg');

		}

		function chclickinfospotbb2() {
			showMedia(1, '/gbrvirtualtour/images/smartarea.jpg');

		}

		function chclickinfospotbb3() {
			showMedia(1, '/gbrvirtualtour/images/wc.jpg');

		}

		function chclickinfospotcc2() {
			showMedia(1, '/gbrvirtualtour/images/h22.jpg');

		}

		function chclickinfospotcc3() {
			showMedia(1, '/gbrvirtualtour/images/h24.jpg');

		}

		function chclickinfospotdd2() {
			showMedia(1, '/gbrvirtualtour/images/dosenkimia.jpg');

		}

		function chclickinfospotee2() {
			showMedia(1, '/gbrvirtualtour/images/dosensisfo.jpg');

		}

		function chclickinfospotee3() {
			showMedia(1, '/gbrvirtualtour/images/h23.jpg');

		}

		function chclickinfospotee4() {
			showMedia(1, '/gbrvirtualtour/images/h26.jpg');

		}

		function chclickinfospotee5() {
			showMedia(1, '/gbrvirtualtour/images/h28.jpg');

		}

		function chclickinfospotfg2() {
			showMedia(1, '/gbrvirtualtour/images/h210.jpg');

		}

		function chclickinfospotfg3() {
			showMedia(1, '/gbrvirtualtour/images/ruangjurusanmtk.jpg');

		}

		function chclickinfospothh2() {
			showMedia(1, '/gbrvirtualtour/images/drharlia.jpg');

		}

		function chclickinfospotii2() {
			showMedia(1, '/gbrvirtualtour/images/musolapria.jpg');

		}

		function chclickinfospotii3() {
			showMedia(1, '/gbrvirtualtour/images/smartarea.jpg');

		}

		function chclickinfospotjj2() {
			showMedia(1, '/gbrvirtualtour/images/keuangan.jpg');

		}

		function chclickinfospotkk2() {
			showMedia(1, '/gbrvirtualtour/images/senat.jpg');

		}

		function chclickinfospotll2() {
			showMedia(1, '/gbrvirtualtour/images/dekan.jpg');

		}

		function chclickinfospotll3() {
			showMedia(1, '/gbrvirtualtour/images/dosenikel.jpg');

		}

		function chclickinfospotll4() {
			showMedia(1, '/gbrvirtualtour/images/dosenmatematika.jpg');

		}

		function chclickinfospotmm2() {
			showMedia(1, '/gbrvirtualtour/images/wakildekan.jpg');

		}

		function chclickinfospotnn2() {
			showMedia(1, '/gbrvirtualtour/images/jurusanfisika.jpg');

		}

		function chclickinfospotoo1() {
			showMedia(1, '/gbrvirtualtour/images/drtamrin.jpg');

		}

		function chclickinfospotaaa2() {
			showMedia(1, '/gbrvirtualtour/images/ruangcic.jpg');

		}

		function chclickinfospotbbb2() {
			showMedia(1, '/gbrvirtualtour/images/smartarea.jpg');

		}

		function chclickinfospotbbb3() {
			showMedia(1, '/gbrvirtualtour/images/wc.jpg');

		}

		function chclickinfospotccc2() {
			showMedia(1, '/gbrvirtualtour/images/h31.jpg');

		}

		function chclickinfospotddd2() {
			showMedia(1, '/gbrvirtualtour/images/h32.jpg');

		}

		function chclickinfospotddd3() {
			showMedia(1, '/gbrvirtualtour/images/h34.jpg');

		}

		function chclickinfospoteee2() {
			showMedia(1, '/gbrvirtualtour/images/h33.jpg');

		}

		function chclickinfospotfff2() {
			showMedia(1, '/gbrvirtualtour/images/h36.jpg');

		}

		function chclickinfospotfff3() {
			showMedia(1, '/gbrvirtualtour/images/rsidang.jpg');

		}

		function chclickinfospotggg2() {
			showMedia(1, '/gbrvirtualtour/images/dosenstatistik(2).jpg');

		}

		function chclickinfospotggg3() {
			showMedia(1, '/gbrvirtualtour/images/labsisfo.jpg');

		}

		function chclickinfospotiii2() {
			showMedia(1, '/gbrvirtualtour/images/musolawanita.jpg');

		}

		function chclickinfospotiii3() {
			showMedia(1, '/gbrvirtualtour/images/smartarea.jpg');

		}

		function chclickinfospotjjj2() {
			showMedia(1, '/gbrvirtualtour/images/h37.jpg');

		}

		function chclickinfospotkkk2() {
			showMedia(1, '/gbrvirtualtour/images/labikel.jpg');

		}

		function chclickinfospotlll2() {
			showMedia(1, '/gbrvirtualtour/images/labfisika.jpg');

		}

		function chclickinfospotlll3() {
			showMedia(1, '/gbrvirtualtour/images/h310.jpg');

		}

		function chclickinfospotmmm2() {
			showMedia(1, '/gbrvirtualtour/images/ruangkontrol.jpg');

		}

		function chclickinfospotmmm3() {
			showMedia(1, '/gbrvirtualtour/images/ruangkompterb.jpg');

		}

		function chclickinfospotnnn2() {
			showMedia(1, '/gbrvirtualtour/images/ruangkomputera.jpg');

		}

		function chclickinfospotooo1() {
			showMedia(1, '/gbrvirtualtour/images/h39.jpg');

		}
		/*customjs-end*/

		/*nav*/
		document.getElementById("lt1-1").addEventListener('click', function () {
			ChangePanorama('a');
		});
		document.getElementById("lt1-2").addEventListener('click', function () {
			ChangePanorama('b');
		});
		document.getElementById("lt1-3").addEventListener('click', function () {
			ChangePanorama('c');
		});
		document.getElementById("lt1-4").addEventListener('click', function () {
			ChangePanorama('d');
		});
		document.getElementById("lt1-5").addEventListener('click', function () {
			ChangePanorama('e');
		});
		document.getElementById("lt1-6").addEventListener('click', function () {
			ChangePanorama('f');
		});
		document.getElementById("lt1-7").addEventListener('click', function () {
			ChangePanorama('g');
		});
		document.getElementById("lt1-8").addEventListener('click', function () {
			ChangePanorama('h');
		});
		document.getElementById("lt1-9").addEventListener('click', function () {
			ChangePanorama('i');
		});


		document.getElementById("lt2-1").addEventListener('click', function () {
			ChangePanorama('aa');
		});
		document.getElementById("lt2-2").addEventListener('click', function () {
			ChangePanorama('bb');
		});
		document.getElementById("lt2-3").addEventListener('click', function () {
			ChangePanorama('cc');
		});
		document.getElementById("lt2-4").addEventListener('click', function () {
			ChangePanorama('dd');
		});
		document.getElementById("lt2-5").addEventListener('click', function () {
			ChangePanorama('ee');
		});
		document.getElementById("lt2-6.7").addEventListener('click', function () {
			ChangePanorama('fg');
		});
		document.getElementById("lt2-8").addEventListener('click', function () {
			ChangePanorama('hh');
		});
		document.getElementById("lt2-9").addEventListener('click', function () {
			ChangePanorama('ii');
		});
		document.getElementById("lt2-10").addEventListener('click', function () {
			ChangePanorama('jj');
		});
		document.getElementById("lt2-11").addEventListener('click', function () {
			ChangePanorama('kk');
		});
		document.getElementById("lt2-12").addEventListener('click', function () {
			ChangePanorama('ll');
		});
		document.getElementById("lt2-13").addEventListener('click', function () {
			ChangePanorama('mm');
		});
		document.getElementById("lt2-14").addEventListener('click', function () {
			ChangePanorama('nn');
		});
		document.getElementById("lt2-15").addEventListener('click', function () {
			ChangePanorama('oo');
		});


		document.getElementById("lt3-1").addEventListener('click', function () {
			ChangePanorama('aaa');
		});
		document.getElementById("lt3-2").addEventListener('click', function () {
			ChangePanorama('bbb');
		});
		document.getElementById("lt3-3").addEventListener('click', function () {
			ChangePanorama('ccc');
		});
		document.getElementById("lt3-4").addEventListener('click', function () {
			ChangePanorama('ddd');
		});
		document.getElementById("lt3-5").addEventListener('click', function () {
			ChangePanorama('eee');
		});
		document.getElementById("lt3-6").addEventListener('click', function () {
			ChangePanorama('fff');
		});
		document.getElementById("lt3-7").addEventListener('click', function () {
			ChangePanorama('ggg');
		});
		
		document.getElementById("lt3-9").addEventListener('click', function () {
			ChangePanorama('iii');
		});
		document.getElementById("lt3-10").addEventListener('click', function () {
			ChangePanorama('jjj');
		});
		document.getElementById("lt3-11").addEventListener('click', function () {
			ChangePanorama('kkk');
		});
		document.getElementById("lt3-12").addEventListener('click', function () {
			ChangePanorama('lll');
		});
		document.getElementById("lt3-13").addEventListener('click', function () {
			ChangePanorama('mmm');
		});
		document.getElementById("lt3-14").addEventListener('click', function () {
			ChangePanorama('nnn');
		});
		document.getElementById("lt3-15").addEventListener('click', function () {
			ChangePanorama('ooo');
		});
		document.getElementById("tugu").addEventListener('click', function () {
			ChangePanorama('tuguhight');
		});

	</script>
</body>

</html>