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

namespace WBW\Library\GouvApi\Adresse\Response;

/**
 * Abstract CVS response.
 *
 * @author webeweb <https://github.com/webeweb>
 * @package WBW\Library\GouvApi\Adresse\Response
 * @abstract
 */
abstract class AbstractCsvResponse extends AdressesResponse {

    /**
     * Result "city".
     *
     * @var string
     */
    public const RESULT_CITY = "result_city";

    /**
     * Result "city code".
     *
     * @var string
     */
    public const RESULT_CITYCODE = "result_citycode";

    /**
     * Result "context".
     *
     * @var string
     */
    public const RESULT_CONTEXT = "result_context";

    /**
     * Result "distance".
     *
     * @var string
     */
    public const RESULT_DISTANCE = "result_distance";

    /**
     * Result "district".
     *
     * @var string
     */
    public const RESULT_DISTRICT = "result_district";

    /**
     * Result "house number".
     *
     * @var string
     */
    public const RESULT_HOUSENUMBER = "result_housenumber";

    /**
     * Result "id".
     *
     * @var string
     */
    public const RESULT_ID = "result_id";

    /**
     * Result "label".
     *
     * @var string
     */
    public const RESULT_LABEL = "result_label";

    /**
     * Result "latitude".
     *
     * @var string
     */
    public const RESULT_LATITUDE = "result_latitude";

    /**
     * Result "longitude".
     *
     * @var string
     */
    public const RESULT_LONGITUDE = "result_longitude";

    /**
     * Result "name".
     *
     * @var string
     */
    public const RESULT_NAME = "result_name";

    /**
     * Result "old city".
     *
     * @var string
     */
    public const RESULT_OLDCITY = "result_oldcity";

    /**
     * Result "old city code".
     *
     * @var string
     */
    public const RESULT_OLDCITYCODE = "result_oldcitycode";

    /**
     * Result "postcode".
     *
     * @var string
     */
    public const RESULT_POSTCODE = "result_postcode";

    /**
     * Result "score".
     *
     * @var string
     */
    public const RESULT_SCORE = "result_score";

    /**
     * Result "street".
     *
     * @var string
     */
    public const RESULT_STREET = "result_street";

    /**
     * Result "type".
     *
     * @var string
     */
    public const RESULT_TYPE = "result_type";

    /**
     * Enumerate the result columns.
     *
     * @return string[] Returns the result columns.
     */
    public static function enumResultColumns(): array {

        return [
            self::RESULT_CITY,
            self::RESULT_CITYCODE,
            self::RESULT_CONTEXT,
            self::RESULT_DISTANCE,
            self::RESULT_DISTRICT,
            self::RESULT_HOUSENUMBER,
            self::RESULT_ID,
            self::RESULT_LABEL,
            self::RESULT_LATITUDE,
            self::RESULT_LONGITUDE,
            self::RESULT_NAME,
            self::RESULT_OLDCITY,
            self::RESULT_OLDCITYCODE,
            self::RESULT_POSTCODE,
            self::RESULT_SCORE,
            self::RESULT_STREET,
            self::RESULT_TYPE,
        ];
    }
}
