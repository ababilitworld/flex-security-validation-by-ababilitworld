<?php 
namespace AbabilItWorld\FlexDataManageByAbabilitWorld\Validation\Library\Html;
use AbabilItWorld\FlexInterfaceByAbabilitworld\Interface\Security\Validation\Validation as Validator;
class Html implements Validator 
{
    public function validate(mixed $value): bool 
    {
        return is_string($value) && preg_match('/<\/?[a-z][\s\S]*>/i', $value);
    }
}