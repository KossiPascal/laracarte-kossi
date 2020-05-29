@extends('layouts.default')

@section('content')
<div class="container">
    <h2>What is Laracarte?</h2>
    <p>Laracarte is a clone app of <a href="https://laramap.com" target="_blank">Laramap.com</a></p>

    <div class="row">
        <div class="col-md-6">
            <p class="alert alert-warning">
                <strong>
                    <i class="fa fa-exclamation-triangle" aria-hidden="true"></i> This app has been built by <a
                        href="https://twitter/TSOLEGNAGBO">@kossi</a>
                    for learning
                    purposes.
                </strong>
            </p>
        </div>
    </div>
    <p>Feel free to help to improve the <a href="#">cource code</a>.</p>

    <hr>

    <h2>What is Laramap?</h2>
    <p>Laramap is the website by which Laracarte was inpired :).</p>
    <p>More information <a href="https://laramap.com/p/about">Clic here</a>.</p>

    <hr>

    <h2>Which tools and services are used in Laracarte?</h2>
    <p>Basically it's built on Laravel &amp; Bootstrap. But there's a bunch of service used for email and other
        sections.</p>

    <ol>
        <li>Laravel</li>
        <li>Bootstrap</li>
        <li>Amazon S3</li>
        <li>Mandrill</li>
        <li>Google Maps</li>
        <li>Gravatar</li>
        <li>Antony Martin's Geolocation Package</li>
        <li>Michel Fortin's Mardown Parser Package</li>
        <li>Heroku</li>
    </ol>

</div>
@stop
