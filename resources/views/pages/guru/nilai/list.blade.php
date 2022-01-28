@extends('layouts.main')

@section('content')
<!-- profile -->
<div id="profile">
    <div class="container">
        <div class="row">
            @forelse ($data as $index => $item)
            <div class="col-md-4">
                <div class="card mb-4">
                    <div class="card-body">
                        <h5 class="card-title">{{$item->mapel->mapel}}</h5>
                        <table>
                            <tr>
                                <th>Kelas</th>
                                <td>:</td>
                                <td>{{$item->kelas->kelas}}</td>
                            </tr>
                            <tr>
                                <th>Waktu</th>
                                <td>:</td>
                                <td>{{$item->hari}}, {{$item->waktumulai}} - {{$item->waktuselesai}}</td>
                            </tr>
                            <tr>
                                <th>Jurusan</th>
                                <td>:</td>
                                <td>{{$item->jurusan->jurusan}}</td>
                            </tr>
                            <tr>
                                <td><a href="{{ route('nilai.show' , $item->id) }}" class="btn btn-primary mt-2">Isi
                                        Nilai</a></td>
                            </tr>
                        </table>

                    </div>
                </div>
            </div>
            @empty
            <p>Jadwal Kosong</p>
            @endforelse
        </div>
    </div>
</div>
<!-- end profile -->
@endsection
