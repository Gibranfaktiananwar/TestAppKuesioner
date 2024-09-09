@extends('layouts.theme')
@section('nyoba')
<!-- Container fluid -->
<div class="bg-primary pt-10 pb-21"></div>
            <div class="container-fluid mt-n22 px-6">
                <div class="row justify-content-center">
                    <div class="col-lg-12 col-md-12 col-12">
                        <!-- Page header -->
                        <div>
                            <div class="d-flex justify-content-center align-items-center">
                                <div class="mb-2 mb-lg-0">
                                    <h3 class="mb-0 text-white">Data Kuesioner</h3>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-3 col-lg-6 col-md-12 col-12 mt-6">
                        <!-- card -->
                        <div class="card">
                            <!-- card body -->
                            <div class="card-body">
                                <!-- heading -->
                                <div class="d-flex justify-content-between align-items-center mb-3">
                                    <div>
                                        <h4 class="mb-0">Jumlah Kuesioner Terisi</h4>
                                    </div>
                                    <div class="icon-shape icon-md bg-light-primary text-primary rounded-2">
                                        <i class="bi bi-list-task fs-4"></i>
                                    </div>
                                </div>
                                <!-- project number -->
                                <div>
                                    <h1 class="fw-bold">300</h1>
                                    <p class="mb-0">
                                        <span class="text-dark me-2">30</span>Tidak Valid
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-3 col-lg-6 col-md-12 col-12 mt-6">
                        <!-- card -->
                        <div class="card">
                            <!-- card body -->
                            <div class="card-body">
                                <!-- heading -->
                                <div class="d-flex justify-content-between align-items-center mb-3">
                                    <div>
                                        <h4 class="mb-0">Jumlah User yang Mengisi</h4>
                                    </div>
                                    <div class="icon-shape icon-md bg-light-primary text-primary rounded-2">
                                        <i class="bi bi-people fs-4"></i>
                                    </div>
                                </div>
                                <!-- project number -->
                                <div>
                                    <h1 class="fw-bold">12</h1>
                                    <p class="mb-0">
                                        <span class="text-dark me-2">3</span>Online
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-3 col-lg-6 col-md-12 col-12 mt-6">
                        <!-- card -->
                        <div class="card">
                            <!-- card body -->
                            <div class="card-body">
                                <!-- heading -->
                                <div class="d-flex justify-content-between align-items-center mb-3">
                                    <div>
                                        <h4 class="mb-0">Jumlah Sekolah</h4>
                                    </div>
                                    <div class="icon-shape icon-md bg-light-primary text-primary rounded-2">
                                        <i class="bi bi-bullseye fs-4"></i>
                                    </div>
                                </div>
                                <!-- project number -->
                                <div>
                                    <h1 class="fw-bold">12</h1>
                                    <p class="mb-0">
                                        <span class="text-dark me-2">2</span>Provinsi
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>


                <!-- kotak data responden  -->
                <div class="row mt-6">
                    <div class="col-md-12 col-12">
                        <!-- card  -->
                        <div class="card">
                            <!-- card header  -->
                            <div class="card-header bg-white py-4">
                                <h4 class="mb-0">Data Responden</h4>
                            </div>
                            <!-- table  -->
                            <div class="table-responsive">
                                <table class="table text-nowrap mb-0">
                                    <thead class="table-light">
                                        <tr>
                                            <th>Nama Pengisi</th>
                                            <th>Nama Sekolah</th>
                                            <th>Tanggal Pengisian</th>
                                            <th>Provinsi</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach ($dataPertanyaan as $ModelsPertanyaan)
                                        
                                        <tr>
                                            <!-- <td class="align-middle">
                                                <div class="d-flex align-items-center">
                                                    <div class="ms-3 lh-1">
                                                        <h5 class="mb-1">
                                                                                                NAMA PENGISI 
                                                            <a href="{{ route('detail-responden-sekolah', $ModelsPertanyaan->id) }}" class="text-inherit">{{ $ModelsPertanyaan->pertanyaan1 }}</a>
                                                        </h5>
                                                    </div>
                                                </div>
                                            </td>-->

                                            <td class="align-middle">
                                                <div class="d-flex align-items-center">
                                                    <div class="ms-3 lh-1">
                                                        <h5 class="mb-1">
                                                            <!-- NAMA PENGISI -->
                                                            @if( Auth::user()->role == 'admin')
                                                                <!-- Jika role admin, link bisa diklik -->
                                                                <a href="{{ route('detail-responden-sekolah', $ModelsPertanyaan->id) }}" class="text-inherit">{{ $ModelsPertanyaan->pertanyaan1 }}</a>
                                                            @else
                                                                <!-- Jika bukan admin, tampilkan teks biasa tanpa link -->
                                                                <span class="text-inherit">{{ $ModelsPertanyaan->pertanyaan1 }}</span>
                                                            @endif
                                                        </h5>
                                                    </div>
                                                </div>
                                            </td>
                                                                        <!-- NAMA SEKOLAH -->
                                            <td class="align-middle">{{ $ModelsPertanyaan->pertanyaan4 }}</td>
                                                                        <!-- TANGGAL PENGISIAN -->
                                            <td class="align-middle">{{ $ModelsPertanyaan->pertanyaan3 }}</td>
                                                                        <!-- PROVINSI -->
                                            <td class="align-middle">{{ $ModelsPertanyaan->pertanyaan13 }}</td>
                                        </tr>
                                        @endforeach
                                    </tbody>
                                </table>
                            </div>
                            <!-- card footer  -->
                            <div class="card-footer bg-white text-center">
                                <a href="#" class="link-primary">View All Responden</a>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </div>
</div>
@endsection