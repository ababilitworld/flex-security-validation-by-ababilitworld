<?php 
namespace AbabilItWorld\FlexSecurityValidationByAbabilitWorld\Validation\Library\Password;
use AbabilItWorld\FlexInterfaceByAbabilitworld\Interface\Security\Validation\Validation;
class Password implements Validation 
{
    public function validate(mixed $value): bool 
    {
        return strlen($value) >= 8; // Example rule: Minimum 8 characters
    }
}