@extends('layouts.event.app')

@section('content')


    <!-- Content Wrapper. Contains page content -->
    <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        {{--<livewire:dashboard />--}}
        @livewire('view-events', ['event' => $event])

    </div>
    <!-- /.content-wrapper -->


@endsection
