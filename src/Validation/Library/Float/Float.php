<?php 
namespace AbabilItWorld\FlexDataManageByAbabilitWorld\Validation\Library\Float;
use AbabilItWorld\FlexInterfaceByAbabilitworld\Interface\Security\Validation\Validation as Validator;
class Float implements Validator 
{
    public function validate(mixed $value): bool 
    {
        return filter_var($value, FILTER_VALIDATE_FLOAT) !== false;
    }
}