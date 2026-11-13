@extends('murids.layout')

@section('content')
    <div class="row">
        <div class="col-lg-12 margin-tb">
            <div class="pull-left">
                <h2>Edit Data Murid</h2>
            </div>
            <div class="pull-right mb-3">
                <a class="btn btn-primary" href="{{ route('murids.index') }}">Kembali</a>
            </div>
        </div>
    </div>

    @if ($errors->any())
        <div class="alert alert-danger">
            <strong>Whoops!</strong> Ada beberapa masalah dengan inputanmu.<br><br>
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif

    <form action="{{ route('murids.update', $murid->id) }}" method="POST">
        @csrf
        @method('PUT')

        <div class="row">
            <div class="col-xs-12 col-sm-12 col-md-12 mb-3">
                <div class="form-group">
                    <strong>NIS:</strong>
                    <input type="text" name="nis" value="{{ $murid->nis }}" class="form-control" placeholder="NIS">
                </div>
            </div>

            <div class="col-xs-12 col-sm-12 col-md-12 mb-3">
                <div class="form-group">
                    <strong>Nama:</strong>
                    <input type="text" name="nama" value="{{ $murid->nama }}" class="form-control" placeholder="Nama">
                </div>
            </div>

            <div class="col-xs-12 col-sm-12 col-md-12 mb-3">
                <div class="form-group">
                    <strong>Rombel:</strong>
                    <input type="text" name="rombel" value="{{ $murid->rombel }}" class="form-control" placeholder="Rombel">
                </div>
            </div>

            <div class="col-xs-12 col-sm-12 col-md-12 mb-3">
                <div class="form-group">
                    <strong>Rayon:</strong>
                    <input type="text" name="rayon" value="{{ $murid->rayon }}" class="form-control" placeholder="Rayon">
                </div>
            </div>

            <div class="col-xs-12 col-sm-12 col-md-12 mb-3">
                <div class="form-group">
                    <strong>Alamat:</strong>
                    <textarea class="form-control" name="alamat" placeholder="Alamat">{{ $murid->alamat }}</textarea>
                </div>
            </div>

            <div class="col-xs-12 col-sm-12 col-md-12 mb-3">
                <div class="form-group">
                    <strong>No. Telepon:</strong>
                    <input type="text" name="no_telp" value="{{ $murid->no_telp }}" class="form-control" placeholder="No. Telepon">
                </div>
            </div>

            <div class="col-xs-12 col-sm-12 col-md-12 mb-3">
                <div class="form-group">
                    <strong>Jenis Kelamin:</strong>
                    <select name="jenis_kelamin" class="form-control">
                        <option value="1" {{ $murid->jenis_kelamin == 1 ? 'selected' : '' }}>Laki-laki</option>
                        <option value="0" {{ $murid->jenis_kelamin == 0 ? 'selected' : '' }}>Perempuan</option>
                    </select>
                </div>
            </div>

            <div class="col-xs-12 col-sm-12 col-md-12 text-center">
                <button type="submit" class="btn btn-primary">Update</button>
            </div>
        </div>
    </form>
@endsection