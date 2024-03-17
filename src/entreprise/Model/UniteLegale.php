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

namespace WBW\Library\GouvApi\Entreprise\Model;

use WBW\Library\GouvApi\Common\Traits\Strings\StringNomTrait;
use WBW\Library\GouvApi\Entreprise\Traits\Strings\StringActivitePrincipaleTrait;
use WBW\Library\GouvApi\Entreprise\Traits\Strings\StringAnneeEffectifsTrait;
use WBW\Library\GouvApi\Entreprise\Traits\Strings\StringCaractereEmployeurTrait;
use WBW\Library\GouvApi\Entreprise\Traits\Strings\StringCreatedAtTrait;
use WBW\Library\GouvApi\Entreprise\Traits\Strings\StringDateCreationTrait;
use WBW\Library\GouvApi\Entreprise\Traits\Strings\StringDateDebutTrait;
use WBW\Library\GouvApi\Entreprise\Traits\Strings\StringDateDernierTraitementTrait;
use WBW\Library\GouvApi\Entreprise\Traits\Strings\StringEtatAdministratifTrait;
use WBW\Library\GouvApi\Entreprise\Traits\Strings\StringNombrePeriodesTrait;
use WBW\Library\GouvApi\Entreprise\Traits\Strings\StringNomenclatureActivitePrincipaleTrait;
use WBW\Library\GouvApi\Entreprise\Traits\Strings\StringSirenTrait;
use WBW\Library\GouvApi\Entreprise\Traits\Strings\StringStatutDiffusionTrait;
use WBW\Library\GouvApi\Entreprise\Traits\Strings\StringTrancheEffectifsTrait;
use WBW\Library\GouvApi\Entreprise\Traits\Strings\StringUpdatedAtTrait;
use WBW\Library\Traits\Integers\IntegerIdTrait;

/**
 * Unité légale.
 *
 * @author webeweb <https://github.com/webeweb>
 * @package WBW\Library\GouvApi\Entreprise\Model
 */
class UniteLegale {

    use IntegerIdTrait {
        setId as public;
    }
    use StringAnneeEffectifsTrait;
    use StringNombrePeriodesTrait;
    use StringActivitePrincipaleTrait;
    use StringCaractereEmployeurTrait;
    use StringCreatedAtTrait;
    use StringDateCreationTrait;
    use StringDateDebutTrait;
    use StringDateDernierTraitementTrait;
    use StringEtatAdministratifTrait;
    use StringNomenclatureActivitePrincipaleTrait;
    use StringNomTrait;
    use StringSirenTrait;
    use StringStatutDiffusionTrait;
    use StringTrancheEffectifsTrait;
    use StringUpdatedAtTrait;

    /**
     * Année catégorie entreprise.
     *
     * @var string|null
     */
    protected $anneeCategorieEntreprise;

    /**
     * Catégorie entreprise.
     *
     * @var string|null
     */
    protected $categorieEntreprise;

    /**
     * Catégorie juridique.
     *
     * @var string|null
     */
    protected $categorieJuridique;

    /**
     * Date fin.
     *
     * @var string|null
     */
    protected $dateFin;

    /**
     * Dénomination.
     *
     * @var string|null
     */
    protected $denomination;

    /**
     * Dénomination usuelle 1.
     *
     * @var string|null
     */
    protected $denominationUsuelle1;

    /**
     * Dénomination usuelle 2.
     *
     * @var string|null
     */
    protected $denominationUsuelle2;

    /**
     * Dénomination usuelle 3.
     *
     * @var string|null
     */
    protected $denominationUsuelle3;

    /**
     * Economie sociale solidaire.
     *
     * @var string|null
     */
    protected $economieSocialeSolidaire;

    /**
     * Etablissement siège.
     *
     * @var Etablissement|null
     */
    protected $etablissementSiege;

    /**
     * Identifiant association.
     *
     * @var string|null
     */
    protected $identifiantAssociation;

    /**
     * NIC siègge.
     *
     * @var string|null
     */
    protected $nicSiege;

    /**
     * Nom usage.
     *
     * @var string|null
     */
    protected $nomUsage;

    /**
     * Numéro TVA intra.
     *
     * @var string|null
     */
    protected $numeroTvaIntra;

