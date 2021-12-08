<?php

/*
 * This file is part of the gouv-api-library package.
 *
 * (c) 2021 WEBEWEB
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

require_once __DIR__ . "/../../vendor/autoload.php";

use WBW\Library\GouvApi\Entreprise\Provider\APIv3Provider;
use WBW\Library\GouvApi\Entreprise\Request\EtablissementsRequest;

// Create the API provider.
$provider = new APIv3Provider();

// Create an Etablissements request.
$request = new EtablissementsRequest("35027346200019");

// Call the API and get the response.
$response = $provider->etablissements($request);

// Handle the response.
$format = "%-40s: %s\n";

foreach ($response->getEtablissements() as $current) {

    echo sprintf($format, "Id", $current->getId());
    echo sprintf($format, "SIREN", $current->getSiren());
    echo sprintf($format, "NIC", $current->getNic());
    echo sprintf($format, "SIRET", $current->getSiret());
    echo sprintf($format, "Statut diffusion", $current->getStatutDiffusion());
    echo sprintf($format, "Date creation", $current->getDateCreation());
    echo sprintf($format, "Tranche effectifs", $current->getTrancheEffectifs());
    echo sprintf($format, "Annee effectifs", $current->getAnneeEffectifs());
    echo sprintf($format, "Activite principale registre metiers", $current->getActivitePrincipaleRegistreMetiers());
    echo sprintf($format, "Date dernier traitement", $current->getDateDernierTraitement());
    echo sprintf($format, "Etablissement siege", $current->getEtablissementSiege());
    echo sprintf($format, "Nombre periodes", $current->getNombrePeriodes());
    echo sprintf($format, "Complement addresse", $current->getComplementAdresse());
    echo sprintf($format, "Numero void", $current->getNumeroVoie());
    echo sprintf($format, "Indice repetiion", $current->getIndiceRepetition());
    echo sprintf($format, "Type voie", $current->getTypeVoie());
    echo sprintf($format, "Libelle voie", $current->getLibelleVoie());
    echo sprintf($format, "Code postal", $current->getCodePostal());
    echo sprintf($format, "Libelle commune", $current->getLibelleCommune());
    echo sprintf($format, "Libelle commune etranger", $current->getLibelleCommuneEtranger());
    echo sprintf($format, "Distribution speciale", $current->getDistributionSpeciale());
    echo sprintf($format, "Code commune", $current->getCodeCommune());
    echo sprintf($format, "Code cedex", $current->getCodeCedex());
    echo sprintf($format, "Libelle cedex", $current->getLibelleCedex());
    echo sprintf($format, "Code pays etranger", $current->getCodePaysEtranger());
    echo sprintf($format, "Libelle pays etranger", $current->getLibellePaysEtranger());
    echo sprintf($format, "Complement adresse 2", $current->getComplementAdresse2());
    echo sprintf($format, "Numero voie 2", $current->getNumeroVoie2());
    echo sprintf($format, "Indice repetition 2", $current->getIndiceRepetition2());
    echo sprintf($format, "Type voie 2", $current->getTypeVoie2());
    echo sprintf($format, "Libelle voie 2", $current->getLibelleVoie2());
    echo sprintf($format, "Code postal 2", $current->getCodePostal2());
    echo sprintf($format, "Libelle commune 2", $current->getLibelleCommune2());
    echo sprintf($format, "Libelle commune etranger 2", $current->getLibelleCommuneEtranger2());
    echo sprintf($format, "Distribution speciale 2", $current->getDistributionSpeciale2());
    echo sprintf($format, "Code commune 2", $current->getCodeCommune2());
    echo sprintf($format, "Code cedex 2", $current->getCodeCedex2());
    echo sprintf($format, "Libelle cedex 2", $current->getLibelleCedex2());
    echo sprintf($format, "Code pays etranger 2", $current->getCodePaysEtranger2());
    echo sprintf($format, "Libelle pays etranger 2", $current->getLibellePaysEtranger2());
    echo sprintf($format, "Date debut", $current->getDateDebut());
    echo sprintf($format, "Etat administratif", $current->getEtatAdministratif());
    echo sprintf($format, "Enseigne 1", $current->getEnseigne1());
    echo sprintf($format, "Enseigne 2", $current->getEnseigne2());
    echo sprintf($format, "Enseigne 3", $current->getEnseigne3());
    echo sprintf($format, "Denomination usuelle", $current->getDenominationUsuelle());
    echo sprintf($format, "Activite principale", $current->getActivitePrincipale());
    echo sprintf($format, "Nomenclature activite principale", $current->getNomenclatureActivitePrincipale());
    echo sprintf($format, "Caractere employeur", $current->getCaractereEmployeur());
    echo sprintf($format, "Longitude", $current->getLongitude());
    echo sprintf($format, "Latitude", $current->getLatitude());
    echo sprintf($format, "Geo score", $current->getGeoScore());
    echo sprintf($format, "Geo type", $current->getGeoType());
    echo sprintf($format, "Geo adresse", $current->getGeoAdresse());
    echo sprintf($format, "Geo id", $current->getGeoId());
    echo sprintf($format, "Geo ligne", $current->getGeoLigne());
    echo sprintf($format, "Geo l4", $current->getGeoL4());
    echo sprintf($format, "Geo l5", $current->getGeoL5());
    echo sprintf($format, "Unite legale id", $current->getUniteLegaleId());
    echo sprintf($format, "Created at", $current->getCreatedAt());
    echo sprintf($format, "Updated at", $current->getUpdatedAt());
    echo sprintf($format, "Unite legale", "[...]\n");
}
