<?php

/*
 * This file is part of the gouv-api-library package.
 *
 * (c) 2021 WEBEWEB
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

require_once __DIR__ . "/../../../vendor/autoload.php";

use WBW\Library\GouvApi\Geo\Provider\ApiProvider;
use WBW\Library\GouvApi\Geo\Request\Region\RegionsRequest;
use WBW\Library\GouvApi\Geo\Response\RegionsResponse;

// Create the API provider.
$provider = new ApiProvider();

// Create a Regions request.
$request = new RegionsRequest();

/** @var RegionsResponse $response */
$response = $provider->sendRequest($request);

// Handle the response.
$format = "%-20s: %s\n";

foreach ($response->getRegions() as $current) {

    echo sprintf($format, "Nom", $current->getNom());
    echo sprintf($format, "Code", $current->getCode());
    echo sprintf($format, "Score", $current->getScore() . "\n");
}