    /**
     * Prénom 1.
     *
     * @var string|null
     */
    protected $prenom1;

    /**
     * Prénom 2.
     *
     * @var string|null
     */
    protected $prenom2;

    /**
     * Prénom 3.
     *
     * @var string|null
     */
    protected $prenom3;

    /**
     * Prénom 4.
     *
     * @var string|null
     */
    protected $prenom4;

    /**
     * Prénom usuel.
     *
     * @var string|null
     */
    protected $prenomUsuel;

    /**
     * Pseudonyme.
     *
     * @var string|null
     */
    protected $pseudonyme;

    /**
     * Sexe.
     *
     * @var string|null
     */
    protected $sexe;

    /**
     * Sigle.
     *
     * @var string|null
     */
    protected $sigle;

    /**
     * Unite purgée.
     *
     * @var string|null
     */
    protected $unitePurgee;

    /**
     * Constructor.
     */
    public function __construct() {
        // NOTHING TO DO
    }

    /**
     * Get the année catégorie entreprise.
     *
     * @return string|null Returns the année catégorie entreprise.
     */
    public function getAnneeCategorieEntreprise(): ?string {
        return $this->anneeCategorieEntreprise;
    }

    /**
     * Get the catégorie entreprise.
     *
     * @return string|null Returns the catégorie entreprise.
     */
    public function getCategorieEntreprise(): ?string {
        return $this->categorieEntreprise;
    }

    /**
     * Get the catégorie juridique.
     *
     * @return string|null Returns the catégorie juridique.
     */
    public function getCategorieJuridique(): ?string {
        return $this->categorieJuridique;
    }

    /**
     * Get the date fin.
     *
     * @return string|null Returns the date fin.
     */
    public function getDateFin(): ?string {
        return $this->dateFin;
    }

    /**
     * Get the dénomination.
     *
     * @return string|null Returns the dénomination.
     */
    public function getDenomination(): ?string {
        return $this->denomination;
    }

    /**
     * Get the dénomination usuelle 1.
     *
     * @return string|null Returns the dénomination usuelle 1.
     */
    public function getDenominationUsuelle1(): ?string {
        return $this->denominationUsuelle1;
    }

    /**
     * Get the dénomination usuelle 2.
     *
     * @return string|null Returns the dénomination usuelle 2.
     */
    public function getDenominationUsuelle2(): ?string {
        return $this->denominationUsuelle2;
    }

    /**
     * Get the dénomination usuelle 3.
     *
     * @return string|null Returns the dénomination usuelle 3.
     */
    public function getDenominationUsuelle3(): ?string {
        return $this->denominationUsuelle3;
    }

    /**
     * Get the économie sociale solidaire.
     *
     * @return string|null Returns the économie sociale solidaire.
     */
    public function getEconomieSocialeSolidaire(): ?string {
        return $this->economieSocialeSolidaire;
    }

    /**
     * Get the établissement siège.
     *
     * @return Etablissement|null Returns the établissement siège.
     */
    public function getEtablissementSiege(): ?Etablissement {
        return $this->etablissementSiege;
    }

    /**
     * Get the identifiant association.
     *
     * @return string|null Returns the identifiant association.
     */
    public function getIdentifiantAssociation(): ?string {
        return $this->identifiantAssociation;
    }

    /**
     * Get the NIC siège.
     *
     * @return string|null Returns the NIC siège.
     */
    public function getNicSiege(): ?string {
        return $this->nicSiege;
    }

    /**
     * Get the nom usage.
     *
     * @return string|null Returns the nom usage.
     */
    public function getNomUsage(): ?string {
        return $this->nomUsage;
    }

    /**
     * Get the numéro TVA intra.
     *
     * @return string|null
     */
    public function getNumeroTvaIntra(): ?string {
        return $this->numeroTvaIntra;
    }

    /**
     * Get the prénom 1.
     *
     * @return string|null Returns the prénom 1.
     */
    public function getPrenom1(): ?string {
        return $this->prenom1;
    }

    /**
     * Get the prénom 2.
     *
     * @return string|null Returns the prénom 2.
     */
    public function getPrenom2(): ?string {
        return $this->prenom2;
    }

    /**
     * Get the prénom 3.
     *
     * @return string|null Returns the prénom 3.
     */
    public function getPrenom3(): ?string {
        return $this->prenom3;
    }

    /**
     * Get the prénom 4.
     *
     * @return string|null Returns the prénom 4.
     */
    public function getPrenom4(): ?string {
        return $this->prenom4;
    }

    /**
     * Get the prénom usuel.
     *
     * @return string|null Returns the prénom usuel.
     */
    public function getPrenomUsuel(): ?string {
        return $this->prenomUsuel;
    }

    /**
     * Get the pseudonyme.
     *
     * @return string|null Returns the pseudonyme.
     */
    public function getPseudonyme(): ?string {
        return $this->pseudonyme;
    }

    /**
     * Get the sexe.
     *
     * @return string|null Returns the sexe.
     */
    public function getSexe(): ?string {
        return $this->sexe;
    }

    /**
     * Get the sigle.
     *
     * @return string|null Returns the sigle.
     */
    public function getSigle(): ?string {
        return $this->sigle;
    }

    /**
     * Get the unité purgée.
     *
     * @return string|null Returns the unité purgée.
     */
    public function getUnitePurgee(): ?string {
        return $this->unitePurgee;
    }

    /**
     * Set the année catégorie entreprise.
     *
     * @param string|null $anneeCategorieEntreprise The année catégorie entreprise.
     * @return UniteLegale Returns this unité légale.
     */
    public function setAnneeCategorieEntreprise(?string $anneeCategorieEntreprise): UniteLegale {
        $this->anneeCategorieEntreprise = $anneeCategorieEntreprise;
        return $this;
    }

    /**
     * Set the catégorie entreprise.
     *
     * @param string|null $categorieEntreprise The catégorie entreprise.
     * @return UniteLegale Returns this unité légale.
     */
    public function setCategorieEntreprise(?string $categorieEntreprise): UniteLegale {
        $this->categorieEntreprise = $categorieEntreprise;
        return $this;
    }

    /**
     * Set the catégorie juridique.
     *
     * @param string|null $categorieJuridique The catégorie juridique.
     * @return UniteLegale Returns this unité légale.
     */
    public function setCategorieJuridique(?string $categorieJuridique): UniteLegale {
        $this->categorieJuridique = $categorieJuridique;
        return $this;
    }

    /**
     * Set the date fin.
     *
     * @param string|null $dateFin The date fin.
     * @return UniteLegale Returns this unité légale.
     */
    public function setDateFin(?string $dateFin): UniteLegale {
        $this->dateFin = $dateFin;
        return $this;
    }

    /**
     * Set the dénomination.
     *
     * @param string|null $denomination The dénomination.
     * @return UniteLegale Returns this unité légale.
     */
    public function setDenomination(?string $denomination): UniteLegale {
        $this->denomination = $denomination;
        return $this;
    }

    /**
     * Set the dénomination usuelle 1.
     *
     * @param string|null $denominationUsuelle1 The dénomination usuelle 1.
     * @return UniteLegale Returns this unité légale.
     */
    public function setDenominationUsuelle1(?string $denominationUsuelle1): UniteLegale {
        $this->denominationUsuelle1 = $denominationUsuelle1;
        return $this;
    }

    /**
     * Set the dénomination usuelle 2.
     *
     * @param string|null $denominationUsuelle2 The dénomination usuelle 2.
     * @return UniteLegale Returns this unité légale.
     */
    public function setDenominationUsuelle2(?string $denominationUsuelle2): UniteLegale {
        $this->denominationUsuelle2 = $denominationUsuelle2;
        return $this;
    }

    /**
     * Set the dénomination usuelle 3.
     *
     * @param string|null $denominationUsuelle3 The dénomination usuelle 3.
     * @return UniteLegale Returns this unité légale.
     */
    public function setDenominationUsuelle3(?string $denominationUsuelle3): UniteLegale {
        $this->denominationUsuelle3 = $denominationUsuelle3;
        return $this;
    }

    /**
     * Set the économie sociale solidaire.
     *
     * @param string|null $economieSocialeSolidaire The économie sociale solidaire.
     * @return UniteLegale Returns this unité légale.
     */
    public function setEconomieSocialeSolidaire(?string $economieSocialeSolidaire): UniteLegale {
        $this->economieSocialeSolidaire = $economieSocialeSolidaire;
        return $this;
    }

