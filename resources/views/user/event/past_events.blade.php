@extends('layouts.event.app')

@section('content')


    <!-- Content Wrapper. Contains page content -->
    <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        {{--<livewire:dashboard />--}}
        @livewire('user-past-events')

    </div>
    <!-- /.content-wrapper -->


@endsection
