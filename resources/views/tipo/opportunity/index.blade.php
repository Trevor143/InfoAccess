@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            {{--<a class="btn btn-primary" href="#">Opportunities</a>--}}
            <br>
            <div class="col-md-11">
                <div class="card">


                    <table class="table">
                        <tr>
                            <th>Reference Number</th>
                            <th>Opportunity Type</th>
                            <th>Importing Country</th>
                            <th>Posted On</th>
                            <th>More</th>
                            <th></th>
                        </tr>
                        @forelse($opports as $opport)
                            <tr>
                                <td>{{$opport->id}}</td>
                                <td>{{$opport->Oppo_type}}</td>
                                <td>{{$opport->Importing_Country}}</td>
                                <td>{{$opport->created_at->diffForHumans()}}</td>
                                <td><a href="{{route('tipo.opportunity.show',$opport->id)}}" class="btn btn-sm btn-info">Details</a></td>
                                {{--<td><a href="#" class="btn btn-sm btn-success">Express Interest</a></td>--}}
                            </tr>
                        @empty
                            <tr>
                                <td colspan="2"> No Opportunities available</td>
                            </tr>
                        @endforelse
                    </table>
                </div>
            </div>
        </div>
    </div>

@endsection
