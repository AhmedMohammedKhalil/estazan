@extends('admins.layout',['page_name' => 'تعديل صورة المعرض'])

@section('section')
        @livewire('admin.gallary.edit',['gallary' => $gallary])
@endsection
