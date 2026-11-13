@extends('murids.layout')

@section('content')
<div class="d-flex justify-content-between align-items-center mb-3">
    <h3>Data Murids</h3>
</div>

@if (session('success'))
    <div class="alert alert-success">{{ session('success') }}</div>
@endif

<div>
    <!-- Button trigger modal -->
<button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#staticBackdrop">
  <a class="btn btn-primary">+ Tambah Murid</a>
</button>

<!-- Modal -->
<div class="modal fade" id="staticBackdrop" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h1 class="modal-title fs-5" id="staticBackdropLabel">Data Murids</h1>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">

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
        ...
      </div>
    </div>
  </div>
</div>
</div>

<div class="table-responsive">
    <table class="table table-bordered table-striped align-middle">
        <thead class="table-dark">
            <tr>
                <th>No</th>
                <th>NIS</th>
                <th>Nama</th>
                <th>Rombel</th>
                <th>Rayon</th>
                <th>Jenis Kelamin</th>
                <th width="100">Aksi</th>
            </tr>
        </thead>
        <tbody>
            @foreach($murids as $index => $murid)
            <tr>
                <td>{{ $index + 1 }}</td>
                <td>{{ $murid->nis }}</td>
                <td>{{ $murid->nama }}</td>
                <td>{{ $murid->rombel }}</td>
                <td>{{ $murid->rayon }}</td>
                <td>{{ $murid->jenis_kelamin }}</td>
                <td>
                    <a href="{{ route('murids.show', $murid->id) }}" class="btn btn-info btn-sm">Detail</a>
                    <a href="{{ route('murids.edit', $murid->id) }}" class="btn btn-warning btn-sm">Edit</a>
        
                    <form action="{{ route('murids.destroy', $murid->id) }}" method="POST" class="d-inline"
                            onsubmit="return confirm('Yakin ingin menghapus data {{ $murid->nama }}?')">
                        @csrf
                        @method('DELETE')
                        <button type="submit" class="btn btn-danger btn-sm">Hapus</button>
                    </form>
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>
</div>

{{ $murids->links() }}
@endsection