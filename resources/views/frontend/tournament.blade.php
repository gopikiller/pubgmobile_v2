@extends('frontend.layouts.app')

@section('title', app_name() . ' | '.__('navs.frontend.tournament'))

@section('content')
    <div class="jumbotron jumbotron-fluid" style="background:">
        <div class="container">
            <h1 :class="{'display-4':displayed}">{{__('labels.frontend.tournament.page_title')}}</h1>
            <p class="lead">{{__('labels.frontend.tournament.sub_title')}}</p>
        </div>
    </div>
    <div class="container table-responsive">
        <table class="table table-bordered table-dark table-hover">
            <caption> <h4>{{__('labels.frontend.tournament.tournament_box_title')}}</h4></caption>
            <thead>
                <tr>
                <th scope="col">#</th>
                <th scope="col" class="name">Name</th>
                <th scope="col">Date &amp; Time</th>
                <th scope="col">Registration Fee</th>
                <th scope="col">Prize</th>
                <th scope="col">Entry Code</th>
                <th scope="col">Actions</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                <th scope="row">1</th>
                <td>Pubg mobile-Miramar-Duo-50 teams</td>
                <td>10th july | 3 pm</td>
                <td>₹50</td>
                <td>₹1000</td>
                <td>00001</td>
                <td><button type="button" class="btn btn-sm btn-outline-light">Enter</button></td>
                </tr>
                <tr>
                <th scope="row">2</th>
                <td>Jacob</td>
                <td>Thornton</td>
                <td>@fat</td>
                <td></td>
                <td></td>
                <td></td>
                </tr>
                <tr>
                <th scope="row">3</th>
                <td>Larry</td>
                <td>the Bird</td>
                <td>@twitter</td>
                <td></td>
                <td></td>
                <td></td>
                </tr>
            </tbody>
        </table>
    </div>
@endsection