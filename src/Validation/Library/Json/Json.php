<?php 
namespace AbabilItWorld\FlexDataManageByAbabilitWorld\Validation\Library\Json;
use AbabilItWorld\FlexInterfaceByAbabilitworld\Interface\Security\Validation\Validation as Validator;
class Json implements Validator 
{
    public function validate(mixed $value): bool 
    {
        json_decode($value);
        return json_last_error() === JSON_ERROR_NONE;
    }
}