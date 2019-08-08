<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: lbsnstructure/lbsnstructure.proto

namespace lbsnPostReaction;

use UnexpectedValueException;

/**
 *choose the more specific type if multiple apply. Merge similar types: Retweet -> Share; Reply -> Comment; Star -> Like
 *
 * Protobuf type <code>lbsnPostReaction.ReactionType</code>
 */
class ReactionType
{
    /**
     * Generated from protobuf enum <code>UNKNOWN = 0;</code>
     */
    const UNKNOWN = 0;
    /**
     * Generated from protobuf enum <code>SHARE = 1;</code>
     */
    const SHARE = 1;
    /**
     * Generated from protobuf enum <code>COMMENT = 2;</code>
     */
    const COMMENT = 2;
    /**
     * Generated from protobuf enum <code>QUOTE = 3;</code>
     */
    const QUOTE = 3;
    /**
     * Generated from protobuf enum <code>LIKE = 4;</code>
     */
    const LIKE = 4;
    /**
     * Generated from protobuf enum <code>EMOJI = 5;</code>
     */
    const EMOJI = 5;
    /**
     * Generated from protobuf enum <code>OTHER = 6;</code>
     */
    const OTHER = 6;

    private static $valueToName = [
        self::UNKNOWN => 'UNKNOWN',
        self::SHARE => 'SHARE',
        self::COMMENT => 'COMMENT',
        self::QUOTE => 'QUOTE',
        self::LIKE => 'LIKE',
        self::EMOJI => 'EMOJI',
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
class_alias(ReactionType::class, \lbsnPostReaction_ReactionType::class);
