
@extends('teachers.layout',['page_name'=> 'جميع الإعلانات' ])

@section('section')
<div class="instructor-content">

    <section class="cart-area">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 col-md-12">
                    <div class="cart-wraps">

                        <div style="padding-top: 50px">

                            <div class="cart-table table-responsive mt-4">
                                <table class="table table-bordered ">
                                    <thead>
                                        <tr>
                                            <th scope="col">#</th>
                                            <th scope="col">الإعلان</th>
                                            <th scope="col">وقت الإعلان</th>
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
