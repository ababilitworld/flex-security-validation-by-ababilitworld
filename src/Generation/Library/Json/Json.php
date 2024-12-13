<?php 
namespace AbabilItWorld\FlexDataManageByAbabilitWorld\Generation\Library\Json;
use AbabilItWorld\FlexInterfaceByAbabilitworld\Interface\Security\Generation\Generation as Generator;
class Json implements Generator 
{
    public function generate(mixed $value): bool 
    {
        json_decode($value);
        return json_last_error() === JSON_ERROR_NONE;
    }
}