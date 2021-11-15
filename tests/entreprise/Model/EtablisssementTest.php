<?php

/*
 * This file is part of the gouv-api-library package.
 *
 * (c) 2021 WEBEWEB
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace WBW\Library\GouvAPI\Entreprise\Tests\Model;

use WBW\Library\GouvAPI\Entreprise\Model\Etablissement;
use WBW\Library\GouvAPI\Entreprise\Tests\AbstractTestCase;

/**
 * Etablisssement test.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\GouvAPI\Entreprise\Tests\Model
 */
class EtablisssementTest extends AbstractTestCase {

    /**
     * Tests the setActivitePrincipaleRegistreMetiers() method.
     *
     * @return void
     */
    public function testSetActivitePrincipaleRegistreMetiers(): void {

        $obj = new Etablissement();

        $obj->setActivitePrincipaleRegistreMetiers("activitePrincipaleRegistreMetiers");
        $this->assertEquals("activitePrincipaleRegistreMetiers", $obj->getActivitePrincipaleRegistreMetiers());
    }

    /**
     * Tests the setCodeCedex() method.
     *
     * @return void
     */
    public function testSetCodeCedex(): void {

        $obj = new Etablissement();

        $obj->setCodeCedex("codeCedex");
        $this->assertEquals("codeCedex", $obj->getCodeCedex());
    }

    /**
     * Tests the setCodeCedex2() method.
     *
     * @return void
     */
    public function testSetCodeCedex2(): void {

        $obj = new Etablissement();

        $obj->setCodeCedex2("codeCedex2");
        $this->assertEquals("codeCedex2", $obj->getCodeCedex2());
    }

    /**
     * Tests the setCodeCommune() method.
     *
     * @return void
     */
    public function testSetCodeCommune(): void {

        $obj = new Etablissement();

        $obj->setCodeCommune("codeCommune");
        $this->assertEquals("codeCommune", $obj->getCodeCommune());
    }

    /**
     * Tests the setCodeCommune2() method.
     *
     * @return void
     */
    public function testSetCodeCommune2(): void {

        $obj = new Etablissement();

        $obj->setCodeCommune2("codeCommune2");
        $this->assertEquals("codeCommune2", $obj->getCodeCommune2());
    }

    /**
     * Tests the setCodePaysEtranger() method.
     *
     * @return void
     */
    public function testSetCodePaysEtranger(): void {

        $obj = new Etablissement();

        $obj->setCodePaysEtranger("codePaysEtranger");
        $this->assertEquals("codePaysEtranger", $obj->getCodePaysEtranger());
    }

    /**
     * Tests the setCodePaysEtranger2() method.
     *
     * @return void
     */
    public function testSetCodePaysEtranger2(): void {

        $obj = new Etablissement();

        $obj->setCodePaysEtranger2("codePaysEtranger2");
        $this->assertEquals("codePaysEtranger2", $obj->getCodePaysEtranger2());
    }

    /**
     * Tests the setCodePostal() method.
     *
     * @return void
     */
    public function testSetCodePostal(): void {

        $obj = new Etablissement();

        $obj->setCodePostal("codePostal");
        $this->assertEquals("codePostal", $obj->getCodePostal());
    }

    /**
     * Tests the setCodePostal2() method.
     *
     * @return void
     */
    public function testSetCodePostal2(): void {

        $obj = new Etablissement();

        $obj->setCodePostal2("codePostal2");
        $this->assertEquals("codePostal2", $obj->getCodePostal2());
    }

    /**
     * Tests the setComplementAdresse() method.
     *
     * @return void
     */
    public function testSetComplementAdresse(): void {

        $obj = new Etablissement();

        $obj->setComplementAdresse("complementAdresse");
        $this->assertEquals("complementAdresse", $obj->getComplementAdresse());
    }

    /**
     * Tests the setComplementAdresse2() method.
     *
     * @return void
     */
    public function testSetComplementAdresse2(): void {

        $obj = new Etablissement();

        $obj->setComplementAdresse2("complementAdresse2");
        $this->assertEquals("complementAdresse2", $obj->getComplementAdresse2());
    }

    /**
     * Tests the setDenominationUsuelle() method.
     *
     * @return void
     */
    public function testSetDenominationUsuelle(): void {

        $obj = new Etablissement();

        $obj->setDenominationUsuelle("denominationUsuelle");
        $this->assertEquals("denominationUsuelle", $obj->getDenominationUsuelle());
    }

