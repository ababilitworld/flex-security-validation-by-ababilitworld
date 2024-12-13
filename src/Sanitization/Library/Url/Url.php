<?php 
namespace AbabilItWorld\FlexDataManageByAbabilitWorld\Sanitization\Library\Url;
use AbabilItWorld\FlexInterfaceByAbabilitworld\Interface\Security\Sanitization\Sanitization as Sanitizer;
class Url implements Sanitizer 
{
    public function sanitize(mixed $value): bool 
    {
        return filter_var($value, FILTER_VALIDATE_URL) !== false;
    }
}