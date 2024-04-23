@extends('admins.layout',['page_name'=> 'جميع الرسائل' ])


@section('section')
<div class="instructor-content">

    <section class="cart-area">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 col-md-12">
                    <div class="cart-wraps">
                        <div class="cart-table mt-4 table-responsive">
                            <table class="table table-bordered ">
                                <thead>
                                    <tr>
                                        <th scope="col">#</th>
                                        <th scope="col">الإسم</th>
                                        <th scope="col">البريد الإلكترونى</th>
                                        <th scope="col">الرسالة</th>
                                    </tr>
                                </thead>
                                @if (count($messages) > 0)
                                    <tbody>
                                        @foreach ($messages as $m)
                                            <tr>
                                                <td class="product-name">
                                                    {{ $loop->iteration }}
                                                </td>
                                                <td class="product-name">
                                                    <a href="javascript:void(0)">{{ $m->name }}</a>
                                                </td>
                                                <td class="product-name">
                                                    <a href="javascript:void(0)">{{ $m->email }}</a>
                                                </td>
                                                <td class="product-name">
                                                    <a href="javascript:void(0)" style="text-wrap:wrap">{!! nl2br($m->message) !!}</a>
                                                </td>
                                            </tr>
                                        @endforeach
                                    </tbody>

                            </table>
                            @endif
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

</div>

@endsection
