@section('main')
@section('title' , 'Periode')
@section('content')
<h1>Tambah Periode</h1>
<form action="{{ route('periode.store') }}" method="POST">
    <div class="form-group">
        <label for="tahun_akademik">Tahun Akademik</label>
        <input type="text" name="tahun_akademik" class="form-control" value="{{ old('tahun_akademik') }}">
        @error("tahun_akademik")
            <div class="text-danger">{{ $message }}</div>
        @enderror
    </div>
    <div class="form-group">
        <label for="kode_smt">Kode Semester</label>
        <input type="text" name="kode_smt" class="form-control" value="{{ old('kode_smt') }}">
        @error("kode_smt")
            <div class="text-danger">{{ $message }}</div>
        @enderror
    </div>
    <button type="submit" class="btn btn-primary mt-3">Simpan</button>
</form>
