API Sirene
==========

The API Sirene is available [here](https://entreprise.data.gouv.fr/api_doc/sirene)

Etablissements

```php
use WBW\Library\GouvApi\Entreprise\Provider\APIv3Provider;
use WBW\Library\GouvApi\Entreprise\Request\EtablissementsRequest;

// Create the API provider.
$provider = new APIv3Provider();

// Create an Etablissements request.
$request = new EtablissementsRequest();

// Call the API and get the response.
$response = $provider->etablissements($request);

// Handle the response.
// ...
```

Etablissement

```php
use WBW\Library\GouvApi\Entreprise\Provider\APIv3Provider;
use WBW\Library\GouvApi\Entreprise\Request\EtablissementsRequest;

// Create the API provider.
$provider = new APIv3Provider();

// Create an Etablissements request.
$request = new EtablissementsRequest("35027346200019");

// Call the API and get the response.
$response = $provider->etablissements($request);

// Handle the response.
// ...
```

Unités légales

```php
use WBW\Library\GouvApi\Entreprise\Provider\APIv3Provider;
use WBW\Library\GouvApi\Entreprise\Request\UnitesLegalesRequest;

// Create the API provider.
$provider = new APIv3Provider();

// Create an Unités légales request.
$request = new UnitesLegalesRequest();

// Call the API and get the response.
$response = $provider->unitesLegales($request);

// Handle the response.
//...
```

Unité légale

```php
use WBW\Library\GouvApi\Entreprise\Provider\APIv3Provider;
use WBW\Library\GouvApi\Entreprise\Request\UnitesLegalesRequest;

// Create the API provider.
$provider = new APIv3Provider();

// Create an Unités légales request.
$request = new UnitesLegalesRequest("350273462");

// Call the API and get the response.
$response = $provider->unitesLegales($request);

// Handle the response.
//...
```
