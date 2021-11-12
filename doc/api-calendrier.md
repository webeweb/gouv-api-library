Jours fériés
============

The Jours fériés is available [here](https://api.gouv.fr/documentation/jours-feries)

Jours fériés

```php
use WBW\Library\GouvPI\Calendrier\Provider\ApiProvider;
use WBW\Library\GouvPI\Calendrier\Request\JoursFeriesRequest;

// Create the API provider.
$provider = new ApiProvider();

// Create a Jours fériés request.
$request = new JoursFeriesRequest(JoursFeriesRequest::ZONE_METROPOLE);
$request->setAnnee(2021); // Optional

// Call the API and get the response.
$response = $provider->joursFeries($request);

// Handle the response.
// ...
```
