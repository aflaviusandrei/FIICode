@extends('app')

@section('content')
    <section id="content">
        <div class="ui container">
            <div class="head"><i class="icon code"></i> {{ $title }} <div class="green"></div><div class="red"></div></div>
            <div class="ui segment">
                {{ $content }}
            </div>
            <div class="ui container"></div>
        </div>
    </section>
@endsection