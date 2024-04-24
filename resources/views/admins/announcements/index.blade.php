
@extends('admins.layout',['page_name'=> 'جميع الإعلانات' ])

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
                                    <a href="{{ route('admin.announcements.create') }}" class="default-btn update mx-auto">
                                        اضف إعلان جديد
                                    </a>
                                </div>
                            </div>
                        </div>
                        <div style="padding-top: 50px">

                            <div class="cart-table table-responsive mt-4">
                                <table class="table table-bordered ">
                                    <thead>
                                        <tr>
                                            <th scope="col">#</th>
                                            <th scope="col">الإعلان</th>
                                            <th scope="col">وقت الإعلان</th>
                                            <th scope="col">مرسل إلى</th>
                                            <th scope="col">الإعدادات</th>

                                        </tr>
                                    </thead>

                                        <tbody>
                                            @if($announcements != null)

                                            @foreach ($announcements as $announcement)
                                                <tr>
                                                    <td class="product-name">
                                                        {{ $loop->iteration }}
                                                    </td>
                                                    <td class="product-name">
                                                        <a href="javascript:void(0)" style="text-wrap:wrap">{!! nl2br($announcement->content) !!}</a>
                                                    </td>
                                                    <td class="product-name">
                                                        <a href="javascript:void(0)">{{ $announcement->created_at }}</a>
                                                    </td>
                                                    <td class="product-name">
                                                        <a href="javascript:void(0)">{{ $announcement->teacher->name }}</a><br>
                                                    </td>
                                                    <td class="product-subtotal">
                                                        <div class="row">
                                                            <div class="col-6">
                                                                <a title="تعديل" href="{{ route('admin.announcements.edit', ['id'=>$announcement->id]) }}"
                                                                    >
                                                                    <i class="fa-solid fa-pen-to-square"></i>
                                                                </a>
                                                            </div>
                                                            <div class="col-6">
                                                                <form class="stingform" action="{{route('admin.announcements.delete',['id'=>$announcement->id])}}" method="post">
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
                    </div>
                </div>
            </div>
        </div>
    </section>

</div>

@endsection
