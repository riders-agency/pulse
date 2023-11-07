# Riders Pulse Client Library

A client library for interacting with the Riders Pulse API.

## Installation

You can install the library using Composer. Run the following command in your terminal:

```shell
composer require ridersagency/pulseclient
```

# Usage

```PHP
include ($_SERVER['DOCUMENT_ROOT'] . '/vendor/autoload.php');

use RidersAgency\PulseClient;

// Create an instance of the PulseClient class
$pulseClient = new PulseClient();
// Send the POST request using the Pulse class
$response = $pulseClient->send('CLIENT_UUID', 'This is the test, just enjoy');
```
Replace 'CLIENT_UUID' with the actual client UUID you want to use.

## Further Reading

For more information about the Riders Pulse API and its functionalities, please visit the [Riders Pulse website](https://riders.agency/pulse/).

## Contact

If you have any questions or need further assistance, please reach out to Riders Agency at hello@riders.agency.