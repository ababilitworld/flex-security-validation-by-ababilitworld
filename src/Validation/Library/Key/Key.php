<?php 
namespace AbabilItWorld\FlexSecurityValidationByAbabilitWorld\Validation\Library\Key;
use AbabilItWorld\FlexInterfaceByAbabilitworld\Interface\Security\Validation\Validation;
class Key implements Validation 
{
    public function validate(mixed $value): bool 
    {
        return is_string($value) && preg_match('/^[a-zA-Z0-9_\-]+$/', $value);
    }
}