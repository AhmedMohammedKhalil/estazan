@extends('admins.layout',['page_name' => 'إدارة معرض الصور'])


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
                                    <a href="{{ route('admin.gallaries.create') }}" class="default-btn update mx-auto">
                                        اضف صورة جديد
                                    </a>
                                </div>
                            </div>
                        </div>
                        <div class="cart-table mt-4 table-responsive">
                            <table class="table table-bordered ">
                                <thead>
                                    <tr>
                                        <th scope="col">الصورة</th>
                                        <th scope="col">الاعدادات</th>

                                    </tr>
                                </thead>
                                @if (count($gallaries) > 0)
                                    <tbody>
                                        @foreach ($gallaries as $gallary)
                                            <tr>
                                                <td class="product-name">
                                                    <a href="javascript:void(0)">
                                                        <img style="width:50px;height:50px" src="{{asset('img/gallaries/'.$gallary->id.'/'.$gallary->image)}}" alt="item">
                                                    </a>
                                                </td>
                                                <td class="product-subtotal">
                                                    <a title="تعديل" href="{{ route('admin.gallaries.edit', ['gallary_id'=>$gallary->id]) }}"
                                                        >
                                                        <i class="fa-solid fa-pen-to-square"></i>
                                                    </a>
                                                    <form style="display: inline-block" action="{{ route('admin.gallaries.delete',['id'=>$gallary->id]) }}" method="post">
                                                        @method('delete')
                                                        @csrf
                                                        <button title="حذف" type="submit" style="background-color:unset"><i class="fa fa-trash" style="margin-right: 10px;"></i></button>
                                                    </form>
                                                </td>
                                            </tr>
                                        @endforeach
                                    </tbody>
                                @endif
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

</div>


@endsection
