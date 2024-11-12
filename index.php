<?php 

session_start();

// DB Include
require_once 'includes/db.php';

require_once 'includes/components.php';

// Header
new Component_Header($page_title = 'Home');
new Component_Navbar();

?>