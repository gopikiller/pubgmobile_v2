@extends('backend.layouts.app')

@section('title', app_name() . ' | ' . __('strings.backend.dashboard.title'))

@section('content')
<div class="card">
    <div class="card-body">
        <div class="row">
            <div class="col-sm-5">
                <h4 class="card-title mb-0">
                    {{ __('labels.backend.tournament.management') }}
                </h4>
            </div><!--col-->

            <div class="col-sm-7 pull-right">
                @include('backend.tournament.includes.header-buttons')
            </div><!--col-->
        </div><!--row-->

        <div class="row mt-4">
            <div class="col">
                <div class="table-responsive">
                    <table class="table">
                        <thead>
                        <tr>
                            <th>{{ __('labels.backend.tournament.table.name') }}</th>
                            <th>{{ __('labels.backend.tournament.table.date') }}</th>
                            <th>{{ __('labels.backend.tournament.table.time') }}</th>
                            <th>{{ __('labels.backend.tournament.table.fee') }}</th>
                            <th>{{ __('labels.backend.tournament.table.prize') }}</th>
                            <th>{{ __('labels.backend.tournament.table.type') }}</th>
                            <th>{{ __('labels.backend.tournament.table.status.title') }}</th>
                            <th>{{ __('labels.general.actions') }}</th>
                        </tr>
                        </thead>
                        <tbody>
                        @foreach ($tournaments as $tournament)
                            <tr>
                                <td>{{ ucwords($tournament->name) }}</td>
                                <td>{{  $tournament->date }}</td>
                                <td>{{ $tournament->time }}</td>
                                <td>{{ $tournament->fee }}</td>
                                <td>{{ $tournament->prize }}</td>
                                <td>{{ $tournament->type->name}}</td>
                                @if( is_null($tournament->status))
                                    <td>{{ __('labels.backend.tournament.table.status.null') }}</td>
                                @elseif($tournament->status === 0)
                                    <td>{{ __('labels.backend.tournament.table.status.zero') }}</td>
                                @elseif($tournament->status === 1)
                                    <td>{{ __('labels.backend.tournament.table.status.one') }}</td>
                                @endif
                                {{-- <td>{!! $role->action_buttons !!}</td> --}}
                            </tr>
                        @endforeach
                        </tbody>
                    </table>
                </div>
            </div><!--col-->
        </div><!--row-->
        <div class="row">
            <div class="col-7">
                <div class="float-left">
                    {{-- {!! $roles->total() !!} {{ trans_choice('labels.backend.access.roles.table.total', $roles->total()) }} --}}
                </div>
            </div><!--col-->

            <div class="col-5">
                <div class="float-right">
                    {{-- {!! $roles->render() !!} --}}
                </div>
            </div><!--col-->
        </div><!--row-->
    </div><!--card-body-->
</div><!--card-->
@endsection