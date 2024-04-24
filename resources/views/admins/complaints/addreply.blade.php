@extends('admins.layout',['page_name'=>'إضافة رد'])

@section('section')
    <livewire:admin.complaint.add-reply :complaint_id="$complaint_id"/>
@endsection
