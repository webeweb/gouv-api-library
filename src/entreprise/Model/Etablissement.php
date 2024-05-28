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

namespace WBW\Library\GouvApi\Entreprise\Model;

use WBW\Library\Common\Traits\Integers\IntegerIdTrait;
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
use WBW\Library\GouvApi\Entreprise\Traits\Strings\StringSiretTrait;
use WBW\Library\GouvApi\Entreprise\Traits\Strings\StringStatutDiffusionTrait;
use WBW\Library\GouvApi\Entreprise\Traits\Strings\StringTrancheEffectifsTrait;
use WBW\Library\GouvApi\Entreprise\Traits\Strings\StringUpdatedAtTrait;

/**
 * Etablissement.
 *
 * @author webeweb <https://github.com/webeweb>
 * @package WBW\Library\GouvApi\Entreprise\Model
 */
class Etablissement {

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
    use StringSirenTrait;
    use StringSiretTrait;
    use StringStatutDiffusionTrait;
    use StringTrancheEffectifsTrait;
    use StringUpdatedAtTrait;

    /**
     * Activité principale registre métiers.
     *
     * @var string|null
     */
    protected $activitePrincipaleRegistreMetiers;

    /**
     * Code cedex.
     *
     * @var string|null
     */
    protected $codeCedex;

    /**
     * Code cedex 2.
     *
     * @var string|null
     */
    protected $codeCedex2;

    /**
     * Code commune.
     *
     * @var string|null
     */
    protected $codeCommune;

    /**
     * Code commune 2.
     *
     * @var string|null
     */
    protected $codeCommune2;

    /**
     * Code pays étranger.
     *
     * @var string|null
     */
    protected $codePaysEtranger;

    /**
     * Code pays étranger 2.
     *
     * @var string|null
     */
    protected $codePaysEtranger2;

    /**
     * Code postal.
     *
     * @var string|null
     */
    protected $codePostal;

    /**
     * Code postal 2.
     *
     * @var string|null
     */
    protected $codePostal2;

    /**
     * Complément adresse.
     *
     * @var string|null
     */
    protected $complementAdresse;

    /**
     * Complément adresse 2.
     *
     * @var string|null
     */
    protected $complementAdresse2;

    /**
     * Dénomination usuelle.
     *
     * @var string|null
     */
    protected $denominationUsuelle;

    /**
     * Distribution spéciale.
     *
     * @var string|null
     */
    protected $distributionSpeciale;

    /**
     * Distribution spéciale 2.
     *
     * @var string|null
     */
    protected $distributionSpeciale2;

    /**
     * Enseigne 1.
     *
     * @var string|null
     */
    protected $enseigne1;

    /**
     * Enseigne 2.
     *
     * @var string|null
     */
    protected $enseigne2;

    /**
     * Enseigne 3.
     *
     * @var string|null
     */
    protected $enseigne3;

    /**
     * Etablissement siège.
     *
     * @var string|null
     */
    protected $etablissementSiege;

    /**
     * Géo adresse.
     *
     * @var string|null
     */
    protected $geoAdresse;

    /**
     * Géo id.
     *
     * @var string|null
     */
    protected $geoId;

    /**
     * Géo l4.
     *
     * @var string|null
     */
    protected $geoL4;

    /**
     * Géo l5.
     *
     * @var string|null
     */
    protected $geoL5;

    /**
     * Géo ligne.
     *
     * @var string|null
     */
    protected $geoLigne;

    /**
     * Géo score.
     *
     * @var string|null
     */
    protected $geoScore;

    /**
     * Géo type.
     *
     * @var string|null
     */
    protected $geoType;

    /**
     * Indice répétition.
     *
     * @var string|null
     */
    protected $indiceRepetition;

    /**
     * Indice répétition 2.
     *
     * @var string|null
     */
    protected $indiceRepetition2;

    /**
     * Latitude.
     *
     * @var string|null
     */
    protected $latitude;

    /**
     * Libellé cedex.
     *
     * @var string|null
     */
    protected $libelleCedex;

    /**
     * Libellé cedex 2.
     *
     * @var string|null
     */
    protected $libelleCedex2;

