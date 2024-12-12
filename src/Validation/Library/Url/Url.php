<?php 
namespace AbabilItWorld\FlexSecurityValidationByAbabilitWorld\Validation\Library\Url;
use AbabilItWorld\FlexInterfaceByAbabilitworld\Interface\Security\Validation\Validation;
class Url implements Validation 
{
    public function validate(mixed $value): bool 
    {
        return filter_var($value, FILTER_VALIDATE_URL) !== false;
    }
}