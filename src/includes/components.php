<?php

// Include all components in the components directory and subdirectories - if 
foreach (glob("components/*.php") as $filename) {
    include $filename;
}