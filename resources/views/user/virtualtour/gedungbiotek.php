<!DOCTYPE html>
<html lang="en">

<head>
	<title>Gedung Biotek FMIPA</title>
	<!--projectdescription-->
	<meta name="description" content="">
	<!--projectdescription-end-->
	<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
	<meta charset="utf-8">
	<meta name="viewport"
		content="initial-scale=1, maximum-scale=1, user-scalable=no, width=device-width, shrink-to-fit=no">

	<link rel="stylesheet" type="text/css" href="/biovirtualtour/css/font-awesome.css">
	<link rel="stylesheet" type="text/css" href="/biovirtualtour/styles.css">
	<link href="https://cdn.datatables.net/1.10.20/css/dataTables.bootstrap4.min.css" rel="stylesheet"
		crossorigin="anonymous" />

	<!-- Insert this line above script imports  -->
	<script>if (typeof module === 'object') { window.module = module; module = undefined; }</script>

	<script src="/biovirtualtour/imagedata.js"></script>
	<script src="/biovirtualtour/jquery.js"></script>
	<script src="/biovirtualtour/three.min.js"></script>
	<script src="/biovirtualtour/panolens.min.js"></script>

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
							src="/biovirtualtour/imgs/Lambang_Universitas_Tanjungpura.png" width="Logo"> FMIPA 360</a>
					</li>

					<table class="table table-borderless" id="dataTable" cellspacing="0">
						<thead>
							<tr>
								<th></th>
							</tr>
						</thead>
						<tbody>
							<tr>
								<td><button type="button" id="b2" class="btn btn-primary btn-block mb-2"
										tabindex="0">R. dosen fisika, R. laboratorium ilmu kelautan</button></td>
							</tr>
							<tr>
								<td><button type="button" id="b3" class="btn btn-primary btn-block mb-2"
										tabindex="0">R. laboratorium fisika dasar, R. jurusan fisika</button></td>
							</tr>
							<tr>
								<td><button type="button" id="b5" class="btn btn-primary btn-block mb-2"
										tabindex="0">WC</button></td>
							</tr>
							<tr>
								<td><button type="button" id="b6" class="btn btn-primary btn-block mb-2"
										tabindex="0">R. sidang</button></td>
							</tr>
							<tr>
								<td><button type="button" id="b7" class="btn btn-primary btn-block mb-2"
										tabindex="0">R. laboratorium geofisika dan SIG</button></td>
							</tr>
							<tr>
								<td><button type="button" id="b8" class="btn btn-primary btn-block mb-2"
										tabindex="0">R. laboratorium pigmen</button></td>
							</tr>
							<tr>
								<td><button type="button" id="b9" class="btn btn-primary btn-block mb-2"
										tabindex="0">R. laboratorium fisika lanjut</button></td>
							</tr>
							<tr>
								<td><button type="button" id="b10" class="btn btn-primary btn-block mb-2"
										tabindex="0">R. ASS</button></td>
							</tr>
							<tr>
								<td><button type="button" id="b11" class="btn btn-primary btn-block mb-2"
										tabindex="0">R. kepala bioteknologi dan riset, R. laboratorium kimia anorganik</button></td>
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
		<script src="/biovirtualtour/datatable.js"></script>
	</div>
</body>

