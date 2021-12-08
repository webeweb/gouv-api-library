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

use WBW\Library\GouvApi\Adresse\Provider\ApiProvider;
use WBW\Library\GouvApi\Adresse\Request\SearchCsvRequest;
use WBW\Library\Types\Helper\ArrayHelper;

$data = realpath(__DIR__ . "/../../tests/adresse/Fixtures/Request/SearchCsvRequest.csv");

// Create the API provider.
$provider = new ApiProvider();

// Create a Search CSV request.
$request = new SearchCsvRequest($data);

// Call the API and get the response.
$response = $provider->searchCsv($request);

// Handle the response.
$format = "%-20s: %s\n";

foreach ($response->getAdresses() as $current) {

    echo sprintf($format, "Nom", ArrayHelper::get($current->getColumns(), "nom"));
    echo sprintf($format, "Adresse", ArrayHelper::get($current->getColumns(), "adresse"));
    echo sprintf($format, "Postcode", ArrayHelper::get($current->getColumns(), "postcode"));
    echo sprintf($format, "City", ArrayHelper::get($current->getColumns(), "city"));
    echo sprintf($format, "Latitude", ArrayHelper::get($current->getColumns(), "latitude"));
    echo sprintf($format, "Longitude", ArrayHelper::get($current->getColumns(), "longitude"));
    echo sprintf($format, "Label", $current->getLabel());
    echo sprintf($format, "Score", $current->getScore());
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
    echo sprintf($format, "Distance", $current->getDistance());
    echo sprintf($format, "Latitude", $current->getLatitude());
    echo sprintf($format, "Longitude", $current->getLongitude() . "\n");
}
