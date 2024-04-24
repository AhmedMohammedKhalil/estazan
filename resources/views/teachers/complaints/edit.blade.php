@extends('teachers.layout',['page_name'=>'تعديل الشكوى'])
@section('section')
    <livewire:teacher.complaint.edit :complaint_id='$complaint_id' />
@endsection
