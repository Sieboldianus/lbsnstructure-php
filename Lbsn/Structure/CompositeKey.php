<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: lbsnstructure/lbsnstructure.proto

namespace Lbsn\Structure;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Generated from protobuf message <code>lbsn.structure.CompositeKey</code>
 */
final class CompositeKey extends \Google\Protobuf\Internal\Message
{
    /**
     * Except for language, a Composite Key is used for all messages and
     * is constructed from the internal id (origin, 1= Instagram, 2= Flickr, 3= Twitter etc.)
     * and the services own, hashed or encrypted (gu)id
     *
     * Generated from protobuf field <code>.lbsn.structure.Origin origin = 1;</code>
     */
    private $origin = null;
    /**
     * Generated from protobuf field <code>string id = 2;</code>
     */
    private $id = '';

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type \Lbsn\Structure\Origin $origin
     *           Except for language, a Composite Key is used for all messages and
     *           is constructed from the internal id (origin, 1= Instagram, 2= Flickr, 3= Twitter etc.)
     *           and the services own, hashed or encrypted (gu)id
     *     @type string $id
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Lbsnstructure\Lbsnstructure::initOnce();
        parent::__construct($data);
    }

    /**
     * Except for language, a Composite Key is used for all messages and
     * is constructed from the internal id (origin, 1= Instagram, 2= Flickr, 3= Twitter etc.)
     * and the services own, hashed or encrypted (gu)id
     *
     * Generated from protobuf field <code>.lbsn.structure.Origin origin = 1;</code>
     * @return \Lbsn\Structure\Origin
     */
    public function getOrigin()
    {
        return $this->origin;
    }

    /**
     * Except for language, a Composite Key is used for all messages and
     * is constructed from the internal id (origin, 1= Instagram, 2= Flickr, 3= Twitter etc.)
     * and the services own, hashed or encrypted (gu)id
     *
     * Generated from protobuf field <code>.lbsn.structure.Origin origin = 1;</code>
     * @param \Lbsn\Structure\Origin $var
     * @return $this
     */
    public function setOrigin($var)
    {
        GPBUtil::checkMessage($var, \Lbsn\Structure\Origin::class);
        $this->origin = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>string id = 2;</code>
     * @return string
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * Generated from protobuf field <code>string id = 2;</code>
     * @param string $var
     * @return $this
     */
    public function setId($var)
    {
        GPBUtil::checkString($var, True);
        $this->id = $var;

        return $this;
    }

}

