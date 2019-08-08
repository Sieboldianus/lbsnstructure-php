<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: lbsnstructure/lbsnstructure.proto

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Generated from protobuf message <code>lbsnPlace</code>
 */
final class lbsnPlace extends \Google\Protobuf\Internal\Message
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
     * Generated from protobuf field <code>string name = 2;</code>
     */
    private $name = '';
    /**
     *Alternative names (e.g. in other languages; synonyms).
     *
     * Generated from protobuf field <code>repeated string name_alternatives = 3;</code>
     */
    private $name_alternatives;
    /**
     * Generated from protobuf field <code>int64 post_count = 4;</code>
     */
    private $post_count = 0;
    /**
     *A link to reach the place on respective LBSN
     *
     * Generated from protobuf field <code>string url = 5;</code>
     */
    private $url = '';
    /**
     *WKT Point
     *
     * Generated from protobuf field <code>string geom_center = 6;</code>
     */
    private $geom_center = '';
    /**
     *WKT Polygon
     *
     * Generated from protobuf field <code>string geom_area = 7;</code>
     */
    private $geom_area = '';
    /**
     * Generated from protobuf field <code>.CompositeKey city_pkey = 8;</code>
     */
    private $city_pkey = null;
    /**
     * Generated from protobuf field <code>string place_description = 9;</code>
     */
    private $place_description = '';
    /**
     *A link provided by users for this place (e.g. webpage for restaurant, park-management etc.)
     *
     * Generated from protobuf field <code>string place_website = 10;</code>
     */
    private $place_website = '';
    /**
     *Telephone number publicly provided for some places on LBSN.
     *
     * Generated from protobuf field <code>string place_phone = 11;</code>
     */
    private $place_phone = '';
    /**
     *Address publicly provided for some places on LBSN.
     *
     * Generated from protobuf field <code>string address = 12;</code>
     */
    private $address = '';
    /**
     *Zip_code publicly provided for some places on LBSN.
     *
     * Generated from protobuf field <code>string zip_code = 13;</code>
     */
    private $zip_code = '';
    /**
     * Generated from protobuf field <code>int64 checkin_count = 14;</code>
     */
    private $checkin_count = 0;
    /**
     * Generated from protobuf field <code>int64 like_count = 15;</code>
     */
    private $like_count = 0;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type \CompositeKey $pkey
     *           Primary Key. A unique identifier of the object.
     *     @type string $name
     *           Optional Attributes
     *     @type string[]|\Google\Protobuf\Internal\RepeatedField $name_alternatives
     *          Alternative names (e.g. in other languages; synonyms).
     *     @type int|string $post_count
     *     @type string $url
     *          A link to reach the place on respective LBSN
     *     @type string $geom_center
     *          WKT Point
     *     @type string $geom_area
     *          WKT Polygon
     *     @type \CompositeKey $city_pkey
     *     @type string $place_description
     *     @type string $place_website
     *          A link provided by users for this place (e.g. webpage for restaurant, park-management etc.)
     *     @type string $place_phone
     *          Telephone number publicly provided for some places on LBSN.
     *     @type string $address
     *          Address publicly provided for some places on LBSN.
     *     @type string $zip_code
     *          Zip_code publicly provided for some places on LBSN.
     *     @type int|string $checkin_count
     *     @type int|string $like_count
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
     * Generated from protobuf field <code>string name = 2;</code>
     * @return string
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * Optional Attributes
     *
     * Generated from protobuf field <code>string name = 2;</code>
     * @param string $var
     * @return $this
     */
    public function setName($var)
    {
        GPBUtil::checkString($var, True);
        $this->name = $var;

        return $this;
    }

    /**
     *Alternative names (e.g. in other languages; synonyms).
     *
     * Generated from protobuf field <code>repeated string name_alternatives = 3;</code>
     * @return \Google\Protobuf\Internal\RepeatedField
     */
    public function getNameAlternatives()
    {
        return $this->name_alternatives;
    }

    /**
     *Alternative names (e.g. in other languages; synonyms).
     *
     * Generated from protobuf field <code>repeated string name_alternatives = 3;</code>
     * @param string[]|\Google\Protobuf\Internal\RepeatedField $var
     * @return $this
     */
    public function setNameAlternatives($var)
    {
        $arr = GPBUtil::checkRepeatedField($var, \Google\Protobuf\Internal\GPBType::STRING);
        $this->name_alternatives = $arr;

        return $this;
    }

    /**
     * Generated from protobuf field <code>int64 post_count = 4;</code>
     * @return int|string
     */
    public function getPostCount()
    {
        return $this->post_count;
    }

    /**
     * Generated from protobuf field <code>int64 post_count = 4;</code>
     * @param int|string $var
     * @return $this
     */
    public function setPostCount($var)
    {
        GPBUtil::checkInt64($var);
        $this->post_count = $var;

        return $this;
    }

    /**
     *A link to reach the place on respective LBSN
     *
     * Generated from protobuf field <code>string url = 5;</code>
     * @return string
     */
    public function getUrl()
    {
        return $this->url;
    }

    /**
     *A link to reach the place on respective LBSN
     *
     * Generated from protobuf field <code>string url = 5;</code>
     * @param string $var
     * @return $this
     */
    public function setUrl($var)
    {
        GPBUtil::checkString($var, True);
        $this->url = $var;

        return $this;
    }

    /**
     *WKT Point
     *
     * Generated from protobuf field <code>string geom_center = 6;</code>
     * @return string
     */
    public function getGeomCenter()
    {
        return $this->geom_center;
    }

    /**
     *WKT Point
     *
     * Generated from protobuf field <code>string geom_center = 6;</code>
     * @param string $var
     * @return $this
     */
    public function setGeomCenter($var)
    {
        GPBUtil::checkString($var, True);
        $this->geom_center = $var;

        return $this;
    }

    /**
     *WKT Polygon
     *
     * Generated from protobuf field <code>string geom_area = 7;</code>
     * @return string
     */
    public function getGeomArea()
    {
        return $this->geom_area;
    }

    /**
     *WKT Polygon
     *
     * Generated from protobuf field <code>string geom_area = 7;</code>
     * @param string $var
     * @return $this
     */
    public function setGeomArea($var)
    {
        GPBUtil::checkString($var, True);
        $this->geom_area = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>.CompositeKey city_pkey = 8;</code>
     * @return \CompositeKey
     */
    public function getCityPkey()
    {
        return $this->city_pkey;
    }

    /**
     * Generated from protobuf field <code>.CompositeKey city_pkey = 8;</code>
     * @param \CompositeKey $var
     * @return $this
     */
    public function setCityPkey($var)
    {
        GPBUtil::checkMessage($var, \CompositeKey::class);
        $this->city_pkey = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>string place_description = 9;</code>
     * @return string
     */
    public function getPlaceDescription()
    {
        return $this->place_description;
    }

    /**
     * Generated from protobuf field <code>string place_description = 9;</code>
     * @param string $var
     * @return $this
     */
    public function setPlaceDescription($var)
    {
        GPBUtil::checkString($var, True);
        $this->place_description = $var;

        return $this;
    }

    /**
     *A link provided by users for this place (e.g. webpage for restaurant, park-management etc.)
     *
     * Generated from protobuf field <code>string place_website = 10;</code>
     * @return string
     */
    public function getPlaceWebsite()
    {
        return $this->place_website;
    }

    /**
     *A link provided by users for this place (e.g. webpage for restaurant, park-management etc.)
     *
     * Generated from protobuf field <code>string place_website = 10;</code>
     * @param string $var
     * @return $this
     */
    public function setPlaceWebsite($var)
    {
        GPBUtil::checkString($var, True);
        $this->place_website = $var;

        return $this;
    }

    /**
     *Telephone number publicly provided for some places on LBSN.
     *
     * Generated from protobuf field <code>string place_phone = 11;</code>
     * @return string
     */
    public function getPlacePhone()
    {
        return $this->place_phone;
    }

    /**
     *Telephone number publicly provided for some places on LBSN.
     *
     * Generated from protobuf field <code>string place_phone = 11;</code>
     * @param string $var
     * @return $this
     */
    public function setPlacePhone($var)
    {
        GPBUtil::checkString($var, True);
        $this->place_phone = $var;

        return $this;
    }

    /**
     *Address publicly provided for some places on LBSN.
     *
     * Generated from protobuf field <code>string address = 12;</code>
     * @return string
     */
    public function getAddress()
    {
        return $this->address;
    }

    /**
     *Address publicly provided for some places on LBSN.
     *
     * Generated from protobuf field <code>string address = 12;</code>
     * @param string $var
     * @return $this
     */
    public function setAddress($var)
    {
        GPBUtil::checkString($var, True);
        $this->address = $var;

        return $this;
    }

    /**
     *Zip_code publicly provided for some places on LBSN.
     *
     * Generated from protobuf field <code>string zip_code = 13;</code>
     * @return string
     */
    public function getZipCode()
    {
        return $this->zip_code;
    }

    /**
     *Zip_code publicly provided for some places on LBSN.
     *
     * Generated from protobuf field <code>string zip_code = 13;</code>
     * @param string $var
     * @return $this
     */
    public function setZipCode($var)
    {
        GPBUtil::checkString($var, True);
        $this->zip_code = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>int64 checkin_count = 14;</code>
     * @return int|string
     */
    public function getCheckinCount()
    {
        return $this->checkin_count;
    }

    /**
     * Generated from protobuf field <code>int64 checkin_count = 14;</code>
     * @param int|string $var
     * @return $this
     */
    public function setCheckinCount($var)
    {
        GPBUtil::checkInt64($var);
        $this->checkin_count = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>int64 like_count = 15;</code>
     * @return int|string
     */
    public function getLikeCount()
    {
        return $this->like_count;
    }

    /**
     * Generated from protobuf field <code>int64 like_count = 15;</code>
     * @param int|string $var
     * @return $this
     */
    public function setLikeCount($var)
    {
        GPBUtil::checkInt64($var);
        $this->like_count = $var;

        return $this;
    }

}
