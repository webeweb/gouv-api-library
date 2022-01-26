<?php

/*
 * This file is part of the gouv-api-library package.
 *
 * (c) 2021 WEBEWEB
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace WBW\Library\GouvApi\Entreprise\Serializer;

use WBW\Library\GouvApi\Entreprise\Model\Etablissement;
use WBW\Library\GouvApi\Entreprise\Model\Meta;
use WBW\Library\GouvApi\Entreprise\Model\UniteLegale;
use WBW\Library\GouvApi\Entreprise\Response\AbstractResponse;
use WBW\Library\GouvApi\Entreprise\Response\EtablissementsResponse;
use WBW\Library\GouvApi\Entreprise\Response\UnitesLegalesResponse;
use WBW\Library\Types\Helper\ArrayHelper;
use WBW\Library\Types\Helper\BooleanHelper;

/**
 * Response deserializer.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\GouvApi\Entreprise\Serializer
 */
class ResponseDeserializer {

    /**
     * Deserializes an établisement.
     *
     * @param array|null $data The data.
     * @return Etablissement|null Returns the établissement.
     */
    protected static function deserializeEtablissement(?array $data): ?Etablissement {

        if (null === $data || 0 === count($data)) {
            return null;
        }

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
        $model->setUniteLegale(static::deserializeUniteLegale(ArrayHelper::get($data, "unite_legale", [])));

        return $model;
    }

    /**
     * Deserializes an établissements response.
     *
     * @param string $rawResponse The raw response.
     * @return EtablissementsResponse Returns the établissements response.
     */
    public static function deserializeEtablissementsResponse(string $rawResponse): EtablissementsResponse {

        $model = new EtablissementsResponse();
        $model->setRawResponse($rawResponse);

        $response = json_decode($rawResponse, true);
        if (null === $response) {
            return $model;
        }

        $data = ArrayHelper::get($response, "etablissements", []);
        if (true === array_key_exists("etablissement", $response)) {
            $data = [$response["etablissement"]];
        }

        foreach ($data as $current) {
            $model->addEtablissement(static::deserializeEtablissement($current));
        }

        static::deserializeResponse($response, $model);

        return $model;
    }

    /**
     * Deserializes a meta.
     *
     * @param array|null $data The data.
     * @return Meta|null Returns the meta.
     */
    protected static function deserializeMeta(?array $data): ?Meta {

        if (null === $data || 0 === count($data)) {
            return null;
        }

        $model = new Meta();
        $model->setTotalResults(ArrayHelper::get($data, "total_results"));
        $model->setPerPage(ArrayHelper::get($data, "per_page"));
        $model->setTotalPages(ArrayHelper::get($data, "total_pages"));
        $model->setPage(ArrayHelper::get($data, "page"));

        return $model;
    }

    /**
     * Deserializes a response.
     *
     * @param array $data The data.
     * @param AbstractResponse $model The response.
     * @return void
     */
    protected static function deserializeResponse(array $data, AbstractResponse $model): void {

        $model->setMessage(ArrayHelper::get($data, "message"));
        $model->setMeta(static::deserializeMeta(ArrayHelper::get($data, "meta", [])));
    }

