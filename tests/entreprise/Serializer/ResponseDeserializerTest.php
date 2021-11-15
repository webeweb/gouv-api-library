<?php

/*
 * This file is part of the gouv-api-library package.
 *
 * (c) 2021 WEBEWEB
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace WBW\Library\GouvAPI\Entreprise\Tests\Serializer;

use WBW\Library\GouvAPI\Entreprise\Model\Etablissement;
use WBW\Library\GouvAPI\Entreprise\Model\Meta;
use WBW\Library\GouvAPI\Entreprise\Model\UniteLegale;
use WBW\Library\GouvAPI\Entreprise\Response\EtablissementsResponse;
use WBW\Library\GouvAPI\Entreprise\Response\UnitesLegalesResponse;
use WBW\Library\GouvAPI\Entreprise\Serializer\ResponseDeserializer;
use WBW\Library\GouvAPI\Entreprise\Tests\AbstractTestCase;
use WBW\Library\GouvAPI\Entreprise\Tests\Fixtures\Serializer\TestResponseDeserializer;

/**
 * Response deserializer test.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\GouvAPI\Entreprise\Tests\Serializer
 */
class ResponseDeserializerTest extends AbstractTestCase {

    /**
     * Tests the deserializeEtablissement() method.
     *
     * @return void
     */
    public function testDeserializeEtablissement(): void {

        // Set a JSON mock.
        $json = file_get_contents(__DIR__ . "/../Fixtures/Response/EtablissementsResponse.json");
        $data = json_decode($json, true);

        $res = TestResponseDeserializer::deserializeEtablissement($data["etablissements"][0]);
        $this->assertInstanceOf(Etablissement::class, $res);

        $this->assertEquals(1538163765, $res->getId());
        $this->assertEquals("350273462", $res->getSiren());
        $this->assertEquals("00019", $res->getNic());
        $this->assertEquals("35027346200019", $res->getSiret());
        $this->assertEquals("O", $res->getStatutDiffusion());
        $this->assertEquals("1989-01-01", $res->getDateCreation());
        $this->assertEquals("NN", $res->getTrancheEffectifs());
        $this->assertEquals(null, $res->getAnneeEffectifs());
        $this->assertEquals(null, $res->getActivitePrincipaleRegistreMetiers());
        $this->assertEquals("2013-03-05T08:35:24", $res->getDateDernierTraitement());
        $this->assertEquals(false, $res->getEtablissementSiege());
        $this->assertEquals(4, $res->getNombrePeriodes());
        $this->assertEquals(null, $res->getComplementAdresse());
        $this->assertEquals(null, $res->getNumeroVoie());
        $this->assertEquals(null, $res->getIndiceRepetition());
        $this->assertEquals(null, $res->getTypeVoie());
        $this->assertEquals("LA PAGEOTIERE", $res->getLibelleVoie());
        $this->assertEquals("61700", $res->getCodePostal());
        $this->assertEquals("DOMFRONT-EN-POIRAIE", $res->getLibelleCommune());
        $this->assertEquals(null, $res->getLibelleCommuneEtranger());
        $this->assertEquals(null, $res->getDistributionSpeciale());
        $this->assertEquals("61145", $res->getCodeCommune());
        $this->assertEquals(null, $res->getCodeCedex());
        $this->assertEquals(null, $res->getLibelleCedex());
        $this->assertEquals(null, $res->getCodePaysEtranger());
        $this->assertEquals(null, $res->getLibellePaysEtranger());
        $this->assertEquals(null, $res->getComplementAdresse2());
        $this->assertEquals(null, $res->getNumeroVoie2());
        $this->assertEquals(null, $res->getIndiceRepetition2());
        $this->assertEquals(null, $res->getTypeVoie2());
        $this->assertEquals(null, $res->getLibelleVoie2());
        $this->assertEquals(null, $res->getCodePostal2());
        $this->assertEquals(null, $res->getLibelleCommune2());
        $this->assertEquals(null, $res->getLibelleCommuneEtranger2());
        $this->assertEquals(null, $res->getDistributionSpeciale2());
        $this->assertEquals(null, $res->getCodeCommune2());
        $this->assertEquals(null, $res->getCodeCedex2());
        $this->assertEquals(null, $res->getLibelleCedex2());
        $this->assertEquals(null, $res->getCodePaysEtranger2());
        $this->assertEquals(null, $res->getLibellePaysEtranger2());
        $this->assertEquals("2003-12-31", $res->getDateDebut());
        $this->assertEquals("F", $res->getEtatAdministratif());
        $this->assertEquals(null, $res->getEnseigne1());
        $this->assertEquals(null, $res->getEnseigne2());
        $this->assertEquals(null, $res->getEnseigne3());
        $this->assertEquals(null, $res->getDenominationUsuelle());
        $this->assertEquals("01.2A", $res->getActivitePrincipale());
        $this->assertEquals("NAFRev1", $res->getNomenclatureActivitePrincipale());
        $this->assertEquals("N", $res->getCaractereEmployeur());
        $this->assertEquals(-0.625115, $res->getLongitude());
        $this->assertEquals(48.554554, $res->getLatitude());
        $this->assertEquals(0.95, $res->getGeoScore());
        $this->assertEquals("street", $res->getGeoType());
        $this->assertEquals("La Pageotière 61700 Domfront en Poiraie", $res->getGeoAdresse());
        $this->assertEquals("61145_c0uj9y", $res->getGeoId());
        $this->assertEquals("G", $res->getGeoLigne());
        $this->assertEquals("LA PAGEOTIERE", $res->getGeoL4());
        $this->assertEquals(null, $res->getGeoL5());
        $this->assertEquals(230020577, $res->getUniteLegaleId());
        $this->assertEquals("2021-08-03T04:14:03.570+02:00", $res->getCreatedAt());
        $this->assertEquals("2021-08-03T04:14:03.570+02:00", $res->getUpdatedAt());
    }

