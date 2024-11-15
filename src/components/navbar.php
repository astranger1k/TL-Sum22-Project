<?php

include_once 'uikit/button.php';

class Component_Navbar
{
    /**
     * Page title
     * @var string
     */
    private $page_title;

    /**
     * Constructor
     * @param mixed $page_title 
     * @return void 
     */
    public function __construct()
    {
        $this->render();
    }

    /**
     * Render the header
     * @return void
     */
    public function render()
    {
?>
        <nav class="bg-gray-800 p-4 sticky top-0 z-50">
            <div class="container mx-auto flex justify-between items-center">
                <div class="text-white text-lg font-bold">
                    GibJohn Tutoring
                </div>
                <div class="hidden md:flex space-x-4">
                    <a href="/" class="text-gray-300 hover:text-white">Home</a>
                    <a href="/pricing.php" class="text-gray-300 hover:text-white">Pricing</a>
                    <a href="/about.php" class="text-gray-300 hover:text-white">About</a>
                </div>
                <div class="space-x-4">
                    <?php
                    if (isset($_SESSION['user'])) {
                    ?>
                        <a href="/auth.php?mode=sign-out" class="bg-red-500 text-white px-4 py-2 rounded hover:bg-red-700">Sign Out</a>
                    <?php
                    } else {
                        new Component_UIKit_Button([
                            'title' => 'Sign In',
                            'url' => '/auth.php?mode=sign-in',
                            'color' => 'blue-500',
                            'color_hover' => 'blue-700',
                        ]);
                        new Component_UIKit_Button([
                            'title' => 'Sign Up',
                            'url' => '/auth.php?mode=sign-up',
                            'color' => 'green-500',
                            'color_hover' => 'green-700',
                        ]);
                    }
                    ?>
                </div>
            </div>
        </nav>
<?php
    }
}
