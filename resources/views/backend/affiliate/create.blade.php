@extends('layouts.backend.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">{{ __('Add new Affiliate') }}</div>

                    <div class="card-body">
                        @livewire('affiliates-form')
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
