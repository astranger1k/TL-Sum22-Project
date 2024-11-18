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
    'hero_img_blur' => true,
    'hero_title' => 'Online tutoring, but different',
    'hero_img_copyright_notice' => 'Photo by <a href="https://unsplash.com/@steinart?utm_content=creditCopyText&utm_medium=referral&utm_source=unsplash">Steinar Engeland</a> on <a href="https://unsplash.com/photos/woman-sitting-on-sofa-with-macbook-air-GwVmBgpP-PQ?utm_content=creditCopyText&utm_medium=referral&utm_source=unsplash">Unsplash</a>',
    'hero_subtitle' => 'This is a simple hero unit, a simple jumbotron-style component for calling extra attention to featured content or information.',
    'hero_buttons' => [
        ['title' => 'Learn More', 'url' => '#', 'color' => 'primary'],
        ['title' => 'Contact Us', 'url' => '#', 'color' => 'secondary'],
    ]
]);
new Component_Hero([
    'hero_id' => 'hero2',
    'hero_img' => 'assets/images/steinar-engeland-GwVmBgpP-PQ-unsplash.jpg',
    'hero_img_blur' => true,
    'hero_title' => 'bish bash bosh',
    'hero_img_copyright_notice' => 'Photo by <a href="https://unsplash.com/@steinart?utm_content=creditCopyText&utm_medium=referral&utm_source=unsplash">Steinar Engeland</a> on <a href="https://unsplash.com/photos/woman-sitting-on-sofa-with-macbook-air-GwVmBgpP-PQ?utm_content=creditCopyText&utm_medium=referral&utm_source=unsplash">Unsplash</a>',
    'hero_subtitle' => 'Your mum',
    'hero_buttons' => [
        ['title' => 'Learn More', 'url' => '#', 'color' => 'primary'],
        ['title' => 'Contact Us', 'url' => '#', 'color' => 'secondary'],
    ]
]);