    /**
     * Tests the deserializeEtablissement() method.
     *
     * @return void
     */
    public function testDeserializeEtablissementWithoutData(): void {

        $res = TestResponseDeserializer::deserializeEtablissement([]);
        $this->assertNull($res);
    }

    /**
     * Tests the deserializeEtablissementsResponse() method.
     *
     * @return void
     */
    public function testDeserializeEtablissementsResponse(): void {

        // Set a JSON mock.
        $json = file_get_contents(__DIR__ . "/../Fixtures/Response/EtablissementsResponse.json");

        $res = ResponseDeserializer::deserializeEtablissementsResponse($json);
        $this->assertInstanceOf(EtablissementsResponse::class, $res);

        $this->assertNotNull($res->getMeta());
        $this->assertNull($res->getMessage());
        $this->assertCount(20, $res->getEtablissements());
    }

    /**
     * Tests the deserializeEtablissementsResponse() method.
     *
     * @return void
     */
    public function testDeserializeEtablissementsResponseWithMalformedResponse(): void {

        $res = ResponseDeserializer::deserializeEtablissementsResponse("rawResponse");
        $this->assertInstanceOf(EtablissementsResponse::class, $res);

        $this->assertNull($res->getMeta());
        $this->assertNull($res->getMessage());
        $this->assertCount(0, $res->getEtablissements());
    }

    /**
     * Tests the deserializeEtablissementsResponse() method.
     *
     * @return void
     */
    public function testDeserializeEtablissementsResponseWithSiret(): void {

        // Set a JSON mock.
        $json = file_get_contents(__DIR__ . "/../Fixtures/Response/EtablissementResponse.json");

        $res = ResponseDeserializer::deserializeEtablissementsResponse($json);
        $this->assertInstanceOf(EtablissementsResponse::class, $res);

        $this->assertNull($res->getMeta());
        $this->assertNull($res->getMessage());
        $this->assertCount(1, $res->getEtablissements());
    }

    /**
     * Tests the deserializeMeta() method.
     *
     * @return void
     */
    public function testDeserializeMeta(): void {

        // Set a JSON mock.
        $json = file_get_contents(__DIR__ . "/../Fixtures/Response/EtablissementsResponse.json");
        $data = json_decode($json, true);

        $res = TestResponseDeserializer::deserializeMeta($data["meta"]);
        $this->assertInstanceOf(Meta::class, $res);

        $this->assertEquals(33669792, $res->getTotalResults());
        $this->assertEquals(20, $res->getPerPage());
        $this->assertEquals(1683490, $res->getTotalPages());
        $this->assertEquals(1, $res->getPage());
    }

    /**
     * Tests the deserializeMeta() method.
     *
     * @return void
     */
    public function testDeserializeMetaWithoutData(): void {

        $res = TestResponseDeserializer::deserializeMeta([]);
        $this->assertNull($res);
    }

