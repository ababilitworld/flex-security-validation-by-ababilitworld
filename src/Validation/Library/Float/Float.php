<?php 
namespace AbabilItWorld\FlexSecurityValidationByAbabilitWorld\Validation\Library\Float;
use AbabilItWorld\FlexInterfaceByAbabilitworld\Interface\Security\Validation\Validation;
class Float implements Validation 
{
    public function validate(mixed $value): bool 
    {
        return filter_var($value, FILTER_VALIDATE_FLOAT) !== false;
    }
}