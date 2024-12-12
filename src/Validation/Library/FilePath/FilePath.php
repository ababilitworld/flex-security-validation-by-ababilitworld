<?php 
namespace AbabilItWorld\FlexSecurityValidationByAbabilitWorld\Validation\Library\FilePath;
use AbabilItWorld\FlexInterfaceByAbabilitworld\Interface\Security\Validation\Validation;
class FilePath implements Validation 
{
    public function validate(mixed $value): bool 
    {
        return is_string($value) && preg_match('/^[\w\-.\/]+$/', $value);
    }
}