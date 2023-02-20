<?php

/*
 * This file is part of the gouv-api-library package.
 *
 * (c) 2021 WEBEWEB
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace WBW\Library\GouvApi\Entreprise\Traits\Strings;

/**
 * String date création trait.
 *
 * @author webeweb <https://github.com/webeweb>
 * @package WBW\Library\GouvApi\Entreprise\Traits\Strings
 */
trait StringDateCreationTrait {

    /**
     * Date création.
     *
     * @var string|null
     */
    protected $dateCreation;

    /**
     * Get the date création.
     *
     * @return string|null Returns the date création.
     */
    public function getDateCreation(): ?string {
        return $this->dateCreation;
    }

    /**
     * Set the date création.
     *
     * @param string|null $dateCreation The date création.
     * @return self Returns this instance.
     */
    public function setDateCreation(?string $dateCreation): self {
        $this->dateCreation = $dateCreation;
        return $this;
    }
}
