<?php 
namespace AbabilItWorld\FlexDataManageByAbabilitWorld\Generation\Library\Html;
use AbabilItWorld\FlexInterfaceByAbabilitworld\Interface\Security\Generation\Generation as Generator;
class Html implements Generator 
{
    public function generate(mixed $value): bool 
    {
        return is_string($value) && preg_match('/<\/?[a-z][\s\S]*>/i', $value);
    }
}