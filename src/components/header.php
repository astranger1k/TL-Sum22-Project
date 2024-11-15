<?php

class Component_Header {

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
    public function __construct($page_title) {
        $this->page_title = $page_title;

        $this->render();
    } 

    /**
     * Render the header
     * @return void
     */
    public function render() {
        ?>
        <!DOCTYPE html>
        <html lang="en">
        <head>
            <meta charset="UTF-8">
            <meta http-equiv="X-UA-Compatible" content="IE=edge">
            <meta name="viewport" content="width=device-width, initial-scale=1.0">
            <title><?php echo $this->page_title; ?></title>
        
            <link rel="stylesheet" href="assets/css/tailwind.css">
        </head>
        <body>
        <?php
    }
}