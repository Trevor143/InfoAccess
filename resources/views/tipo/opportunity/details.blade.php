@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">Product Required -> {{$opport->Pdt_Required}}</div>
                </div>
                <div class="card-body">
                    <div class="row">
                        <div class="col">
                    <label>Opportunity Type</label><br>
                            <label>{{$opport->Oppo_type}}</label>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col">
                            <label>Importing Country</label><br>
                            <label>{{$opport->Importing_Country}}</label>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col">
                            <label>Minimum Quantity Required</label><br>
                            <label>{{$opport->MinQty_req}}</label>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col">
                            <label>Quantity</label><br>
                            <label>{{$opport->Qty_req}}</label>
                        </div>
                    </div>

                    <div>
                        <button class="btn btn-success">Express Interest</button>
                    </div>

                </div>


            </div>
        </div>
    </div>


@endsection
