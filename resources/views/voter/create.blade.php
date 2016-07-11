@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-10 col-md-offset-1">
            <div class="panel panel-default">
                <div class="panel-heading">Add a new voter</div>
                <div class="panel-body">
                    <form class="form-horizontal" role="form" method="POST" action="{{ url('/voter') }}">
                        {{ csrf_field() }}

                        <div class="form-group{{ $errors->has('colony') ? ' has-error' : '' }}">
                            <label for="name" class="col-md-4 control-label">Colony</label>

                            <div class="col-md-6">
                                <select id="name" type="text" class="form-control" name="colony" value="{{ old('colony') }}">
                                    <option>Sitavihar</option>
                                    <option>Shivnagar</option>
                                    <option>Ghodifarm</option>    
                                    <option>Marutinagar</option>
                                    <option>Anandvihar</option>
                                    <option>Deepnagar</option>
                                    <option>Greentown</option>    
                                    <option>Dwarkapuri</option>
                                </select>

                                @if ($errors->has('colony'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('colony') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group{{ $errors->has('name') ? ' has-error' : '' }}">
                            <label for="name" class="col-md-4 control-label">Name</label>

                            <div class="col-md-6">
                                <input id="name" type="text" class="form-control" name="name" value="{{ old('name') }}">

                                @if ($errors->has('name'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('name') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group{{ $errors->has('fathers_name') ? ' has-error' : '' }}">
                            <label for="name" class="col-md-4 control-label">Father's Name</label>

                            <div class="col-md-6">
                                <input id="name" type="text" class="form-control" name="fathers_name" value="{{ old('fathers_name') }}">

                                @if ($errors->has('fathers_name'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('fathers_name') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>
                        <div class="form-group{{ $errors->has('voter_number') ? ' has-error' : '' }}">
                            <label for="name" class="col-md-4 control-label">Voter List Number</label>

                            <div class="col-md-6">
                                <input id="name" type="text" class="form-control" name="voter_number" value="{{ old('voter_number') }}">

                                @if ($errors->has('voter_number'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('voter_number') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group{{ $errors->has('epic_number') ? ' has-error' : '' }}">
                            <label for="name" class="col-md-4 control-label">Epic Number</label>

                            <div class="col-md-6">
                                <input id="name" type="text" class="form-control" name="epic_number" value="{{ old('epic_number') }}">

                                @if ($errors->has('epic_number'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('epic_number') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group{{ $errors->has('mobile') ? ' has-error' : '' }}">
                            <label for="name" class="col-md-4 control-label">Mobile No.</label>

                            <div class="col-md-6">
                                <input id="name" type="text" class="form-control" name="mobile" value="{{ old('mobile') }}">

                                @if ($errors->has('mobile'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('mobile') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="col-md-6 col-md-offset-4">
                                <button type="submit" class="btn btn-primary">
                                    <i class="fa fa-btn fa-user"></i> Add
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
