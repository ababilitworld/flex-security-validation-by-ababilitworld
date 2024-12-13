<?php 
namespace AbabilItWorld\FlexDataManageByAbabilitWorld\Sanitization\Library\UserRole;
use AbabilItWorld\FlexInterfaceByAbabilitworld\Interface\Security\Sanitization\Sanitization as Sanitizer;
class UserRole implements Sanitizer 
{
    public function sanitize(mixed $value): bool 
    {
        return is_string($value) && preg_match('/^[a-zA-Z0-9_\-]+$/', $value);
    }
}