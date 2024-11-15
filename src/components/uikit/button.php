<?php

class Component_UIKit_Button
{
    /**
     * Config
     * 
     * @var array
     */
    private $config;

    /**
     * Constructor
     * 
     * @param mixed $config 
     * @return void 
     */
    public function __construct($config = [
        'title' => 'Button',
        'url' => '#',
        'color' => 'primary-500',
        'color_hover' => 'primary-700',
        'icon' => null,
        'size' => 'md',
    ])
    {
        $this->config = $config;
        $this->render();
    }

    /**
     * Render the button
     * 
     * @return void
     */
    public function render()
    {
?>
        <a href='<?php echo $this->config['url']; ?>' class='bg-<?php echo $this->config['color']; ?> text-white px-4 py-2 rounded hover:bg-<?php echo $this->config['color_hover']; ?>'>
            <?php if (isset($this->config['icon'])) : ?>
                <i class='fas fa-<?php echo $this->config['icon']; ?>'></i>
            <?php endif; ?>
            <?php echo $this->config['title']; ?>
        </a>
<?php
    }
}
