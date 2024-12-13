<?php 
namespace AbabilItWorld\FlexDataManageByAbabilitWorld\Sanitization\Library\ColorHex;
use AbabilItWorld\FlexInterfaceByAbabilitworld\Interface\Security\Sanitization\Sanitization as Sanitizer;
class ColorHex implements Sanitizer 
{
    public function sanitize(mixed $value): bool 
    {
        return is_string($value) && preg_match('/^#([a-fA-F0-9]{3}|[a-fA-F0-9]{6})$/', $value);
    }
}