    /**
     * Libellé commune.
     *
     * @var string|null
     */
    protected $libelleCommune;

    /**
     * Libellé commune 2.
     *
     * @var string|null
     */
    protected $libelleCommune2;

    /**
     * Libellé commune étranger.
     *
     * @var string|null
     */
    protected $libelleCommuneEtranger;

    /**
     * Libellé commune étranger 2.
     *
     * @var string|null
     */
    protected $libelleCommuneEtranger2;

    /**
     * Libellé pays étranger.
     *
     * @var string|null
     */
    protected $libellePaysEtranger;

    /**
     * Libellé pays étranger 2.
     *
     * @var string|null
     */
    protected $libellePaysEtranger2;

    /**
     * Libellé voie.
     *
     * @var string|null
     */
    protected $libelleVoie;

    /**
     * Libellé voie 2.
     *
     * @var string|null
     */
    protected $libelleVoie2;

    /**
     * Longitude.
     *
     * @var string|null
     */
    protected $longitude;

    /**
     * NIC.
     *
     * @var string|null
     */
    protected $nic;

    /**
     * Numéro voie.
     *
     * @var string|null
     */
    protected $numeroVoie;

    /**
     * Numéro voie 2.
     *
     * @var string|null
     */
    protected $numeroVoie2;

    /**
     * Type voie.
     *
     * @var string|null
     */
    protected $typeVoie;

    /**
     * Type voie 2.
     *
     * @var string|null
     */
    protected $typeVoie2;

    /**
     * Unité légale.
     *
     * @var UniteLegale|null
     */
    protected $uniteLegale;

    /**
     * Unité légale id.
     *
     * @var int|null
     */
    protected $uniteLegaleId;

    /**
     * Constructor.
     */
    public function __construct() {
        // NOTHING TO DO
    }

    /**
     * Get the activité principale registre métiers.
     *
     * @return string|null Returns the activité principale registre métiers.
     */
    public function getActivitePrincipaleRegistreMetiers(): ?string {
        return $this->activitePrincipaleRegistreMetiers;
    }

    /**
     * Get the code cedex.
     *
     * @return string|null Returns the code cedex.
     */
    public function getCodeCedex(): ?string {
        return $this->codeCedex;
    }

    /**
     * Get the code cedex 2.
     *
     * @return string|null Returns the code cedex 2.
     */
    public function getCodeCedex2(): ?string {
        return $this->codeCedex2;
    }

    /**
     * Get the code commune.
     *
     * @return string|null Returns the code commune.
     */
    public function getCodeCommune(): ?string {
        return $this->codeCommune;
    }

    /**
     * Get the code commune 2.
     *
     * @return string|null Returns the code commune 2.
     */
    public function getCodeCommune2(): ?string {
        return $this->codeCommune2;
    }

    /**
     * Get the code pays étranger.
     *
     * @return string|null Returns the code pays étranger.
     */
    public function getCodePaysEtranger(): ?string {
        return $this->codePaysEtranger;
    }

    /**
     * Get the code payas étranger.
     *
     * @return string|null Returns the code pays étranger.
     */
    public function getCodePaysEtranger2(): ?string {
        return $this->codePaysEtranger2;
    }

    /**
     * Get the code postal.
     *
     * @return string|null Returns the code postal.
     */
    public function getCodePostal(): ?string {
        return $this->codePostal;
    }

    /**
     * Get the code postal 2.
     *
     * @return string|null Returns the code postal 2.
     */
    public function getCodePostal2(): ?string {
        return $this->codePostal2;
    }

    /**
     * Get the complément adresse.
     *
     * @return string|null Returns the complément adresse.
     */
    public function getComplementAdresse(): ?string {
        return $this->complementAdresse;
    }

    /**
     * Get the complément adresse 2.
     *
     * @return string|null Returns the complément adresse 2.
     */
    public function getComplementAdresse2(): ?string {
        return $this->complementAdresse2;
    }

    /**
     * Get the dénomination usuelle.
     *
     * @return string|null Returns the dénomination usuelle.
     */
    public function getDenominationUsuelle(): ?string {
        return $this->denominationUsuelle;
    }

