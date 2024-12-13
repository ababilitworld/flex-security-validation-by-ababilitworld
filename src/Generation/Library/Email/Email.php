<?php 
namespace AbabilItWorld\FlexDataManageByAbabilitWorld\Generation\Library\Email;
use AbabilItWorld\FlexInterfaceByAbabilitworld\Interface\Security\Generation\Generation as Generator;
class Email implements Generator 
{
    public function generate(mixed $value): bool 
    {
        return filter_var($value, FILTER_VALIDATE_EMAIL) !== false;
    }
}