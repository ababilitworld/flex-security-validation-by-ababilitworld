<?php 
namespace AbabilItWorld\FlexDataManageByAbabilitWorld\Sanitization\Library\Password;
use AbabilItWorld\FlexInterfaceByAbabilitworld\Interface\Security\Sanitization\Sanitization as Sanitizer;
class Password implements Sanitizer 
{
    public function sanitize(mixed $value): bool 
    {
        return strlen($value) >= 8; // Example rule: Minimum 8 characters
    }
}