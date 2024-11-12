<?php

// Include all components in the components directory
foreach (glob("components/*.php") as $filename) {
    include $filename;
}