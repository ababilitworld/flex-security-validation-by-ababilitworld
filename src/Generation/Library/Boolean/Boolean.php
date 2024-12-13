<?php 
namespace AbabilItWorld\FlexDataManageByAbabilitWorld\Generation\Library\Boolean;
use AbabilItWorld\FlexInterfaceByAbabilitworld\Interface\Security\Generation\Generation as Generator;
class Boolean implements Generator 
{
    public function generate(mixed $value): bool 
    {
        return is_bool(filter_var($value, FILTER_VALIDATE_BOOLEAN, FILTER_NULL_ON_FAILURE));
    }
}