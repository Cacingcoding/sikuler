@extends('layouts.main')

@section('content')

<!-- Content Row -->

<div class="card shadow mb-4">
    <div class="card-header py-3 d-flex justify-content-between align-items-baseline">
        <h6 class="m-0 font-weight-bold text-primary">Edit Profile</h6>
    </div>
    <div class="card-body">
        <form enctype="multipart/form-data" action="{{ route('profile.update', $item->id) }}" method="post">
            @method('put')
            @csrf
            <div class="form-row">
                <div class="col-md">
                    <div class="form-group">
                        <label for="name">Nama</label>
                        <input id="name" value="{{ $item->user->name }}" type="text"
                            class="form-control rounded-pill @error('name') is-invalid @enderror" name="name" required
                            autocomplete="name" autofocus placeholder="Masukkan Nama">
                        @error('name')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                        @enderror
                    </div>
                </div>
            </div>
            <div class="form-row">
                <div class="col-md-6">
                    <div class="form-group">
                        <label for="alamat">Alamat</label>
                        <input id="alamat" value="{{ $item->alamat }}" type="text"
                            class="form-control rounded-pill @error('alamat') is-invalid @enderror" name="alamat"
                            required autocomplete="alamat" autofocus placeholder="Masukkan Alamat">
                        @error('alamat')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                        @enderror
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="form-group">
                        <label for="ttl">Tanggal Lahir</label>
                        <input id="ttl" value="{{ date('Y-m-d',strtotime($item->ttl)) }}" type="date"
                            class="form-control rounded-pill @error('ttl') is-invalid @enderror" name="ttl" required
                            autocomplete="ttl" autofocus>
                        @error('ttl')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                        @enderror
                    </div>
                </div>
            </div>
            <div class="form-row">
                <div class="col-sm-6">
                    <div class="form-group">
                        <label for="jk">Jenis Kelamin</label>
                        <select id="jk" class="form-control rounded-pill @error('jk') is-invalid @enderror" name="jk"
                            required autocomplete="jk" autofocus>
                            <option value="" class="text-capitalize text-secondary">
                                -- Jenis Kelamin --
                            </option>
                            <option class="text-capitalize" @if(old('jk',$item->jk) === 'Laki - laki') selected @endif>
                                Laki - laki
                            </option>
                            <option class="text-capitalize" @if(old('jk',$item->jk) === 'Perempuan') selected @endif>
                                Perempuan
                            </option>
                            @error('jk')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                            @enderror
                        </select>
                    </div>
                </div>
                <div class="col-sm-6">
                    <div class="form-group">
                        <label for="nt">Nomor Telpon</label>
                        <input id="nt" value="{{ $item->nt }}" type="text"
                            class="form-control rounded-pill @error('nt') is-invalid @enderror" name="nt" required
                            autocomplete="nt" autofocus placeholder="Masukkan Nomor Telpon">
                        @error('nt')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                        @enderror
                    </div>
                </div>
            </div>
            <div class="form-row">
                <div class="col-sm-6">
                    <div class="form-group mb-3">
                        <label for="avatar">Foto Profil</label> <br />
                        <img src="/avatar/{{$item->avatar}}" alt="" width="100" class="mb-2">
                        <input id="avatar" type="file" class="form-control-file @error('avatar') is-invalid @enderror"
                            name="avatar" autocomplete="avatar" autofocus>
                        @error('avatar')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                        @enderror
                    </div>
                </div>
            </div>
            <button type="submit" class="btn btn-primary rounded-pill">Simpan</button>
        </form>

    </div>
</div>


@endsection
