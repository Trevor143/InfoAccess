@extends('layouts.app')

@section('content')

<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Product Required -> {{$opport->Pdt_Required}}</div>
            </div>
            <div class="card-body">
        <form method="post" action="{{route('sme.response.store')}}">
            @csrf
            <fieldset disabled>
            <div class="form-row">
                <div class="col">
                    <label>Product Required</label>
                    <input type="text" name="name" class="form-control" value="{{$opport->Pdt_Required}}">
                </div>
                <div class="col">
                    <label>Importing country</label>
                    <input type="text" class="form-control" value="{{$opport->Importing_Country}}">
                </div>
            </div>

                <br>

            <div class="form-row">
                <div class="col">
                    <label>Product Certification</label>
                    <input type="text" class="form-control" value="{{$opport->PdtCertification}}">
                </div>
                <div class="col">
                    <label>Trade Agreement</label>
                    <input type="text" class="form-control" value="{{$opport->TradeAgree}}">
                </div>
            </div>

                <br>

            <div class="form-row">
                <div class="col">
                    <label>Minimum Quantity</label>
                    <input type="text" class="form-control" value="{{$opport->MinQty_req}}">
                </div>
                <div class="col">
                    <label>Quantity Required</label>
                    <input type="text" class="form-control" value="{{$opport->Qty_req}}">
                </div>
            </div>
            </fieldset>
            <br>
            <input type="hidden" value="{{$opport->id}}" name="ref_id">
            <input type="hidden" value="{{Auth()->user()->id}} " name="org_id">
            <div class="col">
                {{--@if($res->ref_id == $opport->id && $responseChecker->org_id == Auth::user()->id)--}}
                    {{--<label>You already expressed interest</label>--}}
                {{--@else--}}
                <input class="btn btn-success" type="submit" value="Express Interest">

                {{--@endif--}}
            </div>

        </form>
            </div>

            @foreach($responses as $response)
                {{$response->opportunity_id}}
                {{--@empty--}}
                {{--No responses as yet--}}
            @endforeach
        </div>
</div>
@endsection
