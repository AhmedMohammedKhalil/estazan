
<div class="row">

    @foreach ($gallaries as $gallary)
    <div class="col-lg-4 col-md-6 col-sm-12">
        <div class="single-shop" style="border-radius:10%;overflow:hidden">
            <div class="shop-img">
                <img style="height: 400px" src="{!! asset('img/gallaries/'.$gallary->id.'/'.$gallary->image) !!}" alt="Image">
            </div>
        </div>
    </div>
    @endforeach

</div>
