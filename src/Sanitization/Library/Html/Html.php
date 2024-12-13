<?php 
namespace AbabilItWorld\FlexDataManageByAbabilitWorld\Sanitization\Library\Html;
use AbabilItWorld\FlexInterfaceByAbabilitworld\Interface\Security\Sanitization\Sanitization as Sanitizer;
class Html implements Sanitizer 
{
    public function sanitize(mixed $value): bool 
    {
        return is_string($value) && preg_match('/<\/?[a-z][\s\S]*>/i', $value);
    }
}