@extends('layouts.theme')
@section('nyoba')

<div class="bg-primary pt-10 pb-21"></div>
            <div class="container-fluid mt-n22 px-6">
                <div class="row">
                    <div class="col-lg-12 col-md-12 col-12">
                        <!-- Page header -->
                        <div> 
                            <div class="d-flex justify-content-between align-items-center">
                                <div class="mb-2 mb-lg-0">
                                    <h3 class="mb-0 text-white">Data Barang</h3>
                                </div>
                                @if(Auth::check() && Auth::user()->role != 'mahasiswa')
                                <div class="mb-2 mb-lg-0 bg-white">
                                    <a href="">
                                        <a href="/tambah-barang" class="btn btn-white">Tambah</a>
                                    </a>
                                </div>
                                @endif

                            </div>
                        </div>
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
                                    <table class="table text-nowrap mb-0">
                                        <thead class="table-light">
                                            <tr>
                                                <th>Name</th>
                                                <th>Type</th>
                                                <th>Condition</th>
                                                <th>Quantity</th>
                                                @if(Auth::check() && Auth::user()->role != 'mahasiswa')
                                                <th>EDIT</th>
                                                @endif
                                            </tr>
                                        </thead> 
                                        <tbody>
                                            @foreach ($data as $ModelsItem)
                                                <tr>
                                                    <td class="align-middle">{{ $ModelsItem->name }}</td>
                                                    <td class="align-middle">{{ $ModelsItem->type }}</td>
                                                    <td class="align-middle">{{ $ModelsItem->condition }}</td>
                                                    <td class="align-middle">{{ $ModelsItem->quantity }}</td>
                                                    @if(Auth::check() && Auth::user()->role != 'mahasiswa')
                                                    <td class="align-middle col-2">
                                                    <a href="{{ route('barang-update', ['id' => $ModelsItem->id]) }}" class="btn btn-success">Update</a>
                                                    <form action="{{ route('barang-delete', ['id' => $ModelsItem->id]) }}" method="post"
                                                style="display: inline;">
                                                @csrf
                                                @method('delete')
                                                <button type="submit" class="btn btn-danger">Hapus</button>
                                                @endif
                                                    </form> 
                                                </td>
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


@endsection