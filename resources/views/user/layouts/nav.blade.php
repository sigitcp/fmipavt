<body>
    <header class="header-global">
        <nav id="navbar-main" aria-label="Primary navigation"
            class="navbar navbar-main navbar-expand-lg navbar-theme-primary headroom navbar-light navbar-transparent navbar-theme-primary">
            <div class="container position-relative">
                <a class="navbar-brand shadow-soft py-2 px-3 rounded border border-light mr-lg-4" href="./index.php">
                    <img class="navbar-brand-dark" src="./assets/img/brand/favicon.png" alt="Logo light">
                    <img class="navbar-brand-light" src="./assets/img/brand/favicon.png" alt="Logo dark">
                </a>

                <div class="navbar-collapse collapse" id="navbar_global">
                    <div class="navbar-collapse-header ">
                        <div class="row mt-5">
                            <div class="col-6 collapse-brand">
                                <a href="./index.php"
                                    class="navbar-brand shadow-soft py-2 px-3 rounded border border-light mr-lg-4">
                                    <img src="./assets/img/brand/favicon.png">
                                </a>
                            </div>
                            <div class="col-6 collapse-close ">
                                <div class="btn btn-primary">
                                    <a href="#navbar_global" class="fas fa-times" data-toggle="collapse"
                                        data-target="#navbar_global" aria-controls="navbar_global" aria-expanded="false"
                                        aria-label="Toggle navigation"></a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <ul class="navbar-nav navbar-nav-hover align-items-lg-center">

                        <li>
                            <a href="#virtualtour" class="nav-link list-style-none">
                                <span class="btn btn-pill btn-primary">Virtual Tour</span>
                            </a>
                        </li>
                        <li>
                            <a href="#room" class="nav-link list-style-none">
                                <span class="btn btn-pill btn-primary">{{__('Room Guide')}}</span>
                            </a>
                        </li>
                        <li>
                            <a href="#contact" class="nav-link list-style-none">
                                <button class="btn btn-pill btn-primary">{{__('Contact Us')}}</button>
                            </a>
                        </li>
                        <li class="nav-item dropdown">
                            <a href="#" class="nav-link" data-toggle="dropdown">
                                <span class="btn btn-pill">
                                    <span class="nav-link-inner-text">{{__('Language')}}</span>
                                    <span class="fas fa-angle-down nav-link-arrow ml-2"></span>
                                </span>
                            </a>
                            <ul class="dropdown-menu">
                                @if (app()->getLocale()=='id')
                                    <li><a class="dropdown-item" href="{{url('locale/en')}}"><img src="/assets/img/en.png" width="20%"> Inggris</a></li>
                                @endif
                                @if (app()->getLocale()=='en')
                                    <li><a class="dropdown-item" href="{{url('locale/id')}}"><img src="/assets/img/id.png" width="20%"> Indonesian</a></li>
                                @endif
                            </ul>
                        </li>
                    </ul>
                </div>
                <div class="d-flex align-items-center">
                    <button class="navbar-toggler ml-2" type="button" data-toggle="collapse"
                        data-target="#navbar_global" aria-controls="navbar_global" aria-expanded="false"
                        aria-label="Toggle navigation">
                        <span class="navbar-toggler-icon"></span>
                    </button>
                </div>
            </div>
        </nav>
    </header>