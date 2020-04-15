@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">@lang('auth.verify.email_address')</div>

                <div class="card-body">
                    @if (session('resent'))
                        <div class="alert alert-success" role="alert">
                            @lang('auth.verify.link_sent')
                        </div>
                    @endif

                    @lang('auth.verify.check_email')
                    @lang('auth.verify.not_recived_case')
                    <form class="d-inline" method="POST" action="{{ route('verification.resend') }}">
                        @csrf
                        <button type="submit" class="btn btn-link p-0 m-0 align-baseline">@lang('auth.verify.click_here')</button>.
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
