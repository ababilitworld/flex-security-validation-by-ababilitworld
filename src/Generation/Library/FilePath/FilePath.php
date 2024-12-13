<?php 
namespace AbabilItWorld\FlexDataManageByAbabilitWorld\Generation\Library\FilePath;
use AbabilItWorld\FlexInterfaceByAbabilitworld\Interface\Security\Generation\Generation as Generator;
class FilePath implements Generator 
{
    public function generate(mixed $value): bool 
    {
        return is_string($value) && preg_match('/^[\w\-.\/]+$/', $value);
    }
}