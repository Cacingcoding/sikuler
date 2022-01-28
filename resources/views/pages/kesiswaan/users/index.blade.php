@extends('layouts.main')

@section('content')
<div class="page-header">
    <h3 class="page-title">Manage Users</h3>
    <a href="{{ route('users.create') }}" class="btn btn-primary"><i class="fa fa-plus"> Tambah User</i></a>
</div>
<div class="row">
    <div class="col-lg-12 grid-margin stretch-card">
        <div class="card">

            <div class="card-body">
                <div class="table-responsive">
                    <table class="table table-striped">
                        <thead>
                            <tr>
                                <th>Nama</th>
                                <th>Email</th>
                                <th>Password</th>
                                <th>Role</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($items as $item)
                            <tr>
                                <td>{{ $item->name }}</td>
                                <td>{{ $item->email }}</td>
                                <td>********</td>
                                <td>{{ $item->role }}</td>
                                <td>
                                    <div class="btn-group">
                                        <a href="{{ route('users.edit', $item->id) }}" class="btn btn-warning mr-2"><i
                                                class="fa fa-pencil"></i></a>
                                        <a onclick="return confirm('Yakin untuk menghapus user {{ $item->name }}? ')">
                                            <form action="{{ route('users.destroy', $item->id) }}" method="post"
                                                style="display: inline">
                                                @csrf
                                                @method('delete')
                                                <button class="btn btn-danger" data-toggle="tooltip"
                                                    data-placement="right" title="Hapus Data">
                                                    <i class="fa fa-trash"></i>
                                                </button>
                                            </form>
                                        </a>
                                    </div>
                                </td>
                            </tr>
                            @endforeach
                        </tbody>
                    </table>
                    <div class="mt-2 py-2 border-top d-flex justify-content-center">
                        {{ $items->links() }}
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
