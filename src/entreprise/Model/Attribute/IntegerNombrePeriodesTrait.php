<?php

/*
 * This file is part of the gouv-api-library package.
 *
 * (c) 2021 WEBEWEB
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace WBW\Library\GouvApi\Entreprise\Model\Attribute;

/**
 * Integer nombre periodes trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\GouvApi\Entreprise\Model\Attribute
 */
trait IntegerNombrePeriodesTrait {

    /**
     * Nombre périodes.
     *
     * @var int|null
     */
    protected $nombrePeriodes;

    /**
     * Get the nombre périodes.
     *
     * @return int|null Returns the nombre périodes.
     */
    public function getNombrePeriodes(): ?int {
        return $this->nombrePeriodes;
    }

    /**
     * Set the nombres périodes.
     *
     * @param int|null $nombrePeriodes The nombre périodes.
     * @return self Returns this instance.
     */
    public function setNombrePeriodes(?int $nombrePeriodes): self {
        $this->nombrePeriodes = $nombrePeriodes;
        return $this;
    }
}