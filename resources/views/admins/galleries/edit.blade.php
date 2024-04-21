@extends('admins.layout')

@section('header')
<div class="uni-banner blog-uni-banner">
    <div class="container">
        <div class="uni-banner-text-area">
            <h1>تعديل  صورة المعرض</h1>
        </div>
    </div>
</div>
@endsection

@section('section')
    <div class="mt-30 mb-50">
        @livewire('admin.gallary.edit',['gallary' => $gallary])
    </div>
@endsection
