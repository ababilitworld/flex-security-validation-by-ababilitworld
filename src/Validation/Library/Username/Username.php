<?php 
namespace AbabilItWorld\FlexDataManageByAbabilitWorld\Validation\Library\Username;
use AbabilItWorld\FlexInterfaceByAbabilitworld\Interface\Security\Validation\Validation as Validator;
class Username implements Validator 
{
    public function validate(mixed $value): bool 
    {
        return filter_var($value, FILTER_VALIDATE_EMAIL) !== false;
    }
}