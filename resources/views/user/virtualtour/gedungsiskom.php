<!DOCTYPE html>
<html lang="en">

<head>
	<title>Gedung Siskom FMIPA</title>
	<!--projectdescription-->
	<meta name="description" content="">
	<!--projectdescription-end-->
	<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
	<meta charset="utf-8">
	<meta name="viewport"
		content="initial-scale=1, maximum-scale=1, user-scalable=no, width=device-width, shrink-to-fit=no">

	<link rel="stylesheet" type="text/css" href="/sisvirtualtour/css/font-awesome.css">
	<link rel="stylesheet" type="text/css" href="/sisvirtualtour/styles.css">
	<link href="https://cdn.datatables.net/1.10.20/css/dataTables.bootstrap4.min.css" rel="stylesheet"
		crossorigin="anonymous" />

	<!-- Insert this line above script imports  -->
	<script>if (typeof module === 'object') { window.module = module; module = undefined; }</script>

	<script src="/sisvirtualtour/imagedata.js"></script>
	<script src="/sisvirtualtour/jquery.js"></script>
	<script src="/sisvirtualtour/three.min.js"></script>
	<script src="/sisvirtualtour/panolens.min.js"></script>

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
							src="/sisvirtualtour/imgs/Lambang_Universitas_Tanjungpura.png" width="Logo"> FMIPA 360</a>
					</li>

					<table class="table table-borderless" id="dataTable" cellspacing="0">
						<thead>
							<tr>
								<th></th>
							</tr>
						</thead>
						<tbody>
							<tr>
								<td><button type="button" id="sd" class="btn btn-primary btn-block mb-2"
										tabindex="0">R. dosen sistem komputer</button></td>
							</tr>
							<tr>
								<td><button type="button" id="s2" class="btn btn-primary btn-block mb-2"
										tabindex="0">R. komputer A</button></td>
							</tr>
							<tr>
								<td><button type="button" id="s3" class="btn btn-primary btn-block mb-2"
										tabindex="0">R. komputer B</button></td>
							</tr>
							<tr>
								<td><button type="button" id="s4" class="btn btn-primary btn-block mb-2"
										tabindex="0">R. laboratorium workshop</button></td>
							</tr>
							<tr>
								<td><button type="button" id="s1.2" class="btn btn-primary btn-block mb-2"
										tabindex="0">R. siskon 4</button></td>
							</tr>
							<tr>
								<td><button type="button" id="s1.3" class="btn btn-primary btn-block mb-2"
										tabindex="0">R. siskon 3</button></td>
							</tr>
							<tr>
								<td><button type="button" id="s1.4" class="btn btn-primary btn-block mb-2"
										tabindex="0">R. siskon 2</button></td>
							</tr>
							<tr>
								<td><button type="button" id="s1.5" class="btn btn-primary btn-block mb-2"
										tabindex="0">R. siskon 1</button></td>
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
		<script src="/sisvirtualtour/datatable.js"></script>
	</div>
</body>

<body id="body">
	<div id="container" style="color: black;"></div>



	<!--customhtml-->
	<div class='customhotspot' id='sdepan'></div>
	<div class='customhotspot' id='sdalam'>
		<div onclick='chclickinfospotsdalam1();' id='infospotsdalam1'
			style='position: fixed; top: 0; left: 0; cursor: pointer;'><img src='/sisvirtualtour/customhotspots/infospot.png'
				style='width: 64px; height: 64px;'></div>
	</div>
	<div class='customhotspot' id='a'></div>
	<div class='customhotspot' id='b'>
		<div onclick='chclickinfospotb2();' id='infospotb2' style='position: fixed; top: 0; left: 0; cursor: pointer;'>
			<img src='/sisvirtualtour/customhotspots/infospot.png' style='width: 64px; height: 64px;'></div>
	</div>
	<div class='customhotspot' id='c'>
		<div onclick='chclickinfospotc3();' id='infospotc3' style='position: fixed; top: 0; left: 0; cursor: pointer;'>
			<img src='/sisvirtualtour/customhotspots/infospot.png' style='width: 64px; height: 64px;'></div>
	</div>
	<div class='customhotspot' id='d'>
		<div onclick='chclickinfospotd2();' id='infospotd2' style='position: fixed; top: 0; left: 0; cursor: pointer;'>
			<img src='/sisvirtualtour/customhotspots/infospot.png' style='width: 64px; height: 64px;'></div>
	</div>
	<div class='customhotspot' id='e'></div>
	<div class='customhotspot' id='aa'></div>
	<div class='customhotspot' id='bb'>
		<div onclick='chclickinfospotbb2();' id='infospotbb2'
			style='position: fixed; top: 0; left: 0; cursor: pointer;'><img src='/sisvirtualtour/customhotspots/infospot.png'
				style='width: 64px; height: 64px;'></div>
	</div>
	<div class='customhotspot' id='cc'>
		<div onclick='chclickinfospotcc2();' id='infospotcc2'
			style='position: fixed; top: 0; left: 0; cursor: pointer;'><img src='/sisvirtualtour/customhotspots/infospot.png'
				style='width: 64px; height: 64px;'></div>
		<div onclick='chclickinfospotcc3();' id='infospotcc3'
			style='position: fixed; top: 0; left: 0; cursor: pointer;'><img src='/sisvirtualtour/customhotspots/infospot.png'
				style='width: 64px; height: 64px;'></div>
	</div>
	<div class='customhotspot' id='dd'></div>
	<div class='customhotspot' id='ee'>
		<div onclick='chclickinfospotee2();' id='infospotee2'
			style='position: fixed; top: 0; left: 0; cursor: pointer;'><img src='/sisvirtualtour/customhotspots/infospot.png'
				style='width: 64px; height: 64px;'></div>
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

		var sdepan = new PANOLENS.ImagePanorama("/sisvirtualtour/panoramas/sdepan.jpg");
		sdepan.addEventListener('progress', function (e) {
			$("#loading").show();
		});
		sdepan.addEventListener('load', function (e) {
			$("#loading").fadeOut();
		});
		sdepan.addEventListener('click', function (e) {
		});


		var infospotsdepan0 = new PANOLENS.Infospot(512, hotspotIcons[6].data, true);
		infospotsdepan0.position.set(4826.71, -1291.39, -2.26);
		sdepan.add(infospotsdepan0);

		infospotsdepan0.addEventListener('click', function () {

			ChangePanorama('sdalam');

		});

		viewer.add(sdepan);

		var sdalam = new PANOLENS.ImagePanorama("/sisvirtualtour/panoramas/sdalam.jpg");
		sdalam.addEventListener('progress', function (e) {
			$("#loading").show();
		});
		sdalam.addEventListener('load', function (e) {
			$("#loading").fadeOut();
		});
		sdalam.addEventListener('click', function (e) {
		});


		var infospotsdalam0 = new PANOLENS.Infospot(512, hotspotIcons[6].data, true);
		infospotsdalam0.position.set(-4737.97, -1569.59, -157.89);
		sdalam.add(infospotsdalam0);

		infospotsdalam0.addEventListener('click', function () {

			ChangePanorama('sdepan');

		});

		var infospotsdalam1 = new PANOLENS.Infospot(512, hotspotIcons[0].data, true);
		infospotsdalam1.position.set(3537.66, 899.12, 3403.92);
		infospotsdalam1.visible = false;
		sdalam.add(infospotsdalam1);

		infospotsdalam1.addEventListener('click', function () {

			showMedia(1, '/sisvirtualtour/images/dosen.jpg');

		});

		var infospotsdalam2 = new PANOLENS.Infospot(512, hotspotIcons[6].data, true);
		infospotsdalam2.position.set(4562.93, -2018.08, -156.86);
		sdalam.add(infospotsdalam2);

		infospotsdalam2.addEventListener('click', function () {

			ChangePanorama('c');

		});

		var infospotsdalam3 = new PANOLENS.Infospot(512, hotspotIcons[11].data, true);
		infospotsdalam3.position.set(-70.05, -4997.09, -23.85);
		sdalam.add(infospotsdalam3);

		infospotsdalam3.addEventListener('click', function () {

			showMedia(1, '/sisvirtualtour/images/sdalam.png');

		});

		viewer.add(sdalam);

		var a = new PANOLENS.ImagePanorama("/sisvirtualtour/panoramas/a.jpg");
		a.addEventListener('progress', function (e) {
			$("#loading").show();
		});
		a.addEventListener('load', function (e) {
			$("#loading").fadeOut();
		});
		a.addEventListener('click', function (e) {
		});


		var infospota0 = new PANOLENS.Infospot(512, hotspotIcons[6].data, true);
		infospota0.position.set(-21.50, -2256.58, -4460.07);
		a.add(infospota0);

		infospota0.addEventListener('click', function () {

			ChangePanorama('b');

		});

		var infospota1 = new PANOLENS.Infospot(512, hotspotIcons[6].data, true);
		infospota1.position.set(4922.10, -234.81, 782.68);
		a.add(infospota1);

		infospota1.addEventListener('click', function () {

			ChangePanorama('aa');

		});

		var infospota2 = new PANOLENS.Infospot(512, hotspotIcons[11].data, true);
		infospota2.position.set(-139.04, -4994.31, -39.52);
		a.add(infospota2);

		infospota2.addEventListener('click', function () {

			showMedia(1, '/sisvirtualtour/images/s1.png');

		});

		viewer.add(a);

		var b = new PANOLENS.ImagePanorama("/sisvirtualtour/panoramas/b.jpg");
		b.addEventListener('progress', function (e) {
			$("#loading").show();
		});
		b.addEventListener('load', function (e) {
			$("#loading").fadeOut();
		});
		b.addEventListener('click', function (e) {
		});


		var infospotb0 = new PANOLENS.Infospot(512, hotspotIcons[6].data, true);
		infospotb0.position.set(142.41, -2746.45, 4166.23);
		b.add(infospotb0);

		infospotb0.addEventListener('click', function () {

			ChangePanorama('a');

		});

		var infospotb1 = new PANOLENS.Infospot(512, hotspotIcons[6].data, true);
		infospotb1.position.set(224.69, -2415.16, -4361.94);
		b.add(infospotb1);

		infospotb1.addEventListener('click', function () {

			ChangePanorama('c');

		});

		var infospotb2 = new PANOLENS.Infospot(512, hotspotIcons[0].data, true);
		infospotb2.position.set(4234.77, 2513.91, -830.14);
		infospotb2.visible = false;
		b.add(infospotb2);

		infospotb2.addEventListener('click', function () {

			showMedia(1, '/sisvirtualtour/images/koma.jpg');

		});

		var infospotb3 = new PANOLENS.Infospot(512, hotspotIcons[11].data, true);
		infospotb3.position.set(-10.04, -4999.20, 17.62);
		b.add(infospotb3);

		infospotb3.addEventListener('click', function () {

			showMedia(1, '/sisvirtualtour/images/s2.png');

		});

		viewer.add(b);

		var c = new PANOLENS.ImagePanorama("/sisvirtualtour/panoramas/c.jpg");
		c.addEventListener('progress', function (e) {
			$("#loading").show();
		});
		c.addEventListener('load', function (e) {
			$("#loading").fadeOut();
		});
		c.addEventListener('click', function (e) {
		});


		var infospotc0 = new PANOLENS.Infospot(512, hotspotIcons[6].data, true);
		infospotc0.position.set(1026.47, -2465.19, 4217.79);
		c.add(infospotc0);

		infospotc0.addEventListener('click', function () {

			ChangePanorama('b');

		});

		var infospotc1 = new PANOLENS.Infospot(512, hotspotIcons[6].data, true);
		infospotc1.position.set(792.27, -2917.93, -3978.59);
		c.add(infospotc1);

		infospotc1.addEventListener('click', function () {

			ChangePanorama('d');

		});

		var infospotc2 = new PANOLENS.Infospot(512, hotspotIcons[6].data, true);
		infospotc2.position.set(4143.41, -2305.52, -1564.95);
		c.add(infospotc2);

		infospotc2.addEventListener('click', function () {

			ChangePanorama('sdalam');

		});

		var infospotc3 = new PANOLENS.Infospot(512, hotspotIcons[0].data, true);
		infospotc3.position.set(3009.35, 1140.49, 3817.37);
		infospotc3.visible = false;
		c.add(infospotc3);

		infospotc3.addEventListener('click', function () {

			showMedia(1, '/sisvirtualtour/images/komb.jpg');

		});

		var infospotc4 = new PANOLENS.Infospot(512, hotspotIcons[11].data, true);
		infospotc4.position.set(350.01, -4978.39, -273.42);
		c.add(infospotc4);

		infospotc4.addEventListener('click', function () {

			showMedia(1, '/sisvirtualtour/images/s3.png');

		});

		viewer.add(c);

		var d = new PANOLENS.ImagePanorama("/sisvirtualtour/panoramas/d.jpg");
		d.addEventListener('progress', function (e) {
			$("#loading").show();
		});
		d.addEventListener('load', function (e) {
			$("#loading").fadeOut();
		});
		d.addEventListener('click', function (e) {
		});


		var infospotd0 = new PANOLENS.Infospot(512, hotspotIcons[6].data, true);
		infospotd0.position.set(228.90, -2523.00, 4301.32);
		d.add(infospotd0);

		infospotd0.addEventListener('click', function () {

			ChangePanorama('c');

		});

		var infospotd1 = new PANOLENS.Infospot(512, hotspotIcons[6].data, true);
		infospotd1.position.set(290.37, -3053.23, -3939.76);
		d.add(infospotd1);

		infospotd1.addEventListener('click', function () {

			ChangePanorama('e');

		});

		var infospotd2 = new PANOLENS.Infospot(512, hotspotIcons[0].data, true);
		infospotd2.position.set(4391.99, 2355.29, -291.07);
		infospotd2.visible = false;
		d.add(infospotd2);

		infospotd2.addEventListener('click', function () {

			showMedia(1, '/sisvirtualtour/images/worksop.jpg');

		});

		var infospotd3 = new PANOLENS.Infospot(512, hotspotIcons[11].data, true);
		infospotd3.position.set(-33.36, -4998.66, 6.57);
		d.add(infospotd3);

		infospotd3.addEventListener('click', function () {

			showMedia(1, '/sisvirtualtour/images/s4.png');

		});

		viewer.add(d);

		var e = new PANOLENS.ImagePanorama("/sisvirtualtour/panoramas/e.jpg");
		e.addEventListener('progress', function (e) {
			$("#loading").show();
		});
		e.addEventListener('load', function (e) {
			$("#loading").fadeOut();
		});
		e.addEventListener('click', function (e) {
		});


		var infospote0 = new PANOLENS.Infospot(512, hotspotIcons[6].data, true);
		infospote0.position.set(545.60, -2824.01, 4081.12);
		e.add(infospote0);

		infospote0.addEventListener('click', function () {

			ChangePanorama('d');

		});

		var infospote1 = new PANOLENS.Infospot(512, hotspotIcons[6].data, true);
		infospote1.position.set(4914.75, -602.99, -630.36);
		e.add(infospote1);

		infospote1.addEventListener('click', function () {

			ChangePanorama('ee');

		});

		var infospote2 = new PANOLENS.Infospot(512, hotspotIcons[11].data, true);
		infospote2.position.set(17.11, -4997.09, -72.00);
		e.add(infospote2);

		infospote2.addEventListener('click', function () {

			showMedia(1, '/sisvirtualtour/images/s5.png');

		});

		viewer.add(e);

		var aa = new PANOLENS.ImagePanorama("/sisvirtualtour/panoramas/aa.jpg");
		aa.addEventListener('progress', function (e) {
			$("#loading").show();
		});
		aa.addEventListener('load', function (e) {
			$("#loading").fadeOut();
		});
		aa.addEventListener('click', function (e) {
		});


		var infospotaa0 = new PANOLENS.Infospot(512, hotspotIcons[6].data, true);
		infospotaa0.position.set(3512.08, -3501.32, -597.26);
		aa.add(infospotaa0);

		infospotaa0.addEventListener('click', function () {

			ChangePanorama('a');

		});

		var infospotaa1 = new PANOLENS.Infospot(512, hotspotIcons[6].data, true);
		infospotaa1.position.set(56.49, -2954.79, -4029.62);
		aa.add(infospotaa1);

		infospotaa1.addEventListener('click', function () {

			ChangePanorama('bb');

		});

		var infospotaa2 = new PANOLENS.Infospot(512, hotspotIcons[11].data, true);
		infospotaa2.position.set(-355.06, -4985.96, -38.85);
		aa.add(infospotaa2);

		infospotaa2.addEventListener('click', function () {

			showMedia(1, '/sisvirtualtour/images/s1.1.png');

		});

		viewer.add(aa);

		var bb = new PANOLENS.ImagePanorama("/sisvirtualtour/panoramas/bb.jpg");
		bb.addEventListener('progress', function (e) {
			$("#loading").show();
		});
		bb.addEventListener('load', function (e) {
			$("#loading").fadeOut();
		});
		bb.addEventListener('click', function (e) {
		});


		var infospotbb0 = new PANOLENS.Infospot(512, hotspotIcons[6].data, true);
		infospotbb0.position.set(345.06, -2330.70, 4402.93);
		bb.add(infospotbb0);

		infospotbb0.addEventListener('click', function () {

			ChangePanorama('aa');

		});

		var infospotbb1 = new PANOLENS.Infospot(512, hotspotIcons[6].data, true);
		infospotbb1.position.set(-17.57, -2493.91, -4328.69);
		bb.add(infospotbb1);

		infospotbb1.addEventListener('click', function () {

			ChangePanorama('cc');

		});

		var infospotbb2 = new PANOLENS.Infospot(512, hotspotIcons[0].data, true);
		infospotbb2.position.set(4148.62, 2620.73, -945.05);
		infospotbb2.visible = false;
		bb.add(infospotbb2);

		infospotbb2.addEventListener('click', function () {

			showMedia(1, '/sisvirtualtour/images/sis4.jpg');

		});

		var infospotbb3 = new PANOLENS.Infospot(512, hotspotIcons[11].data, true);
		infospotbb3.position.set(143.96, -4994.17, 35.31);
		bb.add(infospotbb3);

		infospotbb3.addEventListener('click', function () {

			showMedia(1, '/sisvirtualtour/images/s1.2.png');

		});

		viewer.add(bb);

		var cc = new PANOLENS.ImagePanorama("/sisvirtualtour/panoramas/cc.jpg");
		cc.addEventListener('progress', function (e) {
			$("#loading").show();
		});
		cc.addEventListener('load', function (e) {
			$("#loading").fadeOut();
		});
		cc.addEventListener('click', function (e) {
		});


		var infospotcc0 = new PANOLENS.Infospot(512, hotspotIcons[6].data, true);
		infospotcc0.position.set(174.14, -2681.63, 4207.88);
		cc.add(infospotcc0);

		infospotcc0.addEventListener('click', function () {

			ChangePanorama('bb');

		});

		var infospotcc1 = new PANOLENS.Infospot(512, hotspotIcons[6].data, true);
		infospotcc1.position.set(38.87, -2561.82, -4289.54);
		cc.add(infospotcc1);

		infospotcc1.addEventListener('click', function () {

			ChangePanorama('dd');

		});

		var infospotcc2 = new PANOLENS.Infospot(512, hotspotIcons[0].data, true);
		infospotcc2.position.set(4160.60, 2727.54, 455.26);
		infospotcc2.visible = false;
		cc.add(infospotcc2);

		infospotcc2.addEventListener('click', function () {

			showMedia(1, '/sisvirtualtour/images/sis3.jpg');

		});

		var infospotcc3 = new PANOLENS.Infospot(512, hotspotIcons[0].data, true);
		infospotcc3.position.set(2148.67, 1591.09, -4215.84);
		infospotcc3.visible = false;
		cc.add(infospotcc3);

		infospotcc3.addEventListener('click', function () {

			showMedia(1, '/sisvirtualtour/images/sis2.jpg');

		});

		var infospotcc4 = new PANOLENS.Infospot(512, hotspotIcons[11].data, true);
		infospotcc4.position.set(-128.52, -4993.15, -117.75);
		cc.add(infospotcc4);

		infospotcc4.addEventListener('click', function () {

			showMedia(1, '/sisvirtualtour/images/s1.3.png');

		});

		viewer.add(cc);

		var dd = new PANOLENS.ImagePanorama("/sisvirtualtour/panoramas/dd.jpg");
		dd.addEventListener('progress', function (e) {
			$("#loading").show();
		});
		dd.addEventListener('load', function (e) {
			$("#loading").fadeOut();
		});
		dd.addEventListener('click', function (e) {
		});


		var infospotdd0 = new PANOLENS.Infospot(512, hotspotIcons[6].data, true);
		infospotdd0.position.set(340.07, -2646.62, 4222.58);
		dd.add(infospotdd0);

		infospotdd0.addEventListener('click', function () {

			ChangePanorama('cc');

		});

		var infospotdd1 = new PANOLENS.Infospot(512, hotspotIcons[6].data, true);
		infospotdd1.position.set(-60.67, -2415.46, -4370.36);
		dd.add(infospotdd1);

		infospotdd1.addEventListener('click', function () {

			ChangePanorama('ee');

		});

		var infospotdd2 = new PANOLENS.Infospot(512, hotspotIcons[11].data, true);
		infospotdd2.position.set(37.54, -4998.14, -28.91);
		dd.add(infospotdd2);

		infospotdd2.addEventListener('click', function () {

			showMedia(1, '/sisvirtualtour/images/s1.4.png');

		});

		viewer.add(dd);

		var ee = new PANOLENS.ImagePanorama("/sisvirtualtour/panoramas/ee.jpg");
		ee.addEventListener('progress', function (e) {
			$("#loading").show();
		});
		ee.addEventListener('load', function (e) {
			$("#loading").fadeOut();
		});
		ee.addEventListener('click', function (e) {
		});


		var infospotee0 = new PANOLENS.Infospot(512, hotspotIcons[6].data, true);
		infospotee0.position.set(211.62, -2683.24, 4204.84);
		ee.add(infospotee0);

		infospotee0.addEventListener('click', function () {

			ChangePanorama('dd');

		});

		var infospotee1 = new PANOLENS.Infospot(512, hotspotIcons[6].data, true);
		infospotee1.position.set(3514.61, -3473.66, -744.49);
		ee.add(infospotee1);

		infospotee1.addEventListener('click', function () {

			ChangePanorama('e');

		});

		var infospotee2 = new PANOLENS.Infospot(512, hotspotIcons[0].data, true);
		infospotee2.position.set(2916.50, 1688.80, 3680.65);
		infospotee2.visible = false;
		ee.add(infospotee2);

		infospotee2.addEventListener('click', function () {

			showMedia(1, '/sisvirtualtour/images/sis1.jpg');

		});

		var infospotee3 = new PANOLENS.Infospot(512, hotspotIcons[11].data, true);
		infospotee3.position.set(37.36, -4998.43, -14.25);
		ee.add(infospotee3);

		infospotee3.addEventListener('click', function () {

			showMedia(1, '/sisvirtualtour/images/s1.5.png');

		});

		viewer.add(ee);

		$(document).ready(function () { ChangePanorama('sdepan '); });


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
			if (viewer.panorama == sdepan) {
			}

			if (viewer.panorama == sdalam) {
				ShowMyInfospot(infospotsdalam1, 'infospotsdalam1');
			}

			if (viewer.panorama == a) {
			}

			if (viewer.panorama == b) {
				ShowMyInfospot(infospotb2, 'infospotb2');
			}

			if (viewer.panorama == c) {
				ShowMyInfospot(infospotc3, 'infospotc3');
			}

			if (viewer.panorama == d) {
				ShowMyInfospot(infospotd2, 'infospotd2');
			}

			if (viewer.panorama == e) {
			}

			if (viewer.panorama == aa) {
			}

			if (viewer.panorama == bb) {
				ShowMyInfospot(infospotbb2, 'infospotbb2');
			}

			if (viewer.panorama == cc) {
				ShowMyInfospot(infospotcc2, 'infospotcc2');
				ShowMyInfospot(infospotcc3, 'infospotcc3');
			}

			if (viewer.panorama == dd) {
			}

			if (viewer.panorama == ee) {
				ShowMyInfospot(infospotee2, 'infospotee2');
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
		function chclickinfospotsdalam1() {
			showMedia(1, '/sisvirtualtour/images/dosen.jpg');

		}

		function chclickinfospotb2() {
			showMedia(1, '/sisvirtualtour/images/koma.jpg');

		}

		function chclickinfospotc3() {
			showMedia(1, '/sisvirtualtour/images/komb.jpg');

		}

		function chclickinfospotd2() {
			showMedia(1, '/sisvirtualtour/images/worksop.jpg');

		}

		function chclickinfospotbb2() {
			showMedia(1, '/sisvirtualtour/images/sis4.jpg');

		}

		function chclickinfospotcc2() {
			showMedia(1, '/sisvirtualtour/images/sis3.jpg');

		}

		function chclickinfospotcc3() {
			showMedia(1, '/sisvirtualtour/images/sis2.jpg');

		}

		function chclickinfospotee2() {
			showMedia(1, '/sisvirtualtour/images/sis1.jpg');

		}
/*customjs-end*/
/*nav*/
		document.getElementById("sd").addEventListener('click', function () {
			ChangePanorama('sdalam');
		});
		document.getElementById("s2").addEventListener('click', function () {
			ChangePanorama('b');
		});
		document.getElementById("s3").addEventListener('click', function () {
			ChangePanorama('c');
		});
		document.getElementById("s4").addEventListener('click', function () {
			ChangePanorama('d');
		});
		document.getElementById("s1.2").addEventListener('click', function () {
			ChangePanorama('bb');
		});
		document.getElementById("s1.3").addEventListener('click', function () {
			ChangePanorama('cc');
		});
		document.getElementById("s1.4").addEventListener('click', function () {
			ChangePanorama('dd');
		});
		document.getElementById("s1.5").addEventListener('click', function () {
			ChangePanorama('ee');
		});
	</script>
</body>

</html>