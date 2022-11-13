@extends('frontend.template.template')
@section('content')
    <section class="bg-default d-flex justify-content-center">
        <div class="kart col-md-8 py-5 mx-4">
            <div class="px-5">
                <div class="row">
                    <div class="d-flex justify-content-center">
                        <h1>{{ $kelas->nama_kelas }}</h1>
                    </div>
                    <p>{{ $kelas->keterangan }}</p>
                </div>
            </div>
        </div>
    </section>
@endsection
