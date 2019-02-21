@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">Waiting for Approval</div>

                    @if(Auth::user()->deactivated_at == NULL)
                    <div class="card-body">
                        Your account is waiting for our administrator approval.
                        <br />
                        Please check back later.
                    </div>
                        @else
                        <div class="card-body">
                            Your account has been deactivated. Kindly consult the administrator for further assistance.
                            <br />
                </div>
                        @endif
            </div>
        </div>
    </div>
@endsection
