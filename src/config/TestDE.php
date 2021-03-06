<?php
namespace flyeralarm\ResellerApi\config;

use flyeralarm\ResellerApi\config\AbstractConfig as AbstractConfig;

class TestDE extends AbstractConfig
{

    protected $wsdl_uri = 'https://staging.flyeralarm.com/de/shop/soap/?wsdl';

    protected $api_image_base = 'https://staging.flyeralarm.com';

    protected $api_rest_base = 'https://api.staging.flyeralarm.com/de';

    protected $api_rest_ssl_check = false;
}
