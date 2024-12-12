<?php 
namespace AbabilItWorld\FlexSecurityValidationByAbabilitWorld\Validation\Library\Integer;
use AbabilItWorld\FlexInterfaceByAbabilitworld\Interface\Security\Validation\Validation;
class Integer implements Validation 
{
    public function validate(mixed $value): bool 
    {
        return filter_var($value, FILTER_VALIDATE_INT) !== false;
    }
}