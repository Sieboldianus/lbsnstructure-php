<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: lbsnstructure/lbsnstructure.proto

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Generated from protobuf message <code>lbsnUserGroup</code>
 */
final class lbsnUserGroup extends \Google\Protobuf\Internal\Message
{
    /**
     * Primary Key. A unique identifier of the object.
     *
     * Generated from protobuf field <code>.CompositeKey pkey = 1;</code>
     */
    private $pkey = null;
    /**
     * Optional Attributes
     *
     * Generated from protobuf field <code>string usergroup_name = 2;</code>
     */
    private $usergroup_name = '';
    /**
     * Generated from protobuf field <code>string usergroup_description = 3;</code>
     */
    private $usergroup_description = '';
    /**
     * Generated from protobuf field <code>int64 member_count = 4;</code>
     */
    private $member_count = 0;
    /**
     * Generated from protobuf field <code>.google.protobuf.Timestamp usergroup_createdate = 5;</code>
     */
    private $usergroup_createdate = null;
    /**
     * Generated from protobuf field <code>.CompositeKey user_owner_pkey = 6;</code>
     */
    private $user_owner_pkey = null;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type \CompositeKey $pkey
     *           Primary Key. A unique identifier of the object.
     *     @type string $usergroup_name
     *           Optional Attributes
     *     @type string $usergroup_description
     *     @type int|string $member_count
     *     @type \Google\Protobuf\Timestamp $usergroup_createdate
     *     @type \CompositeKey $user_owner_pkey
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Lbsnstructure\Lbsnstructure::initOnce();
        parent::__construct($data);
    }

    /**
     * Primary Key. A unique identifier of the object.
     *
     * Generated from protobuf field <code>.CompositeKey pkey = 1;</code>
     * @return \CompositeKey
     */
    public function getPkey()
    {
        return $this->pkey;
    }

    /**
     * Primary Key. A unique identifier of the object.
     *
     * Generated from protobuf field <code>.CompositeKey pkey = 1;</code>
     * @param \CompositeKey $var
     * @return $this
     */
    public function setPkey($var)
    {
        GPBUtil::checkMessage($var, \CompositeKey::class);
        $this->pkey = $var;

        return $this;
    }

    /**
     * Optional Attributes
     *
     * Generated from protobuf field <code>string usergroup_name = 2;</code>
     * @return string
     */
    public function getUsergroupName()
    {
        return $this->usergroup_name;
    }

    /**
     * Optional Attributes
     *
     * Generated from protobuf field <code>string usergroup_name = 2;</code>
     * @param string $var
     * @return $this
     */
    public function setUsergroupName($var)
    {
        GPBUtil::checkString($var, True);
        $this->usergroup_name = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>string usergroup_description = 3;</code>
     * @return string
     */
    public function getUsergroupDescription()
    {
        return $this->usergroup_description;
    }

    /**
     * Generated from protobuf field <code>string usergroup_description = 3;</code>
     * @param string $var
     * @return $this
     */
    public function setUsergroupDescription($var)
    {
        GPBUtil::checkString($var, True);
        $this->usergroup_description = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>int64 member_count = 4;</code>
     * @return int|string
     */
    public function getMemberCount()
    {
        return $this->member_count;
    }

    /**
     * Generated from protobuf field <code>int64 member_count = 4;</code>
     * @param int|string $var
     * @return $this
     */
    public function setMemberCount($var)
    {
        GPBUtil::checkInt64($var);
        $this->member_count = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>.google.protobuf.Timestamp usergroup_createdate = 5;</code>
     * @return \Google\Protobuf\Timestamp
     */
    public function getUsergroupCreatedate()
    {
        return $this->usergroup_createdate;
    }

    /**
     * Generated from protobuf field <code>.google.protobuf.Timestamp usergroup_createdate = 5;</code>
     * @param \Google\Protobuf\Timestamp $var
     * @return $this
     */
    public function setUsergroupCreatedate($var)
    {
        GPBUtil::checkMessage($var, \Google\Protobuf\Timestamp::class);
        $this->usergroup_createdate = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>.CompositeKey user_owner_pkey = 6;</code>
     * @return \CompositeKey
     */
    public function getUserOwnerPkey()
    {
        return $this->user_owner_pkey;
    }

    /**
     * Generated from protobuf field <code>.CompositeKey user_owner_pkey = 6;</code>
     * @param \CompositeKey $var
     * @return $this
     */
    public function setUserOwnerPkey($var)
    {
        GPBUtil::checkMessage($var, \CompositeKey::class);
        $this->user_owner_pkey = $var;

        return $this;
    }

}

