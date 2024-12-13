<?php 
namespace AbabilItWorld\FlexDataManageByAbabilitWorld\Generation\Library\Url;
use AbabilItWorld\FlexInterfaceByAbabilitworld\Interface\Security\Generation\Generation as Generator;
class Url implements Generator 
{
    public function generate(mixed $value): bool 
    {
        return filter_var($value, FILTER_VALIDATE_URL) !== false;
    }
}