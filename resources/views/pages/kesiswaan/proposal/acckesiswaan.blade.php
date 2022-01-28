@extends('layouts.main')

@section('content')

{{-- @section('title', 'Edit Program') --}}

<div class="card shadow mb-4">
    <div class="card-header py-3 d-flex justify-content-between align-items-baseline">
        <h6 class="m-0 font-weight-bold text-primary">ACC Proposal</h6>
    </div>
    <div class="card-body">
        <form action="{{ route('proposal.acckesiswaanproccess', $item->id) }}" method="post">
            @method('PUT')
            @csrf
            <div class="form-row">
                <div class="col">
                    <div class="form-group">
                        <label class="form-label">ACC Kesiswaan</label>
                        <select class="form-control" name="acc_kesiswaan">
                            <option value="diterima">Di Terima</option>
                            <option value="revisi">Revisi</option>
                        </select>
                        @error('acc_kesiswaan')
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
                        <label for="revisi">Revisi</label>
                        <textarea id="editor1" name="revisi_kesiswaan"
                            class="form-control rounded-pill @error('revisi') is-invalid @enderror"
                            value="{{ old('revisi') }}" placeholder="Masukkan revisi">{{ $item->revisi }}</textarea>
                        @error('revisi')
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
