<?php
/**
 * App Core Framework Version
 **/

namespace AzuraCast;

define('APP_CORE_VERSION', '0.8.0-2017.12');
define('APP_CORE_RELEASE', 'Beta');

class Version
{
    public static function getVersion()
    {
        return APP_CORE_VERSION;
    }

    public static function getVersionText()
    {
        return 'v' . APP_CORE_VERSION . ' ' . APP_CORE_RELEASE;
    }

}