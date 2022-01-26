<?php

/*
 * This file is part of the gouv-api-library package.
 *
 * (c) 2020 WEBEWEB
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace WBW\Library\GouvApi\Adresse\Provider;

use GuzzleHttp\Exception\GuzzleException;
use WBW\Library\GeoJson\Model\FeatureCollection;
use WBW\Library\GouvApi\Adresse\Request\ReverseCsvRequest;
use WBW\Library\GouvApi\Adresse\Request\ReverseRequest;
use WBW\Library\GouvApi\Adresse\Request\SearchCsvRequest;
use WBW\Library\GouvApi\Adresse\Request\SearchRequest;
use WBW\Library\GouvApi\Adresse\Response\ReverseCsvResponse;
use WBW\Library\GouvApi\Adresse\Response\SearchCsvResponse;
use WBW\Library\GouvApi\Adresse\Serializer\RequestSerializer;
use WBW\Library\GouvApi\Adresse\Serializer\ResponseDeserializer;
use WBW\Library\GouvApi\Common\Provider\AbstractProvider;
use WBW\Library\Provider\Exception\ApiException;
use WBW\Library\Types\Helper\ArrayHelper;

/**
 * API provider.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\GouvApi\Adresse\Provider
 */
class ApiProvider extends AbstractProvider {

    /**
     * Endpoint path.
     *
     * @var string
     */
    const ENDPOINT_PATH = "https://api-adresse.data.gouv.fr";

    /**
     * Add an array.
     *
     * @param array $post The POST.
     * @param string $name The name.
     * @param array $data The data.
     * @return void
     */
    protected function appendArray(array &$post, string $name, array $data): void {

        if (0 === count($data)) {
            return;
        }

        foreach ($data as $current) {
            $post[] = [
                "name"     => $name,
                "contents" => $current,
            ];
        }
    }

    /**
     * {@inheritDoc}
     */
    public function getEndpointPath(): string {
        return self::ENDPOINT_PATH;
    }

    /**
     * Reverse.
     *
     * @param ReverseRequest $request The reverse request.
     * @return FeatureCollection|null Returns the reverse response in case of success, null otherwise.
     * @throws GuzzleException Throws a Guzzle exception if an error occurs.
     * @throws ApiException Throws an API exception if an error occurs.
     */
    public function reverse(ReverseRequest $request): ?FeatureCollection {

        $queryData = RequestSerializer::serializeReverseRequest($request);

        $rawResponse = $this->callApi($request, $queryData);

        return ResponseDeserializer::deserializeReverseResponse($rawResponse);
    }

    /**
     * Reverse CSV.
     *
     * @param ReverseCsvRequest $request The reverse CSV request.
     * @return ReverseCsvResponse Returns the reverse CSV response.
     * @throws GuzzleException Throws a Guzzle exception if an error occurs.
     * @throws ApiException Throws an API exception if an error occurs.
     */
    public function reverseCsv(ReverseCsvRequest $request): ReverseCsvResponse {

        $queryData = RequestSerializer::serializeReverseCsvRequest($request);

        $filename = realpath($queryData["data"]);
        $postData = [
            [
                "name"     => "data",
                "contents" => fopen($filename, "r"),
                "filename" => basename($filename),
            ],
        ];

        $rawResponse = $this->callApi($request, [], $postData);

        return ResponseDeserializer::deserializeReverseCsvResponse($rawResponse);
    }

    /**
     * Search.
     *
     * @param SearchRequest $request The search request.
     * @return FeatureCollection|null Returns the search response in case of success, null otherwise.
     * @throws GuzzleException Throws a Guzzle exception if an error occurs.
     * @throws ApiException Throws an API exception if an error occurs.
     */
    public function search(SearchRequest $request): FeatureCollection {

        $queryData = RequestSerializer::serializeSearchRequest($request);

        $rawResponse = $this->callApi($request, $queryData);

        return ResponseDeserializer::deserializeSearchResponse($rawResponse);
    }

    /**
     * Search CSV.
     *
     * @param SearchCsvRequest $request The search CSV request.
     * @return SearchCsvResponse Returns the search CSV response.
     * @throws GuzzleException Throws a Guzzle exception if an error occurs.
     * @throws ApiException Throws an API exception if an error occurs.
     */
    public function searchCsv(SearchCsvRequest $request): SearchCsvResponse {

        $queryData = RequestSerializer::serializeSearchCsvRequest($request);

        $filename = realpath($queryData["data"]);
        $postData = [
            [
                "name"     => "data",
                "contents" => fopen($filename, "r"),
                "filename" => basename($filename),
            ],
        ];
        $this->appendArray($postData, "columns", ArrayHelper::get($queryData, "columns", []));
        $this->appendArray($postData, "result_columns", ArrayHelper::get($queryData, "result_columns", []));

        $rawResponse = $this->callApi($request, [], $postData);

        return ResponseDeserializer::deserializeSearchCsvResponse($rawResponse);
    }
}
