<?php 
namespace AbabilItWorld\FlexDataManageByAbabilitWorld\Sanitization\Library\Json;
use AbabilItWorld\FlexInterfaceByAbabilitworld\Interface\Security\Sanitization\Sanitization as Sanitizer;
class Json implements Sanitizer 
{
    public function sanitize(mixed $value): bool 
    {
        json_decode($value);
        return json_last_error() === JSON_ERROR_NONE;
    }
}