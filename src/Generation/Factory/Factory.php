<?php
namespace AbabilItWorld\FlexDataManageByAbabilitWorld\Generation\Factory;

use AbabilItWorld\{
    FlexInterfaceByAbabilitworld\Interface\Security\Generation\Generation as Generator,
    FlexDataManageByAbabilitWorld\Generation\Library\Text\Text as TextGenerator,
    FlexDataManageByAbabilitWorld\Generation\Library\Html\Html as HTMLGenerator,
    FlexDataManageByAbabilitWorld\Generation\Library\Username\Username as UsernameGenerator,
    FlexDataManageByAbabilitWorld\Generation\Library\Password\Password as PasswordGenerator,
    FlexDataManageByAbabilitWorld\Generation\Library\Email\Email as EmailGenerator,
    FlexDataManageByAbabilitWorld\Generation\Library\Url\Url as URLGenerator,
    FlexDataManageByAbabilitWorld\Generation\Library\Integer\Integer as IntegerGenerator,
    FlexDataManageByAbabilitWorld\Generation\Library\Float\Float as FloatGenerator,
    FlexDataManageByAbabilitWorld\Generation\Library\Boolean\Boolean as BooleanGenerator,
    FlexDataManageByAbabilitWorld\Generation\Library\FilePath\FilePath as FilePathGenerator,
    FlexDataManageByAbabilitWorld\Generation\Library\Key\Key as KeyGenerator,
    FlexDataManageByAbabilitWorld\Generation\Library\PhoneNumber\PhoneNumber as PhoneNumberGenerator,
    FlexDataManageByAbabilitWorld\Generation\Library\Json\Json as JSONGenerator,
    FlexDataManageByAbabilitWorld\Generation\Library\ColorHex\ColorHex as ColorHexGenerator,
    FlexDataManageByAbabilitWorld\Generation\Library\ArrayGeneration\ArrayGeneration as ArrayGenerator,
    FlexDataManageByAbabilitWorld\Generation\Library\SqlString\SqlString as SQLStringGenerator,
    FlexDataManageByAbabilitWorld\Generation\Library\UserRole\UserRole as UserRoleGenerator,

};

class Factory 
{
    private static array $generators = [];

    /**
     * Register a custom generator.
     *
     * @param string $rule
     * @param Generator $generator
     */
    public static function add_generator(string $rule, Generator $generator): void 
    {
        self::$generators[$rule] = $generator;
    }

    /**
     * Get a generator instance.
     *
     * @param string $rule
     * @return Generator
     */
    public static function get_generator(string $rule): Generator 
    {
        // Check if the rule exists in custom generators
        if (array_key_exists($rule, self::$generators) && isset(self::$generators[$rule])) 
        {
            return self::$generators[$rule];
        }

        // Default generators
        return match ($rule) 
        {
            'text' => new TextGenerator(),
            'html' => new HTMLGenerator(),
            'username' => new UsernameGenerator(),
            'email' => new EmailGenerator(),
            'password' => new PasswordGenerator(),
            'url' => new URLGenerator(),
            'integer' => new IntegerGenerator(),
            'float' => new FloatGenerator(),
            'boolean' => new BooleanGenerator(),
            'file_path' => new FilePathGenerator(),
            'key' => new KeyGenerator(),
            'phone' => new PhoneNumberGenerator(),
            'json' => new JSONGenerator(),
            'color_hex' => new ColorHexGenerator(),
            'array_validation' => new ArrayGenerator(),
            'sql_string' => new SQLStringGenerator(),
            'user_role' => new UserRoleGenerator(),
            default => throw new \InvalidArgumentException("Unsupported validation rule: $rule"),
        };
    }
}