    /**
     * Get the distribution spéciale.
     *
     * @return string|null Returns the distribution spéciale.
     */
    public function getDistributionSpeciale(): ?string {
        return $this->distributionSpeciale;
    }

    /**
     * Get the distribution spéciale 2.
     *
     * @return string|null Returns the distribution spéciale 2.
     */
    public function getDistributionSpeciale2(): ?string {
        return $this->distributionSpeciale2;
    }

    /**
     * Get the enseigne 1.
     *
     * @return string|null Returns the enseigne 1.
     */
    public function getEnseigne1(): ?string {
        return $this->enseigne1;
    }

    /**
     * Get the enseigne 2.
     *
     * @return string|null Returns the enseigne 2.
     */
    public function getEnseigne2(): ?string {
        return $this->enseigne2;
    }

    /**
     * Get the enseigne 3.
     *
     * @return string|null Returns the enseigne 3.
     */
    public function getEnseigne3(): ?string {
        return $this->enseigne3;
    }

    /**
     * Get the établissement siège.
     *
     * @return string|null Returns the établissement siège.
     */
    public function getEtablissementSiege(): ?string {
        return $this->etablissementSiege;
    }

    /**
     * Get the géo adresse.
     *
     * @return string|null Returns the géo adresse.
     */
    public function getGeoAdresse(): ?string {
        return $this->geoAdresse;
    }

    /**
     * Get the géo id.
     *
     * @return string|null Returns the géo id.
     */
    public function getGeoId(): ?string {
        return $this->geoId;
    }

    /**
     * Get the géo L4.
     *
     * @return string|null Returns the géo L4.
     */
    public function getGeoL4(): ?string {
        return $this->geoL4;
    }

    /**
     * Get the géo L5.
     *
     * @return string|null Returns the géo L5.
     */
    public function getGeoL5(): ?string {
        return $this->geoL5;
    }

    /**
     * Get the géo ligne.
     *
     * @return string|null Returns the géo ligne.
     */
    public function getGeoLigne(): ?string {
        return $this->geoLigne;
    }

    /**
     * Get thé géo score.
     *
     * @return string|null Returns the géo score.
     */
    public function getGeoScore(): ?string {
        return $this->geoScore;
    }

    /**
     * Get the géo type.
     *
     * @return string|null Returns the géo type.
     */
    public function getGeoType(): ?string {
        return $this->geoType;
    }

    /**
     * Get the indice répétition.
     *
     * @return string|null Returns the indice répétition.
     */
    public function getIndiceRepetition(): ?string {
        return $this->indiceRepetition;
    }

    /**
     * Get the indice répétition 2.
     *
     * @return string|null Returns the indice répétition2.
     */
    public function getIndiceRepetition2(): ?string {
        return $this->indiceRepetition2;
    }

    /**
     * Get the latitude.
     *
     * @return string|null Returns the latitude.
     */
    public function getLatitude(): ?string {
        return $this->latitude;
    }

    /**
     * Get the libellé cedex.
     *
     * @return string|null Returns the libellé cedex.
     */
    public function getLibelleCedex(): ?string {
        return $this->libelleCedex;
    }

    /**
     * Get the libellé cedex 2.
     *
     * @return string|null Returns the libellé cedex 2.
     */
    public function getLibelleCedex2(): ?string {
        return $this->libelleCedex2;
    }

    /**
     * Get the libellé commune.
     *
     * @return string|null Returns the libellé commune.
     */
    public function getLibelleCommune(): ?string {
        return $this->libelleCommune;
    }

    /**
     * Get the libellé commune 2.
     *
     * @return string|null Returns the libellé commune 2.
     */
    public function getLibelleCommune2(): ?string {
        return $this->libelleCommune2;
    }

    /**
     * Get the libellé commune étranger.
     *
     * @return string|null Returns the libellé commune étranger.
     */
    public function getLibelleCommuneEtranger(): ?string {
        return $this->libelleCommuneEtranger;
    }

    /**
     * Get the libellé commune étranger 2.
     *
     * @return string|null Returns the libellé commune étranger 2.
     */
    public function getLibelleCommuneEtranger2(): ?string {
        return $this->libelleCommuneEtranger2;
    }

