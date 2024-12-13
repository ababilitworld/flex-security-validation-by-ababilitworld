<?php 
namespace AbabilItWorld\FlexDataManageByAbabilitWorld\Validation\Library\ColorHex;
use AbabilItWorld\FlexInterfaceByAbabilitworld\Interface\Security\Validation\Validation as Validator;
class ColorHex implements Validator 
{
    public function validate(mixed $value): bool 
    {
        return is_string($value) && preg_match('/^#([a-fA-F0-9]{3}|[a-fA-F0-9]{6})$/', $value);
    }
}