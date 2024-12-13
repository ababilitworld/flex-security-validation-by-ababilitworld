<?php 
namespace AbabilItWorld\FlexDataManageByAbabilitWorld\Validation\Library\PhoneNumber;
use AbabilItWorld\FlexInterfaceByAbabilitworld\Interface\Security\Validation\Validation as Validator;
class PhoneNumber implements Validator 
{
    public function validate(mixed $value): bool 
    {
         // Example: Allow only numeric characters and '+' symbol
         return is_string($value) && preg_match('/^\+?[0-9]{7,15}$/', $value);
    }
}