<?php

/*
 * This file is part of the gouv-api-library package.
 *
 * (c) 2021 WEBEWEB
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace WBW\Library\GouvApi\Entreprise\Request;

use WBW\Library\GouvApi\Entreprise\Model\Attribute\StringSiretTrait;
use WBW\Library\Provider\Api\SubstituableRequestInterface;

/**
 * Etablissements request.
 *
 * @author webeweb <https://github.com/webeweb>
 * @package WBW\Library\GouvApi\Entreprise\Request
 */
class EtablissementsRequest extends AbstractRequest implements SubstituableRequestInterface {

    use StringSiretTrait;

    /**
     * Resource path.
     *
     * @avr string
     */
    const RESOURCE_PATH = "/api/sirene/v3/etablissements:siret";

    /**
     * Constructor.
     *
     * @param string|null $siret The SIRET.
     */
    public function __construct(string $siret = null) {
        parent::__construct();

        $this->setSiret($siret);
    }

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
            ":siret" => null !== $this->getSiret() ? "/{$this->getSiret()}" : "",
        ];
    }
}
