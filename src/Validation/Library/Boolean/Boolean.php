<?php 
namespace AbabilItWorld\FlexDataManageByAbabilitWorld\Validation\Library\Boolean;
use AbabilItWorld\FlexInterfaceByAbabilitworld\Interface\Security\Validation\Validation as Validator;
class Boolean implements Validator 
{
    public function validate(mixed $value): bool 
    {
        return is_bool(filter_var($value, FILTER_VALIDATE_BOOLEAN, FILTER_NULL_ON_FAILURE));
    }
}