<body id="body">
	<div id="container" style="color: black;"></div>



	<!--customhtml-->
	<div class='customhotspot' id='a'></div>
	<div class='customhotspot' id='b'>
		<div onclick='chclickinfospotb3();' id='infospotb3' style='position: fixed; top: 0; left: 0; cursor: pointer;'>
			<img src='/biovirtualtour/customhotspots/infospot.png' style='width: 64px; height: 64px;'></div>
		<div onclick='chclickinfospotb4();' id='infospotb4' style='position: fixed; top: 0; left: 0; cursor: pointer;'>
			<img src='/biovirtualtour/customhotspots/infospot.png' style='width: 64px; height: 64px;'></div>
	</div>
	<div class='customhotspot' id='c'>
		<div onclick='chclickinfospotc2();' id='infospotc2' style='position: fixed; top: 0; left: 0; cursor: pointer;'>
			<img src='/biovirtualtour/customhotspots/infospot.png' style='width: 64px; height: 64px;'></div>
		<div onclick='chclickinfospotc3();' id='infospotc3' style='position: fixed; top: 0; left: 0; cursor: pointer;'>
			<img src='/biovirtualtour/customhotspots/infospot.png' style='width: 64px; height: 64px;'></div>
	</div>
	<div class='customhotspot' id='d'></div>
	<div class='customhotspot' id='e'>
		<div onclick='chclickinfospote2();' id='infospote2' style='position: fixed; top: 0; left: 0; cursor: pointer;'>
			<img src='/biovirtualtour/customhotspots/infospot.png' style='width: 64px; height: 64px;'></div>
	</div>
	<div class='customhotspot' id='f'>
		<div onclick='chclickinfospotf2();' id='infospotf2' style='position: fixed; top: 0; left: 0; cursor: pointer;'>
			<img src='/biovirtualtour/customhotspots/infospot.png' style='width: 64px; height: 64px;'></div>
	</div>
	<div class='customhotspot' id='g'>
		<div onclick='chclickinfospotg2();' id='infospotg2' style='position: fixed; top: 0; left: 0; cursor: pointer;'>
			<img src='/biovirtualtour/customhotspots/infospot.png' style='width: 64px; height: 64px;'></div>
	</div>
	<div class='customhotspot' id='ga'></div>
	<div class='customhotspot' id='h'>
		<div onclick='chclickinfospoth2();' id='infospoth2' style='position: fixed; top: 0; left: 0; cursor: pointer;'>
			<img src='/biovirtualtour/customhotspots/infospot.png' style='width: 64px; height: 64px;'></div>
	</div>
	<div class='customhotspot' id='i'>
		<div onclick='chclickinfospoti2();' id='infospoti2' style='position: fixed; top: 0; left: 0; cursor: pointer;'>
			<img src='/biovirtualtour/customhotspots/infospot.png' style='width: 64px; height: 64px;'></div>
	</div>
	<div class='customhotspot' id='j'>
		<div onclick='chclickinfospotj2();' id='infospotj2' style='position: fixed; top: 0; left: 0; cursor: pointer;'>
			<img src='/biovirtualtour/customhotspots/infospot.png' style='width: 64px; height: 64px;'></div>
	</div>
	<div class='customhotspot' id='k'>
		<div onclick='chclickinfospotk2();' id='infospotk2' style='position: fixed; top: 0; left: 0; cursor: pointer;'>
			<img src='/biovirtualtour/customhotspots/infospot.png' style='width: 64px; height: 64px;'></div>
		<div onclick='chclickinfospotk3();' id='infospotk3' style='position: fixed; top: 0; left: 0; cursor: pointer;'>
			<img src='/biovirtualtour/customhotspots/infospot.png' style='width: 64px; height: 64px;'></div>
	</div>
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

		var a = new PANOLENS.ImagePanorama("/biovirtualtour/panoramas/a.jpg");
		a.addEventListener('progress', function (e) {
			$("#loading").show();
		});
		a.addEventListener('load', function (e) {
			$("#loading").fadeOut();
		});
		a.addEventListener('click', function (e) {
		});


		var infospota0 = new PANOLENS.Infospot(512, hotspotIcons[6].data, true);
		infospota0.position.set(4929.70, -767.89, -199.04);
		a.add(infospota0);

		infospota0.addEventListener('click', function () {

			ChangePanorama('b');

		});

		viewer.add(a);

		var b = new PANOLENS.ImagePanorama("/biovirtualtour/panoramas/b.jpg");
		b.addEventListener('progress', function (e) {
			$("#loading").show();
		});
		b.addEventListener('load', function (e) {
			$("#loading").fadeOut();
		});
		b.addEventListener('click', function (e) {
		});


		var infospotb0 = new PANOLENS.Infospot(512, hotspotIcons[6].data, true);
		infospotb0.position.set(4871.21, -1109.15, -41.74);
		b.add(infospotb0);

		infospotb0.addEventListener('click', function () {

			ChangePanorama('a');

		});

		var infospotb1 = new PANOLENS.Infospot(512, hotspotIcons[6].data, true);
		infospotb1.position.set(537.35, -1834.56, -4614.88);
		b.add(infospotb1);

		infospotb1.addEventListener('click', function () {

			ChangePanorama('k');

		});

		var infospotb2 = new PANOLENS.Infospot(512, hotspotIcons[6].data, true);
		infospotb2.position.set(720.35, -1666.42, 4648.61);
		b.add(infospotb2);

		infospotb2.addEventListener('click', function () {

			ChangePanorama('c');

		});

		var infospotb3 = new PANOLENS.Infospot(512, hotspotIcons[0].data, true);
		infospotb3.position.set(3041.02, 729.29, -3891.35);
		infospotb3.visible = false;
		b.add(infospotb3);

		infospotb3.addEventListener('click', function () {

			showMedia(1, '/biovirtualtour/images/ikel.jpg');

		});

		var infospotb4 = new PANOLENS.Infospot(512, hotspotIcons[0].data, true);
		infospotb4.position.set(2923.34, 643.24, 3999.73);
		infospotb4.visible = false;
		b.add(infospotb4);

		infospotb4.addEventListener('click', function () {

			showMedia(1, '/biovirtualtour/images/doesnfisika.jpg');

		});

		var infospotb5 = new PANOLENS.Infospot(512, hotspotIcons[11].data, true);
		infospotb5.position.set(16.61, -4998.65, -30.15);
		b.add(infospotb5);

		infospotb5.addEventListener('click', function () {

			showMedia(1, '/biovirtualtour/images/b2.png');

		});

		viewer.add(b);

		var c = new PANOLENS.ImagePanorama("/biovirtualtour/panoramas/c.jpg");
		c.addEventListener('progress', function (e) {
			$("#loading").show();
		});
		c.addEventListener('load', function (e) {
			$("#loading").fadeOut();
		});
		c.addEventListener('click', function (e) {
		});


		var infospotc0 = new PANOLENS.Infospot(512, hotspotIcons[6].data, true);
		infospotc0.position.set(-4372.68, -2395.44, 230.43);
		c.add(infospotc0);

		infospotc0.addEventListener('click', function () {

			ChangePanorama('b');

		});

		var infospotc1 = new PANOLENS.Infospot(512, hotspotIcons[6].data, true);
		infospotc1.position.set(1251.40, -2184.74, 4311.17);
		c.add(infospotc1);

		infospotc1.addEventListener('click', function () {

			ChangePanorama('d');

		});

		var infospotc2 = new PANOLENS.Infospot(512, hotspotIcons[0].data, true);
		infospotc2.position.set(2170.45, 1929.58, -4063.12);
		infospotc2.visible = false;
		c.add(infospotc2);

		infospotc2.addEventListener('click', function () {

			showMedia(1, '/biovirtualtour/images/jutfis.jpg');

		});

		var infospotc3 = new PANOLENS.Infospot(512, hotspotIcons[0].data, true);
		infospotc3.position.set(4620.83, 1843.95, 461.59);
		infospotc3.visible = false;
		c.add(infospotc3);

		infospotc3.addEventListener('click', function () {

			showMedia(1, '/biovirtualtour/images/fisdas.jpg');

		});

		var infospotc4 = new PANOLENS.Infospot(512, hotspotIcons[11].data, true);
		infospotc4.position.set(18.82, -4997.91, -49.66);
		c.add(infospotc4);

		infospotc4.addEventListener('click', function () {

			showMedia(1, '/biovirtualtour/images/b3.png');

		});

		viewer.add(c);

		var d = new PANOLENS.ImagePanorama("/biovirtualtour/panoramas/d.jpg");
		d.addEventListener('progress', function (e) {
			$("#loading").show();
		});
		d.addEventListener('load', function (e) {
			$("#loading").fadeOut();
		});
		d.addEventListener('click', function (e) {
		});


		var infospotd0 = new PANOLENS.Infospot(512, hotspotIcons[6].data, true);
		infospotd0.position.set(183.97, -2579.43, -4272.08);
		d.add(infospotd0);

		infospotd0.addEventListener('click', function () {

			ChangePanorama('c');

		});

		var infospotd1 = new PANOLENS.Infospot(512, hotspotIcons[6].data, true);
		infospotd1.position.set(636.17, -2604.76, 4214.05);
		d.add(infospotd1);

		infospotd1.addEventListener('click', function () {

			ChangePanorama('e');

		});

		var infospotd2 = new PANOLENS.Infospot(512, hotspotIcons[11].data, true);
		infospotd2.position.set(-42.38, -4998.33, -4.27);
		d.add(infospotd2);

		infospotd2.addEventListener('click', function () {

			showMedia(1, '/biovirtualtour/images/b4.png');

		});

		viewer.add(d);

		var e = new PANOLENS.ImagePanorama("/biovirtualtour/panoramas/e.jpg");
		e.addEventListener('progress', function (e) {
			$("#loading").show();
		});
		e.addEventListener('load', function (e) {
			$("#loading").fadeOut();
		});
		e.addEventListener('click', function (e) {
		});


		var infospote0 = new PANOLENS.Infospot(512, hotspotIcons[6].data, true);
		infospote0.position.set(419.75, -3209.01, -3808.14);
		e.add(infospote0);

		infospote0.addEventListener('click', function () {

			ChangePanorama('d');

		});

		var infospote1 = new PANOLENS.Infospot(512, hotspotIcons[6].data, true);
		infospote1.position.set(-4162.40, -2721.36, 470.24);
		e.add(infospote1);

		infospote1.addEventListener('click', function () {

			ChangePanorama('f');

		});

		var infospote2 = new PANOLENS.Infospot(512, hotspotIcons[0].data, true);
		infospote2.position.set(-647.37, 525.77, 4921.30);
		infospote2.visible = false;
		e.add(infospote2);

		infospote2.addEventListener('click', function () {

			showMedia(1, '/biovirtualtour/images/wc.jpg');

		});

		var infospote3 = new PANOLENS.Infospot(512, hotspotIcons[11].data, true);
		infospote3.position.set(-16.96, -4999.31, 4.21);
		e.add(infospote3);

		infospote3.addEventListener('click', function () {

			showMedia(1, '/biovirtualtour/images/b5.png');

		});

		viewer.add(e);

		var f = new PANOLENS.ImagePanorama("/biovirtualtour/panoramas/f.jpg");
		f.addEventListener('progress', function (e) {
			$("#loading").show();
		});
		f.addEventListener('load', function (e) {
			$("#loading").fadeOut();
		});
		f.addEventListener('click', function (e) {
		});


		var infospotf0 = new PANOLENS.Infospot(512, hotspotIcons[6].data, true);
		infospotf0.position.set(406.44, -2841.10, -4089.15);
		f.add(infospotf0);

		infospotf0.addEventListener('click', function () {

			ChangePanorama('e');

		});

		var infospotf1 = new PANOLENS.Infospot(512, hotspotIcons[6].data, true);
		infospotf1.position.set(138.77, -1834.31, 4641.31);
		f.add(infospotf1);

		infospotf1.addEventListener('click', function () {

			ChangePanorama('g');

		});

		var infospotf2 = new PANOLENS.Infospot(512, hotspotIcons[0].data, true);
		infospotf2.position.set(4399.79, 2332.76, -382.95);
		infospotf2.visible = false;
		f.add(infospotf2);

		infospotf2.addEventListener('click', function () {

			showMedia(1, '/biovirtualtour/images/sidang.jpg');

		});

		var infospotf3 = new PANOLENS.Infospot(512, hotspotIcons[11].data, true);
		infospotf3.position.set(-17.29, -4997.39, -64.04);
		f.add(infospotf3);

		infospotf3.addEventListener('click', function () {

			showMedia(1, '/biovirtualtour/images/b6.png');

		});

		viewer.add(f);

		var g = new PANOLENS.ImagePanorama("/biovirtualtour/panoramas/g.jpg");
		g.addEventListener('progress', function (e) {
			$("#loading").show();
		});
		g.addEventListener('load', function (e) {
			$("#loading").fadeOut();
		});
		g.addEventListener('click', function (e) {
		});


		var infospotg0 = new PANOLENS.Infospot(512, hotspotIcons[6].data, true);
		infospotg0.position.set(388.75, -2923.84, -4034.79);
		g.add(infospotg0);

		infospotg0.addEventListener('click', function () {

			ChangePanorama('f');

		});

		var infospotg1 = new PANOLENS.Infospot(512, hotspotIcons[6].data, true);
		infospotg1.position.set(390.69, -2482.65, 4315.44);
		g.add(infospotg1);

		infospotg1.addEventListener('click', function () {

			ChangePanorama('ga');

		});

		var infospotg2 = new PANOLENS.Infospot(512, hotspotIcons[0].data, true);
		infospotg2.position.set(4124.36, 2468.35, -1360.48);
		infospotg2.visible = false;
		g.add(infospotg2);

		infospotg2.addEventListener('click', function () {

			showMedia(1, '/biovirtualtour/images/sig.jpg');

		});

		var infospotg3 = new PANOLENS.Infospot(512, hotspotIcons[11].data, true);
		infospotg3.position.set(8.67, -4994.80, 132.01);
		g.add(infospotg3);

		infospotg3.addEventListener('click', function () {

			showMedia(1, '/biovirtualtour/images/b7.png');

		});

		viewer.add(g);

		var ga = new PANOLENS.ImagePanorama("/biovirtualtour/panoramas/ga.jpg");
		ga.addEventListener('progress', function (e) {
			$("#loading").show();
		});
		ga.addEventListener('load', function (e) {
			$("#loading").fadeOut();
		});
		ga.addEventListener('click', function (e) {
		});


		var infospotga0 = new PANOLENS.Infospot(512, hotspotIcons[6].data, true);
		infospotga0.position.set(8.34, -2891.25, -4076.51);
		ga.add(infospotga0);

		infospotga0.addEventListener('click', function () {

			ChangePanorama('g');

		});

		var infospotga1 = new PANOLENS.Infospot(512, hotspotIcons[6].data, true);
		infospotga1.position.set(19.46, -1552.56, 4751.51);
		ga.add(infospotga1);

		infospotga1.addEventListener('click', function () {

			ChangePanorama('h');

		});

		var infospotga2 = new PANOLENS.Infospot(512, hotspotIcons[11].data, true);
		infospotga2.position.set(4.67, -4999.40, -14.55);
		ga.add(infospotga2);

		infospotga2.addEventListener('click', function () {

			showMedia(1, '/biovirtualtour/images/b7a.png');

		});

		viewer.add(ga);

		var h = new PANOLENS.ImagePanorama("/biovirtualtour/panoramas/h.jpg");
		h.addEventListener('progress', function (e) {
			$("#loading").show();
		});
		h.addEventListener('load', function (e) {
			$("#loading").fadeOut();
		});
		h.addEventListener('click', function (e) {
		});


		var infospoth0 = new PANOLENS.Infospot(512, hotspotIcons[6].data, true);
		infospoth0.position.set(100.26, -2215.21, -4475.02);
		h.add(infospoth0);

		infospoth0.addEventListener('click', function () {

			ChangePanorama('ga');

		});

		var infospoth1 = new PANOLENS.Infospot(512, hotspotIcons[6].data, true);
		infospoth1.position.set(-4263.75, -2538.43, 559.51);
		h.add(infospoth1);

		infospoth1.addEventListener('click', function () {

			ChangePanorama('i');

		});

		var infospoth2 = new PANOLENS.Infospot(512, hotspotIcons[0].data, true);
		infospoth2.position.set(4350.74, 2445.79, -111.10);
		infospoth2.visible = false;
		h.add(infospoth2);

		infospoth2.addEventListener('click', function () {

			showMedia(1, '/biovirtualtour/images/pigmen.jpg');

		});

		var infospoth3 = new PANOLENS.Infospot(512, hotspotIcons[11].data, true);
		infospoth3.position.set(-17.52, -4999.17, -11.93);
		h.add(infospoth3);

		infospoth3.addEventListener('click', function () {

			showMedia(1, '/biovirtualtour/images/b8.png');

		});

		viewer.add(h);

		var i = new PANOLENS.ImagePanorama("/biovirtualtour/panoramas/i.jpg");
		i.addEventListener('progress', function (e) {
			$("#loading").show();
		});
		i.addEventListener('load', function (e) {
			$("#loading").fadeOut();
		});
		i.addEventListener('click', function (e) {
		});


		var infospoti0 = new PANOLENS.Infospot(512, hotspotIcons[6].data, true);
		infospoti0.position.set(92.82, -2615.47, -4256.35);
		i.add(infospoti0);

		infospoti0.addEventListener('click', function () {

			ChangePanorama('h');

		});

		var infospoti1 = new PANOLENS.Infospot(512, hotspotIcons[6].data, true);
		infospoti1.position.set(68.42, -2355.00, 4403.82);
		i.add(infospoti1);

		infospoti1.addEventListener('click', function () {

			ChangePanorama('j');

		});

		var infospoti2 = new PANOLENS.Infospot(512, hotspotIcons[0].data, true);
		infospoti2.position.set(4108.53, 2796.90, -488.15);
		infospoti2.visible = false;
		i.add(infospoti2);

		infospoti2.addEventListener('click', function () {

			showMedia(1, '/biovirtualtour/images/fislan.jpg');

		});

		var infospoti3 = new PANOLENS.Infospot(512, hotspotIcons[11].data, true);
		infospoti3.position.set(0.58, -4999.50, 12.70);
		i.add(infospoti3);

		infospoti3.addEventListener('click', function () {

			showMedia(1, '/biovirtualtour/images/b9.png');

		});

		viewer.add(i);

		var j = new PANOLENS.ImagePanorama("/biovirtualtour/panoramas/j.jpg");
		j.addEventListener('progress', function (e) {
			$("#loading").show();
		});
		j.addEventListener('load', function (e) {
			$("#loading").fadeOut();
		});
		j.addEventListener('click', function (e) {
		});


		var infospotj0 = new PANOLENS.Infospot(512, hotspotIcons[6].data, true);
		infospotj0.position.set(221.80, -2719.90, -4179.81);
		j.add(infospotj0);

		infospotj0.addEventListener('click', function () {

			ChangePanorama('i');

		});

		var infospotj1 = new PANOLENS.Infospot(512, hotspotIcons[6].data, true);
		infospotj1.position.set(122.91, -2106.35, 4524.01);
		j.add(infospotj1);

		infospotj1.addEventListener('click', function () {

			ChangePanorama('k');

		});

		var infospotj2 = new PANOLENS.Infospot(512, hotspotIcons[0].data, true);
		infospotj2.position.set(4291.94, 2543.05, 193.61);
		infospotj2.visible = false;
		j.add(infospotj2);

		infospotj2.addEventListener('click', function () {

			showMedia(1, '/biovirtualtour/images/ass.jpg');

		});

		var infospotj3 = new PANOLENS.Infospot(512, hotspotIcons[11].data, true);
		infospotj3.position.set(17.04, -4998.05, 46.59);
		j.add(infospotj3);

		infospotj3.addEventListener('click', function () {

			showMedia(1, '/biovirtualtour/images/b10.png');

		});

		viewer.add(j);

		var k = new PANOLENS.ImagePanorama("/biovirtualtour/panoramas/k.jpg");
		k.addEventListener('progress', function (e) {
			$("#loading").show();
		});
		k.addEventListener('load', function (e) {
			$("#loading").fadeOut();
		});
		k.addEventListener('click', function (e) {
		});


		var infospotk0 = new PANOLENS.Infospot(512, hotspotIcons[6].data, true);
		infospotk0.position.set(580.26, -2368.40, -4356.73);
		k.add(infospotk0);

		infospotk0.addEventListener('click', function () {

			ChangePanorama('j');

		});

		var infospotk1 = new PANOLENS.Infospot(512, hotspotIcons[6].data, true);
		infospotk1.position.set(-4349.98, -2452.45, -54.45);
		k.add(infospotk1);

		infospotk1.addEventListener('click', function () {

			ChangePanorama('b');

		});

		var infospotk2 = new PANOLENS.Infospot(512, hotspotIcons[0].data, true);
		infospotk2.position.set(4586.96, 779.70, 1812.85);
		infospotk2.visible = false;
		k.add(infospotk2);

		infospotk2.addEventListener('click', function () {

			showMedia(1, '/biovirtualtour/images/kepala.jpg');

		});

		var infospotk3 = new PANOLENS.Infospot(512, hotspotIcons[0].data, true);
		infospotk3.position.set(4448.60, 770.96, -2135.00);
		infospotk3.visible = false;
		k.add(infospotk3);

		infospotk3.addEventListener('click', function () {

			showMedia(1, '/biovirtualtour/images/kimiaor.jpg');

		});

		var infospotk4 = new PANOLENS.Infospot(512, hotspotIcons[11].data, true);
		infospotk4.position.set(42.45, -4998.32, -3.53);
		k.add(infospotk4);

		infospotk4.addEventListener('click', function () {

			showMedia(1, '/biovirtualtour/images/b11.png');

		});

		viewer.add(k);

		$(document).ready(function () { ChangePanorama('a '); });


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
			if (viewer.panorama == a) {
			}

			if (viewer.panorama == b) {
				ShowMyInfospot(infospotb3, 'infospotb3');
				ShowMyInfospot(infospotb4, 'infospotb4');
			}

			if (viewer.panorama == c) {
				ShowMyInfospot(infospotc2, 'infospotc2');
				ShowMyInfospot(infospotc3, 'infospotc3');
			}

			if (viewer.panorama == d) {
			}

			if (viewer.panorama == e) {
				ShowMyInfospot(infospote2, 'infospote2');
			}

			if (viewer.panorama == f) {
				ShowMyInfospot(infospotf2, 'infospotf2');
			}

			if (viewer.panorama == g) {
				ShowMyInfospot(infospotg2, 'infospotg2');
			}

			if (viewer.panorama == ga) {
			}

			if (viewer.panorama == h) {
				ShowMyInfospot(infospoth2, 'infospoth2');
			}

			if (viewer.panorama == i) {
				ShowMyInfospot(infospoti2, 'infospoti2');
			}

			if (viewer.panorama == j) {
				ShowMyInfospot(infospotj2, 'infospotj2');
			}

			if (viewer.panorama == k) {
				ShowMyInfospot(infospotk2, 'infospotk2');
				ShowMyInfospot(infospotk3, 'infospotk3');
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
		function chclickinfospotb3() {
			showMedia(1, '/biovirtualtour/images/ikel.jpg');

		}

		function chclickinfospotb4() {
			showMedia(1, '/biovirtualtour/images/doesnfisika.jpg');

		}

		function chclickinfospotc2() {
			showMedia(1, '/biovirtualtour/images/jutfis.jpg');

		}

		function chclickinfospotc3() {
			showMedia(1, '/biovirtualtour/images/fisdas.jpg');

		}

		function chclickinfospote2() {
			showMedia(1, '/biovirtualtour/images/wc.jpg');

		}

		function chclickinfospotf2() {
			showMedia(1, '/biovirtualtour/images/sidang.jpg');

		}

		function chclickinfospotg2() {
			showMedia(1, '/biovirtualtour/images/sig.jpg');

		}

		function chclickinfospoth2() {
			showMedia(1, '/biovirtualtour/images/pigmen.jpg');

		}

		function chclickinfospoti2() {
			showMedia(1, '/biovirtualtour/images/fislan.jpg');

		}

		function chclickinfospotj2() {
			showMedia(1, '/biovirtualtour/images/ass.jpg');

		}

		function chclickinfospotk2() {
			showMedia(1, '/biovirtualtour/images/kepala.jpg');

		}

		function chclickinfospotk3() {
			showMedia(1, '/biovirtualtour/images/kimiaor.jpg');

		}
/*customjs-end*/
/*nav*/
		document.getElementById("b2").addEventListener('click', function () {
			ChangePanorama('b');
		});
		document.getElementById("b3").addEventListener('click', function () {
			ChangePanorama('c');
		});
	
		document.getElementById("b5").addEventListener('click', function () {
			ChangePanorama('e');
		});
		document.getElementById("b6").addEventListener('click', function () {
			ChangePanorama('f');
		});
		document.getElementById("b7").addEventListener('click', function () {
			ChangePanorama('g');
		});
		document.getElementById("b8").addEventListener('click', function () {
			ChangePanorama('h');
		});
		document.getElementById("b9").addEventListener('click', function () {
			ChangePanorama('i');
		});
		document.getElementById("b10").addEventListener('click', function () {
			ChangePanorama('j');
		});
		document.getElementById("b11").addEventListener('click', function () {
			ChangePanorama('k');
		});
	</script>
</body>

</html>