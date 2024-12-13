<?php 
namespace AbabilItWorld\FlexDataManageByAbabilitWorld\Validation\Library\Password;
use AbabilItWorld\FlexInterfaceByAbabilitworld\Interface\Security\Validation\Validation as Validator;
class Password implements Validator 
{
    public function validate(mixed $value): bool 
    {
        return strlen($value) >= 8; // Example rule: Minimum 8 characters
    }
}