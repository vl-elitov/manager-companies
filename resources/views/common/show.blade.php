@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-8 col-md-offset-2">
                <div class="panel panel-default">
                    <div class="panel-heading">{{$company->name}} <a href="/"
                                                                     class="pull-right btn btn-default btn-xs">Go
                            Back</a></div>

                    <div class="panel-body">
                        <ul class="list-group">
                            <li class="list-group-item">Address: {{$company->address}}</li>
                            <li class="list-group-item">Website: <a href="{{$company->website}}"
                                                                    target="_blank">{{$company->website}}</a></li>
                            <li class="list-group-item">Email: {{$company->email}}</li>
                            <li class="list-group-item">Phone: {{$company->phone}}</li>
                        </ul>
                        <hr>
                        <div class="well">
                            {{$company->bio}}
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
