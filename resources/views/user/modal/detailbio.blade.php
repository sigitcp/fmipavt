<!-- modal -->
<div class="modal fade" id="modaldetail{{$bio->id}}" tabindex="-1"
    role="dialog" aria-labelledby="modaldetail" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered modal-lg" role="document">
        <div class="modal-content shadow-soft">
            <div class="modal-header">
                <div class="modal-title display-4">{{__('Room Detail')}}</div>
                <button type="button" class="close ml-auto" data-dismiss="modal"
                    aria-label="Close">
                    <span aria-hidden="true"><i class='fa fa-times'></i></span>
                </button>
            </div>
            <div class="modal-body px-6">
                <div class="py-3">
                    <div class="text-center">
                        <img width="100%"
                            src="{{ asset('storage/'. $bio->denah) }}">
                        <div class="nav-wrapper position-relative">
                            <ul
                                class="nav nav-pills nav-fill flex-column flex-md-row">
                                <li class="nav-item">
                                    <span class="nav-link shadow-inset"><span>{{__('Room')}} {{$bio->nama}}
                                        </span></span>
                                </li>
                                <li class="nav-item">
                                    <span class="nav-link shadow-inset"><span>{{__('Large')}} {{$bio->luas}}
                                        </span>
                                        m<sup>2</sup></span>
                                </li>
                                <li class="nav-item">
                                    <span class="nav-link shadow-inset"><span>{{__('Capacity')}} {{$bio->kapasitas}}
                                        </span>
                                        {{__('peoples')}}</span>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>