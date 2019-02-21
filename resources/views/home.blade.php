@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                {{--Six Rivers Organization--}}
                @if(auth()->user()->isAdmin == 0)
                    <div class="card-header">Dashboard - Admin</div>
                                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                        @if (session('errors'))
                            <div class="alert alert-danger" role="alert">
                                {{ session('errors')->first('errors') }}
                            </div>
                        @endif

                        <a href="{{route('admin.opportunity.index')}}"><input type="submit" value="Go to Opportunity" class="btn btn-primary"></a>
                        <a href="{{route('admin.approval.index')}}"><input type="submit" value="Go to Approvals" class="btn btn-primary"></a>

                        {{--tipo--}}
                        @elseif(auth()->user()->isAdmin == 1)
                            <div class="card-header">Dashboard - TIPO</div>
                            <div class="card-body">
                                @if (session('status'))
                                    <div class="alert alert-success" role="alert">
                                        {{ session('status') }}
                                    </div>
                                @endif

                                @if (session('errors'))
                                    <div class="alert alert-danger" role="alert">
                                        {{ session('errors')->first('errors') }}
                                    </div>
                                @endif

                            <a href="{{route('tipo.opportunity.index')}}"><input type="submit" value="Create Opportunity" class="btn btn-primary"></a>
                            {{--<a href="{{route('admin.approval.index')}}"><input type="submit" value="Check Responses" class="btn btn-primary"></a>--}}
                        @else
                            <div class="card-header">Dashboard - SME</div>
                            <div class="card-body">
                                @if (session('status'))
                                    <div class="alert alert-success" role="alert">
                                        {{ session('status') }}
                                    </div>
                                @endif

                                @if (session('errors'))
                                    <div class="alert alert-danger" role="alert">
                                        {{ session('errors')->first('errors') }}
                                    </div>
                                @endif
                                <a href="{{route('sme.opportunity.index')}}"><input type="submit" value="Check for Opportunity" class="btn btn-primary"></a>
                                {{--<a href="{{route('sme.approval.index')}}"><input type="submit" value="Check Responses" class="btn btn-primary"></a>--}}
                        @endif
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
