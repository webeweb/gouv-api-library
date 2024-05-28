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

namespace WBW\Library\GouvApi\Adresse\Tests\Response;

use WBW\Library\GouvApi\Adresse\Response\AbstractCsvResponse;
use WBW\Library\GouvApi\Adresse\Tests\AbstractTestCase;
use WBW\Library\GouvApi\Adresse\Tests\Fixtures\Response\TestCsvResponse;

/**
 * Abstract CSV response test.
 *
 * @author webeweb <https://github.com/webeweb>
 * @package WBW\Library\GouvApi\Adresse\Tests\Response
 */
class AbstractCsvResponseTest extends AbstractTestCase {

    /**
     * Test enumResultColumns()
     *
     * @retun void
     */
    public function testEnumResultColumns(): void {

        $res = [
            AbstractCsvResponse::RESULT_CITY,
            AbstractCsvResponse::RESULT_CITYCODE,
            AbstractCsvResponse::RESULT_CONTEXT,
            AbstractCsvResponse::RESULT_DISTANCE,
            AbstractCsvResponse::RESULT_DISTRICT,
            AbstractCsvResponse::RESULT_HOUSENUMBER,
            AbstractCsvResponse::RESULT_ID,
            AbstractCsvResponse::RESULT_LABEL,
            AbstractCsvResponse::RESULT_LATITUDE,
            AbstractCsvResponse::RESULT_LONGITUDE,
            AbstractCsvResponse::RESULT_NAME,
            AbstractCsvResponse::RESULT_OLDCITY,
            AbstractCsvResponse::RESULT_OLDCITYCODE,
            AbstractCsvResponse::RESULT_POSTCODE,
            AbstractCsvResponse::RESULT_SCORE,
            AbstractCsvResponse::RESULT_STREET,
            AbstractCsvResponse::RESULT_TYPE,
        ];
        $this->assertEquals($res, AbstractCsvResponse::enumResultColumns());
    }

    /**
     * Test __construct()
     *
     * @return void
     */
    public function test__construct(): void {

        $this->assertEquals("result_city", AbstractCsvResponse::RESULT_CITY);
        $this->assertEquals("result_citycode", AbstractCsvResponse::RESULT_CITYCODE);
        $this->assertEquals("result_context", AbstractCsvResponse::RESULT_CONTEXT);
        $this->assertEquals("result_distance", AbstractCsvResponse::RESULT_DISTANCE);
        $this->assertEquals("result_district", AbstractCsvResponse::RESULT_DISTRICT);
        $this->assertEquals("result_housenumber", AbstractCsvResponse::RESULT_HOUSENUMBER);
        $this->assertEquals("result_id", AbstractCsvResponse::RESULT_ID);
        $this->assertEquals("result_label", AbstractCsvResponse::RESULT_LABEL);
        $this->assertEquals("result_latitude", AbstractCsvResponse::RESULT_LATITUDE);
        $this->assertEquals("result_longitude", AbstractCsvResponse::RESULT_LONGITUDE);
        $this->assertEquals("result_name", AbstractCsvResponse::RESULT_NAME);
        $this->assertEquals("result_oldcity", AbstractCsvResponse::RESULT_OLDCITY);
        $this->assertEquals("result_oldcitycode", AbstractCsvResponse::RESULT_OLDCITYCODE);
        $this->assertEquals("result_postcode", AbstractCsvResponse::RESULT_POSTCODE);
        $this->assertEquals("result_score", AbstractCsvResponse::RESULT_SCORE);
        $this->assertEquals("result_street", AbstractCsvResponse::RESULT_STREET);
        $this->assertEquals("result_type", AbstractCsvResponse::RESULT_TYPE);

        $obj = new TestCsvResponse();

        $this->assertEquals([], $obj->getAdresses());
    }
}
