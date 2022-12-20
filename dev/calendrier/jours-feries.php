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

use WBW\Library\GouvApi\Calendrier\Model\ZoneInterface;
use WBW\Library\GouvApi\Calendrier\Provider\ApiProvider;
use WBW\Library\GouvApi\Calendrier\Request\JoursFeriesRequest;

// Create the API provider.
$provider = new ApiProvider();

// Create a Jours fériés request.
$request = new JoursFeriesRequest();
$request->setZone(ZoneInterface::ZONE_METROPOLE);
$request->setAnnee(2021); // Optional

// Call the API and get the response.
$response = $provider->joursFeries($request);

// Handle the response.
$format = "%-5s: %s\n";

foreach ($response->getJoursFeries() as $current) {

    echo sprintf($format, "Date", $current->getDate()->format("d/m/Y"));
    echo sprintf($format, "Nom", $current->getNom() . "\n");
}
