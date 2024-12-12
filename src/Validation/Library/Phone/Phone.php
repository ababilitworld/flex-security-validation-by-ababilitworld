<?php 
namespace AbabilItWorld\FlexSecurityValidationByAbabilitWorld\Validation\Library\Phone;
use AbabilItWorld\FlexInterfaceByAbabilitworld\Interface\Security\Validation\Validation;
class Phone implements Validation 
{
    public function validate(mixed $value): bool 
    {
         // Example: Allow only numeric characters and '+' symbol
         return is_string($value) && preg_match('/^\+?[0-9]{7,15}$/', $value);
    }
}