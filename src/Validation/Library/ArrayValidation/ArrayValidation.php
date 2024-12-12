<?php 
namespace AbabilItWorld\FlexSecurityValidationByAbabilitWorld\Validation\Library\ArrayValidation;
use AbabilItWorld\FlexInterfaceByAbabilitworld\Interface\Security\Validation\Validation;
class ArrayValidation implements Validation 
{
    public function validate(mixed $value): bool 
    {
        if (!is_array($value)) 
        {
            return false;
        }

        foreach ($value as $item) 
        {
            if (is_array($item)) 
            {
                if (!$this->validate($item)) 
                {
                    return false;
                }
            } 
            elseif (!is_string($item)) 
            {
                return false;
            }
        }
        
        return true;
    }
}