    /**
     * Tests the setDistributionSpeciale() method.
     *
     * @return void
     */
    public function testSetDistributionSpeciale(): void {

        $obj = new Etablissement();

        $obj->setDistributionSpeciale("distributionSpeciale");
        $this->assertEquals("distributionSpeciale", $obj->getDistributionSpeciale());
    }

    /**
     * Tests the setDistributionSpeciale2() method.
     *
     * @return void
     */
    public function testSetDistributionSpeciale2(): void {

        $obj = new Etablissement();

        $obj->setDistributionSpeciale2("distributionSpeciale2");
        $this->assertEquals("distributionSpeciale2", $obj->getDistributionSpeciale2());
    }

    /**
     * Tests the setEnseigne1() method.
     *
     * @return void
     */
    public function testSetEnseigne1(): void {

        $obj = new Etablissement();

        $obj->setEnseigne1("enseigne1");
        $this->assertEquals("enseigne1", $obj->getEnseigne1());
    }

    /**
     * Tests the setEnseigne2() method.
     *
     * @return void
     */
    public function testSetEnseigne2(): void {

        $obj = new Etablissement();

        $obj->setEnseigne2("enseigne2");
        $this->assertEquals("enseigne2", $obj->getEnseigne2());
    }

    /**
     * Tests the setEnseigne3() method.
     *
     * @return void
     */
    public function testSetEnseigne3(): void {

        $obj = new Etablissement();

        $obj->setEnseigne3("enseigne3");
        $this->assertEquals("enseigne3", $obj->getEnseigne3());
    }

    /**
     * Tests the setEtablissementSiege() method.
     *
     * @return void
     */
    public function testSetEtablissementSiege(): void {

        $obj = new Etablissement();

        $obj->setEtablissementSiege(true);
        $this->assertTrue($obj->getEtablissementSiege());
    }

    /**
     * Tests the setGeoAdresse() method.
     *
     * @return void
     */
    public function testSetGeoAdresse(): void {

        $obj = new Etablissement();

        $obj->setGeoAdresse("geoAdresse");
        $this->assertEquals("geoAdresse", $obj->getGeoAdresse());
    }

    /**
     * Tests the setGeoId() method.
     *
     * @return void
     */
    public function testSetGeoId(): void {

        $obj = new Etablissement();

        $obj->setGeoId("geoId");
        $this->assertEquals("geoId", $obj->getGeoId());
    }

    /**
     * Tests the setGeoL4() method.
     *
     * @return void
     */
    public function testSetGeoL4(): void {

        $obj = new Etablissement();

        $obj->setGeoL4("geoL4");
        $this->assertEquals("geoL4", $obj->getGeoL4());
    }

    /**
     * Tests the setGeoL5() method.
     *
     * @return void
     */
    public function testSetGeoL5(): void {

        $obj = new Etablissement();

        $obj->setGeoL5("geoL5");
        $this->assertEquals("geoL5", $obj->getGeoL5());
    }

    /**
     * Tests the setGeoLigne() method.
     *
     * @return void
     */
    public function testSetGeoLigne(): void {

        $obj = new Etablissement();

        $obj->setGeoLigne("geoLigne");
        $this->assertEquals("geoLigne", $obj->getGeoLigne());
    }

    /**
     * Tests the setGeoScore() method.
     *
     * @return void
     */
    public function testSetGeoScore(): void {

        $obj = new Etablissement();

        $obj->setGeoScore(0.123456789);
        $this->assertEquals(0.123456789, $obj->getGeoScore());
    }

    /**
     * Tests the setGeoType() method.
     *
     * @return void
     */
    public function testSetGeoType(): void {

        $obj = new Etablissement();

        $obj->setGeoType("geoType");
        $this->assertEquals("geoType", $obj->getGeoType());
    }

    /**
     * Tests the setIndiceRepetition() method.
     *
     * @return void
     */
    public function testSetIndiceRepetition(): void {

        $obj = new Etablissement();

        $obj->setIndiceRepetition("indiceRepetition");
        $this->assertEquals("indiceRepetition", $obj->getIndiceRepetition());
    }

    /**
     * Tests the setIndiceRepetition2() method.
     *
     * @return void
     */
    public function testSetIndiceRepetition2(): void {

        $obj = new Etablissement();

        $obj->setIndiceRepetition2("indiceRepetition2");
        $this->assertEquals("indiceRepetition2", $obj->getIndiceRepetition2());
    }

