<?php 
namespace AbabilItWorld\FlexSecurityValidationByAbabilitWorld\Validation\Library\Boolean;
use AbabilItWorld\FlexInterfaceByAbabilitworld\Interface\Security\Validation\Validation;
class Boolean implements Validation 
{
    public function validate(mixed $value): bool 
    {
        return is_bool(filter_var($value, FILTER_VALIDATE_BOOLEAN, FILTER_NULL_ON_FAILURE));
    }
}