    /**
     * Get the libellé pays étranger.
     *
     * @return string|null Returns the libellé pays étranger.
     */
    public function getLibellePaysEtranger(): ?string {
        return $this->libellePaysEtranger;
    }

    /**
     * Get the libellé pays étranger 2.
     *
     * @return string|null Returns the libellé pays étranger 2.
     */
    public function getLibellePaysEtranger2(): ?string {
        return $this->libellePaysEtranger2;
    }

    /**
     * Get the libellé voie.
     *
     * @return string|null Returns the libellé voie.
     */
    public function getLibelleVoie(): ?string {
        return $this->libelleVoie;
    }

    /**
     * Get the libellé voie 2.
     *
     * @return string|null Returns the libellé voie 2
     */
    public function getLibelleVoie2(): ?string {
        return $this->libelleVoie2;
    }

    /**
     * Get the longitude.
     *
     * @return string|null Returns the longitude.
     */
    public function getLongitude(): ?string {
        return $this->longitude;
    }

    /**
     * Get the NIC.
     *
     * @return string|null Returns the NIC.
     */
    public function getNic(): ?string {
        return $this->nic;
    }

    /**
     * Get the numéro voie.
     *
     * @return string|null Returns the numéro voie.
     */
    public function getNumeroVoie(): ?string {
        return $this->numeroVoie;
    }

    /**
     * Get the numéro voie 2.
     *
     * @return string|null Returns the numéro voie 2.
     */
    public function getNumeroVoie2(): ?string {
        return $this->numeroVoie2;
    }

    /**
     * Get the type voie.
     *
     * @return string|null Returns the type voie.
     */
    public function getTypeVoie(): ?string {
        return $this->typeVoie;
    }

    /**
     * Get the type voie 2.
     *
     * @return string|null Returns the type voie 2.
     */
    public function getTypeVoie2(): ?string {
        return $this->typeVoie2;
    }

    /**
     * Get the unité légale.
     *
     * @return UniteLegale|null Returns the unité légale.
     */
    public function getUniteLegale(): ?UniteLegale {
        return $this->uniteLegale;
    }

    /**
     * Get the unité légale id.
     *
     * @return int|null Returns the unité légale id.
     */
    public function getUniteLegaleId(): ?int {
        return $this->uniteLegaleId;
    }

    /**
     * Set the activité principale registre métiers.
     *
     * @param string|null $activitePrincipaleRegistreMetiers The activité principale registre métiers.
     * @return Etablissement Returns this établissement.
     */
    public function setActivitePrincipaleRegistreMetiers(?string $activitePrincipaleRegistreMetiers): Etablissement {
        $this->activitePrincipaleRegistreMetiers = $activitePrincipaleRegistreMetiers;
        return $this;
    }

    /**
     * Set the code cedex.
     *
     * @param string|null $codeCedex The code cedex.
     * @return Etablissement Returns this établissement.
     */
    public function setCodeCedex(?string $codeCedex): Etablissement {
        $this->codeCedex = $codeCedex;
        return $this;
    }

    /**
     * Set the code cedex 2.
     *
     * @param string|null $codeCedex2 The code cedex 2.
     * @return Etablissement Returns this établissement.
     */
    public function setCodeCedex2(?string $codeCedex2): Etablissement {
        $this->codeCedex2 = $codeCedex2;
        return $this;
    }

    /**
     * Set the code commune.
     *
     * @param string|null $codeCommune The code commune.
     * @return Etablissement Returns this établissement.
     */
    public function setCodeCommune(?string $codeCommune): Etablissement {
        $this->codeCommune = $codeCommune;
        return $this;
    }

    /**
     * Set the code commune 2.
     *
     * @param string|null $codeCommune2 Teh code commune 2.
     * @return Etablissement Returns this établissement.
     */
    public function setCodeCommune2(?string $codeCommune2): Etablissement {
        $this->codeCommune2 = $codeCommune2;
        return $this;
    }

    /**
     * Set the code pays étranger.
     *
     * @param string|null $codePaysEtranger
     * @return Etablissement Returns this établissement.
     */
    public function setCodePaysEtranger(?string $codePaysEtranger): Etablissement {
        $this->codePaysEtranger = $codePaysEtranger;
        return $this;
    }

