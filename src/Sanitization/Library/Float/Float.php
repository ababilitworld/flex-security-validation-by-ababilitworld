<?php 
namespace AbabilItWorld\FlexDataManageByAbabilitWorld\Sanitization\Library\Float;
use AbabilItWorld\FlexInterfaceByAbabilitworld\Interface\Security\Sanitization\Sanitization as Sanitizer;
class Float implements Sanitizer 
{
    public function sanitize(mixed $value): bool 
    {
        return filter_var($value, FILTER_VALIDATE_FLOAT) !== false;
    }
}