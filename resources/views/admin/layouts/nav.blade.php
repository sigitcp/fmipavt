<body class="sb-nav-fixed">
    <nav class="sb-topnav navbar navbar-expand navbar-dark bg-white">
        <a class="navbar-brand text-gray" href="/"><img src="../assets/img/Lambang_Universitas_Tanjungpura.png"
                width="Logo"> FMIPA 360</a>
        <!-- <button class="btn btn-primary " id="sidebarToggle" href="#!"><i class="fa fa-bars"></i></button> -->
    </nav>
    <div id="layoutSidenav">
        <div id="layoutSidenav_nav" class="card bg-primary shadow-soft border-light">
            <nav class="sb-sidenav accordion " id="sidenavAccordion">
                <div class="sb-sidenav-menu">
                    <div class="nav">
                        <div class="sb-sidenav-menu-heading">Ruangan Fakultas MIPA</div>
                        <a class="nav-link" href="/dashboard">
                            <button type="button" class="btn btn-primary btn-block {{Request::is('dashboard') ? 'shadow-inset' : ''}}" tabindex="0"><span
                                    class="fas fa-university mr-2"></span>Dashboard</button>
                        </a>
                        <div class="card shadow-inset bg-primary border-light">
                            <div class="sb-sidenav-menu-heading">Denah Ruangan</div>
                            <a class="nav-link" href="/gedungbaru">
                                <button type="button" class="btn btn-primary btn-block {{Request::is('gedungbaru') ? 'shadow-inset' : ''}}" tabindex="0"><span
                                        class="fas fa-map-signs mr-2"></span>Gedung Baru</button>
                            </a>
                            <a class="nav-link" href="/gedunglama">
                                <button type="button" class="btn btn-primary btn-block {{Request::is('gedunglama') ? 'shadow-inset' : ''}}" tabindex="0"><span
                                        class="fas fa-map-signs mr-2"></span>Gedung Lama</button>
                            </a>
                            <a class="nav-link" href="/gedungbiotek">
                                <button type="button" class="btn btn-primary btn-block {{Request::is('gedungbiotek') ? 'shadow-inset' : ''}}" tabindex="0"><span
                                        class="fas fa-map-signs mr-2"></span>Biotek</button>
                            </a>
                            <a class="nav-link" href="/gedungsiskom">
                                <button type="button" class="btn btn-primary btn-block {{Request::is('gedungsiskom') ? 'shadow-inset' : ''}}" tabindex="0"><span
                                        class="fas fa-map-signs mr-2"></span>Siskom</button>
                            </a>
                        </div>
                        <a class="nav-link" href="https://drive.google.com/drive/folders/1JPwFZvCkC4MbpnhLUdHAqJkm9xExaWkK?usp=sharing" target="blank">
                            <button type="button" class="btn btn-primary btn-block" tabindex="0"><span
                                    class=""></span>Raw data</button>
                        </a>
                        
                    </div>
                </div>
                <a class="sb-sidenav-footer" >
                    <form action="/logout" method="post">
                        @csrf
                        <button class="btn btn-pill btn-primary" type="submit">
                        Log out
                        <i class="fas fa-power-off text-danger"></i>
                    </button>
                    </form>
                </a>
            </nav>
        </div>