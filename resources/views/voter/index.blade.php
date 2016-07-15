@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-12">
            <div class="panel panel-default">
                <div class="panel-heading">Dashboard</div>

                <div class="panel-body">

                    <form class="form-horizontal" role="form" id="ajax-search-form">

                      <div class="form-group{{ $errors->has('colony') ? ' has-error' : '' }}">
                          <label for="colony" class="col-md-3 control-label">Colony</label>

                          <div class="col-md-6">
                           <select id="js-colony-change" type="text" class="form-control" name="colony" value="{{ old('colony') }}">
                                    <option value="Sitavihar">सीता विहार</option>
                                    <option value="Shivnagar">शिव नगर</option>
                                    <option value="Ghodifarm">घोडीफार्म</option>    
                                    <option value="Marutinagar">मारुती नगर</option>
                                    <option value="Anandvihar">आनन्द विहार</option>
                                    <option value="Deepnagar नगर">दीप नगर</option>
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
                        </form>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection

