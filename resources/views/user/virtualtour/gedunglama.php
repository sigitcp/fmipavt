<!DOCTYPE html>
<html lang="en">
	<head>
		<title>Gedung Lama FMIPA</title>
		<!--projectdescription-->
		<meta name="description" content="" />
		<!--projectdescription-end-->
		<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
		<meta charset="utf-8" />
		<meta
			name="viewport"
			content="initial-scale=1, maximum-scale=1, user-scalable=no, width=device-width, shrink-to-fit=no"
		/>

		<link rel="stylesheet" type="text/css" href="/glmvirtualtour/css/font-awesome.css" />
		<link rel="stylesheet" type="text/css" href="/glmvirtualtour/styles.css" />
		<link
			href="https://cdn.datatables.net/1.10.20/css/dataTables.bootstrap4.min.css"
			rel="stylesheet"
			crossorigin="anonymous"
		/>

		<!-- Insert this line above script imports  -->
		<script>
			if (typeof module === "object") {
				window.module = module;
				module = undefined;
			}
		</script>

		<script src="/glmvirtualtour/imagedata.js"></script>
		<script src="/glmvirtualtour/jquery.js"></script>
		<script src="/glmvirtualtour/three.min.js"></script>
		<script src="/glmvirtualtour/panolens.min.js"></script>

		<!-- Insert this line after script imports -->
		<script>
			if (window.module) module = window.module;
		</script>

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
				transition: background 0.5s;
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
				background-color: rgba(0, 0, 0, 0.5);
				backdrop-filter: blur(5px);
				display: none;
			}
		</style>
	</head>
	<body>
		<div id="wrapper">
			<div class="nav sidebar-nav">
				<button
					href="#menu-toggle"
					id="menu-toggle"
					class="btn btn-primary shadow-inset ml-8 mt-2"
				>
					<i
						class="fa fa-bars"
						style="font-size: 20px !important"
						aria-hidden="true"
						aria-hidden="true"
					></i>
				</button>
				<div id="sidebar-wrapper">
					<ul class="sidebar-nav" style="margin-left: 0">
						<li class="sidebar-brand">
							<a class="navbar-brand text-gray" href=""
								><img
									src="/glmvirtualtour/imgs/Lambang_Universitas_Tanjungpura.png"
									width="Logo"
								/>
								FMIPA 360</a
							>
						</li>

						<table
							class="table table-borderless"
							id="dataTable"
							cellspacing="0"
						>
							<thead>
								<tr>
									<th></th>
								</tr>
							</thead>
							<tbody>
								<tr>
									<td>
										<button
											type="button"
											id="gl3"
											class="btn btn-primary btn-block mb-2"
											tabindex="0"
										>
											R. laboratorium ekologi, R. laboratorium biologi
										</button>
									</td>
								</tr>
								<tr>
									<td>
										<button
											type="button"
											id="gl4"
											class="btn btn-primary btn-block mb-2"
											tabindex="0"
										>
											R. laboratorium kultur jaringan
										</button>
									</td>
								</tr>
								<tr>
									<td>
										<button
											type="button"
											id="gl5"
											class="btn btn-primary btn-block mb-2"
											tabindex="0"
										>
											R. laboratorium mikro biologi
										</button>
									</td>
								</tr>
								<tr>
									<td>
										<button
											type="button"
											id="gl6"
											class="btn btn-primary btn-block mb-2"
											tabindex="0"
										>
											C1
										</button>
									</td>
								</tr>
								<tr>
									<td>
										<button
											type="button"
											id="gl7"
											class="btn btn-primary btn-block mb-2"
											tabindex="0"
										>
											R. laboratorium kimia organik
										</button>
									</td>
								</tr>
								<tr>
									<td>
										<button
											type="button"
											id="gl8"
											class="btn btn-primary btn-block mb-2"
											tabindex="0"
										>
											C2, sekretariat BEM
										</button>
									</td>
								</tr>
								<tr>
									<td>
										<button
											type="button"
											id="gl8.1"
											class="btn btn-primary btn-block mb-2"
											tabindex="0"
										>
											WC
										</button>
									</td>
								</tr>
								<tr>
									<td>
										<button
											type="button"
											id="gl8.2"
											class="btn btn-primary btn-block mb-2"
											tabindex="0"
										>
											Sekretariat himpunan mahasiswa
										</button>
									</td>
								</tr>
								<tr>
									<td>
										<button
											type="button"
											id="gl8.3"
											class="btn btn-primary btn-block mb-2"
											tabindex="0"
										>
											R. laboratorium kimia B
										</button>
									</td>
								</tr>
								<tr>
									<td>
										<button
											type="button"
											id="gl8.4"
											class="btn btn-primary btn-block mb-2"
											tabindex="0"
										>
											R. sidang
										</button>
									</td>
								</tr>
								<tr>
									<td>
										<button
											type="button"
											id="gl8.6"
											class="btn btn-primary btn-block mb-2"
											tabindex="0"
										>
											F2
										</button>
									</td>
								</tr>
								<tr>
									<td>
										<button
											type="button"
											id="gl8.7"
											class="btn btn-primary btn-block mb-2"
											tabindex="0"
										>
											R. sekretariat S2 kimia
										</button>
									</td>
								</tr>
								<tr>
									<td>
										<button
											type="button"
											id="gl8.9"
											class="btn btn-primary btn-block mb-2"
											tabindex="0"
										>
											F3
										</button>
									</td>
								</tr>
								<tr>
									<td>
										<button
											type="button"
											id="gl8.10"
											class="btn btn-primary btn-block mb-2"
											tabindex="0"
										>
											F4
										</button>
									</td>
								</tr>
								<tr>
									<td>
										<button
											type="button"
											id="gl9"
											class="btn btn-primary btn-block mb-2"
											tabindex="0"
										>
											C3, sekretariat UKM
										</button>
									</td>
								</tr>
								<tr>
									<td>
										<button
											type="button"
											id="gl10"
											class="btn btn-primary btn-block mb-2"
											tabindex="0"
										>
											D2
										</button>
									</td>
								</tr>
								<tr>
									<td>
										<button
											type="button"
											id="gl10.1"
											class="btn btn-primary btn-block mb-2"
											tabindex="0"
										>
											Aula 1
										</button>
									</td>
								</tr>
								<tr>
									<td>
										<button
											type="button"
											id="gl10.2"
											class="btn btn-primary btn-block mb-2"
											tabindex="0"
										>
											Aula 2
										</button>
									</td>
								</tr>
								<tr>
									<td>
										<button
											type="button"
											id="gl13"
											class="btn btn-primary btn-block mb-2"
											tabindex="0"
										>
											R. laboratorium zoologi
										</button>
									</td>
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
			<script
				src="https://cdn.datatables.net/1.10.20/js/jquery.dataTables.min.js"
				crossorigin="anonymous"
			></script>
			<script
				src="https://cdn.datatables.net/1.10.20/js/dataTables.bootstrap4.min.js"
				crossorigin="anonymous"
			></script>
			<script src="/glmvirtualtour/datatable.js"></script>
		</div>
	</body>
	<body id="body">
		<div id="container" style="color: black"></div>

		<!--customhtml-->
		<div class="customhotspot" id="gldepan"></div>
		<div class="customhotspot" id="gldalam">
			<div
				onclick="chclickinfospotgldalam1();"
				id="infospotgldalam1"
				style="position: fixed; top: 0; left: 0; cursor: pointer"
			>
				<img
					src="/glmvirtualtour/customhotspots/infospot.png"
					style="width: 64px; height: 64px"
				/>
			</div>
			<div
				onclick="chclickinfospotgldalam2();"
				id="infospotgldalam2"
				style="position: fixed; top: 0; left: 0; cursor: pointer"
			>
				<img
					src="/glmvirtualtour/customhotspots/infospot.png"
					style="width: 64px; height: 64px"
				/>
			</div>
			<div
				onclick="chclickinfospotgldalam4();"
				id="infospotgldalam4"
				style="position: fixed; top: 0; left: 0; cursor: pointer"
			>
				<img
					src="/glmvirtualtour/customhotspots/infospot.png"
					style="width: 64px; height: 64px"
				/>
			</div>
		</div>
		<div class="customhotspot" id="a"></div>
		<div class="customhotspot" id="b">
			<div
				onclick="chclickinfospotb2();"
				id="infospotb2"
				style="position: fixed; top: 0; left: 0; cursor: pointer"
			>
				<img
					src="/glmvirtualtour/customhotspots/infospot.png"
					style="width: 64px; height: 64px"
				/>
			</div>
			<div
				onclick="chclickinfospotb3();"
				id="infospotb3"
				style="position: fixed; top: 0; left: 0; cursor: pointer"
			>
				<img
					src="/glmvirtualtour/customhotspots/infospot.png"
					style="width: 64px; height: 64px"
				/>
			</div>
		</div>
		<div class="customhotspot" id="c">
			<div
				onclick="chclickinfospotc2();"
				id="infospotc2"
				style="position: fixed; top: 0; left: 0; cursor: pointer"
			>
				<img
					src="/glmvirtualtour/customhotspots/infospot.png"
					style="width: 64px; height: 64px"
				/>
			</div>
		</div>
		<div class="customhotspot" id="d">
			<div
				onclick="chclickinfospotd2();"
				id="infospotd2"
				style="position: fixed; top: 0; left: 0; cursor: pointer"
			>
				<img
					src="/glmvirtualtour/customhotspots/infospot.png"
					style="width: 64px; height: 64px"
				/>
			</div>
		</div>
		<div class="customhotspot" id="e">
			<div
				onclick="chclickinfospote2();"
				id="infospote2"
				style="position: fixed; top: 0; left: 0; cursor: pointer"
			>
				<img
					src="/glmvirtualtour/customhotspots/infospot.png"
					style="width: 64px; height: 64px"
				/>
			</div>
		</div>
		<div class="customhotspot" id="f">
			<div
				onclick="chclickinfospotf2();"
				id="infospotf2"
				style="position: fixed; top: 0; left: 0; cursor: pointer"
			>
				<img
					src="/glmvirtualtour/customhotspots/infospot.png"
					style="width: 64px; height: 64px"
				/>
			</div>
		</div>
		<div class="customhotspot" id="g">
			<div
				onclick="chclickinfospotg3();"
				id="infospotg3"
				style="position: fixed; top: 0; left: 0; cursor: pointer"
			>
				<img
					src="/glmvirtualtour/customhotspots/infospot.png"
					style="width: 64px; height: 64px"
				/>
			</div>
			<div
				onclick="chclickinfospotg5();"
				id="infospotg5"
				style="position: fixed; top: 0; left: 0; cursor: pointer"
			>
				<img
					src="/glmvirtualtour/customhotspots/infospot.png"
					style="width: 64px; height: 64px"
				/>
			</div>
		</div>
		<div class="customhotspot" id="ga">
			<div
				onclick="chclickinfospotga2();"
				id="infospotga2"
				style="position: fixed; top: 0; left: 0; cursor: pointer"
			>
				<img
					src="/glmvirtualtour/customhotspots/infospot.png"
					style="width: 64px; height: 64px"
				/>
			</div>
		</div>
		<div class="customhotspot" id="gb">
			<div
				onclick="chclickinfospotgb2();"
				id="infospotgb2"
				style="position: fixed; top: 0; left: 0; cursor: pointer"
			>
				<img
					src="/glmvirtualtour/customhotspots/infospot.png"
					style="width: 64px; height: 64px"
				/>
			</div>
		</div>
		<div class="customhotspot" id="gc">
			<div
				onclick="chclickinfospotgc2();"
				id="infospotgc2"
				style="position: fixed; top: 0; left: 0; cursor: pointer"
			>
				<img
					src="/glmvirtualtour/customhotspots/infospot.png"
					style="width: 64px; height: 64px"
				/>
			</div>
		</div>
		<div class="customhotspot" id="gd">
			<div
				onclick="chclickinfospotgd2();"
				id="infospotgd2"
				style="position: fixed; top: 0; left: 0; cursor: pointer"
			>
				<img
					src="/glmvirtualtour/customhotspots/infospot.png"
					style="width: 64px; height: 64px"
				/>
			</div>
		</div>
		<div class="customhotspot" id="ge">
			<div
				onclick="chclickinfospotge3();"
				id="infospotge3"
				style="position: fixed; top: 0; left: 0; cursor: pointer"
			>
				<img
					src="/glmvirtualtour/customhotspots/infospot.png"
					style="width: 64px; height: 64px"
				/>
			</div>
		</div>
		<div class="customhotspot" id="gf">
			<div
				onclick="chclickinfospotgf2();"
				id="infospotgf2"
				style="position: fixed; top: 0; left: 0; cursor: pointer"
			>
				<img
					src="/glmvirtualtour/customhotspots/infospot.png"
					style="width: 64px; height: 64px"
				/>
			</div>
		</div>
		<div class="customhotspot" id="gg">
			<div
				onclick="chclickinfospotgg1();"
				id="infospotgg1"
				style="position: fixed; top: 0; left: 0; cursor: pointer"
			>
				<img
					src="/glmvirtualtour/customhotspots/infospot.png"
					style="width: 64px; height: 64px"
				/>
			</div>
		</div>
		<div class="customhotspot" id="gea"></div>
		<div class="customhotspot" id="geb">
			<div
				onclick="chclickinfospotgeb2();"
				id="infospotgeb2"
				style="position: fixed; top: 0; left: 0; cursor: pointer"
			>
				<img
					src="/glmvirtualtour/customhotspots/infospot.png"
					style="width: 64px; height: 64px"
				/>
			</div>
		</div>
		<div class="customhotspot" id="gec">
			<div
				onclick="chclickinfospotgec1();"
				id="infospotgec1"
				style="position: fixed; top: 0; left: 0; cursor: pointer"
			>
				<img
					src="/glmvirtualtour/customhotspots/infospot.png"
					style="width: 64px; height: 64px"
				/>
			</div>
		</div>
		<div class="customhotspot" id="h">
			<div
				onclick="chclickinfospoth2();"
				id="infospoth2"
				style="position: fixed; top: 0; left: 0; cursor: pointer"
			>
				<img
					src="/glmvirtualtour/customhotspots/infospot.png"
					style="width: 64px; height: 64px"
				/>
			</div>
			<div
				onclick="chclickinfospoth3();"
				id="infospoth3"
				style="position: fixed; top: 0; left: 0; cursor: pointer"
			>
				<img
					src="/glmvirtualtour/customhotspots/infospot.png"
					style="width: 64px; height: 64px"
				/>
			</div>
		</div>
		<div class="customhotspot" id="i"></div>
		<div class="customhotspot" id="ia">
			<div
				onclick="chclickinfospotia2();"
				id="infospotia2"
				style="position: fixed; top: 0; left: 0; cursor: pointer"
			>
				<img
					src="/glmvirtualtour/customhotspots/infospot.png"
					style="width: 64px; height: 64px"
				/>
			</div>
		</div>
		<div class="customhotspot" id="ib">
			<div
				onclick="chclickinfospotib1();"
				id="infospotib1"
				style="position: fixed; top: 0; left: 0; cursor: pointer"
			>
				<img
					src="/glmvirtualtour/customhotspots/infospot.png"
					style="width: 64px; height: 64px"
				/>
			</div>
		</div>
		<div class="customhotspot" id="j"></div>
		<div class="customhotspot" id="k"></div>
		<div class="customhotspot" id="l">
			<div
				onclick="chclickinfospotl2();"
				id="infospotl2"
				style="position: fixed; top: 0; left: 0; cursor: pointer"
			>
				<img
					src="/glmvirtualtour/customhotspots/infospot.png"
					style="width: 64px; height: 64px"
				/>
			</div>
		</div>
		<div class="customhotspot" id="m"></div>
		<div class="customhotspot" id="n"></div>
		<!--customhtml-end-->

		<div>
			<div id="tmp">
				<div
					class="modal-dialog modal-dialog-centered modal-lg"
					role="document"
				>
					<div class="modal-content shadow-inset">
						<div class="modal-body">
							<button
								type="button"
								class="btn btn-primary close mb-2"
								onclick="hideTemp()"
							>
								<span aria-hidden="true">×</span>
							</button>
							<div id="tmpcontent"></div>
						</div>
					</div>
				</div>
			</div>

			<div
				id="loading"
				class="fullwrapper"
				style="display: table; width: 100%; height: 100%"
			>
				<div
					style="
						display: table-cell;
						vertical-align: middle;
						text-align: center;
						color: black;
						font-size: 30px;
						padding: 50px;
					"
				>
					<!--loadingtext-->Loading...
					<!--loadingtext-end-->
				</div>
			</div>
		</div>

		<script>
			var container = document.querySelector("#container");
			/*panolens*/

			var viewer = new PANOLENS.Viewer({
				container: container,
				controlBar: false,
				output: "console",
				autoHideInfospot: false,
			});

			/*panolens-end*/

			viewer.addUpdateCallback(function () {});

			/*panoramas*/

			var gldepan = new PANOLENS.ImagePanorama("/glmvirtualtour/panoramas/gldepan.jpg");
			gldepan.addEventListener("progress", function (e) {
				$("#loading").show();
			});
			gldepan.addEventListener("load", function (e) {
				$("#loading").fadeOut();
			});
			gldepan.addEventListener("click", function (e) {});

			var infospotgldepan0 = new PANOLENS.Infospot(
				512,
				hotspotIcons[6].data,
				true
			);
			infospotgldepan0.position.set(4944.33, -731.99, -0.94);
			gldepan.add(infospotgldepan0);

			infospotgldepan0.addEventListener("click", function () {
				ChangePanorama("gldalam");
			});

			var infospotgldepan1 = new PANOLENS.Infospot(
				512,
				hotspotIcons[6].data,
				true
			);
			infospotgldepan1.position.set(454.29, -952.47, 4880.76);
			gldepan.add(infospotgldepan1);

			infospotgldepan1.addEventListener("click", function () {
				ChangePanorama("a");
			});

			viewer.add(gldepan);

			var gldalam = new PANOLENS.ImagePanorama("/glmvirtualtour/panoramas/gldalam.jpg");
			gldalam.addEventListener("progress", function (e) {
				$("#loading").show();
			});
			gldalam.addEventListener("load", function (e) {
				$("#loading").fadeOut();
			});
			gldalam.addEventListener("click", function (e) {});

			var infospotgldalam0 = new PANOLENS.Infospot(
				512,
				hotspotIcons[6].data,
				true
			);
			infospotgldalam0.position.set(-3935.0, -3072.8, -86.64);
			gldalam.add(infospotgldalam0);

			infospotgldalam0.addEventListener("click", function () {
				ChangePanorama("gldepan");
			});

			var infospotgldalam1 = new PANOLENS.Infospot(
				512,
				hotspotIcons[0].data,
				true
			);
			infospotgldalam1.position.set(4431.2, 734.64, 2178.61);
			infospotgldalam1.visible = false;
			gldalam.add(infospotgldalam1);

			infospotgldalam1.addEventListener("click", function () {
				showMedia(1, "/glmvirtualtour/images/jurusanbio.jpg");
			});

			var infospotgldalam2 = new PANOLENS.Infospot(
				512,
				hotspotIcons[0].data,
				true
			);
			infospotgldalam2.position.set(2580.23, 1242.52, 4088.24);
			infospotgldalam2.visible = false;
			gldalam.add(infospotgldalam2);

			infospotgldalam2.addEventListener("click", function () {
				showMedia(1, "/glmvirtualtour/images/dosenbio.jpg");
			});

			var infospotgldalam3 = new PANOLENS.Infospot(
				512,
				hotspotIcons[11].data,
				true
			);
			infospotgldalam3.position.set(-150.38, -4994.05, -16.92);
			gldalam.add(infospotgldalam3);

			infospotgldalam3.addEventListener("click", function () {
				showMedia(1, "/glmvirtualtour/images/gldalam.png");
			});

			var infospotgldalam4 = new PANOLENS.Infospot(
				512,
				hotspotIcons[0].data,
				true
			);
			infospotgldalam4.position.set(4366.28, 1706.35, -1710.75);
			infospotgldalam4.visible = false;
			gldalam.add(infospotgldalam4);

			infospotgldalam4.addEventListener("click", function () {
				showMedia(1, "/glmvirtualtour/images/kimia.jpg");
			});

			viewer.add(gldalam);

			var a = new PANOLENS.ImagePanorama("/glmvirtualtour/panoramas/a.jpg");
			a.addEventListener("progress", function (e) {
				$("#loading").show();
			});
			a.addEventListener("load", function (e) {
				$("#loading").fadeOut();
			});
			a.addEventListener("click", function (e) {});

			var infospota0 = new PANOLENS.Infospot(512, hotspotIcons[6].data, true);
			infospota0.position.set(-4259.04, -819.44, -2482.99);
			a.add(infospota0);

			infospota0.addEventListener("click", function () {
				ChangePanorama("gldepan");
			});

			var infospota1 = new PANOLENS.Infospot(512, hotspotIcons[6].data, true);
			infospota1.position.set(4907.28, -798.76, 521.12);
			a.add(infospota1);

			infospota1.addEventListener("click", function () {
				ChangePanorama("b");
			});

			viewer.add(a);

			var b = new PANOLENS.ImagePanorama("/glmvirtualtour/panoramas/b.jpg");
			b.addEventListener("progress", function (e) {
				$("#loading").show();
			});
			b.addEventListener("load", function (e) {
				$("#loading").fadeOut();
			});
			b.addEventListener("click", function (e) {});

			var infospotb0 = new PANOLENS.Infospot(512, hotspotIcons[6].data, true);
			infospotb0.position.set(-261.55, -1366.43, 4791.96);
			b.add(infospotb0);

			infospotb0.addEventListener("click", function () {
				ChangePanorama("a");
			});

			var infospotb1 = new PANOLENS.Infospot(512, hotspotIcons[6].data, true);
			infospotb1.position.set(623.19, -2390.93, -4337.18);
			b.add(infospotb1);

			infospotb1.addEventListener("click", function () {
				ChangePanorama("c");
			});

			var infospotb2 = new PANOLENS.Infospot(512, hotspotIcons[0].data, true);
			infospotb2.position.set(-4796.08, -161.67, 1368.31);
			infospotb2.visible = false;
			b.add(infospotb2);

			infospotb2.addEventListener("click", function () {
				showMedia(1, "/glmvirtualtour/images/biologi.jpg");
			});

			var infospotb3 = new PANOLENS.Infospot(512, hotspotIcons[0].data, true);
			infospotb3.position.set(4558.93, 2023.67, 183.96);
			infospotb3.visible = false;
			b.add(infospotb3);

			infospotb3.addEventListener("click", function () {
				showMedia(1, "/glmvirtualtour/images/ekologi.jpg");
			});

			var infospotb4 = new PANOLENS.Infospot(512, hotspotIcons[11].data, true);
			infospotb4.position.set(17.94, -4998.94, -20.26);
			b.add(infospotb4);

			infospotb4.addEventListener("click", function () {
				showMedia(1, "/glmvirtualtour/images/gl3.png");
			});

			viewer.add(b);

			var c = new PANOLENS.ImagePanorama("/glmvirtualtour/panoramas/c.jpg");
			c.addEventListener("progress", function (e) {
				$("#loading").show();
			});
			c.addEventListener("load", function (e) {
				$("#loading").fadeOut();
			});
			c.addEventListener("click", function (e) {});

			var infospotc0 = new PANOLENS.Infospot(512, hotspotIcons[6].data, true);
			infospotc0.position.set(391.25, -2374.35, 4376.06);
			c.add(infospotc0);

			infospotc0.addEventListener("click", function () {
				ChangePanorama("b");
			});

			var infospotc1 = new PANOLENS.Infospot(512, hotspotIcons[6].data, true);
			infospotc1.position.set(638.77, -2505.05, -4270.09);
			c.add(infospotc1);

			infospotc1.addEventListener("click", function () {
				ChangePanorama("d");
			});

			var infospotc2 = new PANOLENS.Infospot(512, hotspotIcons[6].data, true);
			infospotc2.position.set(4489.55, 2193.35, 15.26);
			infospotc2.visible = false;
			c.add(infospotc2);

			infospotc2.addEventListener("click", function () {
				showMedia(1, "/glmvirtualtour/images/kulturjaringan.jpg");
			});

			var infospotc3 = new PANOLENS.Infospot(512, hotspotIcons[11].data, true);
			infospotc3.position.set(411.75, -4982.16, -20.49);
			c.add(infospotc3);

			infospotc3.addEventListener("click", function () {
				showMedia(1, "/glmvirtualtour/images/gl4.png");
			});

			viewer.add(c);

			var d = new PANOLENS.ImagePanorama("/glmvirtualtour/panoramas/d.jpg");
			d.addEventListener("progress", function (e) {
				$("#loading").show();
			});
			d.addEventListener("load", function (e) {
				$("#loading").fadeOut();
			});
			d.addEventListener("click", function (e) {});

			var infospotd0 = new PANOLENS.Infospot(512, hotspotIcons[6].data, true);
			infospotd0.position.set(141.61, -2111.51, 4520.66);
			d.add(infospotd0);

			infospotd0.addEventListener("click", function () {
				ChangePanorama("c");
			});

			var infospotd1 = new PANOLENS.Infospot(512, hotspotIcons[6].data, true);
			infospotd1.position.set(362.44, -2485.44, -4315.36);
			d.add(infospotd1);

			infospotd1.addEventListener("click", function () {
				ChangePanorama("e");
			});

			var infospotd2 = new PANOLENS.Infospot(512, hotspotIcons[0].data, true);
			infospotd2.position.set(4420.75, 2321.28, 105.64);
			infospotd2.visible = false;
			d.add(infospotd2);

			infospotd2.addEventListener("click", function () {
				showMedia(1, "/glmvirtualtour/images/mikro.jpg");
			});

			var infospotd3 = new PANOLENS.Infospot(512, hotspotIcons[11].data, true);
			infospotd3.position.set(-179.89, -4992.49, -64.35);
			d.add(infospotd3);

			infospotd3.addEventListener("click", function () {
				showMedia(1, "/glmvirtualtour/images/gl5.png");
			});

			viewer.add(d);

			var e = new PANOLENS.ImagePanorama("/glmvirtualtour/panoramas/e.jpg");
			e.addEventListener("progress", function (e) {
				$("#loading").show();
			});
			e.addEventListener("load", function (e) {
				$("#loading").fadeOut();
			});
			e.addEventListener("click", function (e) {});

			var infospote0 = new PANOLENS.Infospot(512, hotspotIcons[6].data, true);
			infospote0.position.set(65.5, -2680.35, 4214.43);
			e.add(infospote0);

			infospote0.addEventListener("click", function () {
				ChangePanorama("d");
			});

			var infospote1 = new PANOLENS.Infospot(512, hotspotIcons[6].data, true);
			infospote1.position.set(280.92, -2694.72, -4193.54);
			e.add(infospote1);

			infospote1.addEventListener("click", function () {
				ChangePanorama("f");
			});

			var infospote2 = new PANOLENS.Infospot(512, hotspotIcons[0].data, true);
			infospote2.position.set(4403.37, 2343.77, -196.89);
			infospote2.visible = false;
			e.add(infospote2);

			infospote2.addEventListener("click", function () {
				showMedia(1, "/glmvirtualtour/images/c1.jpg");
			});

			var infospote3 = new PANOLENS.Infospot(512, hotspotIcons[11].data, true);
			infospote3.position.set(-194.81, -4989.8, 171.31);
			e.add(infospote3);

			infospote3.addEventListener("click", function () {
				showMedia(1, "/glmvirtualtour/images/gl6.png");
			});

			viewer.add(e);

			var f = new PANOLENS.ImagePanorama("/glmvirtualtour/panoramas/f.jpg");
			f.addEventListener("progress", function (e) {
				$("#loading").show();
			});
			f.addEventListener("load", function (e) {
				$("#loading").fadeOut();
			});
			f.addEventListener("click", function (e) {});

			var infospotf0 = new PANOLENS.Infospot(512, hotspotIcons[6].data, true);
			infospotf0.position.set(228.49, -2410.99, 4364.07);
			f.add(infospotf0);

			infospotf0.addEventListener("click", function () {
				ChangePanorama("e");
			});

			var infospotf1 = new PANOLENS.Infospot(512, hotspotIcons[6].data, true);
			infospotf1.position.set(261.39, -2192.89, -4476.86);
			f.add(infospotf1);

			infospotf1.addEventListener("click", function () {
				ChangePanorama("g");
			});

			var infospotf2 = new PANOLENS.Infospot(512, hotspotIcons[0].data, true);
			infospotf2.position.set(4445.52, 2246.16, -390.87);
			infospotf2.visible = false;
			f.add(infospotf2);

			infospotf2.addEventListener("click", function () {
				showMedia(1, "/glmvirtualtour/images/kimiaorganik.jpg");
			});

			var infospotf3 = new PANOLENS.Infospot(512, hotspotIcons[11].data, true);
			infospotf3.position.set(59.28, -4993.1, -165.13);
			f.add(infospotf3);

			infospotf3.addEventListener("click", function () {
				showMedia(1, "/glmvirtualtour/images/gl7.png");
			});

			viewer.add(f);

			var g = new PANOLENS.ImagePanorama("/glmvirtualtour/panoramas/g.jpg");
			g.addEventListener("progress", function (e) {
				$("#loading").show();
			});
			g.addEventListener("load", function (e) {
				$("#loading").fadeOut();
			});
			g.addEventListener("click", function (e) {});

			var infospotg0 = new PANOLENS.Infospot(512, hotspotIcons[6].data, true);
			infospotg0.position.set(208.13, -1901.27, 4612.97);
			g.add(infospotg0);

			infospotg0.addEventListener("click", function () {
				ChangePanorama("f");
			});

			var infospotg1 = new PANOLENS.Infospot(512, hotspotIcons[6].data, true);
			infospotg1.position.set(373.41, -1777.15, -4650.1);
			g.add(infospotg1);

			infospotg1.addEventListener("click", function () {
				ChangePanorama("h");
			});

			var infospotg2 = new PANOLENS.Infospot(512, hotspotIcons[6].data, true);
			infospotg2.position.set(-3935.13, -2337.3, -1993.51);
			g.add(infospotg2);

			infospotg2.addEventListener("click", function () {
				ChangePanorama("ga");
			});

			var infospotg3 = new PANOLENS.Infospot(512, hotspotIcons[0].data, true);
			infospotg3.position.set(4602.88, 1929.2, 176.37);
			infospotg3.visible = false;
			g.add(infospotg3);

			infospotg3.addEventListener("click", function () {
				showMedia(1, "/glmvirtualtour/images/bem.jpg");
			});

			var infospotg4 = new PANOLENS.Infospot(512, hotspotIcons[11].data, true);
			infospotg4.position.set(203.19, -4987.6, -240.92);
			g.add(infospotg4);

			infospotg4.addEventListener("click", function () {
				showMedia(1, "/glmvirtualtour/images/gl8.png");
			});

			var infospotg5 = new PANOLENS.Infospot(512, hotspotIcons[0].data, true);
			infospotg5.position.set(2398.3, 1186.8, 4220.92);
			infospotg5.visible = false;
			g.add(infospotg5);

			infospotg5.addEventListener("click", function () {
				showMedia(1, "/glmvirtualtour/images/c2.jpg");
			});

			viewer.add(g);

			var ga = new PANOLENS.ImagePanorama("/glmvirtualtour/panoramas/ga.jpg");
			ga.addEventListener("progress", function (e) {
				$("#loading").show();
			});
			ga.addEventListener("load", function (e) {
				$("#loading").fadeOut();
			});
			ga.addEventListener("click", function (e) {});

			var infospotga0 = new PANOLENS.Infospot(512, hotspotIcons[6].data, true);
			infospotga0.position.set(303.12, -1583.15, 4725.36);
			ga.add(infospotga0);

			infospotga0.addEventListener("click", function () {
				ChangePanorama("g");
			});

			var infospotga1 = new PANOLENS.Infospot(512, hotspotIcons[6].data, true);
			infospotga1.position.set(579.39, -2043.85, -4518.0);
			ga.add(infospotga1);

			infospotga1.addEventListener("click", function () {
				ChangePanorama("gb");
			});

			var infospotga2 = new PANOLENS.Infospot(512, hotspotIcons[0].data, true);
			infospotga2.position.set(3886.12, 848.87, 3016.5);
			infospotga2.visible = false;
			ga.add(infospotga2);

			infospotga2.addEventListener("click", function () {
				showMedia(1, "/glmvirtualtour/images/wc.jpg");
			});

			var infospotga3 = new PANOLENS.Infospot(512, hotspotIcons[11].data, true);
			infospotga3.position.set(696.85, -4937.57, -362.56);
			ga.add(infospotga3);

			infospotga3.addEventListener("click", function () {
				showMedia(1, "/glmvirtualtour/images/gl8.1.png");
			});

			viewer.add(ga);

			var gb = new PANOLENS.ImagePanorama("/glmvirtualtour/panoramas/gb.jpg");
			gb.addEventListener("progress", function (e) {
				$("#loading").show();
			});
			gb.addEventListener("load", function (e) {
				$("#loading").fadeOut();
			});
			gb.addEventListener("click", function (e) {});

			var infospotgb0 = new PANOLENS.Infospot(512, hotspotIcons[6].data, true);
			infospotgb0.position.set(331.56, -1702.5, 4679.83);
			gb.add(infospotgb0);

			infospotgb0.addEventListener("click", function () {
				ChangePanorama("ga");
			});

			var infospotgb1 = new PANOLENS.Infospot(512, hotspotIcons[6].data, true);
			infospotgb1.position.set(726.38, -1716.67, -4628.91);
			gb.add(infospotgb1);

			infospotgb1.addEventListener("click", function () {
				ChangePanorama("gc");
			});

			var infospotgb2 = new PANOLENS.Infospot(512, hotspotIcons[0].data, true);
			infospotgb2.position.set(4610.46, 1912.04, 180.11);
			infospotgb2.visible = false;
			gb.add(infospotgb2);

			infospotgb2.addEventListener("click", function () {
				showMedia(1, "/glmvirtualtour/images/hima.jpg");
			});

			var infospotgb3 = new PANOLENS.Infospot(512, hotspotIcons[11].data, true);
			infospotgb3.position.set(370.02, -4984.74, -117.29);
			gb.add(infospotgb3);

			infospotgb3.addEventListener("click", function () {
				showMedia(1, "/glmvirtualtour/images/gl8.2.png");
			});

			viewer.add(gb);

			var gc = new PANOLENS.ImagePanorama("/glmvirtualtour/panoramas/gc.jpg");
			gc.addEventListener("progress", function (e) {
				$("#loading").show();
			});
			gc.addEventListener("load", function (e) {
				$("#loading").fadeOut();
			});
			gc.addEventListener("click", function (e) {});

			var infospotgc0 = new PANOLENS.Infospot(512, hotspotIcons[6].data, true);
			infospotgc0.position.set(177.96, -1677.07, 4697.26);
			gc.add(infospotgc0);

			infospotgc0.addEventListener("click", function () {
				ChangePanorama("gb");
			});

			var infospotgc1 = new PANOLENS.Infospot(512, hotspotIcons[6].data, true);
			infospotgc1.position.set(283.85, -2318.19, -4413.14);
			gc.add(infospotgc1);

			infospotgc1.addEventListener("click", function () {
				ChangePanorama("gd");
			});

			var infospotgc2 = new PANOLENS.Infospot(512, hotspotIcons[0].data, true);
			infospotgc2.position.set(4076.37, 2226.68, 1843.16);
			infospotgc2.visible = false;
			gc.add(infospotgc2);

			infospotgc2.addEventListener("click", function () {
				showMedia(1, "/glmvirtualtour/images/kimiab.jpg");
			});

			var infospotgc3 = new PANOLENS.Infospot(512, hotspotIcons[11].data, true);
			infospotgc3.position.set(91.27, -4996.38, -12.38);
			gc.add(infospotgc3);

			infospotgc3.addEventListener("click", function () {
				showMedia(1, "/glmvirtualtour/images/gl8.3.png");
			});

			viewer.add(gc);

			var gd = new PANOLENS.ImagePanorama("/glmvirtualtour/panoramas/gd.jpg");
			gd.addEventListener("progress", function (e) {
				$("#loading").show();
			});
			gd.addEventListener("load", function (e) {
				$("#loading").fadeOut();
			});
			gd.addEventListener("click", function (e) {});

			var infospotgd0 = new PANOLENS.Infospot(512, hotspotIcons[6].data, true);
			infospotgd0.position.set(-132.64, -1955.03, 4593.26);
			gd.add(infospotgd0);

			infospotgd0.addEventListener("click", function () {
				ChangePanorama("gc");
			});

			var infospotgd1 = new PANOLENS.Infospot(512, hotspotIcons[6].data, true);
			infospotgd1.position.set(67.32, -2370.75, -4395.05);
			gd.add(infospotgd1);

			infospotgd1.addEventListener("click", function () {
				ChangePanorama("ge");
			});

			var infospotgd2 = new PANOLENS.Infospot(512, hotspotIcons[0].data, true);
			infospotgd2.position.set(3554.91, 1998.37, 2878.14);
			infospotgd2.visible = false;
			gd.add(infospotgd2);

			infospotgd2.addEventListener("click", function () {
				showMedia(1, "/glmvirtualtour/images/sidang.jpg");
			});

			var infospotgd3 = new PANOLENS.Infospot(512, hotspotIcons[11].data, true);
			infospotgd3.position.set(-70.6, -4997.17, 14.31);
			gd.add(infospotgd3);

			infospotgd3.addEventListener("click", function () {
				showMedia(1, "/glmvirtualtour/images/gl8.4.png");
			});

			viewer.add(gd);

			var ge = new PANOLENS.ImagePanorama("/glmvirtualtour/panoramas/ge.jpg");
			ge.addEventListener("progress", function (e) {
				$("#loading").show();
			});
			ge.addEventListener("load", function (e) {
				$("#loading").fadeOut();
			});
			ge.addEventListener("click", function (e) {});

			var infospotge0 = new PANOLENS.Infospot(512, hotspotIcons[6].data, true);
			infospotge0.position.set(-4464.28, -2111.27, -720.19);
			ge.add(infospotge0);

			infospotge0.addEventListener("click", function () {
				ChangePanorama("gd");
			});

			var infospotge1 = new PANOLENS.Infospot(512, hotspotIcons[6].data, true);
			infospotge1.position.set(1493.03, -2225.54, -4214.23);
			ge.add(infospotge1);

			infospotge1.addEventListener("click", function () {
				ChangePanorama("gf");
			});

			var infospotge2 = new PANOLENS.Infospot(512, hotspotIcons[6].data, true);
			infospotge2.position.set(4547.41, -617.43, 1969.4);
			ge.add(infospotge2);

			infospotge2.addEventListener("click", function () {
				ChangePanorama("gea");
			});

			var infospotge3 = new PANOLENS.Infospot(512, hotspotIcons[0].data, true);
			infospotge3.position.set(-3031.19, 320.9, 3954.17);
			infospotge3.visible = false;
			ge.add(infospotge3);

			infospotge3.addEventListener("click", function () {
				showMedia(1, "/glmvirtualtour/images/wc.jpg");
			});

			var infospotge4 = new PANOLENS.Infospot(512, hotspotIcons[11].data, true);
			infospotge4.position.set(-49.13, -4996.36, -78.34);
			ge.add(infospotge4);

			infospotge4.addEventListener("click", function () {
				showMedia(1, "/glmvirtualtour/images/gl8.5.png");
			});

			viewer.add(ge);

			var gf = new PANOLENS.ImagePanorama("/glmvirtualtour/panoramas/gf.jpg");
			gf.addEventListener("progress", function (e) {
				$("#loading").show();
			});
			gf.addEventListener("load", function (e) {
				$("#loading").fadeOut();
			});
			gf.addEventListener("click", function (e) {});

			var infospotgf0 = new PANOLENS.Infospot(512, hotspotIcons[6].data, true);
			infospotgf0.position.set(71.69, -2414.58, 4370.28);
			gf.add(infospotgf0);

			infospotgf0.addEventListener("click", function () {
				ChangePanorama("ge");
			});

			var infospotgf1 = new PANOLENS.Infospot(512, hotspotIcons[6].data, true);
			infospotgf1.position.set(551.53, -2622.86, -4216.07);
			gf.add(infospotgf1);

			infospotgf1.addEventListener("click", function () {
				ChangePanorama("gg");
			});

			var infospotgf2 = new PANOLENS.Infospot(512, hotspotIcons[0].data, true);
			infospotgf2.position.set(3842.13, 1649.23, -2732.3);
			infospotgf2.visible = false;
			gf.add(infospotgf2);

			infospotgf2.addEventListener("click", function () {
				showMedia(1, "/glmvirtualtour/images/f2.jpg");
			});

			var infospotgf3 = new PANOLENS.Infospot(512, hotspotIcons[11].data, true);
			infospotgf3.position.set(-18.56, -4998.79, 24.65);
			gf.add(infospotgf3);

			infospotgf3.addEventListener("click", function () {
				showMedia(1, "/glmvirtualtour/images/gl8.6.png");
			});

			viewer.add(gf);

			var gg = new PANOLENS.ImagePanorama("/glmvirtualtour/panoramas/gg.jpg");
			gg.addEventListener("progress", function (e) {
				$("#loading").show();
			});
			gg.addEventListener("load", function (e) {
				$("#loading").fadeOut();
			});
			gg.addEventListener("click", function (e) {});

			var infospotgg0 = new PANOLENS.Infospot(512, hotspotIcons[6].data, true);
			infospotgg0.position.set(4.43, -2079.67, 4542.52);
			gg.add(infospotgg0);

			infospotgg0.addEventListener("click", function () {
				ChangePanorama("gf");
			});

			var infospotgg1 = new PANOLENS.Infospot(512, hotspotIcons[0].data, true);
			infospotgg1.position.set(4593.96, 1948.41, 177.48);
			infospotgg1.visible = false;
			gg.add(infospotgg1);

			infospotgg1.addEventListener("click", function () {
				showMedia(1, "/glmvirtualtour/images/sduakimia.jpg");
			});

			var infospotgg2 = new PANOLENS.Infospot(512, hotspotIcons[11].data, true);
			infospotgg2.position.set(34.11, -4996.99, -68.35);
			gg.add(infospotgg2);

			infospotgg2.addEventListener("click", function () {
				showMedia(1, "/glmvirtualtour/images/gl8.7.png");
			});

			viewer.add(gg);

			var gea = new PANOLENS.ImagePanorama("/glmvirtualtour/panoramas/gea.jpg");
			gea.addEventListener("progress", function (e) {
				$("#loading").show();
			});
			gea.addEventListener("load", function (e) {
				$("#loading").fadeOut();
			});
			gea.addEventListener("click", function (e) {});

			var infospotgea0 = new PANOLENS.Infospot(512, hotspotIcons[6].data, true);
			infospotgea0.position.set(3559.2, -3490.91, 335.6);
			gea.add(infospotgea0);

			infospotgea0.addEventListener("click", function () {
				ChangePanorama("ge");
			});

			var infospotgea1 = new PANOLENS.Infospot(512, hotspotIcons[6].data, true);
			infospotgea1.position.set(-121.11, -2245.9, -4459.77);
			gea.add(infospotgea1);

			infospotgea1.addEventListener("click", function () {
				ChangePanorama("geb");
			});

			var infospotgea2 = new PANOLENS.Infospot(
				512,
				hotspotIcons[11].data,
				true
			);
			infospotgea2.position.set(-42.96, -4998.23, -13.58);
			gea.add(infospotgea2);

			infospotgea2.addEventListener("click", function () {
				showMedia(1, "/glmvirtualtour/images/gl8.8.png");
			});

			viewer.add(gea);

			var geb = new PANOLENS.ImagePanorama("/glmvirtualtour/panoramas/geb.jpg");
			geb.addEventListener("progress", function (e) {
				$("#loading").show();
			});
			geb.addEventListener("load", function (e) {
				$("#loading").fadeOut();
			});
			geb.addEventListener("click", function (e) {});

			var infospotgeb0 = new PANOLENS.Infospot(512, hotspotIcons[6].data, true);
			infospotgeb0.position.set(275.33, -2593.14, 4259.61);
			geb.add(infospotgeb0);

			infospotgeb0.addEventListener("click", function () {
				ChangePanorama("gea");
			});

			var infospotgeb1 = new PANOLENS.Infospot(512, hotspotIcons[6].data, true);
			infospotgeb1.position.set(401.09, -2223.57, -4455.4);
			geb.add(infospotgeb1);

			infospotgeb1.addEventListener("click", function () {
				ChangePanorama("gec");
			});

			var infospotgeb2 = new PANOLENS.Infospot(512, hotspotIcons[0].data, true);
			infospotgeb2.position.set(4175.11, 2143.29, 1700.59);
			infospotgeb2.visible = false;
			geb.add(infospotgeb2);

			infospotgeb2.addEventListener("click", function () {
				showMedia(1, "/glmvirtualtour/images/f3.jpg");
			});

			var infospotgeb3 = new PANOLENS.Infospot(
				512,
				hotspotIcons[11].data,
				true
			);
			infospotgeb3.position.set(213.66, -4990.6, -107.03);
			geb.add(infospotgeb3);

			infospotgeb3.addEventListener("click", function () {
				showMedia(1, "/glmvirtualtour/images/gl8.9.png");
			});

			viewer.add(geb);

			var gec = new PANOLENS.ImagePanorama("/glmvirtualtour/panoramas/gec.jpg");
			gec.addEventListener("progress", function (e) {
				$("#loading").show();
			});
			gec.addEventListener("load", function (e) {
				$("#loading").fadeOut();
			});
			gec.addEventListener("click", function (e) {});

			var infospotgec0 = new PANOLENS.Infospot(512, hotspotIcons[6].data, true);
			infospotgec0.position.set(255.57, -2469.2, 4330.06);
			gec.add(infospotgec0);

			infospotgec0.addEventListener("click", function () {
				ChangePanorama("geb");
			});

			var infospotgec1 = new PANOLENS.Infospot(512, hotspotIcons[0].data, true);
			infospotgec1.position.set(4367.54, 2261.54, -888.79);
			infospotgec1.visible = false;
			gec.add(infospotgec1);

			infospotgec1.addEventListener("click", function () {
				showMedia(1, "/glmvirtualtour/images/f4.jpg");
			});

			var infospotgec2 = new PANOLENS.Infospot(
				512,
				hotspotIcons[11].data,
				true
			);
			infospotgec2.position.set(-29.43, -4994.26, -143.03);
			gec.add(infospotgec2);

			infospotgec2.addEventListener("click", function () {
				showMedia(1, "/glmvirtualtour/images/gl8.10.png");
			});

			viewer.add(gec);

			var h = new PANOLENS.ImagePanorama("/glmvirtualtour/panoramas/h.jpg");
			h.addEventListener("progress", function (e) {
				$("#loading").show();
			});
			h.addEventListener("load", function (e) {
				$("#loading").fadeOut();
			});
			h.addEventListener("click", function (e) {});

			var infospoth0 = new PANOLENS.Infospot(512, hotspotIcons[6].data, true);
			infospoth0.position.set(186.5, -2602.09, 4259.25);
			h.add(infospoth0);

			infospoth0.addEventListener("click", function () {
				ChangePanorama("g");
			});

			var infospoth1 = new PANOLENS.Infospot(512, hotspotIcons[6].data, true);
			infospoth1.position.set(688.54, -2272.11, -4394.11);
			h.add(infospoth1);

			infospoth1.addEventListener("click", function () {
				ChangePanorama("i");
			});

			var infospoth2 = new PANOLENS.Infospot(512, hotspotIcons[0].data, true);
			infospoth2.position.set(3195.09, 1748.36, 3414.77);
			infospoth2.visible = false;
			h.add(infospoth2);

			infospoth2.addEventListener("click", function () {
				showMedia(1, "/glmvirtualtour/images/c3.jpg");
			});

			var infospoth3 = new PANOLENS.Infospot(512, hotspotIcons[0].data, true);
			infospoth3.position.set(2526.78, 295.32, -4298.92);
			infospoth3.visible = false;
			h.add(infospoth3);

			infospoth3.addEventListener("click", function () {
				showMedia(1, "/glmvirtualtour/images/ukm.jpg");
			});

			var infospoth4 = new PANOLENS.Infospot(512, hotspotIcons[11].data, true);
			infospoth4.position.set(212.04, -4990.39, -121.93);
			h.add(infospoth4);

			infospoth4.addEventListener("click", function () {
				showMedia(1, "/glmvirtualtour/images/gl9.png");
			});

			viewer.add(h);

			var i = new PANOLENS.ImagePanorama("/glmvirtualtour/panoramas/i.jpg");
			i.addEventListener("progress", function (e) {
				$("#loading").show();
			});
			i.addEventListener("load", function (e) {
				$("#loading").fadeOut();
			});
			i.addEventListener("click", function (e) {});

			var infospoti0 = new PANOLENS.Infospot(512, hotspotIcons[6].data, true);
			infospoti0.position.set(-48.12, -2308.77, 4430.77);
			i.add(infospoti0);

			infospoti0.addEventListener("click", function () {
				ChangePanorama("h");
			});

			var infospoti1 = new PANOLENS.Infospot(512, hotspotIcons[6].data, true);
			infospoti1.position.set(-4004.75, -2671.4, -1337.43);
			i.add(infospoti1);

			infospoti1.addEventListener("click", function () {
				ChangePanorama("ia");
			});

			var infospoti2 = new PANOLENS.Infospot(512, hotspotIcons[6].data, true);
			infospoti2.position.set(641.19, -2103.74, -4480.31);
			i.add(infospoti2);

			infospoti2.addEventListener("click", function () {
				ChangePanorama("j");
			});

			var infospoti3 = new PANOLENS.Infospot(512, hotspotIcons[11].data, true);
			infospoti3.position.set(161.43, -4992.37, -107.28);
			i.add(infospoti3);

			infospoti3.addEventListener("click", function () {
				showMedia(1, "/glmvirtualtour/images/gl10.png");
			});

			viewer.add(i);

			var ia = new PANOLENS.ImagePanorama("/glmvirtualtour/panoramas/ia.jpg");
			ia.addEventListener("progress", function (e) {
				$("#loading").show();
			});
			ia.addEventListener("load", function (e) {
				$("#loading").fadeOut();
			});
			ia.addEventListener("click", function (e) {});

			var infospotia0 = new PANOLENS.Infospot(512, hotspotIcons[6].data, true);
			infospotia0.position.set(26.77, -2435.64, -4360.84);
			ia.add(infospotia0);

			infospotia0.addEventListener("click", function () {
				ChangePanorama("i");
			});

			var infospotia1 = new PANOLENS.Infospot(512, hotspotIcons[6].data, true);
			infospotia1.position.set(168.16, -2064.49, 4540.94);
			ia.add(infospotia1);

			infospotia1.addEventListener("click", function () {
				ChangePanorama("ib");
			});

			var infospotia2 = new PANOLENS.Infospot(512, hotspotIcons[0].data, true);
			infospotia2.position.set(3896.93, 2400.53, -1990.6);
			infospotia2.visible = false;
			ia.add(infospotia2);

			infospotia2.addEventListener("click", function () {
				showMedia(1, "/glmvirtualtour/images/aula1.jpg");
			});

			var infospotia3 = new PANOLENS.Infospot(512, hotspotIcons[11].data, true);
			infospotia3.position.set(-279.96, -4988.96, -21.42);
			ia.add(infospotia3);

			infospotia3.addEventListener("click", function () {
				showMedia(1, "/glmvirtualtour/images/gl10.1.png");
			});

			viewer.add(ia);

			var ib = new PANOLENS.ImagePanorama("/glmvirtualtour/panoramas/ib.jpg");
			ib.addEventListener("progress", function (e) {
				$("#loading").show();
			});
			ib.addEventListener("load", function (e) {
				$("#loading").fadeOut();
			});
			ib.addEventListener("click", function (e) {});

			var infospotib0 = new PANOLENS.Infospot(512, hotspotIcons[6].data, true);
			infospotib0.position.set(201.1, -2316.75, -4418.29);
			ib.add(infospotib0);

			infospotib0.addEventListener("click", function () {
				ChangePanorama("ia");
			});

			var infospotib1 = new PANOLENS.Infospot(512, hotspotIcons[0].data, true);
			infospotib1.position.set(4286.29, 2518.2, -489.52);
			infospotib1.visible = false;
			ib.add(infospotib1);

			infospotib1.addEventListener("click", function () {
				showMedia(1, "/glmvirtualtour/images/aula2.jpg");
			});

			var infospotib2 = new PANOLENS.Infospot(512, hotspotIcons[11].data, true);
			infospotib2.position.set(-115.17, -4991.06, -195.99);
			ib.add(infospotib2);

			infospotib2.addEventListener("click", function () {
				showMedia(1, "/glmvirtualtour/images/gl10.2.png");
			});

			viewer.add(ib);

			var j = new PANOLENS.ImagePanorama("/glmvirtualtour/panoramas/j.jpg");
			j.addEventListener("progress", function (e) {
				$("#loading").show();
			});
			j.addEventListener("load", function (e) {
				$("#loading").fadeOut();
			});
			j.addEventListener("click", function (e) {});

			var infospotj0 = new PANOLENS.Infospot(512, hotspotIcons[6].data, true);
			infospotj0.position.set(-62.21, -2420.79, 4367.3);
			j.add(infospotj0);

			infospotj0.addEventListener("click", function () {
				ChangePanorama("i");
			});

			var infospotj1 = new PANOLENS.Infospot(512, hotspotIcons[6].data, true);
			infospotj1.position.set(-1379.19, -2319.89, -4206.11);
			j.add(infospotj1);

			infospotj1.addEventListener("click", function () {
				ChangePanorama("k");
			});

			var infospotj2 = new PANOLENS.Infospot(512, hotspotIcons[11].data, true);
			infospotj2.position.set(59.31, -4996.07, -80.49);
			j.add(infospotj2);

			infospotj2.addEventListener("click", function () {
				showMedia(1, "/glmvirtualtour/images/gl11.png");
			});

			viewer.add(j);

			var k = new PANOLENS.ImagePanorama("/glmvirtualtour/panoramas/k.jpg");
			k.addEventListener("progress", function (e) {
				$("#loading").show();
			});
			k.addEventListener("load", function (e) {
				$("#loading").fadeOut();
			});
			k.addEventListener("click", function (e) {});

			var infospotk0 = new PANOLENS.Infospot(512, hotspotIcons[6].data, true);
			infospotk0.position.set(-4636.9, -1857.47, -59.82);
			k.add(infospotk0);

			infospotk0.addEventListener("click", function () {
				ChangePanorama("j");
			});

			var infospotk1 = new PANOLENS.Infospot(512, hotspotIcons[6].data, true);
			infospotk1.position.set(3601.61, -3429.11, 458.13);
			k.add(infospotk1);

			infospotk1.addEventListener("click", function () {
				ChangePanorama("l");
			});

			var infospotk2 = new PANOLENS.Infospot(512, hotspotIcons[11].data, true);
			infospotk2.position.set(222.44, -4987.14, 239.76);
			k.add(infospotk2);

			infospotk2.addEventListener("click", function () {
				showMedia(1, "/glmvirtualtour/images/gl12.png");
			});

			viewer.add(k);

			var l = new PANOLENS.ImagePanorama("/glmvirtualtour/panoramas/l.jpg");
			l.addEventListener("progress", function (e) {
				$("#loading").show();
			});
			l.addEventListener("load", function (e) {
				$("#loading").fadeOut();
			});
			l.addEventListener("click", function (e) {});

			var infospotl0 = new PANOLENS.Infospot(512, hotspotIcons[6].data, true);
			infospotl0.position.set(65.97, -1778.19, 4665.83);
			l.add(infospotl0);

			infospotl0.addEventListener("click", function () {
				ChangePanorama("k");
			});

			var infospotl1 = new PANOLENS.Infospot(512, hotspotIcons[6].data, true);
			infospotl1.position.set(82.34, -2216.12, -4475.54);
			l.add(infospotl1);

			infospotl1.addEventListener("click", function () {
				ChangePanorama("m");
			});

			var infospotl2 = new PANOLENS.Infospot(512, hotspotIcons[0].data, true);
			infospotl2.position.set(4261.35, 1968.41, 1700.6);
			infospotl2.visible = false;
			l.add(infospotl2);

			infospotl2.addEventListener("click", function () {
				showMedia(1, "/glmvirtualtour/images/zologi.jpg");
			});

			var infospotl3 = new PANOLENS.Infospot(512, hotspotIcons[11].data, true);
			infospotl3.position.set(-118.84, -4988.54, -266.32);
			l.add(infospotl3);

			infospotl3.addEventListener("click", function () {
				showMedia(1, "/glmvirtualtour/images/gl13.png");
			});

			viewer.add(l);

			var m = new PANOLENS.ImagePanorama("/glmvirtualtour/panoramas/m.jpg");
			m.addEventListener("progress", function (e) {
				$("#loading").show();
			});
			m.addEventListener("load", function (e) {
				$("#loading").fadeOut();
			});
			m.addEventListener("click", function (e) {});

			var infospotm0 = new PANOLENS.Infospot(512, hotspotIcons[6].data, true);
			infospotm0.position.set(155.69, -1823.05, 4644.58);
			m.add(infospotm0);

			infospotm0.addEventListener("click", function () {
				ChangePanorama("l");
			});

			var infospotm1 = new PANOLENS.Infospot(512, hotspotIcons[6].data, true);
			infospotm1.position.set(658.62, -1873.25, -4581.24);
			m.add(infospotm1);

			infospotm1.addEventListener("click", function () {
				ChangePanorama("n");
			});

			var infospotm2 = new PANOLENS.Infospot(512, hotspotIcons[11].data, true);
			infospotm2.position.set(189.64, -4990.69, -141.95);
			m.add(infospotm2);

			infospotm2.addEventListener("click", function () {
				showMedia(1, "/glmvirtualtour/images/gl14.png");
			});

			viewer.add(m);

			var n = new PANOLENS.ImagePanorama("/glmvirtualtour/panoramas/n.jpg");
			n.addEventListener("progress", function (e) {
				$("#loading").show();
			});
			n.addEventListener("load", function (e) {
				$("#loading").fadeOut();
			});
			n.addEventListener("click", function (e) {});

			var infospotn0 = new PANOLENS.Infospot(512, hotspotIcons[6].data, true);
			infospotn0.position.set(-239.53, -2146.42, 4499.43);
			n.add(infospotn0);

			infospotn0.addEventListener("click", function () {
				ChangePanorama("m");
			});

			var infospotn1 = new PANOLENS.Infospot(512, hotspotIcons[11].data, true);
			infospotn1.position.set(-42.13, -4997.91, 32.33);
			n.add(infospotn1);

			infospotn1.addEventListener("click", function () {
				showMedia(1, "/glmvirtualtour/images/gl15.png");
			});

			viewer.add(n);

			$(document).ready(function () {
				ChangePanorama("gldepan ");
			});

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
						$("#tmpcontent").html(
							"<img src='" + content + "' style='width: 100%;'>"
						);
						$("#tmp").fadeIn();
						break;
					case 2:
						//Video
						$("#tmpcontent").html(
							"<video id='webvideo' controls autoplay style='width: 100%; height: 100%;'><source src='" +
								content +
								"' type='video/mp4'> Your browser does not support the video tag. </video>"
						);
						$("#tmp").fadeIn();
						break;
					case 3:
						//Audio
						$("#tmpcontent").html(
							"<audio controls style='width: 100%;'><source src='" +
								content +
								"' type='audio/ogg'>Your browser does not support the audio tag.</audio>"
						);
						$("#tmp").fadeIn();
						break;
					case 4:
						//PDF
						$("#tmpcontent").html(
							"<iframe src='pdfjs/web/viewer.html?file=../../" +
								content +
								"' style='width: 100%; height: 99%;'></iframe>"
						);
						$("#tmp").fadeIn();
						break;
				}
			}

			//Update Callback
			viewer.addUpdateCallback(function () {
				/*viewerupdatecallback*/
				if (viewer.panorama == gldepan) {
				}

				if (viewer.panorama == gldalam) {
					ShowMyInfospot(infospotgldalam1, "infospotgldalam1");
					ShowMyInfospot(infospotgldalam2, "infospotgldalam2");
					ShowMyInfospot(infospotgldalam4, "infospotgldalam4");
				}

				if (viewer.panorama == a) {
				}

				if (viewer.panorama == b) {
					ShowMyInfospot(infospotb2, "infospotb2");
					ShowMyInfospot(infospotb3, "infospotb3");
				}

				if (viewer.panorama == c) {
					ShowMyInfospot(infospotc2, "infospotc2");
				}

				if (viewer.panorama == d) {
					ShowMyInfospot(infospotd2, "infospotd2");
				}

				if (viewer.panorama == e) {
					ShowMyInfospot(infospote2, "infospote2");
				}

				if (viewer.panorama == f) {
					ShowMyInfospot(infospotf2, "infospotf2");
				}

				if (viewer.panorama == g) {
					ShowMyInfospot(infospotg3, "infospotg3");
					ShowMyInfospot(infospotg5, "infospotg5");
				}

				if (viewer.panorama == ga) {
					ShowMyInfospot(infospotga2, "infospotga2");
				}

				if (viewer.panorama == gb) {
					ShowMyInfospot(infospotgb2, "infospotgb2");
				}

				if (viewer.panorama == gc) {
					ShowMyInfospot(infospotgc2, "infospotgc2");
				}

				if (viewer.panorama == gd) {
					ShowMyInfospot(infospotgd2, "infospotgd2");
				}

				if (viewer.panorama == ge) {
					ShowMyInfospot(infospotge3, "infospotge3");
				}

				if (viewer.panorama == gf) {
					ShowMyInfospot(infospotgf2, "infospotgf2");
				}

				if (viewer.panorama == gg) {
					ShowMyInfospot(infospotgg1, "infospotgg1");
				}

				if (viewer.panorama == gea) {
				}

				if (viewer.panorama == geb) {
					ShowMyInfospot(infospotgeb2, "infospotgeb2");
				}

				if (viewer.panorama == gec) {
					ShowMyInfospot(infospotgec1, "infospotgec1");
				}

				if (viewer.panorama == h) {
					ShowMyInfospot(infospoth2, "infospoth2");
					ShowMyInfospot(infospoth3, "infospoth3");
				}

				if (viewer.panorama == i) {
				}

				if (viewer.panorama == ia) {
					ShowMyInfospot(infospotia2, "infospotia2");
				}

				if (viewer.panorama == ib) {
					ShowMyInfospot(infospotib1, "infospotib1");
				}

				if (viewer.panorama == j) {
				}

				if (viewer.panorama == k) {
				}

				if (viewer.panorama == l) {
					ShowMyInfospot(infospotl2, "infospotl2");
				}

				if (viewer.panorama == m) {
				}

				if (viewer.panorama == n) {
				}
				/*viewerupdatecallback-end*/
			});

			var hotspotsvisible = true;
			function ShowMyInfospot(hs, elid) {
				var thehs = toScreenPosition(hs);
				if (thehs.z < 1) {
					$("#" + elid).css({
						top: thehs.y - $("#" + elid).height() / 2 + "px",
						left: thehs.x - $("#" + elid).width() / 2 + "px",
					});
					if (hotspotsvisible) $("#" + elid).show();
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

				vector.x = vector.x * widthHalf + widthHalf;
				vector.y = -(vector.y * heightHalf) + heightHalf;

				return {
					x: vector.x,
					y: vector.y,
					z: vector.z,
				};
			}

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
			function chclickinfospotgldalam1() {
				showMedia(1, "/glmvirtualtour/images/jurusanbio.jpg");
			}

			function chclickinfospotgldalam2() {
				showMedia(1, "/glmvirtualtour/images/dosenbio.jpg");
			}

			function chclickinfospotgldalam4() {
				showMedia(1, "/glmvirtualtour/images/kimia.jpg");
			}

			function chclickinfospotb2() {
				showMedia(1, "/glmvirtualtour/images/biologi.jpg");
			}

			function chclickinfospotb3() {
				showMedia(1, "/glmvirtualtour/images/ekologi.jpg");
			}

			function chclickinfospotc2() {
				showMedia(1, "/glmvirtualtour/images/kulturjaringan.jpg");
			}

			function chclickinfospotd2() {
				showMedia(1, "/glmvirtualtour/images/mikro.jpg");
			}

			function chclickinfospote2() {
				showMedia(1, "/glmvirtualtour/images/c1.jpg");
			}

			function chclickinfospotf2() {
				showMedia(1, "/glmvirtualtour/images/kimiaorganik.jpg");
			}

			function chclickinfospotg3() {
				showMedia(1, "/glmvirtualtour/images/bem.jpg");
			}

			function chclickinfospotg5() {
				showMedia(1, "/glmvirtualtour/images/c2.jpg");
			}

			function chclickinfospotga2() {
				showMedia(1, "/glmvirtualtour/images/wc.jpg");
			}

			function chclickinfospotgb2() {
				showMedia(1, "/glmvirtualtour/images/hima.jpg");
			}

			function chclickinfospotgc2() {
				showMedia(1, "/glmvirtualtour/images/kimiab.jpg");
			}

			function chclickinfospotgd2() {
				showMedia(1, "/glmvirtualtour/images/sidang.jpg");
			}

			function chclickinfospotge3() {
				showMedia(1, "/glmvirtualtour/images/wc.jpg");
			}

			function chclickinfospotgf2() {
				showMedia(1, "/glmvirtualtour/images/f2.jpg");
			}

			function chclickinfospotgg1() {
				showMedia(1, "/glmvirtualtour/images/sduakimia.jpg");
			}

			function chclickinfospotgeb2() {
				showMedia(1, "/glmvirtualtour/images/f3.jpg");
			}

			function chclickinfospotgec1() {
				showMedia(1, "/glmvirtualtour/images/f4.jpg");
			}

			function chclickinfospoth2() {
				showMedia(1, "/glmvirtualtour/images/c3.jpg");
			}

			function chclickinfospoth3() {
				showMedia(1, "/glmvirtualtour/images/ukm.jpg");
			}

			function chclickinfospotia2() {
				showMedia(1, "/glmvirtualtour/images/aula1.jpg");
			}

			function chclickinfospotib1() {
				showMedia(1, "/glmvirtualtour/images/aula2.jpg");
			}

			function chclickinfospotl2() {
				showMedia(1, "/glmvirtualtour/images/zologi.jpg");
			}
			/*customjs-end*/
			/*nav*/
			document.getElementById("gl3").addEventListener("click", function () {
				ChangePanorama("b");
			});
			document.getElementById("gl4").addEventListener("click", function () {
				ChangePanorama("c");
			});
			document.getElementById("gl5").addEventListener("click", function () {
				ChangePanorama("d");
			});
			document.getElementById("gl6").addEventListener("click", function () {
				ChangePanorama("e");
			});
			document.getElementById("gl7").addEventListener("click", function () {
				ChangePanorama("f");
			});
			document.getElementById("gl8").addEventListener("click", function () {
				ChangePanorama("g");
			});
			document.getElementById("gl8.1").addEventListener("click", function () {
				ChangePanorama("ga");
			});
			document.getElementById("gl8.2").addEventListener("click", function () {
				ChangePanorama("gb");
			});
			document.getElementById("gl8.3").addEventListener("click", function () {
				ChangePanorama("gc");
			});
			document.getElementById("gl8.4").addEventListener("click", function () {
				ChangePanorama("gd");
			});
			document.getElementById("gl8.6").addEventListener("click", function () {
				ChangePanorama("gf");
			});
			document.getElementById("gl8.7").addEventListener("click", function () {
				ChangePanorama("gg");
			});
			document.getElementById("gl8.9").addEventListener("click", function () {
				ChangePanorama("geb");
			});
			document.getElementById("gl8.10").addEventListener("click", function () {
				ChangePanorama("gec");
			});
			document.getElementById("gl9").addEventListener("click", function () {
				ChangePanorama("h");
			});
			document.getElementById("gl10").addEventListener("click", function () {
				ChangePanorama("i");
			});
			document.getElementById("gl10.1").addEventListener("click", function () {
				ChangePanorama("ia");
			});
			document.getElementById("gl10.2").addEventListener("click", function () {
				ChangePanorama("ib");
			});
			document.getElementById("gl13").addEventListener("click", function () {
				ChangePanorama("l");
			});
		</script>
	</body>
</html>
