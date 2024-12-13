<?php 
namespace AbabilItWorld\FlexDataManageByAbabilitWorld\Sanitization\Library\FilePath;
use AbabilItWorld\FlexInterfaceByAbabilitworld\Interface\Security\Sanitization\Sanitization as Sanitizer;
class FilePath implements Sanitizer 
{
    public function sanitize(mixed $value): bool 
    {
        return is_string($value) && preg_match('/^[\w\-.\/]+$/', $value);
    }
}