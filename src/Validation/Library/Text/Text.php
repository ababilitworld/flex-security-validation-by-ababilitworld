<?php 
namespace AbabilItWorld\FlexDataManageByAbabilitWorld\Validation\Library\Text;
use AbabilItWorld\FlexInterfaceByAbabilitworld\Interface\Security\Validation\Validation as Validator;
class Text implements Validator 
{
    public function validate(mixed $value): bool 
    {
        return preg_match('/^[a-zA-Z\s]+$/', $value) || is_string($value) && preg_match('/^[\w\s]+$/', $value);;
    }
}