@extends('layouts.app')
@section('main')
<div class="page-title-area bg-10">
    <div class="container">
        <div class="page-title-content">
            <h2>تواصل معنا</h2>
        </div>
    </div>
</div>
<section class="banner-area-two pt-100 pb-70" id="about">
    <div class="section-title">
        <h2>تواصل معنا</h2>
        <img src="{{ asset('img/section-title-shape.png') }}" alt="Image" />
    </div>
    <div class="d-table">
        <div class="d-table-cell">
            <div class="container-fluid social">
                <div class="row align-items-center">
                    <div class="col-lg-7">
                        <div class="banner-content " style="margin: 0">
                            @livewire('message.add')
                        </div>
                    </div>
                    <div class="col-lg-5">
                        <div style="margin-top: unset" class="banner-img wow animate__animated animate__fadeInRight" data-wow-delay="0.3s">
                            <img style="height: 500px;border-radius:10%" src="{{ asset('img/contacts/img.png') }}" alt="Image" />

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
@endsection
