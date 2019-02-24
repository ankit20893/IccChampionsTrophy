@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Dashboard</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    You are logged in!
                </div>
            </div>
        </div>
    </div>


    <div class="container">

        <!-- Nav tabs -->
        <ul class="nav nav-tabs" role="tablist">
            <li class="active">
                <a href="#home" role="tab" data-toggle="tab">
                    <icon class="fa fa-home"></icon> Summary
                </a>
            </li>
            &nbsp;
            <li><a href="#profile" role="tab" data-toggle="tab">
                    <i class="fa fa-user"></i> Results
                </a>
            </li>
            &nbsp;
            <li>
                <a href="#messages" role="tab" data-toggle="tab">
                    <i class="fa fa-envelope"></i> Fixtures
                </a>
            </li>
            &nbsp;
            <li>
                <a href="#settings" role="tab" data-toggle="tab">
                    <i class="fa fa-cog"></i> Standings
                </a>
            </li>
            &nbsp;
            <li>
                <a href="#teams" role="tab" data-toggle="tab">
                    <i class="fa fa-cog"></i> Teams
                </a>
            </li>
            &nbsp;
            <li>
                <a href="#archive" role="tab" data-toggle="tab">
                    <i class="fa fa-cog"></i> Archive
                </a>
            </li>
        </ul>

        <!-- Tab panes -->
        <div class="tab-content">
            <div class="tab-pane fade active in" id="home">
                <h2>Home Content Goes Here</h2>
                <img src="http://lorempixel.com/400/400/cats/1" alt="Cats"/>
            </div>
            <div class="tab-pane fade" id="profile">
                <h2>Profile Content Goes Here</h2>
                <img src="http://lorempixel.com/400/400/cats/2" alt="Cats"/>
            </div>
            <div class="tab-pane fade" id="messages">
                <h2>Messages Content Goes Here</h2>
                <img src="http://lorempixel.com/400/400/cats/3" alt="Cats"/>
            </div>
            <div class="tab-pane fade" id="settings">
                <table class="table table-striped" id="tableA">
                    <thead>
                    <tr>
                        <th>ID</th>
                        <th>Group A</th>
                        <th>MP</th>
                        <th>W</th>
                        <th>L</th>
                        <th>N/L</th>
                        <th>R</th>
                        <th>NRR</th>
                        <th>Pts</th>
                        <th>From</th>
                    </tr>
                    </thead>
                    <tbody>
                    @foreach($teamA as $team)
                        <tr>
                            <td><input type="checkbox" name="teamA" value="{{ $team->id }}">{{ $team->id }}</td>
                            <td><img height="30" width="30" src="{{ asset('storage/'.$team->flag) }}">{{ $team->name }}</td>
                            <td>{{ $team->id }}</td>
                            <td>{{ $team->id }}</td>
                            <td>{{ $team->id }}</td>
                            <td>{{ $team->id }}</td>
                            <td>{{ $team->id }}</td>
                            <td>{{ $team->id }}</td>
                            <td>{{ $team->id }}</td>
                            <td>{{ $team->id }}</td>
                        </tr>
                    @endforeach
                    </tbody>
                </table>
                <table class="table table-striped" id="tableB">
                    <thead>
                    <tr>
                        <th>ID</th>
                        <th>Group B</th>
                        <th>MP</th>
                        <th>W</th>
                        <th>L</th>
                        <th>N/L</th>
                        <th>R</th>
                        <th>NRR</th>
                        <th>Pts</th>
                        <th>From</th>
                    </tr>
                    </thead>
                    <tbody>
                    @foreach($teamB as $team)
                        <tr>
                            <td><input type="checkbox" name="teamB" value="{{ $team->id }}">{{ $team->id }}</td>
                            <td><img height="30" width="30" src="{{ asset('storage/'.$team->flag) }}">{{ $team->name }}</td>
                            <td>{{ $team->id }}</td>
                            <td>{{ $team->id }}</td>
                            <td>{{ $team->id }}</td>
                            <td>{{ $team->id }}</td>
                            <td>{{ $team->id }}</td>
                            <td>{{ $team->id }}</td>
                            <td>{{ $team->id }}</td>
                            <td>{{ $team->id }}</td>
                        </tr>
                    @endforeach
                    </tbody>
                </table>

                <button type="submit" style="display: none" id="start_match">Start</button>

            </div>
            <div class="tab-pane fade active show" id="teams">
                <table class="table table-striped">
                    <thead>
                    <tr>
                        <th>ID</th>
                        <th>Flag</th>
                        <th>Name</th>
                    </tr>
                    </thead>
                    <tbody>
                    @foreach($teams as $team)
                    <tr>
                        <td>{{ $team->id }}</td>
                        <td><img height="30" width="30" src="{{ asset('storage/'.$team->flag) }}"></td>
                        <td>{{ $team->name }}</td>
                    </tr>
                    @endforeach
                    </tbody>
                </table>
            </div>
            <div class="tab-pane fade" id="archive">
                <h2>Settings Content Goes Here</h2>
                <img src="http://lorempixel.com/400/400/cats/4" alt="Cats"/>
            </div>
        </div>

    </div>
</div>
@endsection
