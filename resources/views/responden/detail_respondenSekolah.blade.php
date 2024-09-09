@extends('layouts.theme')
@section('nyoba')
<div class="bg-primary pt-10 pb-21"></div>
            <div class="container-fluid mt-n22 px-6">
                <div class="row">
                    <div class="col-lg-12 col-md-12 col-12">
                        <!-- Page header -->

                    </div>
                </div>
                <!-- row  -->
                <div class="row mt-6">
                    <div class="col-md-12 col-12">
                        <!-- card  -->
                        <div class="card">
                            <!-- card header  -->
                            <div class="card-header bg-white py-4">
                                <div class="table-responsive">
                                <div class="card-header bg-white py-4">
                                <h4 class="mb-0">Detail Responden Sekolah</h4>
                            </div>
                                    <table class="table text-nowrap mb-0">
                                        <thead class="table-light">
                                            <tr>
                                                <th>Nama Lengkap</th>
                                                <th>Nama Sekolah</th>
                                                <th>Tanggal Pengisian</th>
                                                <th>Provinsi</th>
                                                
                                            </tr>
                                        </thead> 
                                        <tbody>
                                            @foreach ($dataPertanyaan2 as $DetailPertanyaan)
                                                
                                                <tr>
                                                    <td class="align-middle">{{ $DetailPertanyaan->pertanyaan1 }}</td>
                                                    <td class="align-middle">{{ $DetailPertanyaan->pertanyaan4 }}</td>
                                                    <td class="align-middle">{{ $DetailPertanyaan->pertanyaan3 }}</td>
                                                    <td class="align-middle">{{ $DetailPertanyaan->pertanyaan13 }}</td> 
                                                </tr>
                                                    
                                                
                                        
                                            @endforeach
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                            <!-- table  -->
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
>
@endsection