    /**
     * Deserializes an unité légale.
     *
     * @param array|null $data The data.
     * @return UniteLegale|null Returns the unité légale.
     */
    protected static function deserializeUniteLegale(?array $data): ?UniteLegale {

        if (null === $data || 0 === count($data)) {
            return null;
        }

        $model = new UniteLegale();
        $model->setId(ArrayHelper::get($data, "id"));
        $model->setSiren(ArrayHelper::get($data, "siren"));
        $model->setStatutDiffusion(ArrayHelper::get($data, "statut_diffusion"));
        $model->setUnitePurgee(BooleanHelper::parseString(ArrayHelper::get($data, "unite_purgee")));
        $model->setDateCreation(ArrayHelper::get($data, "date_creation"));
        $model->setSigle(ArrayHelper::get($data, "sigle"));
        $model->setSexe(ArrayHelper::get($data, "sexe"));
        $model->setPrenom1(ArrayHelper::get($data, "prenom_1"));
        $model->setPrenom2(ArrayHelper::get($data, "prenom_2"));
        $model->setPrenom3(ArrayHelper::get($data, "prenom_3"));
        $model->setPrenom4(ArrayHelper::get($data, "prenom_4"));
        $model->setPrenomUsuel(ArrayHelper::get($data, "prenom_usuel"));
        $model->setPseudonyme(ArrayHelper::get($data, "pseudonyme"));
        $model->setIdentifiantAssociation(ArrayHelper::get($data, "identifiant_association"));
        $model->setTrancheEffectifs(ArrayHelper::get($data, "tranche_effectifs"));
        $model->setAnneeEffectifs(ArrayHelper::get($data, "annee_effectifs"));
        $model->setDateDernierTraitement(ArrayHelper::get($data, "date_dernier_traitement"));
        $model->setNombrePeriodes(ArrayHelper::get($data, "nombre_periodes"));
        $model->setCategorieEntreprise(ArrayHelper::get($data, "categorie_entreprise"));
        $model->setAnneeCategorieEntreprise(ArrayHelper::get($data, "annee_categorie_entreprise"));
        $model->setDateFin(ArrayHelper::get($data, "date_fin"));
        $model->setDateDebut(ArrayHelper::get($data, "date_debut"));
        $model->setEtatAdministratif(ArrayHelper::get($data, "etat_administratif"));
        $model->setNom(ArrayHelper::get($data, "nom"));
        $model->setNomUsage(ArrayHelper::get($data, "nom_usage"));
        $model->setDenomination(ArrayHelper::get($data, "denomination"));
        $model->setDenominationUsuelle1(ArrayHelper::get($data, "denomination_usuelle_1"));
        $model->setDenominationUsuelle2(ArrayHelper::get($data, "denomination_usuelle_2"));
        $model->setDenominationUsuelle3(ArrayHelper::get($data, "denomination_usuelle_3"));
        $model->setCategorieJuridique(ArrayHelper::get($data, "categorie_juridique"));
        $model->setActivitePrincipale(ArrayHelper::get($data, "activite_principale"));
        $model->setNomenclatureActivitePrincipale(ArrayHelper::get($data, "nomenclature_activite_principale"));
        $model->setNicSiege(ArrayHelper::get($data, "nic_siege"));
        $model->setEconomieSocialeSolidaire(BooleanHelper::parseString(ArrayHelper::get($data, "economie_sociale_solidaire")));
        $model->setCaractereEmployeur(ArrayHelper::get($data, "caractere_employeur"));
        $model->setCreatedAt(ArrayHelper::get($data, "created_at"));
        $model->setUpdatedAt(ArrayHelper::get($data, "updated_at"));
        $model->setEtablissementSiege(static::deserializeEtablissement(ArrayHelper::get($data, "etablissement_siege", [])));
        $model->setNumeroTvaIntra(ArrayHelper::get($data, "numero_tva_intra"));

        return $model;
    }

    /**
     * Deserializes an unités légales response.
     *
     * @param string $rawResponse The raw response.
     * @return UnitesLegalesResponse Returns the établissements response.
     */
    public static function deserializeUnitesLegalesResponse(string $rawResponse): UnitesLegalesResponse {

        $model = new UnitesLegalesResponse();
        $model->setRawResponse($rawResponse);

        $response = json_decode($rawResponse, true);
        if (null === $response) {
            return $model;
        }

        $data = ArrayHelper::get($response, "unites_legales", []);
        if (true === array_key_exists("unite_legale", $response)) {
            $data = [$response["unite_legale"]];
        }

        foreach ($data as $current) {
            $model->addUniteLegale(static::deserializeUniteLegale($current));
        }

        static::deserializeResponse($response, $model);

        return $model;
    }
}
