<?php

/*
 * This file is part of the gouv-api-library package.
 *
 * (c) 2021 WEBEWEB
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace WBW\Library\GouvAPI\Entreprise\Provider;

use GuzzleHttp\Exception\GuzzleException;
use WBW\Library\GouvAPI\Entreprise\Request\EtablissementsRequest;
use WBW\Library\GouvAPI\Entreprise\Request\UnitesLegalesRequest;
use WBW\Library\GouvAPI\Entreprise\Response\EtablissementsResponse;
use WBW\Library\GouvAPI\Entreprise\Response\UnitesLegalesResponse;
use WBW\Library\GouvAPI\Entreprise\Serializer\RequestSerializer;
use WBW\Library\GouvAPI\Entreprise\Serializer\ResponseDeserializer;
use WBW\Library\Provider\Exception\ApiException;

/**
 * API v3 provider.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\GouvAPI\Entreprise\Provider
 */
class APIv3Provider extends AbstractProvider {

    /**
     * Etablissements.
     *
     * @param EtablissementsRequest $request The établissements request.
     * @return EtablissementsResponse Returns the établissements response.
     * @throws GuzzleException Throws a Guzzle exception if an error occurs.
     * @throws ApiException Throws an API exception if an error occurs.
     */
    public function etablissements(EtablissementsRequest $request): EtablissementsResponse {

        $queryData = RequestSerializer::serializeEtablissementsRequest($request);

        $rawResponse = $this->callApi($request, $queryData);

        return ResponseDeserializer::deserializeEtablissementsResponse($rawResponse);
    }

    /**
     * {@inheritDoc}
     */
    public function getVersion(): int {
        return 3;
    }

    /**
     * Unités légales.
     *
     * @param UnitesLegalesRequest $request The établissements request.
     * @return UnitesLegalesResponse Returns the établissements response.
     * @throws GuzzleException Throws a Guzzle exception if an error occurs.
     * @throws ApiException Throws an API exception if an error occurs.
     */
    public function unitesLegales(UnitesLegalesRequest $request): UnitesLegalesResponse {

        $queryData = RequestSerializer::serializeUnitesLegalesRequest($request);

        $rawResponse = $this->callApi($request, $queryData);

        return ResponseDeserializer::deserializeUnitesLegalesResponse($rawResponse);
    }
}