<?php

/*
 * This file is part of the gouv-api-library package.
 *
 * (c) 2020 WEBEWEB
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

declare(strict_types = 1);

namespace WBW\Library\GouvApi\Adresse\Serializer;

use WBW\Library\GeoJson\Serializer\JsonDeserializer;
use WBW\Library\GouvApi\Adresse\Model\Adresse;
use WBW\Library\GouvApi\Adresse\Response\AbstractCsvResponse;
use WBW\Library\GouvApi\Adresse\Response\FeatureCollectionResponse;
use WBW\Library\GouvApi\Adresse\Response\ReverseCsvResponse;
use WBW\Library\GouvApi\Adresse\Response\SearchCsvResponse;

/**
 * Response deserializer.
 *
 * @author webeweb <https://github.com/webeweb>
 * @package WBW\Library\GouvApi\Adresse\Serializer
 */
class ResponseDeserializer {

    /**
     * Deserialize an adresse.
     *
     * @param string $response The response.
     * @param string[] $headers The headers.
     * @return Adresse Returns the adresse.
     */
    protected static function deserializeAdresse(string $response, array $headers): Adresse {

        $model = new Adresse();

        $columns = str_getcsv($response);
        $methods = static::getMethods();

        for ($i = count($columns) - 1; 0 <= $i; --$i) {

            $k = $headers[$i];
            $v = $columns[$i];

            if (false === array_key_exists($k, $methods)) {
                $model->addColumn($k, $v);
                continue;
            }

            $fct = $methods[$k];

            $model->$fct($v);
        }

        return $model;
    }

    /**
     * Deserialize a CSV response.
     *
     * @param string $rawResponse The raw response.
     * @param AbstractCsvResponse $model The CSV response.
     * @return AbstractCsvResponse Returns the CSV response.
     */
    protected static function deserializeCsvResponse(string $rawResponse, AbstractCsvResponse $model): AbstractCsvResponse {

        $model->setRawResponse($rawResponse);

        $lines = explode("\n", $rawResponse);

        $count = count($lines);
        if ($count <= 1) {
            return $model;
        }

        $headers = explode(",", $lines[0]);

        for ($i = 1; $i < $count; ++$i) {

            $current = $lines[$i];
            if ("" === $current) {
                continue;
            }

            $model->addAdresse(static::deserializeAdresse($current, $headers));
        }

        return $model;
    }

    /**
     * Deserialize a feature collection response.
     *
     * @param string $rawResponse The raw response.
     * @return FeatureCollectionResponse|null Returns the feature collection response.
     */
    protected static function deserializeFeatureCollectionResponse(string $rawResponse): ?FeatureCollectionResponse {

        $response = json_decode($rawResponse, true);
        if (null === $response) {
            return null;
        }

        $featureCollection = JsonDeserializer::deserializeFeatureCollection($response);

        $model = new FeatureCollectionResponse();
        $model->setFeatureCollection($featureCollection);

        return $model;
    }

    /**
     * Deserialize a reverse CSV response.
     *
     * @param string $rawResponse The raw response.
     * @return ReverseCsvResponse Returns the reverse CSV response.
     */
    public static function deserializeReverseCsvResponse(string $rawResponse): ReverseCsvResponse {

        /** @var ReverseCsvResponse */
        return static::deserializeCsvResponse($rawResponse, new ReverseCsvResponse());
    }

    /**
     * Deserialize a reverse response.
     *
     * @param string $rawResponse The raw response.
     * @return FeatureCollectionResponse|null Returns the reverse response in case of success, null otherwise.
     */
    public static function deserializeReverseResponse(string $rawResponse): ?FeatureCollectionResponse {
        return static::deserializeFeatureCollectionResponse($rawResponse);
    }

    /**
     * Deserialize a search CSV response.
     *
     * @param string $rawResponse The raw response.
     * @return SearchCsvResponse Returns the search CSV response.
     */
    public static function deserializeSearchCsvResponse(string $rawResponse): SearchCsvResponse {

        /** @var SearchCsvResponse */
        return static::deserializeCsvResponse($rawResponse, new SearchCsvResponse());
    }

    /**
     * Deserialize a search response.
     *
     * @param string $rawResponse The raw response.
     * @return FeatureCollectionResponse|null Returns the search response in case of success, null otherwise.
     */
    public static function deserializeSearchResponse(string $rawResponse): ?FeatureCollectionResponse {
        return static::deserializeFeatureCollectionResponse($rawResponse);
    }

    /**
     * Get the methods.
     *
     * @return string[] Returns the methods.
     */
    protected static function getMethods(): array {

        return [
            AbstractCsvResponse::RESULT_CITY        => "setCity",
            AbstractCsvResponse::RESULT_CITYCODE    => "setCityCode",
            AbstractCsvResponse::RESULT_CONTEXT     => "setContext",
            AbstractCsvResponse::RESULT_DISTANCE    => "setDistance",
            AbstractCsvResponse::RESULT_DISTRICT    => "setDistrict",
            AbstractCsvResponse::RESULT_HOUSENUMBER => "setHouseNumber",
            AbstractCsvResponse::RESULT_ID          => "setId",
            AbstractCsvResponse::RESULT_LABEL       => "setLabel",
            AbstractCsvResponse::RESULT_LATITUDE    => "setLatitude",
            AbstractCsvResponse::RESULT_LONGITUDE   => "setLongitude",
            AbstractCsvResponse::RESULT_NAME        => "setName",
            AbstractCsvResponse::RESULT_OLDCITY     => "setOldCity",
            AbstractCsvResponse::RESULT_OLDCITYCODE => "setOldCityCode",
            AbstractCsvResponse::RESULT_POSTCODE    => "setPostcode",
            AbstractCsvResponse::RESULT_SCORE       => "setScore",
            AbstractCsvResponse::RESULT_STREET      => "setStreet",
            AbstractCsvResponse::RESULT_TYPE        => "setType",
        ];
    }
}
