<?php
namespace DoctrineExtensions;

/**
 * Class Module
 * @package DoctrineExtensions
 */
class Module
{
    /**
     * @return array
     */
    public function getConfig()
    {
        return include __DIR__ . '/../config/module.config.php';
    }
}
