@extends('layouts/default')

@section('scripts')
    <script type="text/javascript" src="{{ asset('assets/js/jquery.jscroll.min.js') }}"></script>
    <link rel="stylesheet" href="{{ URL::asset('assets/css/style.css') }}">

    <script type="text/javascript">
        $(document).ready(function() {
            $('.scroll').jscroll({
                autoTrigger: true,
                nextSelector: '.pagination li.active + li a',
                contentSelector: 'div.scroll',
                callback: function() {
                    $('ul.pagination:visible:first').hide();
                }
            });
            $('ul.pagination').hide();
        });
    </script>

    <style type="text/css">
        
        .col-md-12, .row, .scroll .well {

            background-color: white;
            }

        .green{
        color: #66b5a9;}

        p{
        color: black;}
    </style>

@endsection

@section('content')
    <h1>Tópicos</h1>
    <div class="scroll">
        @foreach($subreddit as $sub)
            <div class="row">
                <div class="col-md-12">
                    <div class="well well-sm">
                        <div class="row">
                            <div class="col-xs-12 col-md-12 section-box">
                                <h3>
                                    <a  href="{{ action('SubredditController@show', [$sub->id]) }}">{{ $sub->name }}</a>
                                </h3>
                                <p>{!! $sub->description !!}</p>
                                <div class="row rating-desc">
                                    <div class="col-md-12">
                                        <small class="green"> {{ $sub->created_at->diffForHumans() }}</small> |
                                        <small class="green" >criado por <a href="{{ action('ProfilesController@show', [$sub->user->name]) }}">{{ $sub->user->name }}</a></small>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        @endforeach

    {!! $subreddit->render() !!}
    </div>
@stop