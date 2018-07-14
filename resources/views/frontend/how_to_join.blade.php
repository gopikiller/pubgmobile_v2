@extends('frontend.layouts.app')

@section('title', app_name() . ' | '.__('navs.frontend.how_to_join'))

@section('content')
    <div class="jumbotron jumbotron-fluid" style="background:">
        <div class="container">
            <h1 :class="{'display-4':displayed}">{{__('labels.frontend.how_to_join.page_title')}}</h1>
            <p class="lead">{{__('labels.frontend.how_to_join.sub_title')}}</p>
        </div>
    </div>
    <div class="container py-4 pl-4">
        <div class="row">
            <div class="col-md-12">
                <h4>Pubg mobile-Erangel- Duo 50 teams:</h4>
                <ul>
                    <li>
                        Type: [ Pubg mobile- Erangel- Duo 50 teams/0002/ &lt;team name&gt; /&lt;player1/player2&gt; /&lt;watsapp number&gt; ]
                        <p class="break-word"><strong> (Example: Pubg mobile- Erangal- Duo 50 teams/0002/skyfall/player1/player2/1234567890)</strong></p>
                    </li>
                    <li>Tez Rs:50 @ 7005015171</li>
                    <li>Take a Screenshot of the payment.</li>
                    <li>Send it to 7085715385 (Via-watsapp only)</li>
                    <li>A confirmation massage will be send to your watsapp number</li>
                    <li>Match Room ID And Password Will be Sent To Participants Before 30 Mins Of The Match Begins</li>
                </ul>
                <h5>HOW TO JOIN ROOM?</h5>
                <p>Besides Training Room And Armory Option in Bottom Left side,<br>
                    Click On Room <br>
                    Then Enter The Room id And Password And Take Your Position!</p>
                <a href="{{url('/rules')}}" class="btn btn-dark">Rules</a>
            </div>
        </div>
        <hr>
        <div class="row mt-5">
            <div class="col-md-12">
                <h4>Pubg mobile- Miramar- Squad 25 teams:</h4>
                <ul>
                    <li>
                        Type: [ Pubg mobile- Miramar- Squad 25 teams/0001/ &lt;team name&gt; /&lt;player1/player2&gt; /&lt;watsapp number&gt; ]
                        <p class="break-word"><strong> (Example: Pubg mobile- Miramar- Squad 25 teams/0002/skyfall/player1/player2/1234567890)</strong></p>
                    </li>
                    <li>Tez Rs:50 @ 7005015171</li>
                    <li>Take a Screenshot of the payment.</li>
                    <li>Send it to 7085715385 (Via-watsapp only)</li>
                    <li>A confirmation massage will be send to your watsapp number</li>
                    <li>Match Room ID And Password Will be Sent To Participants Before 30 Mins Of The Match Begins</li>
                </ul>
                <h5>HOW TO JOIN ROOM?</h5>
                <p>Besides Training Room And Armory Option in Bottom Left side,<br>
                    Click On Room <br>
                    Then Enter The Room id And Password And Take Your Position!</p>
                <a href="{{url('/rules')}}" class="btn btn-dark">Rules</a>
            </div>
        </div>
    </div>
@endsection