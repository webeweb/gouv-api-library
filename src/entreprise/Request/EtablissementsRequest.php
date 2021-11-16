<?php

/*
 * This file is part of the gouv-api-library package.
 *
 * (c) 2021 WEBEWEB
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace WBW\Library\GouvAPI\Entreprise\Request;

use WBW\Library\GouvAPI\Entreprise\Model\Attribute\StringSiretTrait;
use WBW\Library\Provider\API\SubstituableRequestInterface;

/**
 * Etablissements request.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\GouvAPI\Entreprise\Request
 */
class EtablissementsRequest extends AbstractRequest implements SubstituableRequestInterface {

    use StringSiretTrait;

    /**
     * Resource path.
     *
     * @avr string
     */
    const RESOURCE_PATH = "/api/sirene/v:version/etablissements:siret";

    /**
     * Constructor.
     *
     * @param string|null $siren The SIRET.
     */
    public function __construct(string $siren = null) {
        $this->setSiret($siren);
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