@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-8 col-md-offset-2">
                <div class="panel panel-default">
                    <div class="panel-heading">Business Companies</div>

                    <div class="panel-body">
                        @if(count($companies))
                            <ul class="list-group">
                                @foreach($companies as $company)
                                    <li class="list-group-item">
                                        <a
                                                href="/companies/{{$company->id}}">{{$company->name}}</a>
                                    </li>
                                @endforeach
                            </ul>
                        @else
                            <p>No Companies Found</p>
                        @endif
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
