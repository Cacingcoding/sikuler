@extends('layouts.main')

@section('content')

{{-- Content Row  --}}
<div class="card shadow mb-4">
    <div class="card-header py-3 d-flex justify-content-between align-items-baseline">
        <h6 class="m-0 font-weight-bold text-primary">Tambah Proposal</h6>
    </div>
    <div class="card-body">
        <form action="{{ route('proposal.store') }}" method="post" enctype="multipart/form-data">
            @csrf
            <div class="form-row">
                <div class="col">
                    <div class="form-group">
                        @if (Auth::user()->role == 'Ketua_PMR')
                        <input id="ekskul" type="text" class="form-control @error('ekskul') is-invalid @enderror"
                        name="ekskul" value="PMR" autocomplete="ekskul" autofocus
                        placeholder="Masukkan ekskul" hidden>
                        @endif
                        @if (Auth::user()->role == 'Ketua_PRAMUKA')
                        <input id="ekskul" type="text" class="form-control @error('ekskul') is-invalid @enderror"
                        name="ekskul" value="PRAMUKA" autocomplete="ekskul" autofocus
                        placeholder="Masukkan ekskul" hidden>
                        @endif
                        @if (Auth::user()->role == 'Ketua_ROHIS')
                        <input id="ekskul" type="text" class="form-control @error('ekskul') is-invalid @enderror"
                        name="ekskul" value="ROHIS" autocomplete="ekskul" autofocus
                        placeholder="Masukkan ekskul" hidden>
                        @endif
                        @error('ekskul')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                        @enderror
                    </div>
                </div>
            </div>
            <div class="form-row">
                <div class="col">
                    <div class="form-group">
                        <label for="title">Judul</label>
                        <input id="title" type="text" class="form-control @error('title') is-invalid @enderror"
                            name="title" value="{{ old('title') }}" autocomplete="title" autofocus
                            placeholder="Masukkan Title">
                        @error('title')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                        @enderror
                    </div>
                </div>
            </div>
            <div class="form-row">
                <div class="col">
                    <div class="form-group">
                        <label for="description">Keterangan</label>
                        <textarea id="editor1" name="description"
                            class="form-control @error('description') is-invalid @enderror"
                            value="{{ old('description') }}" placeholder="Masukkan description"></textarea>
                        @error('description')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                        @enderror
                    </div>
                </div>
            </div>
            <div class="form-row">
                <div class="col">
                    <div class="form-group">
                        <label for="file">File</label>
                        <input id="file" type="file" class="form-control @error('file') is-invalid @enderror"
                            name="file" value="{{ old('file') }}" required autocomplete="file"
                            placeholder="Masukkan file "><small class="text-danger">Max 1MB</small>
                        @error('file')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                        @enderror
                    </div>
                </div>
            </div>
            <div class="form-row mt-5">
                <div class="col">
                    <button type="submit" class="btn btn-primary w-100">Simpan</button>
                </div>
            </div>
        </form>
    </div>
</div>
{{-- end content --}}
<script>
    CKEDITOR.replace('editor1');

</script>
@endsection
