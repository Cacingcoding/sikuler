@extends('layouts.main')

@section('content')
@foreach ($items as $item)
<!-- Content Row -->
<div class="card profile shadow mb-4">
    <div class="card-header py-3 d-flex justify-content-between align-items-baseline">
        <h6 class="m-0 font-weight-bold text-primary">Profile</h6>
        <a href="{{ route('profile.edit',$item->id) }}"
            class="btn btn-sm btn-warning rounded-pill text-capitalize text-white px-3"><i
                class="fa fa-edit text-white mr-2"></i>edit</a>
    </div>
    @if ($message = Session::get('success'))
    <div class="alert alert-success alert-dismissible fade show" role="alert">
        <strong>
            <p class="text-capitalize">{{ $message }}</p>
        </strong>
        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
            <span aria-hidden="true">&times;</span>
        </button>
    </div>
    @endif
    @if ($message = Session::get('failed'))
    <div class="alert alert-danger alert-dismissible fade show" role="alert">
        <strong>
            <p class="text-capitalize">{{ $message }}</p>
        </strong>
        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
            <span aria-hidden="true">&times;</span>
        </button>
    </div>
    @endif
    <div class="card-body">
        <div class="d-flex justify-content-center">
            <div class="wrapper-lg-img">
                <img src="{{ asset('avatar/'. $item->avatar) }}" alt="" class="img-fluid border-secondary shadow">
            </div>
        </div>
        <div class="row flex-column flex-lg-row my-5">
            <div class="col-12 col-sm-6 text-lg-right pr-3">
                <div class="d-flex flex-lg-row-reverse align-items-center mb-3">
                    <i class="fa fa-user-circle text-secondary ml-lg-2  mr-2 mr-lg-0"></i>
                    <p class="mb-0 text-secondary">{{  $item->user->name }}</p>
                </div>
                <div class="d-flex flex-lg-row-reverse align-items-center mb-3">
                    <i class="fa fa-fw fa-address-card text-secondary ml-lg-2  mr-2 mr-lg-0"></i>
                    <p class="mb-0 text-secondary">{{  $item->alamat }}</p>
                </div>

                <div class="d-flex flex-lg-row-reverse align-items-center mb-3">
                    <i class="fa fa-fw fa-venus-mars text-secondary ml-lg-2  mr-2 mr-lg-0"></i>
                    <p class="mb-0 text-secondary">{{  $item->jk }}</p>
                </div>
            </div>
            <div class="col-12 col-sm-6 pl-3">
                <div class="d-flex align-items-center mb-3">
                    <i class="fa fa-fw fa-envelope text-secondary mr-2"></i>
                    <p class="mb-0 text-secondary">{{  $item->user->email }}</p>
                </div>
                <div class="d-flex align-items-center mb-3">
                    <i class="fa fa-fw fa-phone text-secondary mr-2"></i>
                    <p class="mb-0 text-secondary">{{  $item->nt }}</p>
                </div>
                <div class="d-flex align-items-center mb-3">
                    <i class="fa fa-fw fa-calendar text-secondary mr-2"></i>
                    <p class="mb-0 text-secondary">{{ date('d-m-Y', strtotime($item->ttl)) }}</p>
                </div>
            </div>
        </div>
    </div>
</div>
@endforeach

@endsection
