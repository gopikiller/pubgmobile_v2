<?php

Breadcrumbs::for('admin.dashboard', function ($trail) {
    $trail->push(__('strings.backend.dashboard.title'), route('admin.dashboard'));
});

Breadcrumbs::for('admin.tournament.list', function ($trail) {
    $trail->parent('admin.dashboard');
    $trail->push(__('menus.backend.tournament.all'), route('admin.tournament.list'));
});

Breadcrumbs::for('admin.tournament.create', function ($trail) {
    $trail->parent('admin.dashboard');
    $trail->push(__('menus.backend.tournament.create'), route('admin.tournament.create'));
});

require __DIR__.'/auth.php';
require __DIR__.'/log-viewer.php';
