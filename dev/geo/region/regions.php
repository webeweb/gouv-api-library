<?php

/*
 * This file is part of the gouv-api-library package.
 *
 * (c) 2021 WEBEWEB
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

require __DIR__ . "/../../../vendor/autoload.php";

use WBW\Library\GouvAPI\Geo\Provider\RegionApiProvider;
use WBW\Library\GouvAPI\Geo\Request\Region\RegionsRequest;

// Create the API provider.
$provider = new RegionApiProvider();

// Create a Regions request.
$request = new RegionsRequest();

// Call the API and get the response.
$response = $provider->regions($request);

// Handle the response.
$format = "%-20s: %s\n";

foreach ($response->getRegions() as $current) {

    echo sprintf($format, "Nom", $current->getNom());
    echo sprintf($format, "Code", $current->getCode());
    echo sprintf($format, "Score", $current->getScore() . "\n");
}
