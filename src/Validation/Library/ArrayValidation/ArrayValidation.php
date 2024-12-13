<?php 
namespace AbabilItWorld\FlexDataManageByAbabilitWorld\Validation\Library\ArrayValidation;
use AbabilItWorld\FlexInterfaceByAbabilitworld\Interface\Security\Validation\Validation as Validator;
class ArrayValidation implements Validator 
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