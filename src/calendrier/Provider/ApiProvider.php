<?php

/*
 * This file is part of the gouv-api-library package.
 *
 * (c) 2021 WEBEWEB
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

declare(strict_types = 1);

namespace WBW\Library\GouvApi\Calendrier\Provider;

use WBW\Library\Common\Provider\ProviderException;
use WBW\Library\GouvApi\Calendrier\Request\JoursFeriesRequest;
use WBW\Library\GouvApi\Calendrier\Response\JoursFeriesResponse;
use WBW\Library\GouvApi\Common\Provider\AbstractProvider;

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
    public const ENDPOINT_PATH = "https://calendrier.api.gouv.fr";

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
     * @throws ProviderException Throws a provider exception if an error occurs.
     */
    public function sendRequest(JoursFeriesRequest $request): JoursFeriesResponse {

        $queryData   = $request->serializeRequest();
        $rawResponse = $this->callApi($request, $queryData);

        /** @var JoursFeriesResponse */
        return $request->deserializeResponse($rawResponse);
    }
}
