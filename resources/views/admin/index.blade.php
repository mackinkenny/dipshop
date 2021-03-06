@extends('layouts.admin')

@section('content')

    <div class="container-fluid">
        <div class="row">

            <div class="col-2 px-0 shadow-sm" style="background-image: url('/images/wall5.jpg'); background-position: center;">
                @include('_partials._admin_sidebar')
            </div>

            <div class="col-10 py-3">
                @yield('admin_content')
            </div>

        </div>
    </div>

    @include('_partials._delete_modal')

@endsection