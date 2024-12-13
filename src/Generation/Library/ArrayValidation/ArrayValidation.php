<?php 
namespace AbabilItWorld\FlexDataManageByAbabilitWorld\Generation\Library\ArrayGeneration;
use AbabilItWorld\FlexInterfaceByAbabilitworld\Interface\Security\Generation\Generation as Generator;
class ArrayGeneration implements Generator 
{
    public function generate(mixed $value): bool 
    {
        if (!is_array($value)) 
        {
            return false;
        }

        foreach ($value as $item) 
        {
            if (is_array($item)) 
            {
                if (!$this->generate($item)) 
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