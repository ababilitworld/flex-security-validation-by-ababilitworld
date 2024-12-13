<?php 
namespace AbabilItWorld\FlexDataManageByAbabilitWorld\Generation\Library\ColorHex;
use AbabilItWorld\FlexInterfaceByAbabilitworld\Interface\Security\Generation\Generation as Generator;
class ColorHex implements Generator 
{
    public function generate(mixed $value): bool 
    {
        return is_string($value) && preg_match('/^#([a-fA-F0-9]{3}|[a-fA-F0-9]{6})$/', $value);
    }
}