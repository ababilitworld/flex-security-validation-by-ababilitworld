<?php 
namespace AbabilItWorld\FlexDataManageByAbabilitWorld\Sanitization\Library\Integer;
use AbabilItWorld\FlexInterfaceByAbabilitworld\Interface\Security\Sanitization\Sanitization as Sanitizer;
class Integer implements Sanitizer 
{
    public function sanitize(mixed $value): bool 
    {
        return filter_var($value, FILTER_VALIDATE_INT) !== false;
    }
}