@extends('admins.layout')

@section('section')
<section class="counter-area ebeef5-bg-color pt-100 pb-70">

    <div class="container">
        <div class="row">
            <div class="col-lg-3 col-sm-6">
                <div class="single-counter">
                    <div class="counter-shape shape-2">
                        <img src="{{ asset('img/counter-shape/counter-shape-2.png') }}" alt="Image" />
                        <h2>
                            <span class="odometer" data-count="{{ $sliders_count }}">0</span>
                        </h2>
                    </div>
                    <p>السلايدر</p>
                </div>
            </div>
            <div class="col-lg-3 col-sm-6">
                <div class="single-counter">
                    <div class="counter-shape shape-2">
                        <img src="{{ asset('img/counter-shape/counter-shape-3.png') }}" alt="Image" />
                        <h2>
                            <span class="odometer" data-count="{{ $services_count }}">0</span>
                        </h2>
                    </div>
                    <p>الخدمات</p>
                </div>
            </div>

            <div class="col-lg-3 col-sm-6">
                <div class="single-counter">
                    <div class="counter-shape shape-2">
                        <img src="{{ asset('img/counter-shape/counter-shape-3.png') }}" alt="Image" />
                        <h2>
                            <span class="odometer" data-count="{{ $gallaries_count }}">0</span>
                        </h2>
                    </div>
                    <p>معرض الصور</p>
                </div>
            </div>
            <div class="col-lg-3 col-sm-6">
                <div class="single-counter">
                    <div class="counter-shape shape-2">
                        <img src="{{ asset('img/counter-shape/counter-shape-4.png') }}" alt="Image" />
                        <h2>
                            <span class="odometer" data-count="{{ $messages_count }}">0</span>
                        </h2>
                    </div>
                    <p>الرسائل</p>
                </div>
            </div>
            <div class="col-lg-3 col-sm-6">
                <div class="single-counter">
                    <div class="counter-shape shape-2">
                        <img src="{{ asset('img/counter-shape/counter-shape-1.png') }}" alt="Image" />
                        <h2>
                            <span class="odometer" data-count="{{ $teachers_count }}">0</span>
                        </h2>
                    </div>
                    <p>المدرسين</p>
                </div>
            </div>
            <div class="col-lg-3 col-sm-6">
                <div class="single-counter">
                    <div class="counter-shape shape-2">
                        <img src="{{ asset('img/counter-shape/counter-shape-2.png') }}" alt="Image" />
                        <h2>
                            <span class="odometer" data-count="{{ $announcements_count }}">0</span>
                        </h2>
                    </div>
                    <p>الإعلانات</p>
                </div>
            </div>
            <div class="col-lg-3 col-sm-6">
                <div class="single-counter">
                    <div class="counter-shape shape-2">
                        <img src="{{ asset('img/counter-shape/counter-shape-3.png') }}" alt="Image" />
                        <h2>
                            <span class="odometer" data-count="{{ $complaints_count }}">0</span>
                        </h2>
                    </div>
                    <p>الشكاوى</p>
                </div>
            </div>
            <div class="col-lg-3 col-sm-6">
                <div class="single-counter">
                    <div class="counter-shape shape-2">
                        <img src="{{ asset('img/counter-shape/counter-shape-4.png') }}" alt="Image" />
                        <h2>
                            <span class="odometer" data-count="{{ $permissions_count }}">0</span>
                        </h2>
                    </div>
                    <p>الإذونات</p>
                </div>
            </div>

        </div>
    </div>
</section>
@endsection
