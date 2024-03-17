<?php

/*
 * This file is part of the gouv-api-library package.
 *
 * (c) 2021 WEBEWEB
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace WBW\Library\GouvApi\Entreprise\Tests\Model;

use WBW\Library\GouvApi\Entreprise\Model\Etablissement;
use WBW\Library\GouvApi\Entreprise\Model\UniteLegale;
use WBW\Library\GouvApi\Entreprise\Tests\AbstractTestCase;

/**
 * Unité légale test.
 *
 * @author webeweb <https://github.com/webeweb>
 * @package WBW\Library\GouvApi\Entreprise\Tests\Model
 */
class UniteLegaleTest extends AbstractTestCase {

    /**
     * Test setAnneeCategorieEntreprise()
     *
     * @return void
     */
    public function testSetAnneeCategorieEntreprise(): void {

        $obj = new UniteLegale();

        $obj->setAnneeCategorieEntreprise("anneeCategorieEntreprise");
        $this->assertEquals("anneeCategorieEntreprise", $obj->getAnneeCategorieEntreprise());
    }

    /**
     * Test setCategorieEntreprise()
     *
     * @return void
     */
    public function testSetCategorieEntreprise(): void {

        $obj = new UniteLegale();

        $obj->setCategorieEntreprise("categorieEntreprise");
        $this->assertEquals("categorieEntreprise", $obj->getCategorieEntreprise());
    }

    /**
     * Test setCategorieJuridique()
     *
     * @return void
     */
    public function testSetCategorieJuridique(): void {

        $obj = new UniteLegale();

        $obj->setCategorieJuridique("categorieJuridique");
        $this->assertEquals("categorieJuridique", $obj->getCategorieJuridique());
    }

    /**
     * Test setDateFin()
     *
     * @return void
     */
    public function testSetDateFin(): void {

        $obj = new UniteLegale();

        $obj->setDateFin("dateFin");
        $this->assertEquals("dateFin", $obj->getDateFin());
    }

    /**
     * Test setDenomination()
     *
     * @return void
     */
    public function testSetDenomination(): void {

        $obj = new UniteLegale();

        $obj->setDenomination("denomination");
        $this->assertEquals("denomination", $obj->getDenomination());
    }

    /**
     * Test setDenominationUsuelle1()
     *
     * @return void
     */
    public function testSetDenominationUsuelle1(): void {

        $obj = new UniteLegale();

        $obj->setDenominationUsuelle1("denominationUsuelle1");
        $this->assertEquals("denominationUsuelle1", $obj->getDenominationUsuelle1());
    }

    /**
     * Test setDenominationUsuelle2()
     *
     * @return void
     */
    public function testSetDenominationUsuelle2(): void {

        $obj = new UniteLegale();

        $obj->setDenominationUsuelle2("denominationUsuelle2");
        $this->assertEquals("denominationUsuelle2", $obj->getDenominationUsuelle2());
    }

    /**
     * Test setDenominationUsuelle3()
     *
     * @return void
     */
    public function testSetDenominationUsuelle3(): void {

        $obj = new UniteLegale();

        $obj->setDenominationUsuelle3("denominationUsuelle3");
        $this->assertEquals("denominationUsuelle3", $obj->getDenominationUsuelle3());
    }

    /**
     * Test setEconomieSocialeSolidaire()
     *
     * @return void
     */
    public function testSetEconomieSocialeSolidaire(): void {

        $obj = new UniteLegale();

        $obj->setEconomieSocialeSolidaire("economieSocialeSolidaire");
        $this->assertEquals("economieSocialeSolidaire", $obj->getEconomieSocialeSolidaire());
    }

    /**
     * Test setEtablissementSiege()
     *
     * @return void
     */
    public function testSetEtablissementSiege(): void {

        // Set an Etablissement mock.
        $etablissementSiege = new Etablissement();

        $obj = new UniteLegale();

        $obj->setEtablissementSiege($etablissementSiege);
        $this->assertSame($etablissementSiege, $obj->getEtablissementSiege());
    }

    /**
     * Test setIdentifiantAssociation()
     *
     * @return void
     */
    public function testSetIdentifiantAssociation(): void {

        $obj = new UniteLegale();

        $obj->setIdentifiantAssociation("identifiantAssociation");
        $this->assertEquals("identifiantAssociation", $obj->getIdentifiantAssociation());
    }

    /**
     * Test setNicSiege()
     *
     * @return void
     */
    public function testSetNicSiege(): void {

        $obj = new UniteLegale();

        $obj->setNicSiege("nicSiege");
        $this->assertEquals("nicSiege", $obj->getNicSiege());
    }

    /**
     * Test setNomUsage()
     *
     * @return void
     */
    public function testSetNomUsage(): void {

        $obj = new UniteLegale();

        $obj->setNomUsage("nomUsage");
        $this->assertEquals("nomUsage", $obj->getNomUsage());
    }

