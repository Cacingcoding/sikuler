@extends('layouts.main')

@section('content')

{{-- @section('title', 'Edit Program') --}}

<div class="card shadow mb-4">
    <div class="card-header py-3 d-flex justify-content-between align-items-baseline">
        <h6 class="m-0 font-weight-bold text-primary">Edit Proposal</h6>
    </div>
    <div class="card-body">
        <form action="{{ route('proposal.update', $item->id) }}" method="post" enctype="multipart/form-data">
            @method('PUT')
            @csrf
            <div class="form-row">
                <div class="col">
                    <div class="form-group">
                        @if (Auth::user()->role == 'Ketua_PMR')
                        <input id="ekskul" type="text" class="form-control @error('ekskul') is-invalid @enderror"
                            name="ekskul" value="PMR" autocomplete="ekskul" autofocus placeholder="Masukkan ekskul"
                            hidden>
                        @endif
                        @if (Auth::user()->role == 'Ketua_PRAMUKA')
                        <input id="ekskul" type="text" class="form-control @error('ekskul') is-invalid @enderror"
                            name="ekskul" value="PRAMUKA" autocomplete="ekskul" autofocus placeholder="Masukkan ekskul"
                            hidden>
                        @endif
                        @if (Auth::user()->role == 'Ketua_ROHIS')
                        <input id="ekskul" type="text" class="form-control @error('ekskul') is-invalid @enderror"
                            name="ekskul" value="ROHIS" autocomplete="ekskul" autofocus placeholder="Masukkan ekskul"
                            hidden>
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
                            name="title" value="{{ $item->title }}" autocomplete="title" autofocus
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
                            class="form-control rounded-pill @error('description') is-invalid @enderror"
                            value="{{ old('description') }}"
                            placeholder="Masukkan description">{{ $item->description }}</textarea>
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
                        <label for="file" class="d-block">File</label>
                        <a href="{{asset('file/'.$item->file)}}" class="mb-2"><i class="fa fa-file fa-lg"></i></a>
                        <input id="file" type="file" class="form-control mt-2 @error('file') is-invalid @enderror"
                            name="file" value="{{ old('file') }}" autocomplete="file" placeholder="Masukkan Gambar 1">
                        @error('file')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                        @enderror
                    </div>
                </div>
            </div>
            <div class="form-row">
                <div class="col-12">
                    <button type="submit" class="btn btn-primary">Simpan</button>
                </div>
            </div>
        </form>
    </div>
</div>
<script>
    CKEDITOR.replace('editor1');

</script>
@endsection
