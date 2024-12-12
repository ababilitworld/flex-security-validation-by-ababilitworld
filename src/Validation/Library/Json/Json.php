<?php 
namespace AbabilItWorld\FlexSecurityValidationByAbabilitWorld\Validation\Library\Json;
use AbabilItWorld\FlexInterfaceByAbabilitworld\Interface\Security\Validation\Validation;
class Json implements Validation 
{
    public function validate(mixed $value): bool 
    {
        json_decode($value);
        return json_last_error() === JSON_ERROR_NONE;
    }
}