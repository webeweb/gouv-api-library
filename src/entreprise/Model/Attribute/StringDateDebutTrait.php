<?php

/*
 * This file is part of the gouv-api-library package.
 *
 * (c) 2021 WEBEWEB
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace WBW\Library\GouvAPI\Entreprise\Model\Attribute;

/**
 * String date début trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\GouvAPI\Entreprise\Model\Attribute
 */
trait StringDateDebutTrait {

    /**
     * Date début.
     *
     * @var string|null
     */
    protected $dateDebut;

    /**
     * Get the date début.
     *
     * @return string|null Returns the date début.
     */
    public function getDateDebut(): ?string {
        return $this->dateDebut;
    }

    /**
     * Set the date début.
     *
     * @param string|null $dateDebut The date début.
     * @return self Returns this instance.
     */
    public function setDateDebut(?string $dateDebut): self {
        $this->dateDebut = $dateDebut;
        return $this;
    }
}