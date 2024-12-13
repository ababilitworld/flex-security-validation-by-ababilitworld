<?php 
namespace AbabilItWorld\FlexDataManageByAbabilitWorld\Sanitization\Library\Key;
use AbabilItWorld\FlexInterfaceByAbabilitworld\Interface\Security\Sanitization\Sanitization as Sanitizer;
class Key implements Sanitizer 
{
    public function sanitize(mixed $value): bool 
    {
        return is_string($value) && preg_match('/^[a-zA-Z0-9_\-]+$/', $value);
    }
}