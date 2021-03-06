@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">Add new CPA Board Record</div>
                <div class="panel-body">
                    <form class="form-horizontal" role="form" method="POST" action="{{ route('cpa-board.store') }}" enctype="multipart/form-data">
                        {{ csrf_field() }}






                        <div class="form-group{{ $errors->has('title') ? ' has-error' : '' }}">
                            <label for="title" class="col-md-4 control-label">Project Title *</label>

                            <div class="col-md-6">
                                <textarea id="title" type="text" class="form-control"name="title"value="{{ old('title') }}"required autofocus></textarea>
                                @if ($errors->has('title'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('title') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>





                        <div class="form-group{{ $errors->has('details') ? ' has-error' : '' }}">
                            <label for="details" class="col-md-4 control-label">Details</label>

                            <div class="col-md-6">
                                <textarea id="details" type="text" class="form-control" name="details" value="{{ old('details') }}"> </textarea>

                                @if ($errors->has('details'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('details') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>




                        <div class="form-group{{ $errors->has('link1') ? ' has-error' : '' }}">
                            <label for="link1" class="col-md-4 control-label">Source</label>

                            <div class="col-md-6">
                                <textarea id="link1" type="text" class="form-control" name="link1" value="{{ old('link1') }}"> </textarea>

                                @if ($errors->has('link1'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('link1') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>




                        <div class="form-group{{ $errors->has('target_details') ? ' has-error' : '' }}">
                            <label for="link2" class="col-md-4 control-label">Comments</label>

                            <div class="col-md-6">
                                <textarea id="link2" type="text" class="form-control" name="link2" value="{{ old('link2') }}"></textarea>
                                @if ($errors->has('link2'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('link2') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>


                        <div class="form-group">
                            <label for="target_details" class="col-md-4 control-label">Upload Documents</label>

                            <div class="col-md-6">
                                <input class="form-control" type="file" name="p_files[]" multiple />

                            </div>
                        </div>


                        <div class="form-group">
                            <div class="col-md-6 col-md-offset-4">
                                <button type="submit" class="btn btn-primary">
                                    Create
                                </button>

                                <a class="btn btn-danger" href="{{ url('/cpa-board') }}">Cancel</a>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
