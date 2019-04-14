<?php

// Home
Breadcrumbs::for('home', function ($trail) {
    $trail->push('Home', url('/'));
});

// Music
Breadcrumbs::for('tracks', function ($trail) {
    $trail->parent('home');
    $trail->push('Music', route('tracks'));
});

// Videos
Breadcrumbs::for('vids', function ($trail) {
    $trail->parent('home');
    $trail->push('Videos', route('vids'));
});

// Artists
Breadcrumbs::for('artists', function ($trail) {
    $trail->parent('home');
    $trail->push('Artists', route('artists'));
});

//Breadcrumbs::for('')

// Events
Breadcrumbs::for('event', function ($trail) {
    $trail->parent('home');
    $trail->push('Events', route('event'));
});

// Mechandiser
Breadcrumbs::for('mechandiser', function ($trail) {
    $trail->parent('home');
    $trail->push('Mechandiser', route('mechandiser'));
});

// Blog
Breadcrumbs::for('blog', function($trail) {
    $trail->parent('home');
    $trail->push('Blog', route('blog'));
});


Breadcrumbs::for('blog.category', function ($trail, $category) {
    $trail->parent('blog');
    $trail->push($category->title, route('blog.category', $category->id));
});

// Home > Blog > [Category] > {Post]
Breadcrumbs::for('blog.post', function($trail, $post) {
    $trail->parent('blog');
    $trail->push($post->title, route('blog.post', $post->slug));
});

// Contact
Breadcrumbs::for('contact', function ($trail) {
    $trail->parent('home');
    $trail->push('Contact', route('contact'));
});

// Error 404
Breadcrumbs::for('errors.404', function ($trail) {
    $trail->parent('home');
    $trail->push('Page Not Found');
});
