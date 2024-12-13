<?php 
namespace AbabilItWorld\FlexDataManageByAbabilitWorld\Validation\Library\Integer;
use AbabilItWorld\FlexInterfaceByAbabilitworld\Interface\Security\Validation\Validation as Validator;
class Integer implements Validator 
{
    public function validate(mixed $value): bool 
    {
        return filter_var($value, FILTER_VALIDATE_INT) !== false;
    }
}