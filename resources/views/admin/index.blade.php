@extends('admin.layouts.main')
@section('container')


    <div class="card-body">
        <h1 class="mt-4">Dashboard</h1>

        <div class="card-group">
            <div class="card shadow-inset">

                <div class="card-body">
                    <h5 class="card-title display-5 text-info">Denah Gedung Baru</h5>
                    <p class="card-text display-2 text-center text-success">{{$totalgbr}}<span
                            class="text-danger font-small"> Ruangan</span></p>
                </div>

            </div>
            <div class="card shadow-inset">

                <div class="card-body">
                    <h5 class="card-title display-5 text-info">Denah Gedung Lama</h5>
                    <p class="card-text display-2 text-center text-success">{{$totalglm}}<span
                            class="text-danger font-small"> Ruangan</span></p>
                </div>

            </div>
            <div class="card shadow-inset">

                <div class="card-body">
                    <h5 class="card-title display-5 text-info">Denah Biotek</h5>
                    <p class="card-text display-2 text-center text-success">{{$totalbio}}<span
                            class="text-danger font-small"> Ruangan</span></p>
                </div>

            </div>
            <div class="card shadow-inset">

                <div class="card-body">
                    <h5 class="card-title display-5 text-info">Denah Siskom</h5>
                    <p class="card-text display-2 text-center text-success">{{$totalsis}}<span
                            class="text-danger font-small"> Ruangan</span></p>
                </div>

            </div>
        </div>

        <div class="card shadow-inset mt-2">
            <div class="card-body">
                <h3 class="mt-4">Gedung Baru</h3>
                <div class="responsive" class="row justify-content-center">
                    <table class="table shadow-soft rounded" id="gbr" width="100%" cellspacing="0">
                        <thead>
                            <tr>
                                <th>Nama ruangan</th>
                                <th>Luas</th>
                                <th>Kapasitas</th>
                                <th>Foto denah</th>
                                <th>Jenis gedung</th>
                            </tr>
                        </thead>
                        <tbody>

                            @foreach ($denah as $dnh)
                            <tr>
                                <td>{{$dnh->nama}}</td>
                                <td>{{ $dnh->luas }}<span> m</span><sup>2</sup></td>
                                <td>{{ $dnh->kapasitas }}<span> Orang</span></td>
                                <td><img src="{{ asset('storage/'. $dnh->denah) }}" width="70"></td>
                                <td>{{$dnh->gedung->gedung}}</td>
                                </td>
                            </tr>
                             @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>


@endsection