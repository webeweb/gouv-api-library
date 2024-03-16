<?php

/*
 * This file is part of the gouv-api-library package.
 *
 * (c) 2021 WEBEWEB
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace WBW\Library\GouvApi\Calendrier\Provider;

use WBW\Library\GouvApi\Calendrier\Request\JoursFeriesRequest;
use WBW\Library\GouvApi\Calendrier\Response\JoursFeriesResponse;
use WBW\Library\GouvApi\Common\Provider\AbstractProvider;
use WBW\Library\Provider\Exception\ApiException;

/**
 * API Provider.
 *
 * @author webeweb <https://github.com/webeweb>
 * @package WBW\Library\GouvApi\Calendrier\Provider
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
     * Send a request.
     *
     * @param JoursFeriesRequest $request The request.
     * @return JoursFeriesResponse Returns the response.
     * @throws ApiException Throws an API exception if an error occurs.
     */
    public function sendRequest(JoursFeriesRequest $request): JoursFeriesResponse {

        $queryData   = $request->serializeRequest();
        $rawResponse = $this->callApi($request, $queryData);

        return $request->deserializeResponse($rawResponse);
    }
}
