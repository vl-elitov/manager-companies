@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-8 col-md-offset-2">
                <div class="panel panel-default">
                    <div class="panel-heading">Create company <a href="/dashboard" class="pull-right btn btn-default btn-xs">Go Back</a></div>

                    <div class="panel-body">
                        {!!Form::open(['action' => 'CompaniesController@store','method' => 'POST'])!!}
                        <div class="form-group">
                            {{Form::text('name','',['placeholder' => 'Company Name'])}}
                        </div>
                        <div class="form-group">
                            {{Form::text('website','',['placeholder' => 'Company Website'])}}
                        </div>
                        <div class="form-group">
                            {{Form::text('email','',['placeholder' => 'Contact Email'])}}
                        </div>
                        <div class="form-group">
                            {{Form::text('phone','',['placeholder' => 'Contact Phone'])}}
                        </div>
                        <div class="form-group">
                            {{Form::text('address','',['placeholder' => 'Business Address'])}}
                        </div>
                        <div class="form-group">
                            {{Form::textarea('bio','',['placeholder' => 'About This Business'])}}
                        </div>
                        <div class="form-group">
                            {{Form::submit('submit')}}
                        </div>
                        {!! Form::close() !!}
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
