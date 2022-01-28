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
                    <form class="forms-sample" action="{{ route('users.store') }}" method="POST">
                        @csrf
                        <div class="form-group">
                            <label for="name">Name</label>
                            <input type="text" class="form-control" name="name" placeholder="Name" />
                        </div>
                        <div class="form-group">
                            <label for="email">Email address</label>
                            <input type="email" class="form-control" name="email" placeholder="Email" />
                        </div>
                        <div class="form-group">
                            <label for="password">Password</label>
                            <input type="password" class="form-control" name="password" placeholder="Password" />
                        </div>
                        <div class="form-group">
                            <label class="form-label">Role</label>
                            <select class="form-control" name="role">
                                <option value="Kesiswaan">Kesiswaan</option>
                                <option value="Pembina_PMR">Pembina PMR</option>
                                <option value="Pembina_PRAMUKA">Pembina PRAMUKA</option>
                                <option value="Pembina_ROHIS">Pembina ROHIS</option>
                                <option value="Ketua_PMR">Ketua PMR</option>
                                <option value="Ketua_PRAMUKA">Ketua PRAMUKA</option>
                                <option value="Ketua_ROHIS">Ketua ROHIS</option>
                                <option value="Anggota">Anggota</option>
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