    /**
     * Set the établissement siège.
     *
     * @param Etablissement|null $etablissementSiege The établissement siège.
     * @return UniteLegale Returns this unité légale.
     */
    public function setEtablissementSiege(?Etablissement $etablissementSiege): UniteLegale {
        $this->etablissementSiege = $etablissementSiege;
        return $this;
    }

    /**
     * Set the identifiant association.
     *
     * @param string|null $identifiantAssociation The identifiant association.
     * @return UniteLegale Returns this unité légale.
     */
    public function setIdentifiantAssociation(?string $identifiantAssociation): UniteLegale {
        $this->identifiantAssociation = $identifiantAssociation;
        return $this;
    }

    /**
     * Set the NIC siège.
     *
     * @param string|null $nicSiege The NIC siège.
     * @return UniteLegale Returns this unité légale.
     */
    public function setNicSiege(?string $nicSiege): UniteLegale {
        $this->nicSiege = $nicSiege;
        return $this;
    }

    /**
     * Set the nom usage.
     *
     * @param string|null $nomUsage The nom uasge.
     * @return UniteLegale Returns this unité légale.
     */
    public function setNomUsage(?string $nomUsage): UniteLegale {
        $this->nomUsage = $nomUsage;
        return $this;
    }

    /**
     * Set the numéro TVA intra.
     *
     * @param string|null $numeroTvaIntra The numéro TVA intra.
     * @return UniteLegale Returns this unité légale.
     */
    public function setNumeroTvaIntra(?string $numeroTvaIntra): UniteLegale {
        $this->numeroTvaIntra = $numeroTvaIntra;
        return $this;
    }

    /**
     * Set the prénom 1.
     *
     * @param string|null $prenom1 The prénom 1.
     * @return UniteLegale Returns this unité légale.
     */
    public function setPrenom1(?string $prenom1): UniteLegale {
        $this->prenom1 = $prenom1;
        return $this;
    }

    /**
     * Set the prénom 2.
     *
     * @param string|null $prenom2 The prénom 2.
     * @return UniteLegale Returns this unité légale.
     */
    public function setPrenom2(?string $prenom2): UniteLegale {
        $this->prenom2 = $prenom2;
        return $this;
    }

    /**
     * Set the prénom 3.
     *
     * @param string|null $prenom3 The prénom 3.
     * @return UniteLegale Returns this unité légale.
     */
    public function setPrenom3(?string $prenom3): UniteLegale {
        $this->prenom3 = $prenom3;
        return $this;
    }

    /**
     * Set the prénom 4.
     *
     * @param string|null $prenom4 The prénom 4.
     * @return UniteLegale Returns this unité légale.
     */
    public function setPrenom4(?string $prenom4): UniteLegale {
        $this->prenom4 = $prenom4;
        return $this;
    }

    /**
     * Set the prnéom usuel.
     *
     * @param string|null $prenomUsuel The prénom usuel.
     * @return UniteLegale Returns this unité légale.
     */
    public function setPrenomUsuel(?string $prenomUsuel): UniteLegale {
        $this->prenomUsuel = $prenomUsuel;
        return $this;
    }

    /**
     * Set the pseudonyme.
     *
     * @param string|null $pseudonyme The pseudonyme.
     * @return UniteLegale Returns this unité légale.
     */
    public function setPseudonyme(?string $pseudonyme): UniteLegale {
        $this->pseudonyme = $pseudonyme;
        return $this;
    }

    /**
     * Set the sexe.
     *
     * @param string|null $sexe The sexe.
     * @return UniteLegale Returns this unité légale.
     */
    public function setSexe(?string $sexe): UniteLegale {
        $this->sexe = $sexe;
        return $this;
    }

    /**
     * Set the sigle.
     *
     * @param string|null $sigle The sigle.
     * @return UniteLegale Returns this unité légale.
     */
    public function setSigle(?string $sigle): UniteLegale {
        $this->sigle = $sigle;
        return $this;
    }

    /**
     * Set the unité purgée.
     *
     * @param string|null $unitePurgee The unité purgée.
     * @return UniteLegale Returns this unité légale.
     */
    public function setUnitePurgee(?string $unitePurgee): UniteLegale {
        $this->unitePurgee = $unitePurgee;
        return $this;
    }
}
