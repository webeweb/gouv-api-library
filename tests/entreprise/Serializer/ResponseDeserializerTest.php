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

namespace WBW\Library\GouvApi\Entreprise\Tests\Serializer;

use WBW\Library\GouvApi\Entreprise\Model\Etablissement;
use WBW\Library\GouvApi\Entreprise\Model\UniteLegale;
use WBW\Library\GouvApi\Entreprise\Request\EtablissementsRequest;
use WBW\Library\GouvApi\Entreprise\Response\EtablissementsResponse;
use WBW\Library\GouvApi\Entreprise\Response\UnitesLegalesResponse;
use WBW\Library\GouvApi\Entreprise\Serializer\ResponseDeserializer;
use WBW\Library\GouvApi\Entreprise\Tests\AbstractTestCase;

/**
 * Response deserializer test.
 *
 * @author webeweb <https://github.com/webeweb>
 * @package WBW\Library\GouvApi\Entreprise\Tests\Serializer
 */
class ResponseDeserializerTest extends AbstractTestCase {

    /**
     * Test deserializeEtablissementsResponse()
     *
     * @return void
     */
    public function testDeserializeEtablissementsResponse(): void {

        // Set a raw response mock.
        $rawResponse = file_get_contents(__DIR__ . "/ResponseDeserializerTest.testDeserializeEtablissementsResponse.json");

        $obj = new EtablissementsRequest();

        $res = $obj->deserializeResponse($rawResponse);
        $this->assertInstanceOf(EtablissementsResponse::class, $res);

        $this->assertEquals($rawResponse, $res->getRawResponse());
        $this->assertNull($res->getMessage());
        $this->assertNotNull($res->getMeta());

        $this->assertCount(20, $res->getEtablissements());

        $this->assertEquals(33669792, $res->getMeta()->getTotalResults());
        $this->assertEquals(20, $res->getMeta()->getPerPage());
        $this->assertEquals(1683490, $res->getMeta()->getTotalPages());
        $this->assertEquals(1, $res->getMeta()->getPage());

        $this->assertInstanceOf(Etablissement::class, $res->getEtablissements()[0]);

        $this->assertEquals(1538163765, $res->getEtablissements()[0]->getId());
        $this->assertEquals("350273462", $res->getEtablissements()[0]->getSiren());
        $this->assertEquals("00019", $res->getEtablissements()[0]->getNic());
        $this->assertEquals("35027346200019", $res->getEtablissements()[0]->getSiret());
        $this->assertEquals("O", $res->getEtablissements()[0]->getStatutDiffusion());
        $this->assertEquals("1989-01-01", $res->getEtablissements()[0]->getDateCreation());
        $this->assertEquals("NN", $res->getEtablissements()[0]->getTrancheEffectifs());
        $this->assertNull($res->getEtablissements()[0]->getAnneeEffectifs());
        $this->assertNull($res->getEtablissements()[0]->getActivitePrincipaleRegistreMetiers());
        $this->assertEquals("2013-03-05T08:35:24", $res->getEtablissements()[0]->getDateDernierTraitement());
        $this->assertEquals("false", $res->getEtablissements()[0]->getEtablissementSiege());
        $this->assertEquals(4, $res->getEtablissements()[0]->getNombrePeriodes());
        $this->assertNull($res->getEtablissements()[0]->getComplementAdresse());
        $this->assertNull($res->getEtablissements()[0]->getNumeroVoie());
        $this->assertNull($res->getEtablissements()[0]->getIndiceRepetition());
        $this->assertNull($res->getEtablissements()[0]->getTypeVoie());
        $this->assertEquals("LA PAGEOTIERE", $res->getEtablissements()[0]->getLibelleVoie());
        $this->assertEquals("61700", $res->getEtablissements()[0]->getCodePostal());
        $this->assertEquals("DOMFRONT-EN-POIRAIE", $res->getEtablissements()[0]->getLibelleCommune());
        $this->assertNull($res->getEtablissements()[0]->getLibelleCommuneEtranger());
        $this->assertNull($res->getEtablissements()[0]->getDistributionSpeciale());
        $this->assertEquals("61145", $res->getEtablissements()[0]->getCodeCommune());
        $this->assertNull($res->getEtablissements()[0]->getCodeCedex());
        $this->assertNull($res->getEtablissements()[0]->getLibelleCedex());
        $this->assertNull($res->getEtablissements()[0]->getCodePaysEtranger());
        $this->assertNull($res->getEtablissements()[0]->getLibellePaysEtranger());
        $this->assertNull($res->getEtablissements()[0]->getComplementAdresse2());
        $this->assertNull($res->getEtablissements()[0]->getNumeroVoie2());
        $this->assertNull($res->getEtablissements()[0]->getIndiceRepetition2());
        $this->assertNull($res->getEtablissements()[0]->getTypeVoie2());
        $this->assertNull($res->getEtablissements()[0]->getLibelleVoie2());
        $this->assertNull($res->getEtablissements()[0]->getCodePostal2());
        $this->assertNull($res->getEtablissements()[0]->getLibelleCommune2());
        $this->assertNull($res->getEtablissements()[0]->getLibelleCommuneEtranger2());
        $this->assertNull($res->getEtablissements()[0]->getDistributionSpeciale2());
        $this->assertNull($res->getEtablissements()[0]->getCodeCommune2());
        $this->assertNull($res->getEtablissements()[0]->getCodeCedex2());
        $this->assertNull($res->getEtablissements()[0]->getLibelleCedex2());
        $this->assertNull($res->getEtablissements()[0]->getCodePaysEtranger2());
        $this->assertNull($res->getEtablissements()[0]->getLibellePaysEtranger2());
        $this->assertEquals("2003-12-31", $res->getEtablissements()[0]->getDateDebut());
        $this->assertEquals("F", $res->getEtablissements()[0]->getEtatAdministratif());
        $this->assertNull($res->getEtablissements()[0]->getEnseigne1());
        $this->assertNull($res->getEtablissements()[0]->getEnseigne2());
        $this->assertNull($res->getEtablissements()[0]->getEnseigne3());
        $this->assertNull($res->getEtablissements()[0]->getDenominationUsuelle());
        $this->assertEquals("01.2A", $res->getEtablissements()[0]->getActivitePrincipale());
        $this->assertEquals("NAFRev1", $res->getEtablissements()[0]->getNomenclatureActivitePrincipale());
        $this->assertEquals("N", $res->getEtablissements()[0]->getCaractereEmployeur());
        $this->assertEquals(-0.625115, $res->getEtablissements()[0]->getLongitude());
        $this->assertEquals(48.554554, $res->getEtablissements()[0]->getLatitude());
        $this->assertEquals(0.95, $res->getEtablissements()[0]->getGeoScore());
        $this->assertEquals("street", $res->getEtablissements()[0]->getGeoType());
        $this->assertEquals("La Pageotière 61700 Domfront en Poiraie", $res->getEtablissements()[0]->getGeoAdresse());
        $this->assertEquals("61145_c0uj9y", $res->getEtablissements()[0]->getGeoId());
        $this->assertEquals("G", $res->getEtablissements()[0]->getGeoLigne());
        $this->assertEquals("LA PAGEOTIERE", $res->getEtablissements()[0]->getGeoL4());
        $this->assertNull($res->getEtablissements()[0]->getGeoL5());
        $this->assertEquals(230020577, $res->getEtablissements()[0]->getUniteLegaleId());
        $this->assertEquals("2021-08-03T04:14:03.570+02:00", $res->getEtablissements()[0]->getCreatedAt());
        $this->assertEquals("2021-08-03T04:14:03.570+02:00", $res->getEtablissements()[0]->getUpdatedAt());
        $this->assertNotNull($res->getEtablissements()[0]->getUniteLegale());
    }

