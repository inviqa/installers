<?php
namespace Composer\Installers;

class SilverStripeInstaller extends BaseInstaller
{
    protected $locations = array(
        'module'    => 'public/{$name}/',
        'theme'     => 'public/themes/{$name}/',
    );
}