    /**
     * Tests the deserializeUniteLegale() method.
     *
     * @return void
     */
    public function testDeserializeUniteLegale(): void {

        // Set a JSON mock.
        $json = file_get_contents(__DIR__ . "/../Fixtures/Response/EtablissementsResponse.json");
        $data = json_decode($json, true);

        $res = TestResponseDeserializer::deserializeUniteLegale($data["etablissements"][19]["unite_legale"]);
        $this->assertInstanceOf(UniteLegale::class, $res);

        $this->assertEquals(231384032, $res->getId());
        $this->assertEquals("389915992", $res->getSiren());
        $this->assertEquals("O", $res->getStatutDiffusion());
        $this->assertEquals(null, $res->getUnitePurgee());
        $this->assertEquals("1993-01-01", $res->getDateCreation());
        $this->assertEquals(null, $res->getSigle());
        $this->assertEquals("M", $res->getSexe());
        $this->assertEquals("MARCEL", $res->getPrenom1());
        $this->assertEquals("MICHEL", $res->getPrenom2());
        $this->assertEquals("CHARLES", $res->getPrenom3());
        $this->assertEquals(null, $res->getPrenom4());
        $this->assertEquals("MARCEL", $res->getPrenomUsuel());
        $this->assertEquals(null, $res->getPseudonyme());
        $this->assertEquals(null, $res->getIdentifiantAssociation());
        $this->assertEquals("NN", $res->getTrancheEffectifs());
        $this->assertEquals(null, $res->getAnneeEffectifs());
        $this->assertEquals("2010-08-14T00:43:13", $res->getDateDernierTraitement());
        $this->assertEquals("5", $res->getNombrePeriodes());
        $this->assertEquals(null, $res->getCategorieEntreprise());
        $this->assertEquals(null, $res->getAnneeCategorieEntreprise());
        $this->assertEquals(null, $res->getDateFin());
        $this->assertEquals("2008-12-31", $res->getDateDebut());
        $this->assertEquals("C", $res->getEtatAdministratif());
        $this->assertEquals("LESAULNIER", $res->getNom());
        $this->assertEquals(null, $res->getNomUsage());
        $this->assertEquals(null, $res->getDenomination());
        $this->assertEquals("LE BISTROQUET", $res->getDenominationUsuelle1());
        $this->assertEquals(null, $res->getDenominationUsuelle2());
        $this->assertEquals(null, $res->getDenominationUsuelle3());
        $this->assertEquals("1000", $res->getCategorieJuridique());
        $this->assertEquals("56.10A", $res->getActivitePrincipale());
        $this->assertEquals("NAFRev2", $res->getNomenclatureActivitePrincipale());
        $this->assertEquals("00025", $res->getNicSiege());
        $this->assertEquals(null, $res->getEconomieSocialeSolidaire());
        $this->assertEquals("N", $res->getCaractereEmployeur());
        $this->assertEquals("2021-08-03T02:28:43.257+02:00", $res->getCreatedAt());
        $this->assertEquals("2021-08-03T02:28:43.257+02:00", $res->getUpdatedAt());
    }

    /**
     * Tests the deserializeUniteLegale() method.
     *
     * @return void
     */
    public function testDeserializeUniteLegaleWithoutData(): void {

        $res = TestResponseDeserializer::deserializeUniteLegale([]);
        $this->assertNull($res);
    }

    /**
     * Tests the deserializeUnitesLegalesResponse() method.
     *
     * @return void
     */
    public function testDeserializeUnitesLegalesResponse(): void {

        // Set a JSON mock.
        $json = file_get_contents(__DIR__ . "/../Fixtures/Response/UnitesLegalesResponse.json");

        $res = ResponseDeserializer::deserializeUnitesLegalesResponse($json);
        $this->assertInstanceOf(UnitesLegalesResponse::class, $res);

        $this->assertNotNull($res->getMeta());
        $this->assertNull($res->getMessage());
        $this->assertCount(20, $res->getUnitesLegales());
    }

    /**
     * Tests the deserializeUnitesLegalesResponse() method.
     *
     * @return void
     */
    public function testDeserializeUnitesLegalesResponseWithMalformedResponse(): void {

        $res = ResponseDeserializer::deserializeUnitesLegalesResponse("rawResponse");
        $this->assertInstanceOf(UnitesLegalesResponse::class, $res);

        $this->assertNull($res->getMeta());
        $this->assertNull($res->getMessage());
        $this->assertCount(0, $res->getUnitesLegales());
    }

    /**
     * Tests the deserializeUnitesLegalesResponse() method.
     *
     * @return void
     */
    public function testDeserializeUnitesLegalesResponseWithSiren(): void {

        // Set a JSON mock.
        $json = file_get_contents(__DIR__ . "/../Fixtures/Response/UniteLegaleResponse.json");

        $res = ResponseDeserializer::deserializeUnitesLegalesResponse($json);
        $this->assertInstanceOf(UnitesLegalesResponse::class, $res);

        $this->assertNull($res->getMeta());
        $this->assertNull($res->getMessage());
        $this->assertCount(1, $res->getUnitesLegales());
    }
}