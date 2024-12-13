<?php 
namespace AbabilItWorld\FlexDataManageByAbabilitWorld\Sanitization\Library\ArrayValidation;
use AbabilItWorld\FlexInterfaceByAbabilitworld\Interface\Security\Sanitization\Sanitization as Sanitizer;
class ArrayValidation implements Sanitizer 
{
    public function sanitize(mixed $value): bool 
    {
        if (!is_array($value)) 
        {
            return false;
        }

        foreach ($value as $item) 
        {
            if (is_array($item)) 
            {
                if (!$this->sanitize($item)) 
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