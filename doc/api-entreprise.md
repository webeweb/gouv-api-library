API Sirene
==========

The API Sirene is available [here](https://entreprise.data.gouv.fr/api_doc/sirene)

Etablissements

```php
use WBW\Library\GouvApi\Entreprise\Provider\APIv3Provider;
use WBW\Library\GouvApi\Entreprise\Request\EtablissementsRequest;
use WBW\Library\GouvApi\Entreprise\Response\EtablissementsResponse;

// Create the API provider.
$provider = new APIv3Provider();

// Create an Etablissements request.
$request = new EtablissementsRequest();

/** @var EtablissementsResponse $response */
$response = $provider->sendRequest($request);

// Handle the response.
// ...
```

Etablissement

```php
use WBW\Library\GouvApi\Entreprise\Provider\APIv3Provider;
use WBW\Library\GouvApi\Entreprise\Request\EtablissementsRequest;
use WBW\Library\GouvApi\Entreprise\Response\EtablissementsResponse;

// Create the API provider.
$provider = new APIv3Provider();

// Create an Etablissements request.
$request = new EtablissementsRequest("35027346200019");

/** @var EtablissementsResponse $response */
$response = $provider->sendRequest($request);

// Handle the response.
// ...
```

Unités légales

```php
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
//...
```

Unité légale

```php
use WBW\Library\GouvApi\Entreprise\Provider\APIv3Provider;
use WBW\Library\GouvApi\Entreprise\Request\UnitesLegalesRequest;
use WBW\Library\GouvApi\Entreprise\Response\UnitesLegalesResponse;

// Create the API provider.
$provider = new APIv3Provider();

// Create an Unités légales request.
$request = new UnitesLegalesRequest("350273462");

/** @var UnitesLegalesResponse $response */
$response = $provider->sendRequest($request);

// Handle the response.
//...
```
