<?php

/*
 * This file is part of the gouv-api-library package.
 *
 * (c) 2024 WEBEWEB
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

declare(strict_types = 1);

namespace WBW\Library\GouvApi\Adresse\Tests\Response;

use WBW\Library\GeoJson\Model\FeatureCollection;
use WBW\Library\GouvApi\Adresse\Response\FeatureCollectionResponse;
use WBW\Library\GouvApi\Adresse\Tests\AbstractTestCase;

/**
 * Feature collection response test.
 *
 * @author webeweb <https://github.com/webeweb>
 * @package WBW\Library\GouvApi\Adresse\Tests\Response
 */
class FeatureCollectionResponseTest extends AbstractTestCase {

    /**
     * Test setFeatureCollection()
     *
     * @return void
     */
    public function testSetFeatureCollection(): void {

        // Set a Feature collection mock.
        $featureCollection = new FeatureCollection();

        $obj = new FeatureCollectionResponse();

        $obj->setFeatureCollection($featureCollection);
        $this->assertSame($featureCollection, $obj->getFeatureCollection());
    }
}
