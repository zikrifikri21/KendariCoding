@extends('frontend.template.template')
@section('content')
    <section class="breadcrumbs kart">
        <div class="container">
            <div class="d-flex justify-content-between align-items-center">
                <h2>Kelas</h2>
                <ol>
                    <li><a href="/">Beranda</a></li>
                    <li>Kelas</li>
                </ol>
            </div>
        </div>
    </section>
    <section class="bg-default">
        <div class="kart py-3 mx-4">
            <div class="px-5">
                <div class="row">
                    <div class="col-md-4">
                        <div class="d-flex justify-content-start">
                            <img src="{{ asset('assets/img/kp.webp') }}" class="card-img-top" style="width:300px;">
                        </div>
                        <div class="d-flex align-self-end">
                            <div class="mt-1">
                                <h4 class="mb-0"><strong>Kelas BackEnd Developer</strong></h4>
                                <small><strong>Lihat Semua <i class="fas fa-arrow-right"></i></strong></small>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-8">
                        <div class="splide">
                            <div class="splide__track">
                                <div class="splide__list">
                                    @foreach ($kelas as $k)
                                        <div class="col-sm-4 splide__slide m-2">
                                            <div class="card bg-dark text-white">
                                                <img src="https://source.unsplash.com/150x75" class="card-img-top"
                                                    alt="...">
                                                <div class="card-body">
                                                    <h5 class="card-title">{{ $k->nama_kelas }}</h5>
                                                    <p class="card-text">{{ Str::limit($k->keterangan, 20) }}</p>
                                                    <a href="/class/{{ $k->slug }}" class="btn btn-primary">Read
                                                        more</a>
                                                </div>
                                            </div>
                                        </div>
                                    @endforeach
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <script src="{{ asset('assets/js/carousel.js') }}"></script>
@endsection
