<?php

declare(strict_types = 1);

/*
 * This file is part of the gouv-api-library package.
 *
 * (c) 2021 WEBEWEB
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace WBW\Library\GouvApi\Entreprise\Response;

use WBW\Library\GouvApi\Entreprise\Model\UniteLegale;

/**
 * Unités légales response.
 *
 * @author webeweb <https://github.com/webeweb>
 * @package WBW\Library\GouvApi\Entreprise\Response
 */
class UnitesLegalesResponse extends AbstractResponse {

    /**
     * Unités légales.
     *
     * @var UniteLegale[]
     */
    private $unitesLegales;

    /**
     * Constructor.
     */
    public function __construct() {
        parent::__construct();

        $this->setUnitesLegales([]);
    }

    /**
     * Add an unité légale.
     *
     * @param UniteLegale $uniteLegale The unité légale.
     * @return UnitesLegalesResponse Returns this unités légales response.
     */
    public function addUniteLegale(UniteLegale $uniteLegale): UnitesLegalesResponse {
        $this->unitesLegales[] = $uniteLegale;
        return $this;
    }

    /**
     * Get the unités légales.
     *
     * @return UniteLegale[] Returns the unités légales.
     */
    public function getUnitesLegales(): array {
        return $this->unitesLegales;
    }

    /**
     * Set the unités légales.
     *
     * @param UniteLegale[] $unitesLegales The unités légales.
     * @return UnitesLegalesResponse Returns this unités légales response.
     */
    protected function setUnitesLegales(array $unitesLegales): UnitesLegalesResponse {
        $this->unitesLegales = $unitesLegales;
        return $this;
    }
}
