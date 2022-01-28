@extends('layouts.main')

@section('content')

    {{-- <div class="page-header flex-wrap">
        <div class="header-left">
            <button class="btn btn-primary mb-2 mb-md-0 mr-2"> Create new document </button>
            <button class="btn btn-outline-primary bg-white mb-2 mb-md-0"> Import documents </button>
        </div>
        <div class="header-right d-flex flex-wrap mt-2 mt-sm-0">
            <div class="d-flex align-items-center">
                <a href="#">
                    <p class="m-0 pr-3">Dashboard</p>
                </a>
                <a class="pl-3 mr-4" href="#">
                    <p class="m-0">ADE-00234</p>
                </a>
            </div>
            <button type="button" class="btn btn-primary mt-2 mt-sm-0 btn-icon-text">
                <i class="mdi mdi-plus-circle"></i> Add Prodcut </button>
        </div>
    </div> --}}
    <!-- first row starts here -->
    <div class="row">
        <div class="card">
            <div class="card-body">
                <h1 class="text-center">SMK PLUS NUSA PUTRA</h1>
                <div class="text-center my-5">
                    <img src="{{ asset('img/logo.png') }}" alt="">
                </div>
                <p>SMK Plus Nusa Putra adalah salah satu Sekolah Menengah
                    Kejuruan Swasta dengan jurusan Teknik Komputer dan Jaringan yang
                    berdiri pada tahun 2009 dan satu yayasan dengan Universitas Nusa Putra
                    Sukabumi. SMK Plus Nusa Putra bertempat di Jl.Raya Surade Wetan
                    02/01, Kelurahan/Desa Surade, Kecamatan Surade, Kabupaten Sukabumi
                    dengan nomor NPSN 20257690 dengan garis Lintang -6.9237 dan garis
                    Bujur 106.96838400000001 dengan ketinggian 643.
                </p>
                <p>Visi dari SMK Plus Nusa Puta adalah menjadi lembaga pendidikan
                    dan pelatihan yang unggul dan tangguh dalam menghasilkan peserta didik
                    yang cerdas, kreatif, inovatif dan religious serta memiliki rasa nasionalis.
                    Sedangkan salah satu dari misi SMK Plus Nusa Putra Adalah
                    mengembangkan lembaga yang tangguh dan inovatif, memanfaatkan
                    sumber daya manusia (SDM) secara optimal sehingga dapat turut andil
                    dalam mencerdaskan kehidupan umat, mendorong tumbuhnya
                    kemampuan penguasaan ilmu pengetahuan dan kemampuan ilmu
                    teknologi yang dilandasi dengan nilai religiusitas agar tercipta
                    kemandirian bangsa dan kelayakan peradaban umat manusia. Tidak hanya
                    dibidang akademik, SMK Plus Nusa Putra juga memiliki beberapa
                    prestasi non-akademik yang cukup menonjol dan menjadikan sebuah
                    tidak langsung untuk menarik minat para calon siswa yang akan
                    bersekolah kejenjang atas.
                </p>
            </div>
        </div>
    </div>

@endsection
