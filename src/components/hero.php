<?php

include_once 'uikit/button.php';

class Component_Hero {

    /**
     * Config
     * @var array
     */
    private $config;

    /**
     * Constructor
     * @param mixed $page_title 
     * @return void 
     */
    public function __construct($config = [
        'hero_id' => 'hero',
        'hero_img' => 'assets/images/hero.jpg',
        'hero_title' => 'Welcome to our website',
        'hero_img_copyright_notice' => null,
        'hero_subtitle' => 'This is a simple hero unit, a simple jumbotron-style component for calling extra attention to featured content or information.',
        'hero_buttons' => [
            ['title' => 'Learn More', 'url' => '#', 'color' => 'primary'],
            ['title' => 'Contact Us', 'url' => '#', 'color' => 'secondary'],
        ]
    ]) {
        $this->config = $config;
        $this->render();
    }

    /**
     * Render the header
     * @return void
     */
    public function render() {
        ?>
        <section id='<?php echo $this->config['hero_id']; ?>' class='bg-cover bg-center bg-no-repeat h-screen flex items-center justify-center' style='background-image: url(<?php echo $this->config['hero_img']; ?>);'>
            <div class='text-center'>
                <h1 class='text-4xl text-white font-bold'><?php echo $this->config['hero_title']; ?></h1>
                <p class='text-white'><?php echo $this->config['hero_subtitle']; ?></p>

                <div class='mt-4'>
                    <?php
                    foreach ($this->config['hero_buttons'] as $button) {
                        new Component_UIKit_Button([
                            'title' => $button['title'],
                            'url' => $button['url'],
                            'color' => $button['color'] . '-500',
                            'color_hover' => $button['color'] . '-700',
                        ]);
                    }
                    ?>
                </div>
            </div>

            <?php if ($this->config['hero_img_copyright_notice']) : ?>
                <div class='absolute bottom-0 right-0 p-4 text-white text-sm'>
                    <?php echo $this->config['hero_img_copyright_notice']; ?>
                </div>
            <?php endif; ?>
        </section>
        <?php
    }
}
                
