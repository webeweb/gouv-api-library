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

use WBW\Library\GouvApi\Adresse\Request\ReverseCsvRequest;
use WBW\Library\GouvApi\Adresse\Request\ReverseRequest;
use WBW\Library\GouvApi\Adresse\Request\SearchCsvRequest;
use WBW\Library\GouvApi\Adresse\Request\SearchRequest;
use WBW\Library\GouvApi\Adresse\Response\FeatureCollectionResponse;
use WBW\Library\GouvApi\Adresse\Response\ReverseCsvResponse;
use WBW\Library\GouvApi\Adresse\Response\SearchCsvResponse;
use WBW\Library\GouvApi\Common\Provider\AbstractProvider;
use WBW\Library\Provider\Exception\ApiException;
use WBW\Library\Types\Helper\ArrayHelper;

/**
 * API provider.
 *
 * @author webeweb <https://github.com/webeweb>
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
     * @param array<string,mixed>[] $post The POST.
     * @param string $name The name.
     * @param mixed[] $data The data.
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
     * @return FeatureCollectionResponse|null Returns the reverse response in case of success, null otherwise.
     * @throws ApiException Throws an API exception if an error occurs.
     */
    public function reverse(ReverseRequest $request): ?FeatureCollectionResponse {

        $queryData   = $request->serializeRequest();
        $rawResponse = $this->callApi($request, $queryData);

        /** @var FeatureCollectionResponse */
        return $request->deserializeResponse($rawResponse);
    }

    /**
     * Reverse CSV.
     *
     * @param ReverseCsvRequest $request The reverse CSV request.
     * @return ReverseCsvResponse Returns the reverse CSV response.
     * @throws ApiException Throws an API exception if an error occurs.
     */
    public function reverseCsv(ReverseCsvRequest $request): ReverseCsvResponse {

        $queryData = $request->serializeRequest();

        $filename = realpath($queryData["data"]);
        $postData = [
            [
                "name"     => "data",
                "contents" => fopen($filename, "r"),
                "filename" => basename($filename),
            ],
        ];

        $rawResponse = $this->callApi($request, [], $postData);

        /** @var ReverseCsvResponse */
        return $request->deserializeResponse($rawResponse);
    }

    /**
     * Search.
     *
     * @param SearchRequest $request The search request.
     * @return FeatureCollectionResponse|null Returns the search response in case of success, null otherwise.
     * @throws ApiException Throws an API exception if an error occurs.
     */
    public function search(SearchRequest $request): ?FeatureCollectionResponse {

        $queryData   = $request->serializeRequest();
        $rawResponse = $this->callApi($request, $queryData);

        /** @var FeatureCollectionResponse */
        return $request->deserializeResponse($rawResponse);
    }

    /**
     * Search CSV.
     *
     * @param SearchCsvRequest $request The search CSV request.
     * @return SearchCsvResponse Returns the search CSV response.
     * @throws ApiException Throws an API exception if an error occurs.
     */
    public function searchCsv(SearchCsvRequest $request): SearchCsvResponse {

        $queryData = $request->serializeRequest();

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

        /** @var SearchCsvResponse */
        return $request->deserializeResponse($rawResponse);
    }
}
