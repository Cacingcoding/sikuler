@extends('layouts.main')

@section('content')
<div id="absen">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <a href="{{ route('nilai.list') }}" class="btn btn-primary pull-left mb-3">
                    <i class="fa fa-arrow-left"></i>
                </a>
            </div>
        </div>
        <div class="row">
            <div class="col-12">
                <h4 class="text-success">Penilaian Tahun Akademik: {{$ta->tahun_akademik}}/{{$ta->semester}}</h4>
            </div>
        </div>
        <div class="row">
            <div class="col-md-12">
                <table>
                    <tr>
                        <th>Email</th>
                        <td>:</td>
                        <td> {{ Auth::user()->email }}</td>
                    </tr>
                    <tr>
                        <th>Nama</th>
                        <td>: </td>
                        <td> {{ Auth::user()->name }}</td>
                    </tr>
                </table>
            </div>
        </div>
        <div class="row">
            <div class="col-12">
                <table class="tg table">
                    <thead>
                        <tr>
                            <th class="tg-6h95" rowspan="2">No</th>
                            <th class="tg-6h95" rowspan="2">Mapel</th>
                            <th class="tg-6h95" rowspan="2">Kelas</th>
                            <th class="tg-6h95" rowspan="2">Guru</th>
                            <th class="tg-k7qf" colspan="18">Nilai</th>
                        </tr>
                        <tr>
                            <td class="tg-k7qf">Absen</td>
                            <td class="tg-k7qf">Tugas</td>
                            <td class="tg-k7qf">UTS</td>
                            <td class="tg-k7qf">UAS</td>
                            <td class="tg-k7qf">Nilai Akhir</td>
                            <td class="tg-k7qf">Huruf</td>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($nilai as $key => $item)
                        <tr>
                            <td class="tg-3xi5">{{ $key+1 }}</td>
                            <td class="tg-3xi5">{{ $item->jadwal->mapel->mapel }}</td>
                            <td class="tg-3xi5">{{ $item->jadwal->kelas->kelas }}</td>
                            <td class="tg-3xi5">{{ $item->jadwal->user->name }}</td>
                            <td class="tg-3xi5">{{ $item->nilai_absen }}</td>
                            <td class="tg-3xi5">{{ $item->nilai_tugas }}</td>
                            <td class="tg-3xi5">{{ $item->nilai_uts }}</td>
                            <td class="tg-3xi5">{{ $item->nilai_uas }}</td>
                            <td class="tg-3xi5">{{ $item->nilai_akhir }}</td>
                            <td class="tg-3xi5">{{ $item->nilai_huruf }}</td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
    @endsection
