@extends('layouts.app')

@section('content')

<div class="container">

    <div class="row">

        <div class="col-md-12">

            <div class="panel panel-success">

                <div class="panel-heading">Последние записи</div>

                    <table class="table">
                        @foreach($articles as $key => $article)
                        <tr>
                            <td>
                                <h3 class="text-center">{{ $article->topic }}</h3>
                                {{ $article->text }}
                                <button type="button" class="btn btn-default">Читать дальше</button>
                            </td>
                        </tr>
                        <tr>
                            <td>
                        </tr>
                        @endforeach
                    </table>

            </div>

        </div>

    </div>

</div>

@endsection('content')
