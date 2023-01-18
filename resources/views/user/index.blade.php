@extends('user.layouts.main')
@section('container')

<section class="" id="room">
    <div class="section section-lg pt-0">


        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-8 col-xl-8 text-center mb-3">
                    <h1 class="display-2 font-weight-bold">{{__('Room Guide')}}</span>
                    </h1>
                    <p class="lead">{{__('Helping you in finding a route to a room in the Mathematics and Natural Sciences Faculty. Choose one of the rooms that you want to know the location of the class.')}}</p>
                </div>
            </div>
        </div>


        <div class="container">
            <div class="row">

                <div class="col-12 col-md-6 col-lg-6 mb-5 mt-3 mb-lg-0">
                    <div class="card bg-primary shadow-soft border-light p-4">

                        <!-- Header -->
                        <div class="card-header border-bottom text-center">
                            <span class="d-block">
                                <span class="display-3 font-weight-bold">
                                    Gedung Baru</span>
                            </span>
                        </div>
                        <!-- End Header -->

                        <!-- Content -->

                        <table  id="{{__('gbr1')}}" width="100%" cellspacing="">
                            <thead>
                                <tr>
                                    <th> </th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($gedungbaru as $gbr)
                                <tr>
                                    <td>
                                        <a type="button" class="btn btn-primary btn-block mb-2" tabindex="0"
                                            data-toggle="modal" data-target="#modaldetail{{$gbr->id}}"><span
                                                class="fas fa-home mr-2"></span><span>{{__('Room')}}
                                            </span>{{$gbr->nama}}
                                        </a>
                                    </td>
                                </tr>
                                @include('user.modal.detailgbr')
                                @endforeach
                            </tbody>
                        </table>
                        <!-- End Content -->
                    </div>
                </div>

                <!-- -------------------------------------------------------------------------------------------------- -->

                <div class="col-12 col-md-6 col-lg-6 mb-5 mt-3 mb-lg-0">
                    <div class="card bg-primary shadow-soft border-light p-4">

                        <!-- Header -->
                        <div class="card-header border-bottom text-center">
                            <span class="d-block">
                                <span class="display-3 font-weight-bold">
                                    Gedung Lama</span>
                            </span>
                        </div>
                        <!-- End Header -->

                        <!-- Content -->

                        <table  id="{{__('glm1')}}" width="100%" cellspacing="">
                            <thead>
                                <tr>
                                    <th> </th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($gedunglama as $glm) 
                                <tr>
                                    <td>
                                        <a type="button" class="btn btn-primary btn-block mb-2" tabindex="0"
                                            data-toggle="modal" data-target="#modaldetail{{$glm->id}}"><span
                                                class="fas fa-home mr-2"></span><span>{{__('Room')}}
                                            </span>{{$glm->nama}}
                                        </a>
                                    </td>
                                </tr>
                                @include('user.modal.detailglm')
                                @endforeach
                            </tbody>
                        </table>
                        <!-- End Content -->
                    </div>
                </div>

                <!-- -------------------------------------------------------------------------------------------------- -->

                <div class="col-12 col-md-6 col-lg-6 mb-5 mt-3 mb-lg-0">
                    <div class="card bg-primary shadow-soft border-light p-4">

                        <!-- Header -->
                        <div class="card-header border-bottom text-center">
                            <span class="d-block">
                                <span class="display-3 font-weight-bold">
                                    Gedung Biotek</span>
                            </span>
                        </div>
                        <!-- End Header -->

                        <!-- Content -->

                        <table  id="{{__('bio1')}}" width="100%" cellspacing="">
                            <thead>
                                <tr>
                                    <th> </th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($gedungbiotek as $bio)
                                
                                <tr>
                                    <td>
                                        <a type="button" class="btn btn-primary btn-block mb-2" tabindex="0"
                                            data-toggle="modal" data-target="#modaldetail{{$bio->id}}"><span
                                                class="fas fa-home mr-2"></span><span>{{__('Room')}}
                                            </span>{{$bio->nama}}
                                        </a>
                                    </td>
                                </tr>
                                @include('user.modal.detailbio')
                                @endforeach
                            </tbody>
                        </table>
                        <!-- End Content -->
                    </div>
                </div>
                <!-- -------------------------------------------------------------------------------------------------- -->

                <div class="col-12 col-md-6 col-lg-6 mb-5 mt-3 mb-lg-0">
                    <div class="card bg-primary shadow-soft border-light p-4">

                        <!-- Header -->
                        <div class="card-header border-bottom text-center">
                            <span class="d-block">
                                <span class="display-3 font-weight-bold">
                                    Gedung Siskom</span>
                            </span>
                        </div>
                        <!-- End Header -->

                        <!-- Content -->

                        <table  id="{{__('sis1')}}" width="100%" cellspacing="">
                            <thead>
                                <tr>
                                    <th> </th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($gedungsiskom as $sis)
                                
                                <tr>
                                    <td>
                                        <a type="button" class="btn btn-primary btn-block mb-2" tabindex="0"
                                            data-toggle="modal" data-target="#modaldetail{{$sis->id}}"><span
                                                class="fas fa-home mr-2"></span><span>{{__('Room')}}
                                            </span>{{$sis->nama}}
                                        </a>
                                    </td>
                                </tr>
                                @include('user.modal.detailsis')
                                @endforeach
                            </tbody>
                        </table>
                        <!-- End Content -->
                    </div>
                </div>

                <!-- -------------------------------------------------------------------------------------------------- -->

            </div>
        </div>
    </div>
</section>
@endsection