@extends('frontend.layouts.app')

@section('title', app_name() . ' | '.__('navs.frontend.rules'))

@section('content')
    <div class="jumbotron jumbotron-fluid" style="background:">
        <div class="container">
            <h1 :class="{'display-4':displayed}">{{__('labels.frontend.rules.page_title')}}</h1>
            <p class="lead">{{__('labels.frontend.rules.sub_title')}}</p>
        </div>
    </div>
    <div class="container">
        <h4>Rules</h4>
        <ul>
            <li>No sabotage (Causing Your teammate to die)</li>
            <li>You must be honest when reporting match results.</li>
            <li>Do not harass your teammates in the in-game voice chat.</li>
            <li>You must record or stream or take screenshots that give prove of who won the match that you are in.</li>
            <li>Refund in any case will not be given except for that of cancellation of tournament.</li>
            <li>Every team will be spectated by our moderators, violation of any rules will be converted into direct ban from receiving the price money even if you win.</li>
            <li>The winner teams will be awarded with their cash price directly to their leader's paypal/Tez account.</li>
            <li>Organizers reserve the right to change, modify, or adapt all rules as deemed appropriate in order to uphold and maintain a spirit of overall fairness and good sportsmanship.</li>
            <li>The prize pool are subject to change according to the number of teams at the end of registrations.</li>
            <li> You must agree to allow us to see/use any footage and/or screenshots you take or record during the tournament.</li>
            <li>The organization can modify or add new rules as the league progresses.</li>
            <li>The game will be played one on Erangel or Miramar with either First or third person perspectives.</li>
        </ul>
        <p><b>Overall just be nice it’s just a game</b></p>
        <p><b>HAVE FUN!</b></p>
    
        <div class="row">
            <div class="col-md-12 text-center py-4">
                <div class="alert alert-warning alert-dismissible fade show" role="alert">
                    <strong>Warning!</strong> Rule breakers will be disqualified.
                </div>
            </div>
        </div>
    
    <h4>Rules from the Admins</h4>
    <ul>
        <li><p><b>Be Kind and Courteous</b></p>
            We're all in this together to create a welcoming environment. Let's treat everyone with respect. Healthy debates are natural, but kindness is required.</li>
        <li><p><b>No Hate Speech or Bullying</b></p>
            Make sure everyone feels safe. Bullying of any kind isn't allowed, and degrading comments about things like race, religion, culture, sexual orientation, gender or identity will not be tolerated.</li>
        <li><p><b>Respect Everyone's Privacy</b></p>
            Being part of this group requires mutual trust. Authentic, expressive discussions make groups great, but may also be sensitive and private. What's shared in the group should stay in the group.</li>
        <li><p><b>Monotony</b></p>
            We understand the need to share your moments, especially involving PUBG. And we also understand how trends work in big groups. If a post or topic becomes stale, we reserve the right to consider it spam. We generally don't like spammers. So keep it fresh, interesting and entertaining.
        </li>
        <li><p><b>This is not a dating site</b></p>
            People came here to have fun. Subjectively involving PUBG Mobile. If we notice you trying to impede the good course we're trying to run here, by trying to score a spouse or a significant other; in the process thwarting their experience. We'll ban you.</li>
        
    </ul>
</div>
@endsection