@section('site_title', formatTitle([__(Str::ucfirst(mb_strtolower($exception->getMessage()))), config('settings.title')]))

@extends('layouts.app')

@section('content')
    <div class="bg-base-1 d-flex align-items-center flex-fill">
        <div class="container py-6">
            <div class="row h-100 justify-content-center align-items-center py-3">
                <div class="col-lg-6">
                    <h1 class="h1 mb-3  text-center font-weight-black">{{ $exception->getCode() }}</h1>
                    <p class="mb-0 text-center text-muted">{{ __(Str::ucfirst(mb_strtolower($exception->getMessage()))) }}.</p>

                    @if(url()->previous() != url()->current())
                        <div class="text-center mt-5">
                            <a href="{{ url()->previous() }}" class="btn btn-primary">{{ __('Go back') }}</a>
                        </div>
                    @endif
                </div>
            </div>
        </div>
    </div>
@endsection

@include('shared.sidebars.user')
