<?php 
namespace AbabilItWorld\FlexDataManageByAbabilitWorld\Generation\Library\Text;
use AbabilItWorld\FlexInterfaceByAbabilitworld\Interface\Security\Generation\Generation as Generator;
class Text implements Generator 
{
    public function generate(mixed $value): bool 
    {
        return preg_match('/^[a-zA-Z\s]+$/', $value) || is_string($value) && preg_match('/^[\w\s]+$/', $value);;
    }
}