    /**
     * Tests the setLibelleCedex() method.
     *
     * @return void
     */
    public function testSetLibelleCedex(): void {

        $obj = new Etablissement();

        $obj->setLibelleCedex("libelleCedex");
        $this->assertEquals("libelleCedex", $obj->getLibelleCedex());
    }

    /**
     * Tests the setLibelleCedex2() method.
     *
     * @return void
     */
    public function testSetLibelleCedex2(): void {

        $obj = new Etablissement();

        $obj->setLibelleCedex2("libelleCedex2");
        $this->assertEquals("libelleCedex2", $obj->getLibelleCedex2());
    }

    /**
     * Tests the setLibelleCommune() method.
     *
     * @return void
     */
    public function testSetLibelleCommune(): void {

        $obj = new Etablissement();

        $obj->setLibelleCommune("libelleCommune");
        $this->assertEquals("libelleCommune", $obj->getLibelleCommune());
    }

    /**
     * Tests the setLibelleCommune2() method.
     *
     * @return void
     */
    public function testSetLibelleCommune2(): void {

        $obj = new Etablissement();

        $obj->setLibelleCommune2("libelleCommune2");
        $this->assertEquals("libelleCommune2", $obj->getLibelleCommune2());
    }

    /**
     * Tests the setLibelleCommuneEtranger() method.
     *
     * @return void
     */
    public function testSetLibelleCommuneEtranger(): void {

        $obj = new Etablissement();

        $obj->setLibelleCommuneEtranger("libelleCommuneEtranger");
        $this->assertEquals("libelleCommuneEtranger", $obj->getLibelleCommuneEtranger());
    }

    /**
     * Tests the setLibelleCommuneEtranger2() method.
     *
     * @return void
     */
    public function testSetLibelleCommuneEtranger2(): void {

        $obj = new Etablissement();

        $obj->setLibelleCommuneEtranger2("libelleCommuneEtranger2");
        $this->assertEquals("libelleCommuneEtranger2", $obj->getLibelleCommuneEtranger2());
    }

    /**
     * Tests the setLibellePaysEtranger() method.
     *
     * @return void
     */
    public function testSetLibellePaysEtranger(): void {

        $obj = new Etablissement();

        $obj->setLibellePaysEtranger("libellePaysEtranger");
        $this->assertEquals("libellePaysEtranger", $obj->getLibellePaysEtranger());
    }

    /**
     * Tests the setLibellePaysEtranger2() method.
     *
     * @return void
     */
    public function testSetLibellePaysEtranger2(): void {

        $obj = new Etablissement();

        $obj->setLibellePaysEtranger2("libellePaysEtranger2");
        $this->assertEquals("libellePaysEtranger2", $obj->getLibellePaysEtranger2());
    }

    /**
     * Tests the setLibelleVoie() method.
     *
     * @return void
     */
    public function testSetLibelleVoie(): void {

        $obj = new Etablissement();

        $obj->setLibelleVoie("libelleVoie");
        $this->assertEquals("libelleVoie", $obj->getLibelleVoie());
    }

    /**
     * Tests the setLibelleVoie2() method.
     *
     * @return void
     */
    public function testSetLibelleVoie2(): void {

        $obj = new Etablissement();

        $obj->setLibelleVoie2("libelleVoie2");
        $this->assertEquals("libelleVoie2", $obj->getLibelleVoie2());
    }

    /**
     * Tests the setNic() method.
     *
     * @return void
     */
    public function testSetNic(): void {

        $obj = new Etablissement();

        $obj->setNic("nic");
        $this->assertEquals("nic", $obj->getNic());
    }

    /**
     * Tests the setNumeroVoie() method.
     *
     * @return void
     */
    public function testSetNumeroVoie(): void {

        $obj = new Etablissement();

        $obj->setNumeroVoie("numeroVoie");
        $this->assertEquals("numeroVoie", $obj->getNumeroVoie());
    }

    /**
     * Tests the setNumeroVoie2() method.
     *
     * @return void
     */
    public function testSetNumeroVoie2(): void {

        $obj = new Etablissement();

        $obj->setNumeroVoie2("numeroVoie2");
        $this->assertEquals("numeroVoie2", $obj->getNumeroVoie2());
    }

