@extends('users-mgmt.base')

@section('action-content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">Update user</div>
                <div class="panel-body">
                    <form class="form-horizontal" role="form" method="POST" action="{{ route('company.update', ['id' => $company->id]) }}">
                        <input type="hidden" name="_method" value="PATCH">
                        <input type="hidden" name="_token" value="{{ csrf_token() }}">


                        <div class="form-group{{ $errors->has('company_name') ? ' has-error' : '' }}">
                            <label for="company_name" class="col-md-4 control-label">Company Name</label>

                            <div class="col-md-6">
                                <input id="company_name" type="text" class="form-control" name="company_name" value="{{ $company->company_name }}" required autofocus>

                                @if ($errors->has('company_name'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('company_name') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>


                        <div class="form-group{{ $errors->has('company_code') ? ' has-error' : '' }}">
                            <label for="company_code" class="col-md-4 control-label"> Company Code</label>

                            <div class="col-md-6">
                                <input disabled="disabled" readonly="readonly" id="company_code" type="text" class="form-control" name="company_code" value="{{ $company->company_code }}" required>

                                @if ($errors->has('company_code'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('company_code') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>




                        <div class="form-group{{ $errors->has('purpose') ? ' has-error' : '' }}">
                            <label for="purpose" class="col-md-4 control-label"> Purpose</label>

                            <div class="col-md-6">
                                <input id="purpose" type="text" class="form-control" name="purpose" value="{{ $company->purpose }}" required>

                                @if ($errors->has('purpose'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('purpose') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>


                        <div class="form-group{{ $errors->has('period') ? ' has-error' : '' }}">
                            <label for="period" class="col-md-4 control-label">Period</label>

                            <div class="col-md-6">
                                <input id="period" type="text" class="form-control" name="period" value="{{ $company->period }}" required>

                                @if ($errors->has('period'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('period') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>


                        <div class="form-group">
                            <div class="col-md-6 col-md-offset-4">
                                <button type="submit" class="btn btn-primary">
                                    Update
                                </button>

                                <a class="btn btn-danger" href="{{ url('system-management/company') }}">Cancel</a>

                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
