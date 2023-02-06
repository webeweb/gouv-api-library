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
use WBW\Library\GouvApi\Entreprise\Request\UnitesLegalesRequest;
use WBW\Library\GouvApi\Entreprise\Response\UnitesLegalesResponse;

// Create the API provider.
$provider = new APIv3Provider();

// Create an Unités légales request.
$request = new UnitesLegalesRequest();

/** @var UnitesLegalesResponse $response */
$response = $provider->sendRequest($request);

// Handle the response.
$format = "%-40s: %s\n";

foreach ($response->getUnitesLegales() as $current) {

    echo sprintf($format, "Id", $current->getId());
    echo sprintf($format, "SIREN", $current->getSiren());
    echo sprintf($format, "Statut diffusion", $current->getStatutDiffusion());
    echo sprintf($format, "Unitee prugee", $current->getUnitePurgee());
    echo sprintf($format, "Date creation", $current->getDateCreation());
    echo sprintf($format, "Sigle", $current->getSigle());
    echo sprintf($format, "Sexe", $current->getSexe());
    echo sprintf($format, "Prenom 1", $current->getPrenom1());
    echo sprintf($format, "Prenom 2", $current->getPrenom2());
    echo sprintf($format, "Prenom 3", $current->getPrenom3());
    echo sprintf($format, "Prenom 4", $current->getPrenom4());
    echo sprintf($format, "Prenom usuel", $current->getPrenomUsuel());
    echo sprintf($format, "Pseudonyme", $current->getPseudonyme());
    echo sprintf($format, "Identifiant association", $current->getIdentifiantAssociation());
    echo sprintf($format, "Tranche effectifs", $current->getTrancheEffectifs());
    echo sprintf($format, "Annee effectifs", $current->getAnneeEffectifs());
    echo sprintf($format, "Date dernier traitement", $current->getDateDernierTraitement());
    echo sprintf($format, "Nombre periode", $current->getNombrePeriodes());
    echo sprintf($format, "Categorie entreprise", $current->getCategorieEntreprise());
    echo sprintf($format, "Annee categorie entreprise", $current->getAnneeCategorieEntreprise());
    echo sprintf($format, "Date fin", $current->getDateFin());
    echo sprintf($format, "Date debut", $current->getDateDebut());
    echo sprintf($format, "Etat administratif", $current->getEtatAdministratif());
    echo sprintf($format, "Nom", $current->getNom());
    echo sprintf($format, "Nom usage", $current->getNomUsage());
    echo sprintf($format, "Denomination", $current->getDenomination());
    echo sprintf($format, "Denomination usuelle 1", $current->getDenominationUsuelle1());
    echo sprintf($format, "Denomination usuelle 2", $current->getDenominationUsuelle2());
    echo sprintf($format, "Denomination usuelle 3", $current->getDenominationUsuelle3());
    echo sprintf($format, "Categorie juridique", $current->getCategorieJuridique());
    echo sprintf($format, "Activite principale", $current->getActivitePrincipale());
    echo sprintf($format, "Nomenclature activite principale", $current->getNomenclatureActivitePrincipale());
    echo sprintf($format, "NIC siege", $current->getNicSiege());
    echo sprintf($format, "Economie sociale solidaire", $current->getEconomieSocialeSolidaire());
    echo sprintf($format, "Caractere employeur", $current->getCaractereEmployeur());
    echo sprintf($format, "Created at", $current->getCreatedAt());
    echo sprintf($format, "Updated at", $current->getUpdatedAt());
    echo sprintf($format, "Etablissement siege", "[...]");
    echo sprintf($format, "Numero TVA intra", $current->getNumeroTvaIntra() . "\n");
}
