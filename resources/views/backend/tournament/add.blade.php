@extends('backend.layouts.app')

@section('title', app_name() . ' | ' . __('strings.backend.dashboard.title'))

@section('content')
    <div class="row">
        <div class="col">
            <div class="card">
                <div class="card-header">
                    <strong>{{ __('strings.backend.dashboard.welcome') }} {{ $logged_in_user->name }}!</strong>
                </div><!--card-header-->
                <div class="card-block" id="create_tournament">
                    {{ html()->form('POST', route('admin.tournament.store'))->open() }}
                        <div class="row">
                            <div class="col-12 col-md-6">
                                <div class="form-group">
                                    {{ html()->label(__('validation.attributes.backend.tournament.name'))->for('name') }}

                                    {{ html()->text('name')
                                        ->class('form-control')
                                        ->placeholder(__('validation.attributes.backend.tournament.name'))
                                        ->attribute('maxlength', 191) }}
                                </div><!--col-->
                            </div><!--row-->

                            <div class="col-12 col-md-6">
                                <div class="form-group">
                                    {{ html()->label(__('validation.attributes.backend.tournament.date'))->for('date') }}

                                    {{ html()->date('date')
                                        ->class('form-control')
                                        ->placeholder(__('validation.attributes.backend.tournament.date'))
                                        ->attribute('maxlength', 191) }}
                                </div><!--form-group-->
                            </div><!--col-->
                        </div><!--row-->
                        <div class="row">
                            <div class="col-12 col-md-6">
                                <div class="form-group">
                                    {{ html()->label(__('validation.attributes.backend.tournament.time'))->for('time') }}

                                    {{ html()->time('time')
                                        ->class('form-control')
                                        ->placeholder(__('validation.attributes.backend.tournament.time'))
                                        ->attribute('maxlength', 191) }}
                                </div>
                            </div>
                            <div class="col-12 col-md-6">
                                <div class="form-group">
                                    {{ html()->label(__('validation.attributes.backend.tournament.fee'))->for('fee') }}

                                    {{ html()->text('fee')
                                    ->class('form-control')
                                    ->placeholder(__('validation.attributes.backend.tournament.fee'))
                                    ->attributes(['maxlength'=> 5, 'onkeypress'=>"return numberOnly(event,this);"]) }}
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-12 col-md-6">
                                <div class="form-group">
                                    {{ html()->label(__('validation.attributes.backend.tournament.prize'))->for('prize') }}

                                    {{ html()->text('prize')
                                        ->class('form-control')
                                        ->placeholder(__('validation.attributes.backend.tournament.prize'))
                                        ->attributes(['maxlength'=> 10, 'onkeypress'=>"return numberOnly(event,this);"]) }}
                                </div>
                            </div>
                            <div class="col-12 col-md-6">
                                <div class="form-group">
                                    {{ html()->label(__('validation.attributes.backend.tournament.type'))->for('type') }}

                                    {{ html()->select('type_id')->options($types)
                                        ->class('form-control')
                                        ->placeholder('Select '.__('validation.attributes.backend.tournament.type'))
                                        ->attribute('maxlength', 191) }}
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-12 col-md-6">
                                <div class="form-group">
                                    {{ html()->label(__('validation.attributes.backend.tournament.max_team'))->for('max_team') }}

                                    {{ html()->text('max_teams')
                                        ->class('form-control')
                                        ->placeholder(__('validation.attributes.backend.tournament.max_team'))
                                        ->attributes(['maxlength'=> 10, 'onkeypress'=>"return numberOnly(event,this);"]) }}
                                </div>
                            </div>
                            <div class="col-12 col-md-6">
                                <div class="form-group">
                                    {{ html()->label(__('validation.attributes.backend.tournament.min_team'))->for('min_team') }}

                                    {{ html()->text('min_teams')
                                        ->class('form-control')
                                        ->placeholder(__('validation.attributes.backend.tournament.min_team'))
                                        ->attributes(['maxlength'=> 10, 'onkeypress'=>"return numberOnly(event,this);"]) }}
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col">
                                <div class="form-group mb-0 clearfix">
                                    {{ form_submit(__('menus.backend.tournament.create')) }}
                                </div><!--form-group-->
                            </div><!--col-->
                        </div><!--row-->
                    {{ html()->form()->close() }}
                </div><!--card-block-->
            </div><!--card-->
        </div><!--col-->
    </div><!--row-->
@endsection