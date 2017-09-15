@title('Dashboard')

@extends('layouts.default')

@section('content')
    <h1>Bem-vindo {{ Auth::user()->name() }}!</h1>
    <hr>

    <div class="row">
        <div class="col-md-4">
            <div class="panel panel-default panel-counter">
                <div class="panel-heading">Tópicos</div>
                <div class="panel-body">{{ Auth::user()->countThreads() }}</div>
            </div>
        </div>
        <div class="col-md-4">
            <div class="panel panel-default panel-counter">
                <div class="panel-heading">Respostas</div>
                <div class="panel-body">{{ Auth::user()->countReplies() }}</div>
            </div>
        </div>
        <div class="col-md-4">
            <div class="panel panel-default panel-counter">
                <div class="panel-heading">Soluções</div>
                <div class="panel-body">{{ Auth::user()->countSolutions() }}</div>
            </div>
        </div>
    </div>


    @include('users._latest_content', ['user' => Auth::user()])
@endsection
