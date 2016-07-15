@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-12">
            <div class="panel panel-default">
                <div class="panel-heading">Search</div>

                <div class="panel-body">

                    <form class="form-horizontal" role="form" id="ajax-search-form">

                      {{ csrf_field() }}

                      <div class="form-group{{ $errors->has('colony') ? ' has-error' : '' }}">
                          <label for="colony" class="col-md-3 control-label">Colony</label>

                          <div class="col-md-6">
                           <select id="js-colony-change" type="text" class="form-control" name="colony" value="{{ old('colony') }}">
                                    <option value="Sitavihar">सीता विहार</option>
                                    <option value="Shivnagar">शिव नगर</option>
                                    <option value="Ghodifarm">घोडीफार्म</option>    
                                    <option value="Marutinagar">मारुती नगर</option>
                                    <option value="Anandvihar">आनन्द विहार</option>
                                    <option value="Deepnagar">दीप नगर</option>
                                    <option value="Greentown">ग्रीनटाउन</option>    
                                    <option value="Dwarkapuri">द्वारकापुरी</option>
                                </select>

                                @if ($errors->has('colony'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('colony') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group{{ $errors->has('serial_number') ? ' has-error' : '' }}">
                          <label for="serial" class="col-md-3 control-label">Serial Number</label>

                          <div class="col-md-6">
                           
                            <input type="text" name="serial" class="form-control" id="js-serial-change">
                                @if ($errors->has('serial'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('serial') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group{{ $errors->has('epic') ? ' has-error' : '' }}">
                          <label for="epic" class="col-md-3 control-label">Epic Number</label>

                          <div class="col-md-6">
                           
                            <input type="text" name="epic" class="form-control" id="js-epic-change">
                                @if ($errors->has('epic'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('epic') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group{{ $errors->has('mobile') ? ' has-error' : '' }}">
                          <label for="mobile" class="col-md-3 control-label">Mobile No.</label>

                          <div class="col-md-6">
                           
                            <input type="text" name="mobile" class="form-control" id="js-mobile-change">
                                @if ($errors->has('mobile'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('mobile') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>
                        </form>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection

