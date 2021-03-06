<?php
namespace flyeralarm\ResellerApi\exception;

class ProductGroupArray extends DataStructure
{

    public function __construct(
        $message = "The data array used to create a ProductGroup object was not valid.",
        $code = 5022,
        \Exception $previous = null
    ) {

        return parent::__construct($message, $code, $previous);
    }
}
