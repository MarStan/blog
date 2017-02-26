@extends('layouts.app')

@section('content')

<div class="container">

    <div class="row">

        <div class="col-md-12">

            <div class="panel panel-success">

                <div class="panel-heading">Последние записи</div>

                @if(Auth::check())
                    Create Article
                @endif

            </div>

            @if(Auth::guest())
                <a href="/login" class="btn btn-info">You nedd to login to see this content</a>
            @endif

        </div>

    </div>

</div>

@endsection('content')
