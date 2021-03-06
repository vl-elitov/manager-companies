@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-8 col-md-offset-2">
                <div class="panel panel-default">
                    <div class="panel-heading">Dashboard <span class="pull-right"><a href="/companies/create"
                                                                                     class="btn btn-success btn-xs">Add company</a></span>
                    </div>
                    <div class="panel-body">
                        <h3>Your Companies</h3>
                        @if(count($companies))
                            <table class="table table-striped">
                                <tr>
                                    <th>Company</th>
                                    <th></th>
                                    <th></th>
                                </tr>
                                @foreach($companies as $company)
                                    <tr>
                                        <td>{{$company->name}}</td>
                                        <td><a class="pull-right btn btn-default"
                                               href="/companies/{{$company->id}}/edit">Edit</a></td>
                                        <td>
                                            {!!Form::open(['action' => ['CompaniesController@destroy', $company->id],'method' => 'DELETE', 'onsubmit' => 'return confirm("Are you sure?")'])!!}
                                            <div class="form-group">
                                                {{Form::submit('Delete',  ['class' => 'btn btn-danger'])}}
                                            </div>
                                            {!! Form::close() !!}
                                        </td>
                                    </tr>
                                @endforeach
                            </table>
                        @endif
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
