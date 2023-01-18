
@include('user.layouts.header')

<body>
    <section class="mt-5">
        <div class="section section-lg pt-0">


            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-lg-8 col-xl-8 text-center mb-3">
                        <h1 class="display-2 font-weight-bold">{{__('Select Building')}}</span>
                        </h1>
                        <p class="lead">{{__('Choose one of the buildings in the Faculty of Mathematics and Natural Sciences, Tanjungpura university to start the extraordinary experience of the virtual tour')}}</p>
                    </div>
                </div>
            </div>


            <div class="container">
                <div class="row">

                    <div class="col-12 col-md-6 col-lg-3 mb-5">
                        <div class="card bg-primary border-light shadow-soft">
                            <img src="assets/img/baru.jpg" class="card-img-top rounded-top">
                            <div class="card-body">
                                <h3 class="card-title mt-2">FMIPA UNTAN Gedung Baru
                                </h3>
                                <p style="text-align:center" class="display-5 shadow-inset rounded">{{__('V1.0 august 2022')}}
                                </p>
                                <a href="/virtualtour/gedungbaru"
                                    class="btn btn-primary btn-block text-success font-weight-bold">{{__('Start')}}</a>
                            </div>
                        </div>
                    </div>

                    <!-- -------------------------------------------------------------------------------------------------- -->

                    <div class="col-12 col-md-6 col-lg-3 mb-5">
                        <div class="card bg-primary border-light shadow-soft">
                            <img src="assets/img/lama.jpg" class="card-img-top rounded-top"
                                >
                            <div class="card-body">
                                <h3 class="h3 card-title mt-2">FMIPA UNTAN Gedung Lama</h3>
                                <p style="text-align:center" class="display-5 shadow-inset rounded">{{__('V1.0 august 2022')}}
                                </p>
                                <a href="virtualtour/gedunglama" class="btn btn-primary btn-block text-success font-weight-bold">{{__('Start')}}</a>
                            </div>
                        </div>
                    </div>
                    <!-- -------------------------------------------------------------------------------------------------- -->
                    <div class="col-12 col-md-6 col-lg-3 mb-5">
                        <div class="card bg-primary border-light shadow-soft">
                            <img src="assets/img/biotek.png" class="card-img-top rounded-top"
                                >
                            <div class="card-body">
                                <h3 class="h3 card-title mt-2">FMIPA UNTAN Gedung Biotek</h3>
                                <p style="text-align:center" class="display-5 shadow-inset rounded">{{__('V1.0 august 2022')}}
                                </p>
                                <a href="virtualtour/gedungbiotek" class="btn btn-primary btn-block text-success font-weight-bold">{{__('Start')}}</a>
                            </div>
                        </div>
                    </div>
                    <!-- -------------------------------------------------------------------------------------------------- -->
                    <div class="col-12 col-md-6 col-lg-3 mb-5">
                        <div class="card bg-primary border-light shadow-soft">
                            <img src="assets/img/siskom.jpg" class="card-img-top rounded-top"
                                >
                            <div class="card-body">
                                <h3 class="h3 card-title mt-2">FMIPA UNTAN Gedung Siskom</h3>
                                <p style="text-align:center" class="display-5 shadow-inset rounded">{{__('V1.0 august 2022')}}
                                </p>
                                <a href="virtualtour/gedungsiskom" class="btn btn-primary btn-block text-success font-weight-bold">{{__('Start')}}</a>
                            </div>
                        </div>
                    </div>
                    <!-- -------------------------------------------------------------------------------------------------- -->

                </div>
            </div>
        </div>
    </section>


    <!-- Section -->
    <section class="">
        <div class="container">
            <div class="row align-items-center justify-content-center">
                <div class="col-md-12 col-lg-12 mb-5">
                    <!-- Contact Card -->
                    <div class="card bg-primary shadow-soft border-light p-2 p-md-3 p-lg-5">
                        <div class="card-header">
                            <div class="row justify-content-center">
                                <div class="col-12 col-md-8 text-center mb-5">
                                    <h1 class="display-2 mb-3"><span class="font-weight-bold">{{__('Button Hint')}}</h1>
                                    <p class="lead">{{__('help you understand the function of each button that will be presented in your virtual tour.')}}</p>
                                </div>
                            </div>
                            <div class="row mb-5">
                                <div class="col-md-4 col-lg-4 text-center">
                                    <!-- Visit Box -->
                                    <div class="icon-box mb-4">
                                        <div class="icon icon-shape shadow-inset border-light rounded-circle mb-4">
                                            <img src="assets/img/infospot.png" width="60">
                                        </div>
                                        <h2 class="h5 icon-box-title">{{__('Detail')}}</h2>
                                        <span>
                                        {{__('Room name details')}}
                                        </span>
                                    </div>
                                    <!-- End of Visit Box -->
                                </div>
                                <div class="col-md-4 col-lg-4 text-center">
                                    <!-- Call Box -->
                                    <div class="icon-box mb-4">
                                        <div class="icon icon-shape shadow-inset border-light rounded-circle mb-4">
                                            <img src="assets/img/cirle1.png" width="60">
                                        </div>
                                        <h2 class="h5 icon-box-title">{{__('Point')}}</h2>
                                        <span>
                                        {{__('Current location details')}}
                                        </span>
                                    </div>
                                    <!-- End of Call Box -->
                                </div>
                                <div class="col-md-4 col-lg-4 text-center">
                                    <!-- Email Box -->
                                    <div class="icon-box mb-4">
                                        <div class="icon icon-shape shadow-inset border-light rounded-circle mb-4">
                                            <img src="assets/img/arrow.png" width="60">
                                        </div>
                                        <h2 class="h5 icon-box-title">{{__('Next')}}</h2>
                                        <span>
                                        {{__('switch scenes')}}
                                        </span>
                                    </div>
                                    <!-- End of Email Box -->
                                </div>

                            </div>
                        </div>
                    </div>
                    <!-- End of Contact Card -->
                </div>
            </div>
        </div>
    </section>
    <!-- End of section -->


 @include('user.layouts.footer')