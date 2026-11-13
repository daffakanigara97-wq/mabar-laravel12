@extends('murids.layout')

@section('content')
<div class="row justify-content-center">
    <div class="col-md-8 col-lg-6">
        <div class="card">
            <div class="card-header">
                <h5 class="mb-0">Tambah Murid</h5>
            </div>
            <div class="card-body">

                @if ($errors->any())
                    <div class="alert alert-danger">
                        <ul class="mb-0">
                            @foreach ($errors->all() as $error)
                                <li>{{ $error }}</li>
                            @endforeach
                        </ul>
                    </div>
                @endif

                <form action="{{ route('murids.store') }}" method="POST">
                    @csrf

                    <div class="mb-3">
                        <label class="form-label">NIS</label>
                        <input type="number" name="nis" class="form-control" value="{{ old('nis') }}">
                    </div>

                    <div class="mb-3">
                        <label class="form-label">Nama</label>
                        <input type="text" name="nama" class="form-control" value="{{ old('nama') }}">
                    </div>

                    <div class="mb-3">
                        <label class="form-label">Rombel</label>
                        <input type="text" name="rombel" class="form-control" value="{{ old('rombel') }}">
                    </div>

                    <div class="mb-3">
                        <label class="form-label">Rayon</label>
                        <input type="text" name="rayon" class="form-control" value="{{ old('rayon') }}">
                    </div>

                    <div class="mb-3">
                        <label class="form-label">Alamat</label>
                        <textarea name="alamat" class="form-control" rows="3">{{ old('alamat') }}</textarea>
                    </div>

                    <div class="mb-3">
                        <label class="form-label">No. Telp</label>
                        <input type="text" name="no_telp" class="form-control" value="{{ old('no_telp') }}">
                    </div>

                    <div class="mb-3">
                        <label class="form-label">Jenis Kelamin</label>
                        <select name="jenis_kelamin" class="form-select">
                            <option value="">-- Pilih --</option>
                            <option value="1" {{ old('jenis_kelamin') === '1' ? 'selected' : '' }}>Laki-laki</option>
                            <option value="0" {{ old('jenis_kelamin') === '0' ? 'selected' : '' }}>Perempuan</option>
                        </select>
                    </div>

                    <a href="{{ route('murids.index') }}" class="btn btn-secondary">Kembali</a>
                    <button type="submit" class="btn btn-primary">Simpan</button>
                </form>
            </div>
        </div>
    </div>
</div>
@endsection