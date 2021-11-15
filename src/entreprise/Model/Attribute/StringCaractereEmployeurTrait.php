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
 * String caractère employeur trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\GouvAPI\Entreprise\Model\Attribute
 */
trait StringCaractereEmployeurTrait {

    /**
     * Caractère employeur.
     *
     * @var string|null
     */
    protected $caractereEmployeur;

    /**
     * Get the caractère employeur.
     *
     * @return string|null Returns the caractère employeur.
     */
    public function getCaractereEmployeur(): ?string {
        return $this->caractereEmployeur;
    }

    /**
     * Set the caractère employeur.
     *
     * @param string|null $caractereEmployeur The caractère employeur.
     * @return self Returns this instance.
     */
    public function setCaractereEmployeur(?string $caractereEmployeur): self {
        $this->caractereEmployeur = $caractereEmployeur;
        return $this;
    }
}