    /**
     * Set the code pays étranger 2.
     *
     * @param string|null $codePaysEtranger2 The code pays étranger.
     * @return Etablissement Returns this établissement.
     */
    public function setCodePaysEtranger2(?string $codePaysEtranger2): Etablissement {
        $this->codePaysEtranger2 = $codePaysEtranger2;
        return $this;
    }

    /**
     * Set the code postal.
     *
     * @param string|null $codePostal The code postal.
     * @return Etablissement Returns this établissement.
     */
    public function setCodePostal(?string $codePostal): Etablissement {
        $this->codePostal = $codePostal;
        return $this;
    }

    /**
     * Set the code postal 2.
     *
     * @param string|null $codePostal2 The code postal 2.
     * @return Etablissement Returns this établissement.
     */
    public function setCodePostal2(?string $codePostal2): Etablissement {
        $this->codePostal2 = $codePostal2;
        return $this;
    }

    /**
     * Set the complément adresse.
     *
     * @param string|null $complementAdresse The complément adresse.
     * @return Etablissement Returns this établissement.
     */
    public function setComplementAdresse(?string $complementAdresse): Etablissement {
        $this->complementAdresse = $complementAdresse;
        return $this;
    }

    /**
     * Set the complément adresse 2.
     *
     * @param string|null $complementAdresse2 The complément adresse 2.
     * @return Etablissement Returns this établissement.
     */
    public function setComplementAdresse2(?string $complementAdresse2): Etablissement {
        $this->complementAdresse2 = $complementAdresse2;
        return $this;
    }

    /**
     * Set the dénomination usuelle.
     *
     * @param string|null $denominationUsuelle The dénomination usuelle.
     * @return Etablissement Returns this établissement.
     */
    public function setDenominationUsuelle(?string $denominationUsuelle): Etablissement {
        $this->denominationUsuelle = $denominationUsuelle;
        return $this;
    }

    /**
     * Set the distribution spéciale.
     *
     * @param string|null $distributionSpeciale The distribution spéciale.
     * @return Etablissement Returns this établissement.
     */
    public function setDistributionSpeciale(?string $distributionSpeciale): Etablissement {
        $this->distributionSpeciale = $distributionSpeciale;
        return $this;
    }

    /**
     * Set the distribution spéciale 2.
     *
     * @param string|null $distributionSpeciale2 The distribution spéciale 2.
     * @return Etablissement Returns this établissement.
     */
    public function setDistributionSpeciale2(?string $distributionSpeciale2): Etablissement {
        $this->distributionSpeciale2 = $distributionSpeciale2;
        return $this;
    }

    /**
     * Set the enseigne 1.
     *
     * @param string|null $enseigne1 The enseigne 1.
     * @return Etablissement Returns this établissement.
     */
    public function setEnseigne1(?string $enseigne1): Etablissement {
        $this->enseigne1 = $enseigne1;
        return $this;
    }

    /**
     * Set the enseigne 2.
     *
     * @param string|null $enseigne2 The enseigne 2.
     * @return Etablissement Returns this établissement.
     */
    public function setEnseigne2(?string $enseigne2): Etablissement {
        $this->enseigne2 = $enseigne2;
        return $this;
    }

    /**
     * Set the enseigne 3.
     *
     * @param string|null $enseigne3 The enseigne 3.
     * @return Etablissement Returns this établissement.
     */
    public function setEnseigne3(?string $enseigne3): Etablissement {
        $this->enseigne3 = $enseigne3;
        return $this;
    }

    /**
     * Set the établissement siège.
     *
     * @param string|null $etablissementSiege The établissement siège.
     * @return Etablissement Returns this établissement.
     */
    public function setEtablissementSiege(?string $etablissementSiege): Etablissement {
        $this->etablissementSiege = $etablissementSiege;
        return $this;
    }

    /**
     * Set the géo adresse.
     *
     * @param string|null $geoAdresse The géo adresse.
     * @return Etablissement Returns this établissement.
     */
    public function setGeoAdresse(?string $geoAdresse): Etablissement {
        $this->geoAdresse = $geoAdresse;
        return $this;
    }

