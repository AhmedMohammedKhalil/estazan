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

@extends('admins.layout',['page_name'=> 'جميع الأذونات' ])


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
                                            أذونات لم يتم الرد عليها
                                        </h2>
                                    </div>
                                </div>
                            </div>
                            <div class="cart-table table-responsive mt-4">
                                <table class="table table-bordered ">
                                    <thead>
                                        <tr>
                                            <th scope="col">#</th>
                                            <th scope="col">صاحب الإستئذان</th>
                                            <th scope="col">السبب</th>
                                            <th scope="col">وقت الأستئذان</th>
                                            <th scope="col">الاعدادات</th>

                                        </tr>
                                    </thead>

                                        <tbody>
                                            @if($newpermissions != null)

                                            @foreach ($newpermissions as $permission)
                                                <tr>
                                                    <td class="product-name">
                                                        {{ $loop->iteration }}
                                                    </td>
                                                    <td class="product-name">
                                                        <a href="javascript:void(0)">{{ $permission->teacher->name }}</a>
                                                    </td>
                                                    <td class="product-name">
                                                        <a href="javascript:void(0)" style="text-wrap:wrap">{!! nl2br($permission->reason) !!}</a>
                                                    </td>
                                                    <td class="product-name">
                                                        <a href="javascript:void(0)">{{ $permission->created_at }}</a>
                                                    </td>
                                                    <td class="product-subtotal">

                                                            <div class="row">
                                                                <div class="col-6">
                                                                    <a title="قبول" href="{{ route('admin.permissions.accept', ['id'=>$permission->id]) }}"
                                                                        >
                                                                        <i class="fa-solid fa-check"></i>
                                                                    </a>
                                                                </div>
                                                                <div class="col-6">
                                                                    <a title="رفض" href="{{ route('admin.permissions.reject', ['id'=>$permission->id]) }}"
                                                                        >
                                                                        <i class="fa-solid fa-times"></i>
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
                                            أذونات تم الرد عليها
                                        </h2>
                                    </div>
                                </div>
                            </div>
                            <div class="cart-table table-responsive mt-4">
                                <table class="table table-bordered ">
                                    <thead>
                                        <tr>
                                            <th scope="col">#</th>
                                            <th scope="col">صاحب الإستئذان</th>
                                            <th scope="col">السبب</th>
                                            <th scope="col">وقت الأستئذان</th>
                                            <th scope="col">وقت الرد</th>
                                            <th scope="col">حالة الرد</th>
                                        </tr>
                                    </thead>

                                        <tbody>
                                            @if($replyedpermissions != null)
                                            @foreach ($replyedpermissions as $permission)
                                                <tr>
                                                    <td class="product-name">
                                                        {{ $loop->iteration }}
                                                    </td>
                                                    <td class="product-name">
                                                        <a href="javascript:void(0)">{{ $permission->teacher->name }}</a>
                                                    </td>
                                                    <td class="product-name">
                                                        <a href="javascript:void(0)" style="text-wrap:wrap">{!! nl2br($permission->reason) !!}</a>
                                                    </td>
                                                    <td class="product-name">
                                                        <a href="javascript:void(0)">{{ $permission->created_at }}</a>
                                                    </td>
                                                    <td class="product-name">
                                                        <a href="javascript:void(0)">{{ $permission->replyed_at }}</a>
                                                    </td>
                                                    <td class="product-name">
                                                        <a href="javascript:void(0)">@if($permission->status == "1") تم القبول @else تم الرفض@endif</a>
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
