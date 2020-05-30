@extends('layouts.default', ['title' => 'Contact'])

@section('content')
<div class="col-md-8 col-md-offset-2 col-sm-10 col-sm-offset-1">
    <h2>Get In Touch</h2>
    <p>If you having trouble with this service, please <a href="mailto:{{ config('laracarte.admin_support_email') }}">ask for help</a></p>

    <form action="{{ route('contact_path') }}" class="form" method="POST" novalidate>
        {{ csrf_field() }}
        <div class="form-group {{ $errors->has('name')? 'has-errors' : '' }}">
            <label for="name" class="control-label">Name</label>
            <input id="name" name="name" type="text" class="form-control" required = "required" value="{{ old('name') }}">
            {!! $errors->first('name', '<span class="help-block">:message</span>') !!}
        </div>
        <div class="form-group {{ $errors->has('email')? 'has-errors' : '' }}">
            <label for="email" class="control-label">Email</label>
            <input id="email" name="email" type="email" class="form-control" required = "required" value="{{ old('email') }}">
            {!! $errors->first('email', '<span class="help-block">:message</span>') !!}
        </div>

        <div class="form-group {{ $errors->has('message')? 'has-errors' : '' }}">
            <label for="message" class="control-label">Message</label>
            <textarea class="form-control" name="message" id="message" cols="10" rows="10"  required = "required">{{ old('message') }}</textarea>
            {!! $errors->first('message', '<span class="help-block">:message</span>') !!}
        </div>

        <div class="form-group">
            <input type="submit" class="btn btn-primary btn-block" value="Submit Enquiry &raquo;">
        </div>
    </form>
</div>
@stop
