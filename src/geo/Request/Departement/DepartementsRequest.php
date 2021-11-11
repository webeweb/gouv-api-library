<?php

/*
 * This file is part of the gouv-api-library package.
 *
 * (c) 2020 WEBEWEB
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace WBW\Library\GouvAPI\Geo\Request\Departement;

use WBW\Library\GouvAPI\Geo\Request\AbstractRequest;
use WBW\Library\Provider\API\SubstituableRequestInterface;

/**
 * Départements request.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\GouvAPI\Geo\Request\Departement
 */
class DepartementsRequest extends AbstractRequest implements SubstituableRequestInterface {

    /**
     * Resource path.
     *
     * @avr string
     */
    const RESOURCE_PATH = "/departements:code";

    /**
     * {@inheritDoc}
     */
    public function getResourcePath(): string {
        return self::RESOURCE_PATH;
    }

    /**
     * {@inheritdoc}
     */
    public function getSubstituables(): array {
        return [
            ":code" => null !== $this->getCode() ? "/{$this->getCode()}" : "",
        ];
    }
}