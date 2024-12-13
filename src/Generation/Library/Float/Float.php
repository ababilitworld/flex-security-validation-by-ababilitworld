<?php 
namespace AbabilItWorld\FlexDataManageByAbabilitWorld\Generation\Library\Float;
use AbabilItWorld\FlexInterfaceByAbabilitworld\Interface\Security\Generation\Generation as Generator;
class Float implements Generator 
{
    public function generate(mixed $value): bool 
    {
        return filter_var($value, FILTER_VALIDATE_FLOAT) !== false;
    }
}