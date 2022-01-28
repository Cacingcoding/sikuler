@extends('layouts.main')

@section('content')
<div id="absen">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <h4 class="text-success">Absensi Tahun Akademik: </h4>
            </div>
        </div>
        <div class="row">
            <div class="col-md-12">
                <table>
                    <tr>
                        <th>Matakuliah</th>
                        <td>:</td>
                        <td>{{$jadwal->mapel->mapel}}</td>
                    </tr>
                    <tr>
                        <th>Kelas</th>
                        <td>:</td>
                        <td>{{$jadwal->kelas->kelas}}</td>
                    </tr>
                    <tr>
                        <th>Jurusan</th>
                        <td>:</td>
                        <td>{{$jadwal->jurusan->jurusan}}</td>
                    </tr>
                    <tr>
                        <th>Dosen</th>
                        <td>:</td>
                        <td>{{$jadwal->user->name}}</td>
                    </tr>
                </table>
            </div>
        </div>
        <div class="row mt-4">
            <div class="col-12">
                <table class="tg table">
                    <thead>
                        <tr>
                            <th class="tg-6h95" rowspan="2">No</th>
                            <th class="tg-6h95" rowspan="2">Email</th>
                            <th class="tg-6h95" rowspan="2">Nama</th>
                            <th class="tg-k7qf" colspan="18">Nilai</th>
                        </tr>
                        <tr>
                            <td class="tg-k7qf">Absen</td>
                            <td class="tg-k7qf">Tugas</td>
                            <td class="tg-k7qf">UTS</td>
                            <td class="tg-k7qf">UAS</td>
                        </tr>
                    </thead>
                    <tbody>
                        <form method="post" action="{{ route('nilai.update' , $id) }}">
                            @method('PUT')
                            @csrf
                            @forelse ($items as $index => $item)
                            <tr>
                                <td class="tg-3xi5"><input type="hidden" value="{{ $item->user_id }}"
                                        name="idMhs[]">{{ $index+1 }}</td>
                                <td class="tg-3xi5">{{ $item->user->email }}</td>
                                <td class="tg-3xi5">{{ $item->user->name }}</td>
                                <td class="tg-3xi5">
                                    <input type="text" class="nilai" name="nilai_absen[]"
                                        value="{{ old('nilai_absen') ? old('nilai_absen') : $item->nilai_absen }}">
                                </td>
                                <td class="tg-3xi5">
                                    <input type="text" class="nilai" name="nilai_tugas[]"
                                        value="{{ old('nilai_tugas') ? old('nilai_tugas') : $item->nilai_tugas }}">
                                </td>
                                <td class="tg-3xi5">
                                    <input type="text" class="nilai" name="nilai_uts[]"
                                        value="{{ old('nilai_uts') ? old('nilai_uts') : $item->nilai_uts }}">
                                </td>
                                <td class="tg-3xi5">
                                    <input type="text" class="nilai" name="nilai_uas[]"
                                        value="{{ old('nilai_uas') ? old('nilai_uas') : $item->nilai_uas }}">
                                </td>
                            </tr>
                            @empty
                            <tr>
                                <td>
                                    Siswa Belum Mengambil KRS
                                </td>
                            </tr>
                            @endforelse
                    </tbody>
                </table>
                <div class="d-flex">
                    <button type="submit" class="btn btn-success ml-auto">Simpan Nilai</button>
                </div>
                </form>
            </div>
        </div>
    </div>
    @endsection
