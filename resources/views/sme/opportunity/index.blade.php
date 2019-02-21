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
                            <th>Posted By</th>
                            <th>Importing Country</th>
                            <th>More</th>
                            <th></th>
                        </tr>
                        @forelse($opports as $opport)
                            <tr>
                                <td>{{$opport->id}}</td>
                                <td>{{$opport->Oppo_type}}</td>
                                <td>{{$opport->user_id}}</td>
                                <td>{{$opport->Importing_Country}}</td>
                                <td><a href="{{route('sme.opportunity.show',$opport->id)}}" class="btn btn-sm btn-info">Details</a></td>
{{--                                <td><a href="{{route('sme.response.show', $opport->id)}}" class="btn btn-sm btn-success">Express Interest</a></td>--}}
                            </tr>
                        @empty
                            <tr>
                                <td colspan="2"> No Opportunities available</td>
                            </tr>
                            $opport = Opportunity::find($opport_id);

                            $opport->save();

                            return view('sme.opportunity.index');

                        @endforelse
                    </table>

                    {{$opports->links()}}
                </div>
            </div>
        </div>
    </div>

@endsection
