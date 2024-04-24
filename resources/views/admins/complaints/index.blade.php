@push('css')
    <style>
        .sting{
                background-color: transparent;
                border: unset;
        }
        .stingform{
            display:inline-block;
        }
    </style>
@endpush

@extends('admins.layout',['page_name'=> 'جميع الشكاوى' ])


@section('section')
<div class="instructor-content">

    <section class="cart-area">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 col-md-12">
                    <div class="cart-wraps">
                        <div style="padding-top: 50px">
                            <div class="coupon-cart">
                                <div class="row">
                                    <div class="col-lg-6 col-sm-6 offset-lg-3 text-center">
                                        <h2  class="mx-auto">
                                            شكاوى لم يتم الرد عليها
                                        </h2>
                                    </div>
                                </div>
                            </div>
                            <div class="cart-table table-responsive mt-4">
                                <table class="table table-bordered ">
                                    <thead>
                                        <tr>
                                            <th scope="col">#</th>
                                            <th scope="col">صاحب الشكوى</th>
                                            <th scope="col">الشكوى</th>
                                            <th scope="col">وقت الشكوى</th>
                                            <th scope="col">الاعدادات</th>

                                        </tr>
                                    </thead>

                                        <tbody>
                                            @if($newcomplaints != null)

                                            @foreach ($newcomplaints as $complaint)
                                                <tr>
                                                    <td class="product-name">
                                                        {{ $loop->iteration }}
                                                    </td>
                                                    <td class="product-name">
                                                        <a href="javascript:void(0)">{{ $complaint->teacher->name }}</a>
                                                    </td>
                                                    <td class="product-name">
                                                        <a href="javascript:void(0)" style="text-wrap:wrap">{!! nl2br($complaint->complaint_text) !!}</a>
                                                    </td>
                                                    <td class="product-name">
                                                        <a href="javascript:void(0)">{{ $complaint->created_at }}</a>
                                                    </td>
                                                    <td class="product-subtotal">

                                                            <div class="row">
                                                                <div class="col-12">
                                                                    <a title="رد على الشكوى" href="{{ route('admin.complaints.addreply', ['id'=>$complaint->id]) }}"
                                                                        >
                                                                        إضافة رد
                                                                    </a>
                                                                </div>
                                                            </div>
                                                    </td>
                                                </tr>
                                            @endforeach
                                            @endif
                                        </tbody>

                                </table>
                            </div>
                        </div>

                        <div class="pt-100">
                            <div class="coupon-cart">
                                <div class="row">
                                    <div class="col-lg-6 col-sm-6 offset-lg-3 text-center">
                                        <h2  class="mx-auto">
                                            شكاوى تم الرد عليها
                                        </h2>
                                    </div>
                                </div>
                            </div>
                            <div class="cart-table table-responsive mt-4">
                                <table class="table table-bordered ">
                                    <thead>
                                        <tr>
                                            <th scope="col">#</th>
                                            <th scope="col">صاحب الشكوى</th>
                                            <th scope="col">الشكوى</th>
                                            <th scope="col">الرد</th>
                                            <th scope="col">وقت الرد</th>
                                            <th scope="col">الإعدادات</th>

                                        </tr>
                                    </thead>

                                        <tbody>
                                            @if($replyedcomplaints != null)
                                            @foreach ($replyedcomplaints as $complaint)
                                                <tr>
                                                    <td class="product-name">
                                                        {{ $loop->iteration }}
                                                    </td>
                                                    <td class="product-name">
                                                        <a href="javascript:void(0)">{{ $complaint->teacher->name }}</a>
                                                    </td>
                                                    <td class="product-name">
                                                        <a href="javascript:void(0)" style="text-wrap:wrap">{!! nl2br($complaint->complaint_text) !!}</a>
                                                    </td>
                                                    <td class="product-name">
                                                        <a href="javascript:void(0)">{!! nl2br($complaint->reply) !!}</a>
                                                    </td>
                                                    <td class="product-name">
                                                        <a href="javascript:void(0)">{{ $complaint->replyed_at }}</a>
                                                    </td>

                                                    <td class="product-subtotal">

                                                        <div class="row">
                                                            <div class="col-12">
                                                                <a title="تعديل الرد" href="{{ route('admin.complaints.editreply', ['id'=>$complaint->id]) }}"
                                                                    >
                                                                    تعديل الرد
                                                                </a>
                                                            </div>
                                                        </div>
                                                </td>
                                                </tr>
                                            @endforeach
                                            @endif
                                        </tbody>

                                </table>
                            </div>
                        </div>



                    </div>
                </div>
            </div>
        </div>
    </section>

</div>

@endsection