    /**
     * Tests the setTypeVoie() method.
     *
     * @return void
     */
    public function testSetTypeVoie(): void {

        $obj = new Etablissement();

        $obj->setTypeVoie("typeVoie");
        $this->assertEquals("typeVoie", $obj->getTypeVoie());
    }

    /**
     * Tests the setTypeVoie2() method.
     *
     * @return void
     */
    public function testSetTypeVoie2(): void {

        $obj = new Etablissement();

        $obj->setTypeVoie2("typeVoie2");
        $this->assertEquals("typeVoie2", $obj->getTypeVoie2());
    }

    /**
     * Tests the setUniteLegaleId() method.
     *
     * @return void
     */
    public function testSetUniteLegaleId(): void {

        $obj = new Etablissement();

        $obj->setUniteLegaleId(1);
        $this->assertEquals(1, $obj->getUniteLegaleId());
    }

    /**
     * Tests the __construct() method.
     *
     * @return void
     */
    public function test__construct(): void {

        $obj = new Etablissement();

        $this->assertNull($obj->getId());
        $this->assertNull($obj->getActivitePrincipale());
        $this->assertNull($obj->getAnneeEffectifs());
        $this->assertNull($obj->getCaractereEmployeur());
        $this->assertNull($obj->getCreatedAt());
        $this->assertNull($obj->getDateCreation());
        $this->assertNull($obj->getDateDebut());
        $this->assertNull($obj->getDateDernierTraitement());
        $this->assertNull($obj->getEtatAdministratif());
        $this->assertNull($obj->getLatitude());
        $this->assertNull($obj->getLongitude());
        $this->assertNull($obj->getNombrePeriodes());
        $this->assertNull($obj->getNomenclatureActivitePrincipale());
        $this->assertNull($obj->getSiren());
        $this->assertNull($obj->getSiret());
        $this->assertNull($obj->getStatutDiffusion());
        $this->assertNull($obj->getTrancheEffectifs());
        $this->assertNull($obj->getUpdatedAt());

        $this->assertNull($obj->getActivitePrincipaleRegistreMetiers());
        $this->assertNull($obj->getCodeCedex());
        $this->assertNull($obj->getCodeCedex2());
        $this->assertNull($obj->getCodeCommune());
        $this->assertNull($obj->getCodeCommune2());
        $this->assertNull($obj->getCodePaysEtranger());
        $this->assertNull($obj->getCodePaysEtranger2());
        $this->assertNull($obj->getCodePostal());
        $this->assertNull($obj->getCodePostal2());
        $this->assertNull($obj->getComplementAdresse());
        $this->assertNull($obj->getComplementAdresse2());
        $this->assertNull($obj->getDenominationUsuelle());
        $this->assertNull($obj->getDistributionSpeciale());
        $this->assertNull($obj->getDistributionSpeciale2());
        $this->assertNull($obj->getEnseigne1());
        $this->assertNull($obj->getEnseigne2());
        $this->assertNull($obj->getEnseigne3());
        $this->assertNull($obj->getEtablissementSiege());
        $this->assertNull($obj->getGeoAdresse());
        $this->assertNull($obj->getGeoId());
        $this->assertNull($obj->getGeoL4());
        $this->assertNull($obj->getGeoL5());
        $this->assertNull($obj->getGeoLigne());
        $this->assertNull($obj->getGeoScore());
        $this->assertNull($obj->getGeoType());
        $this->assertNull($obj->getIndiceRepetition());
        $this->assertNull($obj->getIndiceRepetition2());
        $this->assertNull($obj->getLibelleCedex());
        $this->assertNull($obj->getLibelleCedex2());
        $this->assertNull($obj->getLibelleCommune());
        $this->assertNull($obj->getLibelleCommune2());
        $this->assertNull($obj->getLibelleCommuneEtranger());
        $this->assertNull($obj->getLibelleCommuneEtranger2());
        $this->assertNull($obj->getLibellePaysEtranger());
        $this->assertNull($obj->getLibellePaysEtranger2());
        $this->assertNull($obj->getLibelleVoie());
        $this->assertNull($obj->getLibelleVoie2());
        $this->assertNull($obj->getNic());
        $this->assertNull($obj->getNumeroVoie());
        $this->assertNull($obj->getNumeroVoie2());
        $this->assertNull($obj->getTypeVoie());
        $this->assertNull($obj->getTypeVoie2());
        $this->assertNull($obj->getUniteLegaleId());
    }
}