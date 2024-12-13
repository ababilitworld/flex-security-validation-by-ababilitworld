<?php 
namespace AbabilItWorld\FlexDataManageByAbabilitWorld\Validation\Library\Url;
use AbabilItWorld\FlexInterfaceByAbabilitworld\Interface\Security\Validation\Validation as Validator;
class Url implements Validator 
{
    public function validate(mixed $value): bool 
    {
        return filter_var($value, FILTER_VALIDATE_URL) !== false;
    }
}