<?php 
namespace AbabilItWorld\FlexSecurityValidationByAbabilitWorld\Validation\Library\Html;
use AbabilItWorld\FlexInterfaceByAbabilitworld\Interface\Security\Validation\Validation;
class Html implements Validation 
{
    public function validate(mixed $value): bool 
    {
        return is_string($value) && preg_match('/<\/?[a-z][\s\S]*>/i', $value);
    }
}