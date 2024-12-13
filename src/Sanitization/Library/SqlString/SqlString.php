<?php 
namespace AbabilItWorld\FlexDataManageByAbabilitWorld\Sanitization\Library\SqlString;
use AbabilItWorld\FlexInterfaceByAbabilitworld\Interface\Security\Sanitization\Sanitization as Sanitizer;
class SqlString implements Sanitizer 
{
    public function sanitize(mixed $value): bool 
    {
        // Example: Match basic SQL-like patterns; use prepared statements for real SQL sanitization.
        return is_string($value) && preg_match('/^[\w\s\%]+$/', $value);
    }
}