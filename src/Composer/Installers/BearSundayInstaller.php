<?php
namespace Composer\Installers;

class BearSundayInstaller extends BaseInstaller
{
    protected $locations = array(
        'app'     => 'apps/{$name}/'
    );

    /**
     * Format package name to CamelCase
     */
    public function inflectPackageVars($vars)
    {
        $vars['name'] = strtolower(str_replace(array('-', '_'), ' ', $vars['name']));
        $vars['name'] = str_replace(' ', '', ucwords($vars['name']));

        return $vars;
    }
}