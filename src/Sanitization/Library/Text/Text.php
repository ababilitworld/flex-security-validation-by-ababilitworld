<?php 
namespace AbabilItWorld\FlexDataManageByAbabilitWorld\Sanitization\Library\Text;
use AbabilItWorld\FlexInterfaceByAbabilitworld\Interface\Security\Sanitization\Sanitization as Sanitizer;
class Text implements Sanitizer 
{
    public function sanitize(mixed $value): bool 
    {
        return preg_match('/^[a-zA-Z\s]+$/', $value) || is_string($value) && preg_match('/^[\w\s]+$/', $value);;
    }
}