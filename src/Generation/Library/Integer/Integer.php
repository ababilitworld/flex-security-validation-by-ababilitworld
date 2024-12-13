<?php 
namespace AbabilItWorld\FlexDataManageByAbabilitWorld\Generation\Library\Integer;
use AbabilItWorld\FlexInterfaceByAbabilitworld\Interface\Security\Generation\Generation as Generator;
class Integer implements Generator 
{
    public function generate(mixed $value): bool 
    {
        return filter_var($value, FILTER_VALIDATE_INT) !== false;
    }
}