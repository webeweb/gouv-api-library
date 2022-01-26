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
 * String statut diffusion trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\GouvApi\Entreprise\Model\Attribute
 */
trait StringStatutDiffusionTrait {

    /**
     * Statut diffusion.
     *
     * @var string|null
     */
    protected $statutDiffusion;

    /**
     * Get the statut diffusion.
     *
     * @return string|null Returns the statut diffusion.
     */
    public function getStatutDiffusion(): ?string {
        return $this->statutDiffusion;
    }

    /**
     * Set the statut diffusion.
     *
     * @param string|null $statutDiffusion The statut diffusion.
     * @return self Returns this instance.
     */
    public function setStatutDiffusion(?string $statutDiffusion): self {
        $this->statutDiffusion = $statutDiffusion;
        return $this;
    }
}
