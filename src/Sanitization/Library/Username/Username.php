<?php 
namespace AbabilItWorld\FlexDataManageByAbabilitWorld\Sanitization\Library\Username;
use AbabilItWorld\FlexInterfaceByAbabilitworld\Interface\Security\Sanitization\Sanitization as Sanitizer;
class Username implements Sanitizer 
{
    public function sanitize(mixed $value): bool 
    {
        return filter_var($value, FILTER_VALIDATE_EMAIL) !== false;
    }
}