    /**
     * Set the géo id.
     *
     * @param string|null $geoId The géo id.
     * @return Etablissement Returns this établissement.
     */
    public function setGeoId(?string $geoId): Etablissement {
        $this->geoId = $geoId;
        return $this;
    }

    /**
     * Set the géo L4.
     *
     * @param string|null $geoL4 The géo L4.
     * @return Etablissement Returns this établissement.
     */
    public function setGeoL4(?string $geoL4): Etablissement {
        $this->geoL4 = $geoL4;
        return $this;
    }

    /**
     * Set the géo L5.
     *
     * @param string|null $geoL5 The géo L5.
     * @return Etablissement Returns this établissement.
     */
    public function setGeoL5(?string $geoL5): Etablissement {
        $this->geoL5 = $geoL5;
        return $this;
    }

    /**
     * Set the géo ligne.
     *
     * @param string|null $geoLigne The géo ligne.
     * @return Etablissement Returns this établissement.
     */
    public function setGeoLigne(?string $geoLigne): Etablissement {
        $this->geoLigne = $geoLigne;
        return $this;
    }

    /**
     * Set the géo score.
     *
     * @param string|null $geoScore The géo score.
     * @return Etablissement Returns this établissement.
     */
    public function setGeoScore(?string $geoScore): Etablissement {
        $this->geoScore = $geoScore;
        return $this;
    }

    /**
     * Set the géo type.
     *
     * @param string|null $geoType The géo type.
     * @return Etablissement Returns this établissement.
     */
    public function setGeoType(?string $geoType): Etablissement {
        $this->geoType = $geoType;
        return $this;
    }

    /**
     * Set the indice répétition.
     *
     * @param string|null $indiceRepetition The indice répétition.
     * @return Etablissement Returns this établissement.
     */
    public function setIndiceRepetition(?string $indiceRepetition): Etablissement {
        $this->indiceRepetition = $indiceRepetition;
        return $this;
    }

    /**
     * Set the indice répétition 2.
     *
     * @param string|null $indiceRepetition2 The indice répétition 2.
     * @return Etablissement Returns this établissement.
     */
    public function setIndiceRepetition2(?string $indiceRepetition2): Etablissement {
        $this->indiceRepetition2 = $indiceRepetition2;
        return $this;
    }

    /**
     * Set the latitude.
     *
     * @param string|null $latitude The latitude.
     * @return Etablissement Returns this établissement.
     */
    public function setLatitude(?string $latitude): Etablissement {
        $this->latitude = $latitude;
        return $this;
    }

    /**
     * Set the libellé cedex.
     *
     * @param string|null $libelleCedex The libellé cedex.
     * @return Etablissement Returns this établissement.
     */
    public function setLibelleCedex(?string $libelleCedex): Etablissement {
        $this->libelleCedex = $libelleCedex;
        return $this;
    }

    /**
     * Set the libellé cedex 2.
     *
     * @param string|null $libelleCedex2 The libellé cedex 2.
     * @return Etablissement Returns this établissement.
     */
    public function setLibelleCedex2(?string $libelleCedex2): Etablissement {
        $this->libelleCedex2 = $libelleCedex2;
        return $this;
    }

    /**
     * Set the libellé commune.
     *
     * @param string|null $libelleCommune The libellé commune.
     * @return Etablissement Returns this établissement.
     */
    public function setLibelleCommune(?string $libelleCommune): Etablissement {
        $this->libelleCommune = $libelleCommune;
        return $this;
    }

    /**
     * Set the libellé commune 2.
     *
     * @param string|null $libelleCommune2 The libellé commune 2.
     * @return Etablissement Returns this établissement.
     */
    public function setLibelleCommune2(?string $libelleCommune2): Etablissement {
        $this->libelleCommune2 = $libelleCommune2;
        return $this;
    }

    /**
     * Set the libellé commune étranger.
     *
     * @param string|null $libelleCommuneEtranger The libellé commune étranger.
     * @return Etablissement Returns this établissement.
     */
    public function setLibelleCommuneEtranger(?string $libelleCommuneEtranger): Etablissement {
        $this->libelleCommuneEtranger = $libelleCommuneEtranger;
        return $this;
    }

