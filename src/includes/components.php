<?php

// Recursively require all PHP files in the components directory - there is a mix of both php files and directories in the components directory
$components = new RecursiveIteratorIterator(new RecursiveDirectoryIterator('components'));
foreach ($components as $component) {
    if ($component->isFile() && $component->getExtension() === 'php') {
        include_once $component->getPathname();
    }
}
