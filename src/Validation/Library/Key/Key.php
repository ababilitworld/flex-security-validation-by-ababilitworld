<?php 
namespace AbabilItWorld\FlexDataManageByAbabilitWorld\Validation\Library\Key;
use AbabilItWorld\FlexInterfaceByAbabilitworld\Interface\Security\Validation\Validation as Validator;
class Key implements Validator 
{
    public function validate(mixed $value): bool 
    {
        return is_string($value) && preg_match('/^[a-zA-Z0-9_\-]+$/', $value);
    }
}