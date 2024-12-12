<?php
namespace AbabilItWorld\FlexSecurityValidationByAbabilitWorld\Validation\Factory;

use AbabilItWorld\{
    FlexSecurityValidationByAbabilitWorld\Validation\Library\Text\Text as TextValidator,
    FlexSecurityValidationByAbabilitWorld\Validation\Library\Html\Html as HTMLValidator,
    FlexSecurityValidationByAbabilitWorld\Validation\Library\Username\Username as UsernameValidator,
    FlexSecurityValidationByAbabilitWorld\Validation\Library\Password\Password as PasswordValidator,
    FlexSecurityValidationByAbabilitWorld\Validation\Library\Email\Email as EmailValidator,
    FlexSecurityValidationByAbabilitWorld\Validation\Library\Url\Url as URLValidator,
    FlexSecurityValidationByAbabilitWorld\Validation\Library\Integer\Integer as IntegerValidator,
    FlexSecurityValidationByAbabilitWorld\Validation\Library\Float\Float as FloatValidator,
    FlexSecurityValidationByAbabilitWorld\Validation\Library\Boolean\Boolean as BooleanValidator,
    FlexSecurityValidationByAbabilitWorld\Validation\Library\FilePath\FilePath as FilePathValidator,
    FlexSecurityValidationByAbabilitWorld\Validation\Library\Key\Key as KeyValidator,
    FlexSecurityValidationByAbabilitWorld\Validation\Library\Phone\Phone as PhoneValidator,
    FlexSecurityValidationByAbabilitWorld\Validation\Library\Json\Json,
    FlexSecurityValidationByAbabilitWorld\Validation\Library\ColorHex\ColorHex,
    FlexSecurityValidationByAbabilitWorld\Validation\Library\ArrayValidation\ArrayValidation,
    FlexSecurityValidationByAbabilitWorld\Validation\Library\SqlString\SqlString,
    FlexSecurityValidationByAbabilitWorld\Validation\Library\UserRole\UserRole,

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
            'username' => new EmailValidator(),
            'email' => new EmailValidator(),
            'password' => new EmailValidator(),
            'url' => new URLValidator(),
            'integer' => new IntegerValidator(),
            'float' => new FloatValidator(),
            'boolean' => new BooleanValidator(),
            'file_path' => new FilePathValidator(),
            'key' => new KeyValidator(),
            'phone' => new PhoneNumberValidator(),
            'json' => new JSONValidator(),
            'hex_color' => new HexColorValidator(),
            'array' => new ArrayValidator(),
            'sql_like' => new SQLLikeValidator(),
            'user_role' => new UserRoleValidator(),
            default => throw new \InvalidArgumentException("Unsupported validation rule: $rule"),
        };
    }
}
