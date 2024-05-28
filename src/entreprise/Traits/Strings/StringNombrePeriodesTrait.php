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

namespace WBW\Library\GouvApi\Entreprise\Traits\Strings;

/**
 * String nombre périodes trait.
 *
 * @author webeweb <https://github.com/webeweb>
 * @package WBW\Library\GouvApi\Entreprise\Traits\Integers
 */
trait StringNombrePeriodesTrait {

    /**
     * Nombre périodes.
     *
     * @var string|null
     */
    protected $nombrePeriodes;

    /**
     * Get the nombre périodes.
     *
     * @return string|null Returns the nombre périodes.
     */
    public function getNombrePeriodes(): ?string {
        return $this->nombrePeriodes;
    }

    /**
     * Set the nombres périodes.
     *
     * @param string|null $nombrePeriodes The nombre périodes.
     * @return self Returns this instance.
     */
    public function setNombrePeriodes(?string $nombrePeriodes): self {
        $this->nombrePeriodes = $nombrePeriodes;
        return $this;
    }
}
