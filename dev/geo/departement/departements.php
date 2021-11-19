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

use WBW\Library\GouvApi\Geo\Provider\DepartementApiProvider;
use WBW\Library\GouvApi\Geo\Request\Departement\DepartementsRequest;

// Create the API provider.
$provider = new DepartementApiProvider();

// Create a Departements request.
$request = new DepartementsRequest();

// Call the API and get the response.
$response = $provider->departements($request);

// Handle the response.
$format = "%-20s: %s\n";

foreach ($response->getDepartements() as $current) {

    echo sprintf($format, "Nom", $current->getNom());
    echo sprintf($format, "Code", $current->getCode());
    echo sprintf($format, "Code region", $current->getCodeRegion());
    echo sprintf($format, "Score", $current->getScore() . "\n");
}
