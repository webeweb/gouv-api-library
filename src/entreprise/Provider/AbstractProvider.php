<?php

/*
 * This file is part of the gouv-api-library package.
 *
 * (c) 2021 WEBEWEB
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace WBW\Library\GouvApi\Entreprise\Provider;

use WBW\Library\GouvApi\Common\Provider\AbstractProvider as BaseProvider;

/**
 * Abstract Provider.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\GouvApi\Entreprise\Provider
 * @abstract
 */
abstract class AbstractProvider extends BaseProvider {

    /**
     * Endpoint path.
     *
     * @var string
     */
    const ENDPOINT_PATH = "https://entreprise.data.gouv.fr";

    /**
     * {@inheritDoc}
     */
    public function getEndpointPath(): string {
        return self::ENDPOINT_PATH;
    }

    /**
     * Get the version.
     *
     * @return int Returns the version.
     */
    abstract public function getVersion(): int;
}