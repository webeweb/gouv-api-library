<?php

/*
 * This file is part of the gouv-api-library package.
 *
 * (c) 2021 WEBEWEB
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

require_once __DIR__ . "/../../vendor/autoload.php";

use WBW\Library\Common\Helper\ArrayHelper;
use WBW\Library\GouvApi\Adresse\Provider\ApiProvider;
use WBW\Library\GouvApi\Adresse\Request\ReverseCsvRequest;

$data = realpath(__DIR__ . "/../../tests/adresse/Fixtures/Request/ReverseCsvRequest.csv");

// Create the API provider.
$provider = new ApiProvider();

// Create a Reverse CSV request.
$request = new ReverseCsvRequest($data);

// Call the API and get the response.
$response = $provider->reverseCsv($request);

// Handle the response.
$format = "%-20s: %s\n";

foreach ($response->getAdresses() as $current) {

    echo sprintf($format, "Lat", ArrayHelper::get($current->getColumns(), "lat"));
    echo sprintf($format, "Lon", ArrayHelper::get($current->getColumns(), "lon"));
    echo sprintf($format, "Name", ArrayHelper::get($current->getColumns(), "name"));
    echo sprintf($format, "Latitude", $current->getLatitude());
    echo sprintf($format, "Longitude", $current->getLongitude());
    echo sprintf($format, "Label", $current->getLabel());
    echo sprintf($format, "Distance", $current->getDistance());
    echo sprintf($format, "Type", $current->getType());
    echo sprintf($format, "Id", $current->getId());
    echo sprintf($format, "House number", $current->getHouseNumber());
    echo sprintf($format, "Name", $current->getName());
    echo sprintf($format, "Street", $current->getStreet());
    echo sprintf($format, "Postcode", $current->getPostcode());
    echo sprintf($format, "City", $current->getCity());
    echo sprintf($format, "Context", $current->getContext());
    echo sprintf($format, "City code", $current->getCityCode());
    echo sprintf($format, "Old city code", $current->getOldCityCode());
    echo sprintf($format, "Old city", $current->getOldCity());
    echo sprintf($format, "District", $current->getDistrict());
    echo sprintf($format, "Score", $current->getScore() . "\n");
}
