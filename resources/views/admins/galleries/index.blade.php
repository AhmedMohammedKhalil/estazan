@extends('admins.layout')
@section('header')
<div class="uni-banner blog-uni-banner">
    <div class="container">
        <div class="uni-banner-text-area">
            <h1>إدارة معرض الصور </h1>
        </div>
    </div>
</div>
@endsection
@section('section')
<div class="shopping-cart ptb-100">
    <div class="container">
        <div class="cart-table-area">
            <div class="cart-header-area">
                <div class="row align-items-center">
                    <div class="col-lg-5 col-md-5 col-sm-4 col-12">
                        <a class="default-button dfb"  href="{{ route('admin.gallaries.create') }}"><span>إضافة صورة</span></a>
                    </div>
                </div>
            </div>
            <div class="table-responsive">
                <table class="table align-middle table-bordered">
                    <thead class="table-light">
                        <tr>
                            <th scope="col">#</th>
                            <th scope="col">الصورة</th>
                            <th scope="col">الأعدادات</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($gallaries as $gallery)
                            <tr>
                                <td>{{ $loop->iteration }}</td>
                                @if($gallery->image)
                                <td><img style="height: 100px" src="{{ asset('assets/images/galleries/'.$gallery->id.'/'.$gallery->image) }}" alt="image"></td>
                                @else
                                <td><img style="height: 100px" src="{{ asset('assets/images/about/about1.jpg') }}" alt="image"></td>
                                @endif
                                <td>
                                    <a title="تعديل"  href="{{ route('admin.gallaries.edit',['gallary_id'=>$gallery->id]) }}" class="edit" style="color:green;font-size:20px">
                                        <i class="fa fa-edit"></i>
                                    </a>
                                    <form style="display: inline-block" action="{{ route('admin.gallaries.delete',['id'=>$gallery->id]) }}" method="post">
                                        @method('delete')
                                        @csrf
                                        <button class="remove" style="background: unset;border:unset" title="حذف" type="submit"><i class="fa fa-trash" style="color:red;font-size:20px"></i></button>
                                    </form>
                                </td>
                            </tr>
                        @endforeach

                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>
@endsection
