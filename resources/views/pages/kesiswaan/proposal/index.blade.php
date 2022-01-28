@extends('layouts.main')

@section('content')
<div class="page-header">
    <h3 class="page-title">Proposal</h3>
    @if (Auth::user()->role == 'Ketua_PMR' or Auth::user()->role == 'Ketua_PRAMUKA' or Auth::user()->role ==
    'Ketua_ROHIS')
    <a href="{{ route('proposal.create') }}" class="btn btn-sm btn-primary"><i class="fa fa-plus"><small> Tambah
                Proposal</small></i></a>
    @endif

</div>
<div class="row">
    <div class="col-lg-12 grid-margin stretch-card">
        <div class="card shadow mb-4">

            @if ($message = Session::get('success'))
            <div class="alert alert-success alert-dismissible fade show mb-0" role="alert">
                <strong>
                    <p>{{ $message }}</p>
                </strong>
                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            @endif
            <div class="card-body">
                <div class="table-responsive">
                    <table class="table table-striped">
                        <thead>
                            <tr>
                                <th>No</th>
                                <th>Tanggal</th>
                                <th>Judul</th>
                                <th>File</th>
                                @if (Auth::user()->role == 'Pembina_PMR' or Auth::user()->role == 'Pembina_PRAMUKA' or
                                Auth::user()->role == 'Pembina_ROHIS' or Auth::user()->role == 'Ketua_PMR' or
                                Auth::user()->role == 'Ketua_PRAMUKA' or
                                Auth::user()->role == 'Ketua_ROHIS')
                                <th>ACC Pembina</th>
                                <th>Revisi Pembina</th>
                                @endif
                                <th>ACC Kesiswaan</th>
                                @if (Auth::user()->role == 'Pembina_PMR' or Auth::user()->role == 'Pembina_PRAMUKA' or
                                Auth::user()->role == 'Pembina_ROHIS' or Auth::user()->role == 'Kesiswaan')
                                <th>Revisi Kesiswaan</th>
                                @endif
                                @if (Auth::user()->role == 'Kesiswaan')
                                <th>Ekskul</th>
                                @endif
                                @if (Auth::user()->role == 'Ketua_PMR' or Auth::user()->role == 'Ketua_PRAMUKA' or
                                Auth::user()->role == 'Ketua_ROHIS')
                                <th>Aksi</th>
                                @endif
                                @if (Auth::user()->role == 'Pembina_PMR' or Auth::user()->role == 'Pembina_PRAMUKA' or
                                Auth::user()->role == 'Pembina_ROHIS')
                                <th>Aksi</th>
                                @endif
                            </tr>
                        </thead>

                        <tbody>
                            @foreach($items as $key => $item)
                            <tr>
                                <td style="width: 50px">{{ $key+1 }}</td>
                                <td>{{ date('d-m-Y', strtotime($item->created_at)) }}</td>
                                <td>{{ $item->title }}</td>
                                <td>
                                    <a href="{{ asset('file/'.$item->file) }}" download><i class="fa fa-file"></i></a>
                                </td>
                                @if (Auth::user()->role == 'Pembina_PMR' or Auth::user()->role == 'Pembina_PRAMUKA' or
                                Auth::user()->role == 'Pembina_ROHIS' or Auth::user()->role == 'Ketua_PMR' or
                                Auth::user()->role == 'Ketua_PRAMUKA' or
                                Auth::user()->role == 'Ketua_ROHIS')
                                <td>{{ $item->acc_pembina }}</td>
                                <td>{!! $item->revisi_pembina !!}</td>
                                @endif
                                <td>{{ $item->acc_kesiswaan }}</td>
                                @if (Auth::user()->role == 'Pembina_PMR' or Auth::user()->role == 'Pembina_PRAMUKA' or
                                Auth::user()->role == 'Pembina_ROHIS' or Auth::user()->role == 'Kesiswaan')
                                <td>{!! $item->revisi_kesiswaan !!}</td>
                                @endif
                                @if (Auth::user()->role == 'Kesiswaan')
                                <td>{{ $item->ekskul }}</td>
                                @endif
                                @if (Auth::user()->role == 'Ketua_PMR' or Auth::user()->role == 'Ketua_PRAMUKA' or
                                Auth::user()->role == 'Ketua_ROHIS')
                                <td style="width: 150px">
                                    <div class="text-center">
                                        <a href="{{ route('proposal.edit',$item->id) }}" class="btn btn-sm btn-warning">
                                            <i class="fa fa-edit fa-sm text-white"></i>
                                        </a>
                                        <a
                                            onclick="return confirm('Yakin untuk menghapus proposal {{ $item->title }} ?? ')">
                                            <form action="{{ route('proposal.destroy',$item->id) }}" method="post"
                                                class="d-inline">
                                                @csrf
                                                @method('delete')
                                                <button class="btn btn-sm btn-danger">
                                                    <i class="fa fa-fw fa-trash text-white"></i>
                                                </button>
                                            </form>
                                    </div>
                                </td>
                                @endif
                                @if (Auth::user()->role == 'Pembina_PMR' or Auth::user()->role == 'Pembina_PRAMUKA' or
                                Auth::user()->role == 'Pembina_ROHIS')
                                <td style="width: 150px">
                                    <div class="text-center">
                                        <a href="{{ route('proposal.accpembina',$item->id) }}"
                                            class="btn btn-sm btn-warning">
                                            <i class="fa fa-edit fa-sm text-white"></i>
                                        </a>
                                    </div>
                                </td>
                                @endif
                                @if (Auth::user()->role == 'Kesiswaan')
                                <td style="width: 150px">
                                    <div class="text-center">
                                        <a href="{{ route('proposal.acckesiswaan',$item->id) }}"
                                            class="btn btn-sm btn-warning">
                                            <i class="fa fa-edit fa-sm text-white"></i>
                                        </a>
                                    </div>
                                </td>
                                @endif
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


{{-- end content --}}
@endsection
