<?php

namespace SaintYamlParser;

use Spyc;

/**
 * Class Parser
 *
 * @package SaintYamlParser
 */
class Parser
{
    private $yaml;
    
    function __construct($yaml)
    {
        $this->yaml = $yaml;
    }
    
    /**
     * Parse the yaml
     */
    public function parse()
    {
        try {
            // try parse
            $yaml = Spyc::YAMLLoadString($this->yaml);
            $yaml = json_encode($yaml, JSON_PRETTY_PRINT);
            
            print_r($yaml);
            
        } catch (\Exception $e) {
            printf("Unable to parse the YAML string: %s", $e->getMessage());
        }
    }
}