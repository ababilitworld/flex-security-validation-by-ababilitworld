<?php 
namespace AbabilItWorld\FlexSecurityValidationByAbabilitWorld\Validation\Library\ColorHex;
use AbabilItWorld\FlexInterfaceByAbabilitworld\Interface\Security\Validation\Validation;
class ColorHex implements Validation 
{
    public function validate(mixed $value): bool 
    {
        return is_string($value) && preg_match('/^#([a-fA-F0-9]{3}|[a-fA-F0-9]{6})$/', $value);
    }
}