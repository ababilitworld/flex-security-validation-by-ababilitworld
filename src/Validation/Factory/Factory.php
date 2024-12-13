<?php
namespace AbabilItWorld\FlexDataManageByAbabilitWorld\Validation\Factory;

use AbabilItWorld\{
    FlexInterfaceByAbabilitworld\Interface\Security\Validation\Validation as Validator,
    FlexDataManageByAbabilitWorld\Validation\Library\Text\Text as TextValidator,
    FlexDataManageByAbabilitWorld\Validation\Library\Html\Html as HTMLValidator,
    FlexDataManageByAbabilitWorld\Validation\Library\Username\Username as UsernameValidator,
    FlexDataManageByAbabilitWorld\Validation\Library\Password\Password as PasswordValidator,
    FlexDataManageByAbabilitWorld\Validation\Library\Email\Email as EmailValidator,
    FlexDataManageByAbabilitWorld\Validation\Library\Url\Url as URLValidator,
    FlexDataManageByAbabilitWorld\Validation\Library\Integer\Integer as IntegerValidator,
    FlexDataManageByAbabilitWorld\Validation\Library\Float\Float as FloatValidator,
    FlexDataManageByAbabilitWorld\Validation\Library\Boolean\Boolean as BooleanValidator,
    FlexDataManageByAbabilitWorld\Validation\Library\FilePath\FilePath as FilePathValidator,
    FlexDataManageByAbabilitWorld\Validation\Library\Key\Key as KeyValidator,
    FlexDataManageByAbabilitWorld\Validation\Library\PhoneNumber\PhoneNumber as PhoneNumberValidator,
    FlexDataManageByAbabilitWorld\Validation\Library\Json\Json as JSONValidator,
    FlexDataManageByAbabilitWorld\Validation\Library\ColorHex\ColorHex as ColorHexValidator,
    FlexDataManageByAbabilitWorld\Validation\Library\ArrayValidation\ArrayValidation as ArrayValidator,
    FlexDataManageByAbabilitWorld\Validation\Library\SqlString\SqlString as SQLStringValidator,
    FlexDataManageByAbabilitWorld\Validation\Library\UserRole\UserRole as UserRoleValidator,

};

class Factory 
{
    private static array $validators = [];

    /**
     * Register a custom validator.
     *
     * @param string $rule
     * @param Validator $validator
     */
    public static function add_validator(string $rule, Validator $validator): void 
    {
        self::$validators[$rule] = $validator;
    }

    /**
     * Get a validator instance.
     *
     * @param string $rule
     * @return Validator
     */
    public static function get_validator(string $rule): Validator 
    {
        // Check if the rule exists in custom validators
        if (array_key_exists($rule, self::$validators) && isset(self::$validators[$rule])) 
        {
            return self::$validators[$rule];
        }

        // Default validators
        return match ($rule) 
        {
            'text' => new TextValidator(),
            'html' => new HTMLValidator(),
            'username' => new UsernameValidator(),
            'email' => new EmailValidator(),
            'password' => new PasswordValidator(),
            'url' => new URLValidator(),
            'integer' => new IntegerValidator(),
            'float' => new FloatValidator(),
            'boolean' => new BooleanValidator(),
            'file_path' => new FilePathValidator(),
            'key' => new KeyValidator(),
            'phone' => new PhoneNumberValidator(),
            'json' => new JSONValidator(),
            'color_hex' => new ColorHexValidator(),
            'array_validation' => new ArrayValidator(),
            'sql_string' => new SQLStringValidator(),
            'user_role' => new UserRoleValidator(),
            default => throw new \InvalidArgumentException("Unsupported validation rule: $rule"),
        };
    }
}
