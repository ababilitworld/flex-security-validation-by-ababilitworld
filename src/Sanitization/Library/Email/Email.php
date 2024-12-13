<?php 
namespace AbabilItWorld\FlexDataManageByAbabilitWorld\Sanitization\Library\Email;
use AbabilItWorld\FlexInterfaceByAbabilitworld\Interface\Security\Sanitization\Sanitization as Sanitizer;
class Email implements Sanitizer 
{
    public function sanitize(mixed $value): bool 
    {
        return filter_var($value, FILTER_VALIDATE_EMAIL) !== false;
    }
}