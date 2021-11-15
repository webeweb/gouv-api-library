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
}