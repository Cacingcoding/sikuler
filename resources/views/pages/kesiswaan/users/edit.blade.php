@extends('layouts.main')

@section('content')
    <div class="page-header">
        <h3 class="page-title">Create Users</h3>
        <a href="{{ route('users.index') }}" class="btn btn-primary"><i class="fa fa-arrow-left"> Back</i></a>
    </div>
    <div class="row">
        <div class="col-12 grid-margin stretch-card">
            <div class="card">
                <div class="card-body">
                    <form class="forms-sample" action="{{ route('users.update', $item->id) }}" method="POST">
                        @csrf
                        @method('PUT')
                        <div class="form-group">
                            <label for="name">Name</label>
                            <input type="text" class="form-control" name="name" value="{{ $item->name }}"
                                placeholder="Name" />
                        </div>
                        <div class="form-group">
                            <label for="email">Email address</label>
                            <input type="email" class="form-control" name="email" value="{{ $item->email }}"
                                placeholder="Email" />
                        </div>
                        <div class="form-group">
                            <label for="password">Password</label>
                            <input type="password" class="form-control" name="password" placeholder="Password" />
                        </div>
                        <div class="form-group">
                            <label class="form-label">Role</label>
                            <select class="form-control" name="role">
                                <option value="Kesiswaan" @if (old('role', $item->role) === 'Kesiswaan') selected @endif>Kesiswaan</option>
                                <option value="Pembina_PMR" @if (old('role', $item->role) === 'Pembina_PMR') selected @endif>Pembina PMR</option>
                                <option value="Pembina_PRAMUKA" @if (old('role', $item->role) === 'Pembina_PRAMUKA') selected @endif>Pembina PRAMUKA</option>
                                <option value="Pembina_ROHIS" @if (old('role', $item->role) === 'Pembina_ROHIS') selected @endif>Pembina ROHIS</option>
                                <option value="Ketua_PMR" @if (old('role', $item->role) === 'Ketua_PMR') selected @endif>Ketua PMR</option>
                                <option value="Ketua_PRAMUKA" @if (old('role', $item->role) === 'Ketua_PRAMUKA') selected @endif>Ketua PRAMUKA</option>
                                <option value="Ketua_ROHIS" @if (old('role', $item->role) === 'Ketua_ROHIS') selected @endif>Ketua ROHIS</option>
                                <option value="Anggota" @if (old('role', $item->role) === 'Anggota') selected @endif>Anggota</option>
                            </select>
                        </div>
                        <button type="submit" class="btn btn-primary mr-2"> Submit </button>
                        <button class="btn btn-light">Cancel</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection
