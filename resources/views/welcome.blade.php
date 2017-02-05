@extends('layouts.app')

@section('content')

<div class="container">

    <div class="row">

        <div class="col-md-10 col-md-offset-1">

            <div class="panel panel-success">

                <div class="panel-heading"> My Heading </div>

                @if(Auth::check())
                    <table class="table">
                        <tr>
                            <th>
                                Character
                            </th>
                            <th>
                                Real name
                            </th>
                        </tr>
                        @foreach($characters as $key => $value)
                        <tr>
                            <td>{{ $key }}</td>
                            <td>{{ $value }}</td>
                        </tr>
                        @endforeach
                    </table>
                @endif

            </div>

            @if(Auth::guest())
                <a href="/login" class="btn btn-info">You nedd to login to see this content</a>
            @endif

        </div>

    </div>

</div>

@endsection('content')
