@extends('layouts.front-base')

@section('title', 'User Register')
@section('content')
    <div class="container-fluid page-header mb-5">
        <div class="d-flex flex-column align-items-center justify-content-center pt-0 pt-lg-5"
             style="min-height: 400px">
            <h4 class="display-4 mb-3 mt-0 mt-lg-5 text-white text-uppercase font-weight-bold">User register</h4>
            <div class="d-inline-flex">
                <p class="m-0 text-white"><a class="text-white" href="">Home</a></p>
                <p class="m-0 text-white px-2">/</p>
                <p class="m-0 text-white">register page</p>
            </div>
        </div>
        <div class="col-md-12">
            @include('auth.register')
        </div>
    </div>






@endsection

