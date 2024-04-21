@extends('admins.layout')
@section('header')
<div class="uni-banner blog-uni-banner">
    <div class="container">
        <div class="uni-banner-text-area">
            <h1>جميع الرسائل</h1>
        </div>
    </div>
</div>
@endsection
@section('section')
<div class="shopping-cart ptb-100">
    <div class="container">
        <div class="cart-table-area">
            <div class="table-responsive">
                <table class="table align-middle table-bordered">
                    <thead class="table-light">
                        <tr>
                            <th scope="col">#</th>
                            <th scope="col">الإسم</th>
                            <th scope="col">البريد الألكترونى</th>
                            <th scope="col">المحتوى</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($messages as $message)
                            <tr>
                                <td>{{ $loop->iteration }}</td>
                                <td class="pd-name">{{ $message->name }}</td>
                                <td class="pd-name">{{ $message->email }}</td>
                                <td class="pd-name">{{ $message->message }}</td>
                            </tr>
                        @endforeach

                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>
@endsection
