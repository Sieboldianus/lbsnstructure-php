<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: lbsnstructure/lbsnstructure.proto

namespace lbsnRelationship;

use UnexpectedValueException;

/**
 * Optional Attributes
 *
 * Protobuf type <code>lbsnRelationship.RelationshipType</code>
 */
class RelationshipType
{
    /**
     * Generated from protobuf enum <code>UNKNOWN = 0;</code>
     */
    const UNKNOWN = 0;
    /**
     *A friend of a user (i.e. this user y is the friend of user x). Being a friend is a mutual relationship.
     *
     * Generated from protobuf enum <code>isFRIEND = 1;</code>
     */
    const isFRIEND = 1;
    /**
     *A user that is connected to someone, e.g. a follower of user x (i.e. this user y is the follower of user x). Being connected to someone (e.g. being a follower) is not a mutual relationship.
     *
     * Generated from protobuf enum <code>isCONNECTED = 2;</code>
     */
    const isCONNECTED = 2;
    /**
     *A user that has multiple representations on the same service or is linked across services.
     *
     * Generated from protobuf enum <code>isEQUAL = 3;</code>
     */
    const isEQUAL = 3;
    /**
     * Generated from protobuf enum <code>inGROUP = 4;</code>
     */
    const inGROUP = 4;
    /**
     * Generated from protobuf enum <code>followsGROUP = 5;</code>
     */
    const followsGROUP = 5;
    /**
     * Generated from protobuf enum <code>inCOMMUNITY = 6;</code>
     */
    const inCOMMUNITY = 6;
    /**
     * Generated from protobuf enum <code>MENTIONS_USER = 7;</code>
     */
    const MENTIONS_USER = 7;
    /**
     * Generated from protobuf enum <code>hasHASHTAG = 8;</code>
     */
    const hasHASHTAG = 8;
    /**
     * Generated from protobuf enum <code>hasEMOJI = 9;</code>
     */
    const hasEMOJI = 9;
    /**
     * Generated from protobuf enum <code>OTHER = 10;</code>
     */
    const OTHER = 10;

    private static $valueToName = [
        self::UNKNOWN => 'UNKNOWN',
        self::isFRIEND => 'isFRIEND',
        self::isCONNECTED => 'isCONNECTED',
        self::isEQUAL => 'isEQUAL',
        self::inGROUP => 'inGROUP',
        self::followsGROUP => 'followsGROUP',
        self::inCOMMUNITY => 'inCOMMUNITY',
        self::MENTIONS_USER => 'MENTIONS_USER',
        self::hasHASHTAG => 'hasHASHTAG',
        self::hasEMOJI => 'hasEMOJI',
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
class_alias(RelationshipType::class, \lbsnRelationship_RelationshipType::class);

