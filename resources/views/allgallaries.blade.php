@foreach ($gallaries as $gallary)
<div class="single-shop" style="border-radius:10%;overflow:hidden">
    <div class="shop-img">
        <img style="height: 400px" src="{!! asset('img/gallaries/'.$gallary->id.'/'.$gallary->image) !!}" alt="Image">
    </div>
</div>
@endforeach





