<?php 
namespace AbabilItWorld\FlexDataManageByAbabilitWorld\Generation\Library\Username;
use AbabilItWorld\FlexInterfaceByAbabilitworld\Interface\Security\Generation\Generation as Generator;
class Username implements Generator 
{
    public function generate(mixed $value): bool 
    {
        return filter_var($value, FILTER_VALIDATE_EMAIL) !== false;
    }
}