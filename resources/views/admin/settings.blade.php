@extends('layouts.admin.app')

@section('content')



    <!-- Content Wrapper. Contains page content -->
    <div class="content-wrapper">
        <!-- Content Header (Page header) -->

        {{--       <livewire:posts />--}}
        @livewire('settings')


    </div>
    <!-- /.content-wrapper -->


@endsection
