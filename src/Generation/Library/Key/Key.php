<?php 
namespace AbabilItWorld\FlexDataManageByAbabilitWorld\Generation\Library\Key;
use AbabilItWorld\FlexInterfaceByAbabilitworld\Interface\Security\Generation\Generation as Generator;
class Key implements Generator 
{
    public function generate(mixed $value): bool 
    {
        return is_string($value) && preg_match('/^[a-zA-Z0-9_\-]+$/', $value);
    }
}