    /**
     * Test deserializeEtablissementsResponse()
     *
     * @return void
     */
    public function testDeserializeEtablissementsResponseWithBadRawResponse(): void {

        // Set a raw response mock.
        $rawResponse = "";

        $res = ResponseDeserializer::deserializeEtablissementsResponse($rawResponse);
        $this->assertInstanceOf(EtablissementsResponse::class, $res);

        $this->assertEquals($rawResponse, $res->getRawResponse());
        $this->assertNull($res->getMessage());
        $this->assertNull($res->getMeta());

        $this->assertCount(0, $res->getEtablissements());
    }

    /**
     * Test deserializeEtablissmenentsResponse()
     *
     * @return void
     */
    public function testDeserializeEtablissementsResponseWithSiret(): void {

        // Set a raw response mock.
        $rawResponse = file_get_contents(__DIR__ . "/ResponseDeserializerTest.testDeserializeEtablissementsResponseWithSiret.json");

        $obj = new EtablissementsRequest();

        $res = $obj->deserializeResponse($rawResponse);
        $this->assertInstanceOf(EtablissementsResponse::class, $res);

        $this->assertEquals($rawResponse, $res->getRawResponse());
        $this->assertNull($res->getMessage());
        $this->assertNull($res->getMeta());

        $this->assertCount(1, $res->getEtablissements());
    }

