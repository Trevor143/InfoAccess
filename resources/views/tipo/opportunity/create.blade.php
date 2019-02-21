@extends('layouts.app')

@section('content')

    <h3>Lets create opportunities</h3>

    <form method="POST" action="{{route('admin.opportunity.store')}}">
        @csrf
        {{--<div class="row">--}}
        {{--<div class="col">--}}
        {{--<input type="text" class="form-control" placeholder="Opportunity Type">--}}
        {{--</div>--}}
        {{--</div>--}}

        {{--<input type="radio" class="" name="Oppo_type" value="Export"> Export<br>--}}
        {{--<input type="radio" name="Oppo_type" value="Local"> Local<br>--}}
        {{--<input type="radio" name="Oppo_type" value="Event"> Event--}}

        <div class="form-group row">
            <label class="col-md-4 col-form-label text-md-right">Opportunity </label>
            <div class="col-md-6">
        <label class="col-md-4 col-form-label text-md-right"><input type="radio" name="Oppo_type" value="Export" checked>Export</label>
        <label class="col-md-4 col-form-label text-md-right"><input type="radio" name="Oppo_type" value="Local" checked>Local</label>
        <label class="col-md-4 col-form-label text-md-right"><input type="radio" name="Oppo_type" value="Event" checked>Event</label>
            </div>
        </div>
        <br>

        <div class="row">
            <div class="col">
                <input type="text" class="form-control" name="Pdt_Required" placeholder="Product Required">
            </div>
            <div class="col">
                <input type="text" class="form-control" name="Importing_Country" value="Uganda" placeholder="Importing country">
            </div>
        </div>
        <br>
        <div class="row">
            <div class="col">
                <input type="number" class="form-control" name="Qty_req" placeholder="Quantity required">
            </div>
            <div class="col">
                <input type="number" class="form-control" name="MinQty_req" placeholder="Minimum quatity by SME">
            </div>
        </div>

        <div class="btn-group-toggle" data-toggle="buttons">
            <label>Product Certifications</label>
            <label class="btn btn-secondary active">
                <input type="checkbox" name="PdtCertification" value="UNBS" checked autocomplete="off"> UNBS
            </label>
            <label class="btn btn-secondary active">
                <input type="checkbox" name="PdtCertification" value="Halaal" checked autocomplete="off"> Halaal
            </label>
            <label class="btn btn-secondary active">
                <input type="checkbox" name="PdtCertification" value="Meat Authority" checked autocomplete="off"> Meat Authority
            </label>
        </div>

        <div class="row">

            <div class="col">
                <input type="text" class="form-control" name="TradeAgree" placeholder="Trade Agreements">
            </div>
        </div>
        <br>
        <input type="hidden" name="Posted_by" value= "{{$user_name}}">
        <div class="form-group">
            <div class="col-sm-offset-2 col-sm-5">
                <input type="submit" value="Save" class="btn btn-primary">
            </div>
        </div>
        <input type="hidden" value="{{Auth::user()->id}}" name="poster_id">
    </form>
@endsection
