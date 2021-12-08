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
use WBW\Library\GouvApi\Adresse\Request\ReverseRequest;

// Create the API provider.
$provider = new ApiProvider();

// Create a Reverse request.
$request = new ReverseRequest(49.897443, 2.290084);

// Call the API and get the response.
$response = $provider->reverse($request);

// Handle the response.
$format = "%-20s: %s\n";

echo sprintf($format, "Foreign member", $response->getForeignMember("version"));
echo sprintf($format, "Attribution", $response->getForeignMember("attribution"));
echo sprintf($format, "Licence", $response->getForeignMember("licence"));
echo sprintf($format, "Limit", $response->getForeignMember("limit"));
echo sprintf($format, "Features", "[...]");
