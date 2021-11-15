<?php

/*
 * This file is part of the gouv-api-library package.
 *
 * (c) 2021 WEBEWEB
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace WBW\Library\GouvAPI\Entreprise\Serializer;

use WBW\Library\GouvAPI\Entreprise\Model\Etablissement;
use WBW\Library\Types\Helper\ArrayHelper;
use WBW\Library\Types\Helper\BooleanHelper;

/**
 * Response deserializer.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\GouvAPI\Entreprise\Serializer
 */
class ResponseDeserializer {

    /**
     * Deserializes an établisement.
     *
     * @param array $data The data.
     * @return Etablissement Returns the établissement.
     */
    protected static function deserializeEtablissement(array $data): Etablissement {

        $model = new Etablissement();

        $model->setId(ArrayHelper::get($data, "id"));
        $model->setSiren(ArrayHelper::get($data, "siren"));
        $model->setNic(ArrayHelper::get($data, "nic"));
        $model->setSiret(ArrayHelper::get($data, "siret"));
        $model->setStatutDiffusion(ArrayHelper::get($data, "statut_diffusion"));
        $model->setDateCreation(ArrayHelper::get($data, "date_creation"));
        $model->setTrancheEffectifs(ArrayHelper::get($data, "tranche_effectifs"));
        $model->setAnneeEffectifs(ArrayHelper::get($data, "annee_effectifs"));
        $model->setActivitePrincipale(ArrayHelper::get($data, "activite_principale_registre_metiers"));
        $model->setDateDernierTraitement(ArrayHelper::get($data, "date_dernier_traitement"));
        $model->setEtablissementSiege(BooleanHelper::parseString(ArrayHelper::get($data, "etablissement_siege")));
        $model->setNombrePeriodes(ArrayHelper::get($data, "nombre_periodes"));
        $model->setComplementAdresse(ArrayHelper::get($data, "complement_adresse"));
        $model->setNumeroVoie(ArrayHelper::get($data, "numero_voie"));
        $model->setIndiceRepetition(ArrayHelper::get($data, "indice_repetition"));
        $model->setTypeVoie(ArrayHelper::get($data, "type_voie"));
        $model->setLibelleVoie(ArrayHelper::get($data, "libelle_voie"));
        $model->setCodePostal(ArrayHelper::get($data, "code_postal"));
        $model->setLibelleCommune(ArrayHelper::get($data, "libelle_commune"));
        $model->setLibelleCommuneEtranger(ArrayHelper::get($data, "libelle_commune_etranger"));
        $model->setDistributionSpeciale(ArrayHelper::get($data, "distribution_speciale"));
        $model->setCodeCommune(ArrayHelper::get($data, "code_commune"));
        $model->setCodeCedex(ArrayHelper::get($data, "code_cedex"));
        $model->setLibelleCedex(ArrayHelper::get($data, "libelle_cedex"));
        $model->setCodePaysEtranger(ArrayHelper::get($data, "code_pays_etranger"));
        $model->setLibellePaysEtranger(ArrayHelper::get($data, "libelle_pays_etranger"));
        $model->setComplementAdresse2(ArrayHelper::get($data, "complement_adresse_2"));
        $model->setNumeroVoie2(ArrayHelper::get($data, "numero_voie_2"));
        $model->setIndiceRepetition2(ArrayHelper::get($data, "indice_repetition_2"));
        $model->setTypeVoie2(ArrayHelper::get($data, "type_voie_2"));
        $model->setLibelleVoie2(ArrayHelper::get($data, "libelle_voie_2"));
        $model->setCodePostal2(ArrayHelper::get($data, "code_postal_2"));
        $model->setLibelleCommune2(ArrayHelper::get($data, "libelle_commune_2"));
        $model->setLibelleCommuneEtranger2(ArrayHelper::get($data, "libelle_commune_etranger_2"));
        $model->setDistributionSpeciale2(ArrayHelper::get($data, "distribution_speciale_2"));
        $model->setCodeCommune2(ArrayHelper::get($data, "code_commune_2"));
        $model->setCodeCedex2(ArrayHelper::get($data, "code_cedex_2"));
        $model->setLibelleCedex2(ArrayHelper::get($data, "libelle_cedex_2"));
        $model->setCodePaysEtranger2(ArrayHelper::get($data, "code_pays_etranger_2"));
        $model->setLibellePaysEtranger2(ArrayHelper::get($data, "libelle_pays_etranger_2"));
        $model->setDateDebut(ArrayHelper::get($data, "date_debut"));
        $model->setEtatAdministratif(ArrayHelper::get($data, "etat_administratif"));
        $model->setEnseigne1(ArrayHelper::get($data, "enseigne_1"));
        $model->setEnseigne2(ArrayHelper::get($data, "enseigne_2"));
        $model->setEnseigne3(ArrayHelper::get($data, "enseigne_3"));
        $model->setDenominationUsuelle(ArrayHelper::get($data, "denomination_usuelle"));
        $model->setActivitePrincipale(ArrayHelper::get($data, "activite_principale"));
        $model->setNomenclatureActivitePrincipale(ArrayHelper::get($data, "nomenclature_activite_principale"));
        $model->setCaractereEmployeur(ArrayHelper::get($data, "caractere_employeur"));
        $model->setLongitude(ArrayHelper::get($data, "longitude"));
        $model->setLatitude(ArrayHelper::get($data, "latitude"));
        $model->setGeoScore(ArrayHelper::get($data, "geo_score"));
        $model->setGeoType(ArrayHelper::get($data, "geo_type"));
        $model->setGeoAdresse(ArrayHelper::get($data, "geo_adresse"));
        $model->setGeoId(ArrayHelper::get($data, "geo_id"));
        $model->setGeoLigne(ArrayHelper::get($data, "geo_ligne"));
        $model->setGeoL4(ArrayHelper::get($data, "geo_l4"));
        $model->setGeoL5(ArrayHelper::get($data, "geo_l5"));
        $model->setUniteLegaleId(ArrayHelper::get($data, "unite_legale_id"));
        $model->setCreatedAt(ArrayHelper::get($data, "created_at"));
        $model->setUpdatedAt(ArrayHelper::get($data, "updated_at"));

        return $model;
    }
}