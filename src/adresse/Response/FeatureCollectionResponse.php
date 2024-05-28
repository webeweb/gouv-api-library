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

namespace WBW\Library\GouvApi\Adresse\Response;

use WBW\Library\GeoJson\Model\FeatureCollection;
use WBW\Library\GouvApi\Common\Response\AbstractResponse as BaseResponse;

/**
 * Feature collection response.
 *
 * @author webeweb <https://github.com/webeweb>
 * @package WBW\Library\GouvApi\Adresse\Response
 */
class FeatureCollectionResponse extends BaseResponse {

    /**
     * Feature collection.
     *
     * @var FeatureCollection|null
     */
    protected $featureCollection;

    /**
     * Constructor.
     */
    public function __construct() {
        // NOTHING TO DO
    }

    /**
     * Get the feature collection.
     *
     * @return FeatureCollection|null Returns the feature collection.
     */
    public function getFeatureCollection(): ?FeatureCollection {
        return $this->featureCollection;
    }

    /**
     * Set the feature collection
     *
     * @param FeatureCollection|null $featureCollection
     * @return $this
     */
    public function setFeatureCollection(?FeatureCollection $featureCollection): FeatureCollectionResponse {
        $this->featureCollection = $featureCollection;
        return $this;
    }
}
