@extends('admins.layout',['page_name'=>'تعديل الرد'])

@section('section')
    <livewire:admin.complaint.edit-reply :complaint_id="$complaint_id"/>
@endsection
