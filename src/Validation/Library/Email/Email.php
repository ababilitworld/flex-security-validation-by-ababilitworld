<?php 
namespace AbabilItWorld\FlexSecurityValidationByAbabilitWorld\Validation\Library\Email;
use AbabilItWorld\FlexInterfaceByAbabilitworld\Interface\Security\Validation\Validation;
class Email implements Validation 
{
    public function validate(mixed $value): bool 
    {
        return filter_var($value, FILTER_VALIDATE_EMAIL) !== false;
    }
}