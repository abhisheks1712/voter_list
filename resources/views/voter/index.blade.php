@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-12">
            <div class="panel panel-default">
                <div class="panel-heading">Dashboard</div>

                <div class="panel-body">

                    <form>
                      <div class="form-group">
                        <label for="colony">Colony</label>
                        <select onchange="showData(this.value)" name="colony" class="form-control">
                          <option value=""></option>
                          <option value="1">1</option>
                          <option value="2">2</option>
                          <option value="3">3</option>
                          <option value="4">4</option>
                          <option value="5">5</option>
                        </select>
                      </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>

@if (count($voters) > 0)
<div class="container">
    @include('voter.list', ['voters' => $voters])
</div>
@endif
@endsection

