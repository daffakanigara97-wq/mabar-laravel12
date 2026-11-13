@extends('murids.layout')

@section('content')
<div class="row justify-content-center">
    <div class="col-md-8 col-lg-6">
        <div class="card">
            <div class="card-header">
                <h5 class="mb-0">Detail Murid</h5>
            </div>
            <div class="card-body">
                <table class="table table-borderless mb-0">
                    <tr>
                        <th width="150">NIS</th>
                        <td>{{ $murid->nis }}</td>
                    </tr>
                    <tr>
                        <th>Nama</th>
                        <td>{{ $murid->nama }}</td>
                    </tr>
                    <tr>
                        <th>Rombel</th>
                        <td>{{ $murid->rombel }}</td>
                    </tr>
                    <tr>
                        <th>Rayon</th>
                        <td>{{ $murid->rayon }}</td>
                    </tr>
                    <tr>
                        <th>Alamat</th>
                        <td>{{ $murid->alamat }}</td>
                    </tr>
                    <tr>
                        <th>No. Telp</th>
                        <td>{{ $murid->no_telp }}</td>
                    </tr>
                    <tr>
                        <th>Jenis Kelamin</th>
                        <td>{{ $murid->jenis_kelamin ? 'Laki-laki' : 'Perempuan' }}</td>
                    </tr>
                </table>
            </div>
            <div class="card-footer">
                <a href="{{ route('murids.index') }}" class="btn btn-secondary">Kembali</a>
            </div>
        </div>
    </div>
</div>
@endsection