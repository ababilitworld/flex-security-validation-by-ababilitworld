<?php 
namespace AbabilItWorld\FlexDataManageByAbabilitWorld\Sanitization\Library\PhoneNumber;
use AbabilItWorld\FlexInterfaceByAbabilitworld\Interface\Security\Sanitization\Sanitization as Sanitizer;
class PhoneNumber implements Sanitizer 
{
    public function sanitize(mixed $value): bool 
    {
         // Example: Allow only numeric characters and '+' symbol
         return is_string($value) && preg_match('/^\+?[0-9]{7,15}$/', $value);
    }
}