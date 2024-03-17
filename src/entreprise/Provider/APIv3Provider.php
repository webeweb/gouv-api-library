<?php

/*
 * This file is part of the gouv-api-library package.
 *
 * (c) 2021 WEBEWEB
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace WBW\Library\GouvApi\Entreprise\Provider;

use WBW\Library\GouvApi\Common\Response\AbstractResponse;
use WBW\Library\GouvApi\Entreprise\Request\AbstractRequest;
use WBW\Library\Provider\Exception\ApiException;

/**
 * API v3 provider.
 *
 * @author webeweb <https://github.com/webeweb>
 * @package WBW\Library\GouvApi\Entreprise\Provider
 * @deprecated
 */
class APIv3Provider extends AbstractProvider {

    /**
     * {@inheritDoc}
     */
    public function getVersion(): int {
        return 3;
    }

    /**
     * Send a request.
     *
     * @param AbstractRequest $request The request.
     * @return AbstractResponse Returns the response.
     * @throws ApiException Throws an API exception if an error occurs.
     */
    public function sendRequest(AbstractRequest $request): AbstractResponse {

        $queryData   = $request->serializeRequest();
        $rawResponse = $this->callApi($request, $queryData);

        return $request->deserializeResponse($rawResponse);
    }
}
