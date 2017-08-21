# Simple library to use Oktawave API

To use it:
* Create your account on https://oktawave.com
* Create your api client on https://api.oktawave.com/beta/docs/index


###Connection example:
```php
use OktawaveApi\Service\OktawaveApi;
use OktawaveApi\Api\OCI;

$grantType="password";
$scope=["oktawave.api"];
$oktawaveApi = new OktawaveApi("your_client_id", "your_client_secret", "your_username", "your_password", $grantType, $scope);
```


### Full sample of listing instances:
```php
use OktawaveApi\Service\OktawaveApi;
use OktawaveApi\Api\OCI;

$grantType="password";
$scope=["oktawave.api"];
$oktawaveApi = new OktawaveApi("your_client_id", "your_client_secret", "your_username", "your_password", $grantType, $scope);
$oci = new OCI($oktawaveApi);
$instanceList=$oci->getInstanceList();        
foreach ($instanceList->Items as $item) {
            #...do something 
            }

```

### Full sample of creating instance:
```php
use OktawaveApi\Service\OktawaveApi;
use OktawaveApi\Api\OCI;

$grantType="password";
$scope=["oktawave.api"];
$oktawaveApi = new OktawaveApi("your_client_id", "your_client_secret", "your_username", "your_password", $grantType, $scope);
$oci = new OCI($oktawaveApi);

$body = new \stdClass();
$body->AuthorizationMethodId = \OktawaveApi\Dictionary\InstanceAuthorizationMethods::_USER_AND_PASSWORD;
$body->DiskClass = \OktawaveApi\Dictionary\DiskClasses::_TIER_1;
$body->DiskSize = 20 //GB;
$body->InstanceName ="Your instance name";
$body->InstancesCount = 1;
$body->IPAddressId = 0;
$body->TemplateId = 422//get the full list of templates from class OCITemplates::getTemplatesList;
$body->TypeId = \OktawaveApi\Dictionary\InstancesTypes::_V1_STANDARD_1_05;
$body->Freemium = false;
$server = $oci->createInstance(json_encode($body));
