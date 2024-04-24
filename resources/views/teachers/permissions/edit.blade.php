@extends('teachers.layout',['page_name'=>'تعديل أذن'])
@section('section')
    <livewire:teacher.permission.edit :permission_id='$permission_id' />
@endsection