    /**
     * Test setNumeroTvaIntra()
     *
     * @return void
     */
    public function testSetNumeroTvaIntra(): void {

        $obj = new UniteLegale();

        $obj->setNumeroTvaIntra("numeroTvaIntra");
        $this->assertEquals("numeroTvaIntra", $obj->getNumeroTvaIntra());
    }

    /**
     * Test setPrenom1()
     *
     * @return void
     */
    public function testSetPrenom1(): void {

        $obj = new UniteLegale();

        $obj->setPrenom1("prenom1");
        $this->assertEquals("prenom1", $obj->getPrenom1());
    }

    /**
     * Test setPrenom2()
     *
     * @return void
     */
    public function testSetPrenom2(): void {

        $obj = new UniteLegale();

        $obj->setPrenom2("prenom2");
        $this->assertEquals("prenom2", $obj->getPrenom2());
    }

    /**
     * Test setPrenom3()
     *
     * @return void
     */
    public function testSetPrenom3(): void {

        $obj = new UniteLegale();

        $obj->setPrenom3("prenom3");
        $this->assertEquals("prenom3", $obj->getPrenom3());
    }

    /**
     * Test setPrenom4()
     *
     * @return void
     */
    public function testSetPrenom4(): void {

        $obj = new UniteLegale();

        $obj->setPrenom4("prenom4");
        $this->assertEquals("prenom4", $obj->getPrenom4());
    }

    /**
     * Test setPrenomUsuel()
     *
     * @return void
     */
    public function testSetPrenomUsuel(): void {

        $obj = new UniteLegale();

        $obj->setPrenomUsuel("prenomUsuel");
        $this->assertEquals("prenomUsuel", $obj->getPrenomUsuel());
    }

    /**
     * Test setPseudonyme()
     *
     * @return void
     */
    public function testSetPseudonyme(): void {

        $obj = new UniteLegale();

        $obj->setPseudonyme("pseudonyme");
        $this->assertEquals("pseudonyme", $obj->getPseudonyme());
    }

    /**
     * Test setSexe()
     *
     * @return void
     */
    public function testSetSexe(): void {

        $obj = new UniteLegale();

        $obj->setSexe("sexe");
        $this->assertEquals("sexe", $obj->getSexe());
    }

    /**
     * Test setSigle()
     *
     * @return void
     */
    public function testSetSigle(): void {

        $obj = new UniteLegale();

        $obj->setSigle("sigle");
        $this->assertEquals("sigle", $obj->getSigle());
    }

    /**
     * Test setUnitePurgee()
     *
     * @return void
     */
    public function testSetUnitePurgee(): void {

        $obj = new UniteLegale();

        $obj->setUnitePurgee("unitePurgee");
        $this->assertEquals("unitePurgee", $obj->getUnitePurgee());
    }

    /**
     * Test __construct()
     *
     * @return void
     */
    public function test__construct(): void {

        $obj = new UniteLegale();

        $this->assertNull($obj->getId());
        $this->assertNull($obj->getActivitePrincipale());
        $this->assertNull($obj->getAnneeEffectifs());
        $this->assertNull($obj->getCaractereEmployeur());
        $this->assertNull($obj->getCreatedAt());
        $this->assertNull($obj->getDateCreation());
        $this->assertNull($obj->getDateDebut());
        $this->assertNull($obj->getDateDernierTraitement());
        $this->assertNull($obj->getEtatAdministratif());
        $this->assertNull($obj->getNombrePeriodes());
        $this->assertNull($obj->getNomenclatureActivitePrincipale());
        $this->assertNull($obj->getSiren());
        $this->assertNull($obj->getStatutDiffusion());
        $this->assertNull($obj->getTrancheEffectifs());
        $this->assertNull($obj->getUpdatedAt());

        $this->assertNull($obj->getAnneeCategorieEntreprise());
        $this->assertNull($obj->getCategorieEntreprise());
        $this->assertNull($obj->getCategorieJuridique());
        $this->assertNull($obj->getDateFin());
        $this->assertNull($obj->getDenomination());
        $this->assertNull($obj->getDenominationUsuelle1());
        $this->assertNull($obj->getDenominationUsuelle2());
        $this->assertNull($obj->getDenominationUsuelle3());
        $this->assertNull($obj->getEconomieSocialeSolidaire());
        $this->assertNull($obj->getEtablissementSiege());
        $this->assertNull($obj->getIdentifiantAssociation());
        $this->assertNull($obj->getNicSiege());
        $this->assertNull($obj->getNomUsage());
        $this->assertNull($obj->getNumeroTvaIntra());
        $this->assertNull($obj->getPrenom1());
        $this->assertNull($obj->getPrenom2());
        $this->assertNull($obj->getPrenom3());
        $this->assertNull($obj->getPrenom4());
        $this->assertNull($obj->getPrenomUsuel());
        $this->assertNull($obj->getPseudonyme());
        $this->assertNull($obj->getSexe());
        $this->assertNull($obj->getSigle());
        $this->assertNull($obj->getUnitePurgee());
    }
}
