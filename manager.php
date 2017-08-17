<?php

// composer autoload
include_once __DIR__ . '/vendor/autoload.php';

// get yaml
$yaml = file_get_contents(__DIR__ .'/yaml/ex.yaml');
(new SaintYamlParser\Parser($yaml))->parse();