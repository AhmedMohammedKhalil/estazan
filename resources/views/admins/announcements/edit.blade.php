@extends('admins.layout',['page_name'=>'تعديل إعلان'])

@section('section')
    <livewire:admin.announcement.edit  :announcement_id="$announcement_id"/>
@endsection
