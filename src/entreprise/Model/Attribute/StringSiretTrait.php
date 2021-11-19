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
 * String SIRET trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\GouvApi\Entreprise\Model\Attribute
 */
trait StringSiretTrait
{

    /**
     * SIRET.
     *
     * @var string|null
     */
    protected $siret;

    /**
     * Get the SIRET.
     *
     * @return string|null Returns the SIRET.
     */
    public function getSiret(): ?string {
        return $this->siret;
    }

    /**
     * Set the SIRET.
     *
     * @param string|null $siret The SIRET.
     * @return self Returns this instance.
     */
    public function setSiret(?string $siret): self {
        $this->siret = $siret;
        return $this;
    }
}