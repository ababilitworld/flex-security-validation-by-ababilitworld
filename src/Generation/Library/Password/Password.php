<?php 
namespace AbabilItWorld\FlexDataManageByAbabilitWorld\Generation\Library\Password;
use AbabilItWorld\FlexInterfaceByAbabilitworld\Interface\Security\Generation\Generation as Generator;
class Password implements Generator 
{
    public function generate(mixed $value): bool 
    {
        return strlen($value) >= 8; // Example rule: Minimum 8 characters
    }
}