<?php
namespace flyeralarm\ResellerApi\config;

use flyeralarm\ResellerApi\config\AbstractConfig as AbstractConfig;

class LiveAT extends AbstractConfig
{

    protected $wsdl_uri = 'https://soap.flyeralarm.com/at/shop/soap/?wsdl';

    protected $api_image_base = 'https://flyeralarm.com';

    protected $api_rest_base = 'https://api.flyeralarm.com/de';

    protected $api_rest_ssl_check = true;
}
