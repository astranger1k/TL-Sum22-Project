<?php

session_start();

// DB Include
require_once 'includes/db.php';

require_once 'includes/components.php';

// Header
new Component_Header($page_title = 'Home');
new Component_Navbar();
new Component_Hero([
    'hero_id' => 'hero',
    'hero_img' => 'assets/images/steinar-engeland-GwVmBgpP-PQ-unsplash.jpg',
    'hero_title' => 'Welcome to our website',
    'hero_img_copyright_notice' => null,
    'hero_subtitle' => 'This is a simple hero unit, a simple jumbotron-style component for calling extra attention to featured content or information.',
    'hero_buttons' => [
        ['title' => 'Learn More', 'url' => '#', 'color' => 'primary'],
        ['title' => 'Contact Us', 'url' => '#', 'color' => 'secondary'],
    ]
]);
