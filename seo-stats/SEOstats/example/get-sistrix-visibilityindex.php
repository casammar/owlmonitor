<?php
/**
 * SEOstats Example - Get Sitrix Visibility-Index
 *
 * @package    SEOstats
 * @author     Stephan Schmitz <eyecatchup@gmail.com>
 * @copyright  Copyright (c) 2010 - present Stephan Schmitz
 * @license    http://eyecatchup.mit-license.org/  MIT License
 * @updated    2013/08/16
 */

// Bootstrap the library / register autoloader
require_once ('../SEOstats/bootstrap.php');

try {
    $url = 'http://www.examhawk.com/';

    // Get the Sitrix Visibility-Index for the given URL.
    $vi = \SEOstats\Services\Sistrix::getVisibilityIndex($url);
    echo "The current Sitrix Visibility-Index for {$url} is {$vi}.";
}
catch (\Exception $e) {
    echo 'Caught SEOstatsException: ' .  $e->getMessage();
}