    /**
     * Test deserializeUnitesLegalesResponse()
     *
     * @return void
     */
    public function testDeserializeUnitesLegalesResponse(): void {

        // Set a raw response mock.
        $rawResponse = file_get_contents(__DIR__ . "/ResponseDeserializerTest.testDeserializeUnitesLegalesResponse.json");

        $res = ResponseDeserializer::deserializeUnitesLegalesResponse($rawResponse);
        $this->assertInstanceOf(UnitesLegalesResponse::class, $res);

        $this->assertEquals($rawResponse, $res->getRawResponse());
        $this->assertNull($res->getMessage());
        $this->assertNotNull($res->getMeta());

        $this->assertCount(20, $res->getUnitesLegales());
        $this->assertInstanceOf(UniteLegale::class, $res->getUnitesLegales()[0]);

        $this->assertEquals(248378696, $res->getUnitesLegales()[0]->getId());
        $this->assertEquals("967408642", $res->getUnitesLegales()[0]->getSiren());
        $this->assertEquals("O", $res->getUnitesLegales()[0]->getStatutDiffusion());
        $this->assertEquals("true", $res->getUnitesLegales()[0]->getUnitePurgee());
        $this->assertNull($res->getUnitesLegales()[0]->getDateCreation());
        $this->assertNull($res->getUnitesLegales()[0]->getSigle());
        $this->assertEquals("F", $res->getUnitesLegales()[0]->getSexe());
        $this->assertEquals("GERMAINE", $res->getUnitesLegales()[0]->getPrenom1());
        $this->assertNull($res->getUnitesLegales()[0]->getPrenom2());
        $this->assertNull($res->getUnitesLegales()[0]->getPrenom3());
        $this->assertNull($res->getUnitesLegales()[0]->getPrenom4());
        $this->assertEquals("GERMAINE", $res->getUnitesLegales()[0]->getPrenomUsuel());
        $this->assertNull($res->getUnitesLegales()[0]->getPseudonyme());
        $this->assertNull($res->getUnitesLegales()[0]->getIdentifiantAssociation());
        $this->assertNull($res->getUnitesLegales()[0]->getTrancheEffectifs());
        $this->assertNull($res->getUnitesLegales()[0]->getAnneeEffectifs());
        $this->assertNull($res->getUnitesLegales()[0]->getDateDernierTraitement());
        $this->assertEquals("1", $res->getUnitesLegales()[0]->getNombrePeriodes());
        $this->assertNull($res->getUnitesLegales()[0]->getCategorieEntreprise());
        $this->assertNull($res->getUnitesLegales()[0]->getAnneeCategorieEntreprise());
        $this->assertNull($res->getUnitesLegales()[0]->getDateFin());
        $this->assertEquals("1984-12-25", $res->getUnitesLegales()[0]->getDateDebut());
        $this->assertEquals("C", $res->getUnitesLegales()[0]->getEtatAdministratif());
        $this->assertEquals("LAMBERT", $res->getUnitesLegales()[0]->getNom());
        $this->assertNull($res->getUnitesLegales()[0]->getNomUsage());
        $this->assertNull($res->getUnitesLegales()[0]->getDenomination());
        $this->assertNull($res->getUnitesLegales()[0]->getDenominationUsuelle1());
        $this->assertNull($res->getUnitesLegales()[0]->getDenominationUsuelle2());
        $this->assertNull($res->getUnitesLegales()[0]->getDenominationUsuelle3());
        $this->assertEquals("1000", $res->getUnitesLegales()[0]->getCategorieJuridique());
        $this->assertEquals("67.04", $res->getUnitesLegales()[0]->getActivitePrincipale());
        $this->assertEquals("NAP", $res->getUnitesLegales()[0]->getNomenclatureActivitePrincipale());
        $this->assertEquals("00015", $res->getUnitesLegales()[0]->getNicSiege());
        $this->assertNull($res->getUnitesLegales()[0]->getEconomieSocialeSolidaire());
        $this->assertEquals("N", $res->getUnitesLegales()[0]->getCaractereEmployeur());
        $this->assertEquals("2021-08-03T03:58:53.243+02:00", $res->getUnitesLegales()[0]->getCreatedAt());
        $this->assertEquals("2021-08-03T03:58:53.243+02:00", $res->getUnitesLegales()[0]->getUpdatedAt());
        $this->assertNotNull($res->getUnitesLegales()[0]->getEtablissementSiege());
        $this->assertEquals("FR03967408642", $res->getUnitesLegales()[0]->getNumeroTvaIntra());
    }

    /**
     * Test deserializeUnitesLegalesResponse()
     *
     * @return void
     */
    public function testDeserializeUnitesLegalesResponseWithBadRawResponse(): void {

        // Set a raw response mock.
        $rawResponse = "";

        $res = ResponseDeserializer::deserializeUnitesLegalesResponse($rawResponse);
        $this->assertInstanceOf(UnitesLegalesResponse::class, $res);

        $this->assertEquals($rawResponse, $res->getRawResponse());
        $this->assertNull($res->getMessage());
        $this->assertNull($res->getMeta());

        $this->assertCount(0, $res->getUnitesLegales());
    }

    /**
     * Test deserializeUnitesLegalesResponse()
     *
     * @return void
     */
    public function testDeserializeUnitesLegalesResponseWithSiren(): void {

        // Set a raw response mock.
        $rawResponse = file_get_contents(__DIR__ . "/ResponseDeserializerTest.testDeserializeUnitesLegalesResponseWithSiren.json");

        $res = ResponseDeserializer::deserializeUnitesLegalesResponse($rawResponse);
        $this->assertInstanceOf(UnitesLegalesResponse::class, $res);

        $this->assertEquals($rawResponse, $res->getRawResponse());
        $this->assertNull($res->getMessage());
        $this->assertNull($res->getMeta());

        $this->assertCount(1, $res->getUnitesLegales());
    }
}
