<?php

/*
 * This file is part of the gouv-api-library package.
 *
 * (c) 2020 WEBEWEB
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace WBW\Library\GouvAPI\Geo\Provider;

use GuzzleHttp\Exception\GuzzleException;
use WBW\Library\GouvAPI\Geo\Request\Region\CommunesRequest;
use WBW\Library\GouvAPI\Geo\Request\Region\DepartementsRequest;
use WBW\Library\GouvAPI\Geo\Request\Region\RegionsRequest;
use WBW\Library\GouvAPI\Geo\Response\CommunesResponse;
use WBW\Library\GouvAPI\Geo\Response\DepartementsResponse;
use WBW\Library\GouvAPI\Geo\Response\RegionsResponse;
use WBW\Library\GouvAPI\Geo\Serializer\ResponseDeserializer;
use WBW\Library\Provider\Exception\ApiException;

/**
 * Région API provider.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\GouvAPI\Geo\Provider
 */
class RegionApiProvider extends ApiProvider {

    /**
     * Communes.
     *
     * @param CommunesRequest $request The communes request.
     * @return CommunesResponse Returns the communes response.
     * @throws GuzzleException Throws a Guzzle exception if an error occurs.
     * @throws ApiException Throws an API exception if an error occurs.
     */
    public function communes(CommunesRequest $request): CommunesResponse {

        $rawResponse = $this->callApi($request, []);

        return ResponseDeserializer::deserializeCommunesResponse($rawResponse);
    }

    /**
     * Départements.
     *
     * @param DepartementsRequest $request The départements request.
     * @return DepartementsResponse Returns the départements response.
     * @throws GuzzleException Throws a Guzzle exception if an error occurs.
     * @throws ApiException Throws an API exception if an error occurs.
     */
    public function departements(DepartementsRequest $request): DepartementsResponse {

        $rawResponse = $this->callApi($request, []);

        return ResponseDeserializer::deserializeDepartementsResponse($rawResponse);
    }

    /**
     * Régions.
     *
     * @param RegionsRequest $request The régions request.
     * @return RegionsResponse Returns the régions response.
     * @throws GuzzleException Throws a Guzzle exception if an error occurs.
     * @throws ApiException Throws an API exception if an error occurs.
     */
    public function regions(RegionsRequest $request): RegionsResponse {

        $rawResponse = $this->callApi($request, []);

        return ResponseDeserializer::deserializeRegionsResponse($rawResponse);
    }
}