@extends('layouts.app')

@section('content')

    <div class="container">
        <div class="row justify-content-center">

            <h3>Details of job and express interest
            </h3>
            <br>
            <br>
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

                <div class="col">
                    <a href="{{route('sme.response.store')}}"
                       class="btn btn-primary mb-2">Express Interest
                    </a>
                </div>

        </div>
    </div>
@endsection
