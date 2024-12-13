<?php 
namespace AbabilItWorld\FlexDataManageByAbabilitWorld\Generation\Library\PhoneNumber;
use AbabilItWorld\FlexInterfaceByAbabilitworld\Interface\Security\Generation\Generation as Generator;
class PhoneNumber implements Generator 
{
    public function generate(mixed $value): bool 
    {
         // Example: Allow only numeric characters and '+' symbol
         return is_string($value) && preg_match('/^\+?[0-9]{7,15}$/', $value);
    }
}