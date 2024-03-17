<?php

/*
 * This file is part of the gouv-api-library package.
 *
 * (c) 2020 WEBEWEB
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace WBW\Library\GouvApi\Adresse\Request;

use WBW\Library\GouvApi\Adresse\Serializer\RequestSerializer;
use WBW\Library\GouvApi\Common\Request\AbstractRequest;
use WBW\Library\Traits\Floats\FloatLatTrait;
use WBW\Library\Traits\Floats\FloatLonTrait;

/**
 * Reverse request.
 *
 * @author webeweb <https://github.com/webeweb>
 * @package WBW\Library\GouvApi\Adresse\Request
 */
class ReverseRequest extends AbstractRequest {

    use FloatLatTrait;
    use FloatLonTrait;

    /**
     * Resource path.
     *
     * @var string
     */
    const RESOURCE_PATH = "/reverse/";

    /**
     * Constructor.
     *
     * @param float|null $lat The latitude.
     * @param float|null $lon The longitude.
     */
    public function __construct(float $lat = null, float $lon = null) {
        parent::__construct();

        $this->setLat($lat);
        $this->setLon($lon);
    }


    /**
     * {@inheritDoc}
     */
    public function serializeRequest(): array {
        return RequestSerializer::serializeReverseRequest($this);
    }
    /**
     * {@inheritDoc}
     */
    public function getResourcePath(): string {
        return self::RESOURCE_PATH;
    }
}
