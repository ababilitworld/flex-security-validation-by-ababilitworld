<?php
namespace AbabilItWorld\FlexDataProcessByAbabilitWorld\Sanitization\Factory;

use AbabilItWorld\{
    FlexInterfaceByAbabilitworld\Interface\Security\Sanitization\Sanitization as Sanitizer,
    FlexDataProcessByAbabilitWorld\Sanitization\Library\Text\Text as TextSanitizer,
    FlexDataProcessByAbabilitWorld\Sanitization\Library\Html\Html as HTMLSanitizer,
    FlexDataProcessByAbabilitWorld\Sanitization\Library\Username\Username as UsernameSanitizer,
    FlexDataProcessByAbabilitWorld\Sanitization\Library\Password\Password as PasswordSanitizer,
    FlexDataProcessByAbabilitWorld\Sanitization\Library\Email\Email as EmailSanitizer,
    FlexDataProcessByAbabilitWorld\Sanitization\Library\Url\Url as URLSanitizer,
    FlexDataProcessByAbabilitWorld\Sanitization\Library\Integer\Integer as IntegerSanitizer,
    FlexDataProcessByAbabilitWorld\Sanitization\Library\Float\Float as FloatSanitizer,
    FlexDataProcessByAbabilitWorld\Sanitization\Library\Boolean\Boolean as BooleanSanitizer,
    FlexDataProcessByAbabilitWorld\Sanitization\Library\FilePath\FilePath as FilePathSanitizer,
    FlexDataProcessByAbabilitWorld\Sanitization\Library\Key\Key as KeySanitizer,
    FlexDataProcessByAbabilitWorld\Sanitization\Library\PhoneNumber\PhoneNumber as PhoneNumberSanitizer,
    FlexDataProcessByAbabilitWorld\Sanitization\Library\Json\Json as JSONSanitizer,
    FlexDataProcessByAbabilitWorld\Sanitization\Library\ColorHex\ColorHex as ColorHexSanitizer,
    FlexDataProcessByAbabilitWorld\Sanitization\Library\ArraySanitization\ArraySanitization as ArraySanitizer,
    FlexDataProcessByAbabilitWorld\Sanitization\Library\SqlString\SqlString as SQLStringSanitizer,
    FlexDataProcessByAbabilitWorld\Sanitization\Library\UserRole\UserRole as UserRoleSanitizer,

};

class Factory 
{
    private static array $sanitizers = [];

    /**
     * Register a custom sanitizer.
     *
     * @param string $rule
     * @param Sanitizer $sanitizer
     */
    public static function add_sanitizer(string $rule, Sanitizer $sanitizer): void 
    {
        self::$sanitizers[$rule] = $sanitizer;
    }

    /**
     * Get a sanitizer instance.
     *
     * @param string $rule
     * @return Sanitizer
     */
    public static function get_sanitizer(string $rule): Sanitizer 
    {
        // Check if the rule exists in custom sanitizers
        if (array_key_exists($rule, self::$sanitizers) && isset(self::$sanitizers[$rule])) 
        {
            return self::$sanitizers[$rule];
        }

        // Default sanitizers
        return match ($rule) 
        {
            'text' => new TextSanitizer(),
            'html' => new HTMLSanitizer(),
            'username' => new UsernameSanitizer(),
            'email' => new EmailSanitizer(),
            'password' => new PasswordSanitizer(),
            'url' => new URLSanitizer(),
            'integer' => new IntegerSanitizer(),
            'float' => new FloatSanitizer(),
            'boolean' => new BooleanSanitizer(),
            'file_path' => new FilePathSanitizer(),
            'key' => new KeySanitizer(),
            'phone' => new PhoneNumberSanitizer(),
            'json' => new JSONSanitizer(),
            'color_hex' => new ColorHexSanitizer(),
            'array_validation' => new ArraySanitizer(),
            'sql_string' => new SQLStringSanitizer(),
            'user_role' => new UserRoleSanitizer(),
            default => throw new \InvalidArgumentException("Unsupported validation rule: $rule"),
        };
    }
}
