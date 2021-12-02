<?php

Breadcrumbs::for('admin.dashboard', function ($trail) {
    $trail->push(__('strings.backend.dashboard.title'), route('admin.dashboard'));
});

Breadcrumbs::for('admin.module.index', function ($trail) {
    $trail->push('Module Explorer', route('admin.module.index'));
});

require __DIR__.'/auth.php';
require __DIR__.'/log-viewer.php';



Breadcrumbs::for('admin.our_client_category.index', function ($trail) {
    $trail->push('Our Client Category', route('admin.our_client_category.index'));
});
Breadcrumbs::for('admin.our_client_category.edit', function ($trail) {
    $trail->push('Our Client Category Edit', route('admin.our_client_category.edit',1));
});

Breadcrumbs::for('admin.our_client.index', function ($trail) {
    $trail->push('Our Client', route('admin.our_client.index'));
});
Breadcrumbs::for('admin.our_client.create', function ($trail) {
    $trail->push('Create New', route('admin.our_client.create'));
});
Breadcrumbs::for('admin.our_client.edit', function ($trail) {
    $trail->push('Our Client Edit', route('admin.our_client.edit',1));
});

Breadcrumbs::for('admin.solutions.index', function ($trail) {
    $trail->push('Solutions', route('admin.solutions.index'));
});
Breadcrumbs::for('admin.solutions.create', function ($trail) {
    $trail->push('Create New', route('admin.solutions.create'));
});
Breadcrumbs::for('admin.solutions.edit', function ($trail) {
    $trail->push('Solutions Edit', route('admin.solutions.edit',1));
});






Breadcrumbs::for('admin.file_manager.index', function ($trail) {
    $trail->push('File Manager', route('admin.file_manager.index'));
});

Breadcrumbs::for('admin.settings.index', function ($trail) {
    $trail->push('General Settings', route('admin.settings.index'));
});

Breadcrumbs::for('admin.about_us', function ($trail) {
    $trail->push('About Us', route('admin.about_us'));
});

Breadcrumbs::for('admin.privacy_policy', function ($trail) {
    $trail->push('Privacy Policy', route('admin.privacy_policy'));
});

Breadcrumbs::for('admin.terms_and_conditions', function ($trail) {
    $trail->push('Terms and Conditions', route('admin.terms_and_conditions'));
});

Breadcrumbs::for('admin.contactus_thanks', function ($trail) {
    $trail->push('Contact Us Thanks Email', route('admin.contactus_thanks'));
});


