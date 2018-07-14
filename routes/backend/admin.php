<?php

/**
 * All route names are prefixed with 'admin.'.
 */
Route::redirect('/', '/admin/dashboard', 301);
Route::get('dashboard', 'DashboardController@index')->name('dashboard');
Route::get('tournament/list', 'AdminTournamentController@index')->name('tournament.list');
Route::get('tournament/create', 'AdminTournamentController@create')->name('tournament.create');