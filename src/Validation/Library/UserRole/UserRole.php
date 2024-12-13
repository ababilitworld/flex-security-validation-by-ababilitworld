<?php 
namespace AbabilItWorld\FlexDataManageByAbabilitWorld\Validation\Library\UserRole;
use AbabilItWorld\FlexInterfaceByAbabilitworld\Interface\Security\Validation\Validation as Validator;
class UserRole implements Validator 
{
    public function validate(mixed $value): bool 
    {
        return is_string($value) && preg_match('/^[a-zA-Z0-9_\-]+$/', $value);
    }
}