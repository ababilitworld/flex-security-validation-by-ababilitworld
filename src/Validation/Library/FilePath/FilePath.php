<?php 
namespace AbabilItWorld\FlexDataManageByAbabilitWorld\Validation\Library\FilePath;
use AbabilItWorld\FlexInterfaceByAbabilitworld\Interface\Security\Validation\Validation as Validator;
class FilePath implements Validator 
{
    public function validate(mixed $value): bool 
    {
        return is_string($value) && preg_match('/^[\w\-.\/]+$/', $value);
    }
}