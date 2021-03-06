@extends('layouts.app')

@section('title', '| Create Permission')

@section('content')
<div class="content">
  <div class="animated fadeIn card">
  <div class='col-lg-4 col-lg-offset-4'>

    <h1><i class='fa fa-key'></i> Add Permission</h1>
    <br>

    {{ Form::open(array('url' => 'permissions')) }}

    <div class="form-group">
        {{ Form::label('name', 'Name') }}
        {{ Form::text('name', '', array('class' => 'form-control')) }}
    </div><br>
    
    {{ Form::submit('Add', array('class' => 'btn btn-primary')) }}

    {{ Form::close() }}

  </div>
 </div>
</div>
<style>
.content {
    padding:25px;
}
</style>
@endsection