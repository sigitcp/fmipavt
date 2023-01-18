@extends('admin.layouts.main')
@section('container')
<div class="card-body">
    <h1 class="mt-0">Gedung Siskom</h1>

    <a class="btn btn-primary text-success mb-3" data-toggle="modal" data-target="#create"
    type="button"><span class="fa fa-file-upload mr-2"></span>Tambah Data</a>
<!-- ---------modalcreate------ -->
@include('admin.modal.gedungsiskom.create')

@if(session()->has('success'))
<div class="alert alert-success alert-dismissible shadow-soft fade show" role="alert">
    <span class="alert-inner--icon"><span class="far fa-thumbs-up"></span></span>
    <span class="alert-inner--text"><strong>Well done!</strong> {{ session('success')}}</span>
    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
        <span aria-hidden="true">&times;</span>
    </button>
</div>
@endif
@error('nama')
<div class="alert alert-danger alert-dismissible shadow-soft fade show" role="alert">
    <span class="alert-inner--icon"><span class="fas fa-exclamation-circle"></span></span>
    <span class="alert-inner--text"><strong>Danger!</strong> data tidak berhasil tersimpan!!</span>
    <button type="button" class="close text-dark" data-dismiss="alert" aria-label="Close">
        <span aria-hidden="true">&times;</span>
    </button>
</div>
@enderror
@error('denah')
<div class="alert alert-danger alert-dismissible shadow-soft fade show" role="alert">
    <span class="alert-inner--icon"><span class="fas fa-exclamation-circle"></span></span>
    <span class="alert-inner--text"><strong>Danger!</strong> data tidak berhasil tersimpan!!</span>
    <button type="button" class="close text-dark" data-dismiss="alert" aria-label="Close">
        <span aria-hidden="true">&times;</span>
    </button>
</div>
@enderror

<div class="responsive">
    <table class="table shadow-soft rounded" id="sis" width="100%" cellspacing="0">
        <thead>
            <tr>
                <th>Nama ruangan</th>
                <th>Luas</th>
                <th>Kapasitas</th>
                <th>Foto denah</th>
                <th>Aksi</th>
            </tr>
        </thead>
        

        <tbody>
@foreach ($gedungsiskom as $sis)           
            <tr>
                <td>{{ $sis->nama }}</td>
                <td>{{ $sis->luas }}<span> m</span><sup>2</sup></td>
                <td>{{ $sis->kapasitas }}<span> Orang</span></td>
                <td><img src="{{ asset('storage/'. $sis->denah) }}" width="70"></td>
                <td>
                    <button class="btn btn-primary text-danger mr-2" data-toggle="modal" data-target="#modaldelete"><span class="fas fa-trash mr-2"></span>Delete</button>
                    @include('admin.modal.gedungsiskom.delete')
                    <button class="btn btn-primary text-info" data-toggle="modal" data-target="#modaledit{{ $sis->id }}"><span class="fas fa-edit mr-2"></span>Edit</button>
                </td>
            </tr>

            <!-- modal edit -->
            @include('admin.modal.gedungsiskom.edit')
            @endforeach
        </tbody>
    </table>
</div>
</div>
@endsection