    /**
     * Set the libellé commune étranger 2.
     *
     * @param string|null $libelleCommuneEtranger2 The libellé commune étranger 2.
     * @return Etablissement Returns this établissement.
     */
    public function setLibelleCommuneEtranger2(?string $libelleCommuneEtranger2): Etablissement {
        $this->libelleCommuneEtranger2 = $libelleCommuneEtranger2;
        return $this;
    }

    /**
     * Set the libellé pays étranger.
     *
     * @param string|null $libellePaysEtranger The libellé pays étranger.
     * @return Etablissement Returns this établissement.
     */
    public function setLibellePaysEtranger(?string $libellePaysEtranger): Etablissement {
        $this->libellePaysEtranger = $libellePaysEtranger;
        return $this;
    }

    /**
     * Set the libellé pays étranger 2.
     *
     * @param string|null $libellePaysEtranger2 The libellé pays étranger 2.
     * @return Etablissement Returns this établissement.
     */
    public function setLibellePaysEtranger2(?string $libellePaysEtranger2): Etablissement {
        $this->libellePaysEtranger2 = $libellePaysEtranger2;
        return $this;
    }

    /**
     * Set the libellé voie.
     *
     * @param string|null $libelleVoie The libellé voie.
     * @return Etablissement Returns this établissement.
     */
    public function setLibelleVoie(?string $libelleVoie): Etablissement {
        $this->libelleVoie = $libelleVoie;
        return $this;
    }

    /**
     * Set the libellé voie 2.
     *
     * @param string|null $libelleVoie2 The libellé voie 2.
     * @return Etablissement Returns this établissement.
     */
    public function setLibelleVoie2(?string $libelleVoie2): Etablissement {
        $this->libelleVoie2 = $libelleVoie2;
        return $this;
    }

    /**
     * Set the longitude.
     *
     * @param string|null $longitude The longitude.
     * @return Etablissement Returns this établissement.
     */
    public function setLongitude(?string $longitude): Etablissement {
        $this->longitude = $longitude;
        return $this;
    }

    /**
     * Set the NIC.
     *
     * @param string|null $nic The NIC.
     * @return Etablissement Returns this établissement.
     */
    public function setNic(?string $nic): Etablissement {
        $this->nic = $nic;
        return $this;
    }

    /**
     * Set the numéro voie.
     *
     * @param string|null $numeroVoie The numéro voie.
     * @return Etablissement Returns this établissement.
     */
    public function setNumeroVoie(?string $numeroVoie): Etablissement {
        $this->numeroVoie = $numeroVoie;
        return $this;
    }

    /**
     * Set the numéro voie 2.
     *
     * @param string|null $numeroVoie2 The numéro voie 2.
     * @return Etablissement Returns this établissement.
     */
    public function setNumeroVoie2(?string $numeroVoie2): Etablissement {
        $this->numeroVoie2 = $numeroVoie2;
        return $this;
    }

    /**
     * Set the type voie.
     *
     * @param string|null $typeVoie The type voie.
     * @return Etablissement Returns this établissement.
     */
    public function setTypeVoie(?string $typeVoie): Etablissement {
        $this->typeVoie = $typeVoie;
        return $this;
    }

    /**
     * Set the type voie 2.
     *
     * @param string|null $typeVoie2 The type voie 2.
     * @return Etablissement Returns this établissement.
     */
    public function setTypeVoie2(?string $typeVoie2): Etablissement {
        $this->typeVoie2 = $typeVoie2;
        return $this;
    }

    /**
     * Set the unité légale.
     *
     * @param UniteLegale|null $uniteLegale The unité légale.
     * @return Etablissement Returns this établissement.
     */
    public function setUniteLegale(?UniteLegale $uniteLegale): Etablissement {
        $this->uniteLegale = $uniteLegale;
        return $this;
    }

    /**
     * Set the unité légale id.
     *
     * @param int|null $uniteLegaleId The unité légale id.
     * @return Etablissement Returns this établissement.
     */
    public function setUniteLegaleId(?int $uniteLegaleId): Etablissement {
        $this->uniteLegaleId = $uniteLegaleId;
        return $this;
    }
}
