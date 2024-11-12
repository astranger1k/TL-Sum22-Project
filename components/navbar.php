<?php
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
        <nav class="bg-gray-800 p-4">
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
                    <a href="/auth.php?mode=sign-in" class="bg-blue-500 text-white px-4 py-2 rounded hover:bg-blue-700">Sign In</a>
                    <a href="/auth.php?mode=sign-up" class="bg-green-500 text-white px-4 py-2 rounded hover:bg-green-700">Sign Up</a>
                </div>
            </div>
        </nav>
<?php
    }
}
