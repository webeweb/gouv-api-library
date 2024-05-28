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

namespace WBW\Library\GouvApi\Calendrier\Tests\Serializer;

use WBW\Library\GouvApi\Calendrier\Response\JoursFeriesResponse;
use WBW\Library\GouvApi\Calendrier\Serializer\ResponseDeserializer;
use WBW\Library\GouvApi\Calendrier\Tests\AbstractTestCase;

/**
 * Response deserializer test.
 *
 * @author webeweb <https://github.com/webeweb>
 * @package WBW\Library\GouvApi\Calendrier\Tests\Serializer
 */
class ResponseDeserializerTest extends AbstractTestCase {

    /**
     * Test deserializeJoursFeriesResponse()
     *
     * @return void
     */
    public function testDeserializeJoursFeriesResponse(): void {

        // Set a filename mock.
        $filename = realpath(__DIR__ . "/ResponseDeserializerTest.testDeserializeJoursFeriesResponse.json");

        $res = ResponseDeserializer::deserializeJoursFeriesResponse(file_get_contents($filename));
        $this->assertInstanceOf(JoursFeriesResponse::class, $res);

        $this->assertCount(11, $res->getJoursFeries());

        $this->assertEquals("01/01/2021", $res->getJoursFeries()[0]->getDate()->format("d/m/Y"));
        $this->assertEquals("1er janvier", $res->getJoursFeries()[0]->getNom());
    }

    /**
     * Test deserializeJoursFeriesResponse()
     *
     * @return void
     */
    public function testDeserializeJoursFeriesResponseWithBadRawResponse(): void {

        $res = ResponseDeserializer::deserializeJoursFeriesResponse("");
        $this->assertInstanceOf(JoursFeriesResponse::class, $res);

        $this->assertCount(0, $res->getJoursFeries());
    }
}
