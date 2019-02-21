@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <a class="btn btn-primary" href="{{route('admin.opportunity.create')}}">Opportunities</a>
            <br>
            <div class="col-md-8">
                <div class="card">


    <table class="table">
        <tr>
            <th>Reference Number</th>
            <th>Opportunity Type</th>
            <th>Posted By</th>
            <th>Importing Country</th>
            <th>More</th>
        </tr>
        @forelse($opports as $opport)
            <tr>
                <td>{{$opport->id}}</td>
                <td>{{$opport->Oppo_type}}</td>
                <td>{{$opport->Posted_by}}</td>
                <td>{{$opport->Importing_Country}}</td>
                <td><a href="#" class="btn btn-sm btn-info">Details</a></td>

            </tr>
            @empty
        <tr>
            <td colspan="2"> No Opportunities available</td>
        </tr>
            @endforelse
    </table>
                    {{$opports->links()}}
                </div>
            </div>
        </div>
    </div>

@endsection
