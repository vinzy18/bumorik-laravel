@extends('frontend.layout.index')

@section('container')


<main id="content">
    <div class="section header page" style="background-image: linear-gradient(rgba(0,0,0,.35), rgba(0,0,0,.35)), url('{{url('img/bg/pg-about.webp')}}')">
        <div class="container position-relative d-flex justify-content-center align-self-center">
            <div class="heading-text d-block">
                <div class="heading">
                    <span>About Us</span>
                </div>
            </div>
        </div>
    </div>

    <div class="section about-us">
        <div class="container d-flex position-relative">
            <div class="img-custom">
                {{-- <img src="{{ $abt->abt_image }}" alt="Yayasan ARTI" class="ab-banner"> --}}
            </div>
            <div class="orn-pink-box"></div>
            <div class="row about-desc d-flex align-items-center">
                <div class="col-md-5">
                    <div class="when-small"></div>
                </div>
                <div class="col-md-7">
                    <p>test</p>
                    {{-- <p>{!! $abt->abt_desc !!}</p> --}}
                </div>
            </div>
        </div>
    </div>
    <div class="section arti-vision">
        <div class="container">
            <div class="row d-flex">
                <div class="col-md-6 vis-desc d-flex align-items-center">
                    <div class="wrapper">
                        <h1>Visi</h1>
                        <p>test</p>
                        {{-- <p>{!! $abtvis->vis_desc !!}</p> --}}
                    </div>
                </div>
                <div class="col-md-6 vis-img">
                    {{-- <img src="{{ $abtvis->vis_image }}" alt="anak-anak yayasan arti foundation" class="h-100 w-100"> --}}
                    <div class="orn-pink-circle"></div>
                </div>
            </div>
        </div>
    </div>
    <div class="section arti-mission">
        <div class="container">
            <div class="row d-flex">
                <div class="col-md-6 miss-img">
                    {{-- <img src="{{ $abtmis->mis_image }}" alt="anak yayasan arti foundation" class="h-100 w-100"> --}}
                    <div class="orn-pink-triangle"></div>
                </div>
                <div class="col-md-6 miss-desc d-flex align-items-center">
                    <div class="wrapper">
                        <h1>Misi</h1>
                        test
                        {{-- <p>{!! $abtmis->mis_desc !!}</p> --}}
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="section arti-prinspec">
        <div class="container">
            <div class="row">
                <div class="col-md-6 py-4">
                    <h1 class="pb-3">Prinsip</h1>
                    <div class="row">
                        <div class="col-3">
                            <div class="orn-grad-blue-pink"></div>
                        </div>
                        <div class="col-9">
                            <ul>test
                                {{-- @foreach ($prinsip as $pri)
                                    <li><strong>{{$pri->name}}</strong></li>
                                @endforeach --}}
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 py-4">
                    <h1 class="pb-3">Spesialisasi</h1>
                    <div class="row">
                        <div class="col-3">
                            <div class="orn-grad-pink-blue"></div>
                        </div>
                        <div class="col-9">
                            <ul>test
                                {{-- @foreach ($spesial as $spes)
                                    <li><strong>{{$spes->name}}</strong></li>
                                @endforeach --}}
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="section arti-approach">
        <div class="container">
            <h1 class="text-center pb-5">Our Approach</h1>
            <div class="row">
                {{-- @foreach ($approach as $appr) --}}
                    <div class="col-md-6 py-3">
                        <div class="row">
                            <div class="col-4 col-md-3">
                                <div class="orn-half-circle-pink d-flex align-items-center justify-content-center">
                                    <span>test</span>
                                    {{-- <span>{{$loop->iteration}}</span> --}}
                                </div>
                            </div>
                            <div class="col-8">
                                <h2>test</h2>
                                <p>test</p>
                                {{-- <h2>{{ $appr->title }}</h2>
                                <p>{!! $appr->desc !!}</p> --}}
                            </div>
                        </div>
                    </div>
                {{-- @endforeach --}}
            </div>
        </div>
    </div>
</main>


@endsection
