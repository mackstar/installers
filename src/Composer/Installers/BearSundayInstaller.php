<?php
namespace Composer\Installers;

class BearSundayInstaller extends BaseInstaller
{
    protected $locations = array(
        'app' => 'apps/{$name}/'
    );
}