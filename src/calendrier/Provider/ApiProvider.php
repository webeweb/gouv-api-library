<?php

/*
 * This file is part of the gouv-api-library package.
 *
 * (c) 2021 WEBEWEB
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace WBW\Library\GouvAPI\Calendrier\Provider;

use WBW\Library\GouvAPI\Calendrier\Request\JoursFeriesRequest;
use WBW\Library\GouvAPI\Calendrier\Response\JoursFeriesResponse;
use WBW\Library\GouvAPI\Calendrier\Serializer\ResponseDeserializer;
use WBW\Library\GouvAPI\Common\Provider\AbstractProvider;
use WBW\Library\Provider\Exception\ApiException;

/**
 * API Provider.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\GouvAPI\Calendrier\Provider
 */
class ApiProvider extends AbstractProvider {

    /**
     * Endpoint path.
     *
     * @var string
     */
    const ENDPOINT_PATH = "https://calendrier.api.gouv.fr";

    /**
     * {@inheritDoc}
     */
    public function getEndpointPath(): string {
        return self::ENDPOINT_PATH;
    }

    /**
     * Jours fériés.
     *
     * @param JoursFeriesRequest $request The jours fériés request.
     * @return JoursFeriesResponse|null Returns the jours fériés response in case of success, null otherwise.
     * @throws GuzzleException Throws a Guzzle exception if an error occurs.
     * @throws ApiException Throws an API exception if an error occurs.
     */
    public function joursFeries(JoursFeriesRequest $request): ?JoursFeriesResponse {

        $rawResponse = $this->callApi($request, []);

        return ResponseDeserializer::deserializeJoursFeriesResponse($rawResponse);
    }
}