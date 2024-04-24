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

@extends('teachers.layout',['page_name'=> 'جميع الأذونات' ])


@section('section')
<div class="instructor-content">

    <section class="cart-area">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 col-md-12">
                    <div class="cart-wraps">
                        <div class="coupon-cart">
                            <div class="row">
                                <div class="col-lg-4 col-sm-5 offset-lg-4 text-center">
                                    <a href="{{ route('teacher.permissions.create') }}" class="default-btn update mx-auto">
                                        اضف إذن جديد
                                    </a>
                                </div>
                            </div>
                        </div>


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
                                                        <a href="javascript:void(0)" style="text-wrap:wrap">{!! nl2br($permission->reason) !!}</a>
                                                    </td>
                                                    <td class="product-name">
                                                        <a href="javascript:void(0)">{{ $permission->created_at }}</a>
                                                    </td>
                                                    <td class="product-subtotal">

                                                            <div class="row">
                                                                <div class="col-6">
                                                                    <a title="تعديل" href="{{ route('teacher.permissions.edit', ['id'=>$permission->id]) }}"
                                                                        >
                                                                        <i class="fa-solid fa-pen-to-square"></i>
                                                                    </a>
                                                                </div>
                                                                <div class="col-6">
                                                                    <form class="stingform" action="{{route('teacher.permissions.delete',['id'=>$permission->id])}}" method="post">
                                                                        @csrf
                                                                        @method('delete')
                                                                        <button class="sting" type="submit" title="حذف" style="float:unset;font-size:20px;background:unset">
                                                                            <i class='bx bx-trash'></i>
                                                                        </button>
                                                                    </form>
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
