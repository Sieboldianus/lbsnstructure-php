<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: lbsnstructure/lbsnstructure.proto

namespace lbsnPost;

use UnexpectedValueException;

/**
 *choose the more specific type (VIDEO over TEXT even if text is present)
 *
 * Protobuf type <code>lbsnPost.PostType</code>
 */
class PostType
{
    /**
     * Generated from protobuf enum <code>TEXT = 0;</code>
     */
    const TEXT = 0;
    /**
     * Generated from protobuf enum <code>IMAGE = 1;</code>
     */
    const IMAGE = 1;
    /**
     * Generated from protobuf enum <code>VIDEO = 2;</code>
     */
    const VIDEO = 2;
    /**
     * Generated from protobuf enum <code>OTHER = 3;</code>
     */
    const OTHER = 3;

    private static $valueToName = [
        self::TEXT => 'TEXT',
        self::IMAGE => 'IMAGE',
        self::VIDEO => 'VIDEO',
        self::OTHER => 'OTHER',
    ];

    public static function name($value)
    {
        if (!isset(self::$valueToName[$value])) {
            throw new UnexpectedValueException(sprintf(
                    'Enum %s has no name defined for value %s', __CLASS__, $value));
        }
        return self::$valueToName[$value];
    }


    public static function value($name)
    {
        $const = __CLASS__ . '::' . strtoupper($name);
        if (!defined($const)) {
            throw new UnexpectedValueException(sprintf(
                    'Enum %s has no value defined for name %s', __CLASS__, $name));
        }
        return constant($const);
    }
}

// Adding a class alias for backwards compatibility with the previous class name.
class_alias(PostType::class, \lbsnPost_PostType::class);

