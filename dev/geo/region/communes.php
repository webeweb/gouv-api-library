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

use WBW\Library\GouvApi\Geo\Provider\RegionApiProvider;
use WBW\Library\GouvApi\Geo\Request\Region\CommunesRequest;

// Create the API provider.
$provider = new RegionApiProvider();

// Create a Communes request.
$request = new CommunesRequest();
$request->setCode("11");

// Call the API and get the response.
$response = $provider->communes($request);

// Handle the response.
$format = "%-20s: %s\n";

foreach ($response->getCommunes() as $current) {

    echo sprintf($format, "Nom", $current->getNom());
    echo sprintf($format, "Code", $current->getCode());
    echo sprintf($format, "Code departement", $current->getCodeDepartement());
    echo sprintf($format, "Code region", $current->getCodeRegion());
    echo sprintf($format, "Code postaux", implode(", ", $current->getCodesPostaux()));
    echo sprintf($format, "Population", $current->getPopulation());
    echo sprintf($format, "Score", $current->getScore() . "\n");
}
