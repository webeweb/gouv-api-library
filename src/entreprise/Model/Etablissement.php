<?php

/*
 * This file is part of the gouv-api-library package.
 *
 * (c) 2021 WEBEWEB
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace WBW\Library\GouvApi\Entreprise\Model;

use WBW\Library\GouvApi\Entreprise\Model\Attribute\IntegerAnneeEffectifsTrait;
use WBW\Library\GouvApi\Entreprise\Model\Attribute\IntegerNombrePeriodesTrait;
use WBW\Library\GouvApi\Entreprise\Model\Attribute\StringActivitePrincipaleTrait;
use WBW\Library\GouvApi\Entreprise\Model\Attribute\StringCaractereEmployeurTrait;
use WBW\Library\GouvApi\Entreprise\Model\Attribute\StringCreatedAtTrait;
use WBW\Library\GouvApi\Entreprise\Model\Attribute\StringDateCreationTrait;
use WBW\Library\GouvApi\Entreprise\Model\Attribute\StringDateDebutTrait;
use WBW\Library\GouvApi\Entreprise\Model\Attribute\StringDateDernierTraitementTrait;
use WBW\Library\GouvApi\Entreprise\Model\Attribute\StringEtatAdministratifTrait;
use WBW\Library\GouvApi\Entreprise\Model\Attribute\StringNomenclatureActivitePrincipaleTrait;
use WBW\Library\GouvApi\Entreprise\Model\Attribute\StringSirenTrait;
use WBW\Library\GouvApi\Entreprise\Model\Attribute\StringSiretTrait;
use WBW\Library\GouvApi\Entreprise\Model\Attribute\StringStatutDiffusionTrait;
use WBW\Library\GouvApi\Entreprise\Model\Attribute\StringTrancheEffectifsTrait;
use WBW\Library\GouvApi\Entreprise\Model\Attribute\StringUpdatedAtTrait;
use WBW\Library\Traits\Floats\FloatLatitudeTrait;
use WBW\Library\Traits\Floats\FloatLongitudeTrait;
use WBW\Library\Traits\Integers\IntegerIdTrait;

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
    use FloatLatitudeTrait;
    use FloatLongitudeTrait;
    use IntegerAnneeEffectifsTrait;
    use IntegerNombrePeriodesTrait;
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
     * Activit?? principale registre m??tiers.
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
     * Code pays ??tranger.
     *
     * @var string|null
     */
    protected $codePaysEtranger;

    /**
     * Code pays ??tranger 2.
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
     * Compl??ment adresse.
     *
     * @var string|null
     */
    protected $complementAdresse;

    /**
     * Compl??ment adresse 2.
     *
     * @var string|null
     */
    protected $complementAdresse2;

    /**
     * D??nomination usuelle.
     *
     * @var string|null
     */
    protected $denominationUsuelle;

    /**
     * Distribution sp??ciale.
     *
     * @var string|null
     */
    protected $distributionSpeciale;

    /**
     * Distribution sp??ciale 2.
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
     * Etablissement si??ge.
     *
     * @var bool|null
     */
    protected $etablissementSiege;

    /**
     * G??o adresse.
     *
     * @var string|null
     */
    protected $geoAdresse;

    /**
     * G??o id.
     *
     * @var string|null
     */
    protected $geoId;

    /**
     * G??o l4.
     *
     * @var string|null
     */
    protected $geoL4;

    /**
     * G??o l5.
     *
     * @var string|null
     */
    protected $geoL5;

    /**
     * G??o ligne.
     *
     * @var string|null
     */
    protected $geoLigne;

    /**
     * G??o score.
     *
     * @var float|null
     */
    protected $geoScore;

    /**
     * G??o type.
     *
     * @var string|null
     */
    protected $geoType;

    /**
     * Indice r??p??tition.
     *
     * @var string|null
     */
    protected $indiceRepetition;

    /**
     * Indice r??p??tition 2.
     *
     * @var string|null
     */
    protected $indiceRepetition2;

    /**
     * Libell?? cedex.
     *
     * @var string|null
     */
    protected $libelleCedex;

    /**
     * Libell?? cedex 2.
     *
     * @var string|null
     */
    protected $libelleCedex2;

    /**
     * Libell?? commune.
     *
     * @var string|null
     */
    protected $libelleCommune;

    /**
     * Libell?? commune 2.
     *
     * @var string|null
     */
    protected $libelleCommune2;

    /**
     * Libell?? commune ??tranger.
     *
     * @var string|null
     */
    protected $libelleCommuneEtranger;

    /**
     * Libell?? commune ??tranger 2.
     *
     * @var string|null
     */
    protected $libelleCommuneEtranger2;

    /**
     * Libell?? pays ??tranger.
     *
     * @var string|null
     */
    protected $libellePaysEtranger;

    /**
     * Libell?? pays ??tranger 2.
     *
     * @var string|null
     */
    protected $libellePaysEtranger2;

    /**
     * Libell?? voie.
     *
     * @var string|null
     */
    protected $libelleVoie;

    /**
     * Libell?? voie 2.
     *
     * @var string|null
     */
    protected $libelleVoie2;

    /**
     * NIC.
     *
     * @var string|null
     */
    protected $nic;

    /**
     * Num??ro voie.
     *
     * @var string|null
     */
    protected $numeroVoie;

    /**
     * Num??ro voie 2.
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
     * Unit?? l??gale.
     *
     * @var UniteLegale|null
     */
    protected $uniteLegale;

    /**
     * Unit?? l??gale id.
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
     * Get the activit?? principale registre m??tiers.
     *
     * @return string|null Returns the activit?? principale registre m??tiers.
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
     * Get the code pays ??tranger.
     *
     * @return string|null Returns the code pays ??tranger.
     */
    public function getCodePaysEtranger(): ?string {
        return $this->codePaysEtranger;
    }

    /**
     * Get the code payas ??tranger.
     *
     * @return string|null Returns the code pays ??tranger.
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
     * Get the compl??ment adresse.
     *
     * @return string|null Returns the compl??ment adresse.
     */
    public function getComplementAdresse(): ?string {
        return $this->complementAdresse;
    }

    /**
     * Get the compl??ment adresse 2.
     *
     * @return string|null Returns the compl??ment adresse 2.
     */
    public function getComplementAdresse2(): ?string {
        return $this->complementAdresse2;
    }

    /**
     * Get the d??nomination usuelle.
     *
     * @return string|null Returns the d??nomination usuelle.
     */
    public function getDenominationUsuelle(): ?string {
        return $this->denominationUsuelle;
    }

    /**
     * Get the distribution sp??ciale.
     *
     * @return string|null Returns the distribution sp??ciale.
     */
    public function getDistributionSpeciale(): ?string {
        return $this->distributionSpeciale;
    }

    /**
     * Get the distribution sp??ciale 2.
     *
     * @return string|null Returns the distribution sp??ciale 2.
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
     * Get the ??tablissement si??ge.
     *
     * @return bool|null Returns the ??tablissement si??ge.
     */
    public function getEtablissementSiege(): ?bool {
        return $this->etablissementSiege;
    }

    /**
     * Get the g??o adresse.
     *
     * @return string|null Returns the g??o adresse.
     */
    public function getGeoAdresse(): ?string {
        return $this->geoAdresse;
    }

    /**
     * Get the g??o id.
     *
     * @return string|null Returns the g??o id.
     */
    public function getGeoId(): ?string {
        return $this->geoId;
    }

    /**
     * Get the g??o L4.
     *
     * @return string|null Returns the g??o L4.
     */
    public function getGeoL4(): ?string {
        return $this->geoL4;
    }

    /**
     * Get the g??o L5.
     *
     * @return string|null Returns the g??o L5.
     */
    public function getGeoL5(): ?string {
        return $this->geoL5;
    }

    /**
     * Get the g??o ligne.
     *
     * @return string|null Returns the g??o ligne.
     */
    public function getGeoLigne(): ?string {
        return $this->geoLigne;
    }

    /**
     * Get th?? g??o score.
     *
     * @return float|null Returns the g??o score.
     */
    public function getGeoScore(): ?float {
        return $this->geoScore;
    }

    /**
     * Get the g??o type.
     *
     * @return string|null Returns the g??o type.
     */
    public function getGeoType(): ?string {
        return $this->geoType;
    }

    /**
     * Get the indice r??p??tition.
     *
     * @return string|null Returns the indice r??p??tition.
     */
    public function getIndiceRepetition(): ?string {
        return $this->indiceRepetition;
    }

    /**
     * Get the indice r??p??tition 2.
     *
     * @return string|null Returns the indice r??p??tition2.
     */
    public function getIndiceRepetition2(): ?string {
        return $this->indiceRepetition2;
    }

    /**
     * Get the libell?? cedex.
     *
     * @return string|null Returns the libell?? cedex.
     */
    public function getLibelleCedex(): ?string {
        return $this->libelleCedex;
    }

    /**
     * Get the libell?? cedex 2.
     *
     * @return string|null Returns the libell?? cedex 2.
     */
    public function getLibelleCedex2(): ?string {
        return $this->libelleCedex2;
    }

    /**
     * Get the libell?? commune.
     *
     * @return string|null Returns the libell?? commune.
     */
    public function getLibelleCommune(): ?string {
        return $this->libelleCommune;
    }

    /**
     * Get the libell?? commune 2.
     *
     * @return string|null Returns the libell?? commune 2.
     */
    public function getLibelleCommune2(): ?string {
        return $this->libelleCommune2;
    }

    /**
     * Get the libell?? commune ??tranger.
     *
     * @return string|null Returns the libell?? commune ??tranger.
     */
    public function getLibelleCommuneEtranger(): ?string {
        return $this->libelleCommuneEtranger;
    }

    /**
     * Get the libell?? commune ??tranger 2.
     *
     * @return string|null Returns the libell?? commune ??tranger 2.
     */
    public function getLibelleCommuneEtranger2(): ?string {
        return $this->libelleCommuneEtranger2;
    }

    /**
     * Get the libell?? pays ??tranger.
     *
     * @return string|null Returns the libell?? pays ??tranger.
     */
    public function getLibellePaysEtranger(): ?string {
        return $this->libellePaysEtranger;
    }

    /**
     * Get the libell?? pays ??tranger 2.
     *
     * @return string|null Returns the libell?? pays ??tranger 2.
     */
    public function getLibellePaysEtranger2(): ?string {
        return $this->libellePaysEtranger2;
    }

    /**
     * Get the libell?? voie.
     *
     * @return string|null Returns the libell?? voie.
     */
    public function getLibelleVoie(): ?string {
        return $this->libelleVoie;
    }

    /**
     * Get the libell?? voie 2.
     *
     * @return string|null Returns the libell?? voie 2
     */
    public function getLibelleVoie2(): ?string {
        return $this->libelleVoie2;
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
     * Get the num??ro voie.
     *
     * @return string|null Returns the num??ro voie.
     */
    public function getNumeroVoie(): ?string {
        return $this->numeroVoie;
    }

    /**
     * Get the num??ro voie 2.
     *
     * @return string|null Returns the num??ro voie 2.
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
     * Get the unit?? l??gale.
     *
     * @return UniteLegale|null Returns the unit?? l??gale.
     */
    public function getUniteLegale(): ?UniteLegale {
        return $this->uniteLegale;
    }

    /**
     * Get the unit?? l??gale id.
     *
     * @return int|null Returns the unit?? l??gale id.
     */
    public function getUniteLegaleId(): ?int {
        return $this->uniteLegaleId;
    }

    /**
     * Set the activit?? principale registre m??tiers.
     *
     * @param string|null $activitePrincipaleRegistreMetiers The activit?? principale registre m??tiers.
     * @return Etablissement Returns this ??tablissement.
     */
    public function setActivitePrincipaleRegistreMetiers(?string $activitePrincipaleRegistreMetiers): Etablissement {
        $this->activitePrincipaleRegistreMetiers = $activitePrincipaleRegistreMetiers;
        return $this;
    }

    /**
     * Set the code cedex.
     *
     * @param string|null $codeCedex The code cedex.
     * @return Etablissement Returns this ??tablissement.
     */
    public function setCodeCedex(?string $codeCedex): Etablissement {
        $this->codeCedex = $codeCedex;
        return $this;
    }

    /**
     * Set the code cedex 2.
     *
     * @param string|null $codeCedex2 The code cedex 2.
     * @return Etablissement Returns this ??tablissement.
     */
    public function setCodeCedex2(?string $codeCedex2): Etablissement {
        $this->codeCedex2 = $codeCedex2;
        return $this;
    }

    /**
     * Set the code commune.
     *
     * @param string|null $codeCommune The code commune.
     * @return Etablissement Returns this ??tablissement.
     */
    public function setCodeCommune(?string $codeCommune): Etablissement {
        $this->codeCommune = $codeCommune;
        return $this;
    }

    /**
     * Set the code commune 2.
     *
     * @param string|null $codeCommune2 Teh code commune 2.
     * @return Etablissement Returns this ??tablissement.
     */
    public function setCodeCommune2(?string $codeCommune2): Etablissement {
        $this->codeCommune2 = $codeCommune2;
        return $this;
    }

    /**
     * Set the code pays ??tranger.
     *
     * @param string|null $codePaysEtranger
     * @return Etablissement Returns this ??tablissement.
     */
    public function setCodePaysEtranger(?string $codePaysEtranger): Etablissement {
        $this->codePaysEtranger = $codePaysEtranger;
        return $this;
    }

    /**
     * Set the code pays ??tranger 2.
     *
     * @param string|null $codePaysEtranger2 The code pays ??tranger.
     * @return Etablissement Returns this ??tablissement.
     */
    public function setCodePaysEtranger2(?string $codePaysEtranger2): Etablissement {
        $this->codePaysEtranger2 = $codePaysEtranger2;
        return $this;
    }

    /**
     * Set the code postal.
     *
     * @param string|null $codePostal The code postal.
     * @return Etablissement Returns this ??tablissement.
     */
    public function setCodePostal(?string $codePostal): Etablissement {
        $this->codePostal = $codePostal;
        return $this;
    }

    /**
     * Set the code postal 2.
     *
     * @param string|null $codePostal2 The code postal 2.
     * @return Etablissement Returns this ??tablissement.
     */
    public function setCodePostal2(?string $codePostal2): Etablissement {
        $this->codePostal2 = $codePostal2;
        return $this;
    }

    /**
     * Set the compl??ment adresse.
     *
     * @param string|null $complementAdresse The compl??ment adresse.
     * @return Etablissement Returns this ??tablissement.
     */
    public function setComplementAdresse(?string $complementAdresse): Etablissement {
        $this->complementAdresse = $complementAdresse;
        return $this;
    }

    /**
     * Set the compl??ment adresse 2.
     *
     * @param string|null $complementAdresse2 The compl??ment adresse 2.
     * @return Etablissement Returns this ??tablissement.
     */
    public function setComplementAdresse2(?string $complementAdresse2): Etablissement {
        $this->complementAdresse2 = $complementAdresse2;
        return $this;
    }

    /**
     * Set the d??nomination usuelle.
     *
     * @param string|null $denominationUsuelle The d??nomination usuelle.
     * @return Etablissement Returns this ??tablissement.
     */
    public function setDenominationUsuelle(?string $denominationUsuelle): Etablissement {
        $this->denominationUsuelle = $denominationUsuelle;
        return $this;
    }

    /**
     * Set the distribution sp??ciale.
     *
     * @param string|null $distributionSpeciale The distribution sp??ciale.
     * @return Etablissement Returns this ??tablissement.
     */
    public function setDistributionSpeciale(?string $distributionSpeciale): Etablissement {
        $this->distributionSpeciale = $distributionSpeciale;
        return $this;
    }

    /**
     * Set the distribution sp??ciale 2.
     *
     * @param string|null $distributionSpeciale2 The distribution sp??ciale 2.
     * @return Etablissement Returns this ??tablissement.
     */
    public function setDistributionSpeciale2(?string $distributionSpeciale2): Etablissement {
        $this->distributionSpeciale2 = $distributionSpeciale2;
        return $this;
    }

    /**
     * Set the enseigne 1.
     *
     * @param string|null $enseigne1 The enseigne 1.
     * @return Etablissement Returns this ??tablissement.
     */
    public function setEnseigne1(?string $enseigne1): Etablissement {
        $this->enseigne1 = $enseigne1;
        return $this;
    }

    /**
     * Set the enseigne 2.
     *
     * @param string|null $enseigne2 The enseigne 2.
     * @return Etablissement Returns this ??tablissement.
     */
    public function setEnseigne2(?string $enseigne2): Etablissement {
        $this->enseigne2 = $enseigne2;
        return $this;
    }

    /**
     * Set the enseigne 3.
     *
     * @param string|null $enseigne3 The enseigne 3.
     * @return Etablissement Returns this ??tablissement.
     */
    public function setEnseigne3(?string $enseigne3): Etablissement {
        $this->enseigne3 = $enseigne3;
        return $this;
    }

    /**
     * Set the ??tablissement si??ge.
     *
     * @param bool|null $etablissementSiege The ??tablissement si??ge.
     * @return Etablissement Returns this ??tablissement.
     */
    public function setEtablissementSiege(?bool $etablissementSiege): Etablissement {
        $this->etablissementSiege = $etablissementSiege;
        return $this;
    }

    /**
     * Set the g??o adresse.
     *
     * @param string|null $geoAdresse The g??o adresse.
     * @return Etablissement Returns this ??tablissement.
     */
    public function setGeoAdresse(?string $geoAdresse): Etablissement {
        $this->geoAdresse = $geoAdresse;
        return $this;
    }

    /**
     * Set the g??o id.
     *
     * @param string|null $geoId The g??o id.
     * @return Etablissement Returns this ??tablissement.
     */
    public function setGeoId(?string $geoId): Etablissement {
        $this->geoId = $geoId;
        return $this;
    }

    /**
     * Set the g??o L4.
     *
     * @param string|null $geoL4 The g??o L4.
     * @return Etablissement Returns this ??tablissement.
     */
    public function setGeoL4(?string $geoL4): Etablissement {
        $this->geoL4 = $geoL4;
        return $this;
    }

    /**
     * Set the g??o L5.
     *
     * @param string|null $geoL5 The g??o L5.
     * @return Etablissement Returns this ??tablissement.
     */
    public function setGeoL5(?string $geoL5): Etablissement {
        $this->geoL5 = $geoL5;
        return $this;
    }

    /**
     * Set the g??o ligne.
     *
     * @param string|null $geoLigne The g??o ligne.
     * @return Etablissement Returns this ??tablissement.
     */
    public function setGeoLigne(?string $geoLigne): Etablissement {
        $this->geoLigne = $geoLigne;
        return $this;
    }

    /**
     * Set the g??o score.
     *
     * @param float|null $geoScore The g??o score.
     * @return Etablissement Returns this ??tablissement.
     */
    public function setGeoScore(?float $geoScore): Etablissement {
        $this->geoScore = $geoScore;
        return $this;
    }

    /**
     * Set the g??o type.
     *
     * @param string|null $geoType The g??o type.
     * @return Etablissement Returns this ??tablissement.
     */
    public function setGeoType(?string $geoType): Etablissement {
        $this->geoType = $geoType;
        return $this;
    }

    /**
     * Set the indice r??p??tition.
     *
     * @param string|null $indiceRepetition The indice r??p??tition.
     * @return Etablissement Returns this ??tablissement.
     */
    public function setIndiceRepetition(?string $indiceRepetition): Etablissement {
        $this->indiceRepetition = $indiceRepetition;
        return $this;
    }

    /**
     * Set the indice r??p??tition 2.
     *
     * @param string|null $indiceRepetition2 The indice r??p??tition 2.
     * @return Etablissement Returns this ??tablissement.
     */
    public function setIndiceRepetition2(?string $indiceRepetition2): Etablissement {
        $this->indiceRepetition2 = $indiceRepetition2;
        return $this;
    }

    /**
     * Set the libell?? cedex.
     *
     * @param string|null $libelleCedex The libell?? cedex.
     * @return Etablissement Returns this ??tablissement.
     */
    public function setLibelleCedex(?string $libelleCedex): Etablissement {
        $this->libelleCedex = $libelleCedex;
        return $this;
    }

    /**
     * Set the libell?? cedex 2.
     *
     * @param string|null $libelleCedex2 The libell?? cedex 2.
     * @return Etablissement Returns this ??tablissement.
     */
    public function setLibelleCedex2(?string $libelleCedex2): Etablissement {
        $this->libelleCedex2 = $libelleCedex2;
        return $this;
    }

    /**
     * Set the libell?? commune.
     *
     * @param string|null $libelleCommune The libell?? commune.
     * @return Etablissement Returns this ??tablissement.
     */
    public function setLibelleCommune(?string $libelleCommune): Etablissement {
        $this->libelleCommune = $libelleCommune;
        return $this;
    }

    /**
     * Set the libell?? commune 2.
     *
     * @param string|null $libelleCommune2 The libell?? commune 2.
     * @return Etablissement Returns this ??tablissement.
     */
    public function setLibelleCommune2(?string $libelleCommune2): Etablissement {
        $this->libelleCommune2 = $libelleCommune2;
        return $this;
    }

    /**
     * Set the libell?? commune ??tranger.
     *
     * @param string|null $libelleCommuneEtranger The libell?? commune ??tranger.
     * @return Etablissement Returns this ??tablissement.
     */
    public function setLibelleCommuneEtranger(?string $libelleCommuneEtranger): Etablissement {
        $this->libelleCommuneEtranger = $libelleCommuneEtranger;
        return $this;
    }

    /**
     * Set the libell?? commune ??tranger 2.
     *
     * @param string|null $libelleCommuneEtranger2 The libell?? commune ??tranger 2.
     * @return Etablissement Returns this ??tablissement.
     */
    public function setLibelleCommuneEtranger2(?string $libelleCommuneEtranger2): Etablissement {
        $this->libelleCommuneEtranger2 = $libelleCommuneEtranger2;
        return $this;
    }

    /**
     * Set the libell?? pays ??tranger.
     *
     * @param string|null $libellePaysEtranger The libell?? pays ??tranger.
     * @return Etablissement Returns this ??tablissement.
     */
    public function setLibellePaysEtranger(?string $libellePaysEtranger): Etablissement {
        $this->libellePaysEtranger = $libellePaysEtranger;
        return $this;
    }

    /**
     * Set the libell?? pays ??tranger 2.
     *
     * @param string|null $libellePaysEtranger2 The libell?? pays ??tranger 2.
     * @return Etablissement Returns this ??tablissement.
     */
    public function setLibellePaysEtranger2(?string $libellePaysEtranger2): Etablissement {
        $this->libellePaysEtranger2 = $libellePaysEtranger2;
        return $this;
    }

    /**
     * Set the libell?? voie.
     *
     * @param string|null $libelleVoie The libell?? voie.
     * @return Etablissement Returns this ??tablissement.
     */
    public function setLibelleVoie(?string $libelleVoie): Etablissement {
        $this->libelleVoie = $libelleVoie;
        return $this;
    }

    /**
     * Set the libell?? voie 2.
     *
     * @param string|null $libelleVoie2 The libell?? voie 2.
     * @return Etablissement Returns this ??tablissement.
     */
    public function setLibelleVoie2(?string $libelleVoie2): Etablissement {
        $this->libelleVoie2 = $libelleVoie2;
        return $this;
    }

    /**
     * Set the NIC.
     *
     * @param string|null $nic The NIC.
     * @return Etablissement Returns this ??tablissement.
     */
    public function setNic(?string $nic): Etablissement {
        $this->nic = $nic;
        return $this;
    }

    /**
     * Set the num??ro voie.
     *
     * @param string|null $numeroVoie The num??ro voie.
     * @return Etablissement Returns this ??tablissement.
     */
    public function setNumeroVoie(?string $numeroVoie): Etablissement {
        $this->numeroVoie = $numeroVoie;
        return $this;
    }

    /**
     * Set the num??ro voie 2.
     *
     * @param string|null $numeroVoie2 The num??ro voie 2.
     * @return Etablissement Returns this ??tablissement.
     */
    public function setNumeroVoie2(?string $numeroVoie2): Etablissement {
        $this->numeroVoie2 = $numeroVoie2;
        return $this;
    }

    /**
     * Set the type voie.
     *
     * @param string|null $typeVoie The type voie.
     * @return Etablissement Returns this ??tablissement.
     */
    public function setTypeVoie(?string $typeVoie): Etablissement {
        $this->typeVoie = $typeVoie;
        return $this;
    }

    /**
     * Set the type voie 2.
     *
     * @param string|null $typeVoie2 The type voie 2.
     * @return Etablissement Returns this ??tablissement.
     */
    public function setTypeVoie2(?string $typeVoie2): Etablissement {
        $this->typeVoie2 = $typeVoie2;
        return $this;
    }

    /**
     * Set the unit?? l??gale.
     *
     * @param UniteLegale|null $uniteLegale The unit?? l??gale.
     * @return Etablissement Returns this ??tablissement.
     */
    public function setUniteLegale(?UniteLegale $uniteLegale): Etablissement {
        $this->uniteLegale = $uniteLegale;
        return $this;
    }

    /**
     * Set the unit?? l??gale id.
     *
     * @param int|null $uniteLegaleId The unit?? l??gale id.
     * @return Etablissement Returns this ??tablissement.
     */
    public function setUniteLegaleId(?int $uniteLegaleId): Etablissement {
        $this->uniteLegaleId = $uniteLegaleId;
        return $this;
    }
}
