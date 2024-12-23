<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: syncp.proto

namespace Wallet\V1\ProvSys\Syncp\SyncCredit;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 ** Response message that wil be returned in response "data". 
 *
 * Generated from protobuf message <code>wallet.v1.provsys.SyncCredit.Data</code>
 */
class Data extends \Google\Protobuf\Internal\Message
{
    /**
     *&#47; pId of member.
     *
     * Generated from protobuf field <code>string p_id = 2 [json_name = "pId"];</code>
     */
    protected $p_id = '';
    /**
     *&#47; Currency of member.
     *
     * Generated from protobuf field <code>string currency = 3 [json_name = "currency"];</code>
     */
    protected $currency = '';
    /**
     *&#47; Credit amount of member.
     *
     * Generated from protobuf field <code>double credit = 4 [json_name = "credit"];</code>
     */
    protected $credit = 0.0;
    /**
     *&#47; Last update credit info.
     *
     * Generated from protobuf field <code>int64 last_update = 6 [json_name = "lastUpdate"];</code>
     */
    protected $last_update = 0;
    /**
     *&#47; Lock wallet status of member.
     *
     * Generated from protobuf field <code>bool is_locked = 7 [json_name = "isLocked"];</code>
     */
    protected $is_locked = false;
    /**
     *&#47; Disable wallet status of member.
     *
     * Generated from protobuf field <code>bool is_disabled = 8 [json_name = "isDisabled"];</code>
     */
    protected $is_disabled = false;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type string $p_id
     *          &#47; pId of member.
     *     @type string $currency
     *          &#47; Currency of member.
     *     @type float $credit
     *          &#47; Credit amount of member.
     *     @type int|string $last_update
     *          &#47; Last update credit info.
     *     @type bool $is_locked
     *          &#47; Lock wallet status of member.
     *     @type bool $is_disabled
     *          &#47; Disable wallet status of member.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Syncp::initOnce();
        parent::__construct($data);
    }

    /**
     *&#47; pId of member.
     *
     * Generated from protobuf field <code>string p_id = 2 [json_name = "pId"];</code>
     * @return string
     */
    public function getPId()
    {
        return $this->p_id;
    }

    /**
     *&#47; pId of member.
     *
     * Generated from protobuf field <code>string p_id = 2 [json_name = "pId"];</code>
     * @param string $var
     * @return $this
     */
    public function setPId($var)
    {
        GPBUtil::checkString($var, True);
        $this->p_id = $var;

        return $this;
    }

    /**
     *&#47; Currency of member.
     *
     * Generated from protobuf field <code>string currency = 3 [json_name = "currency"];</code>
     * @return string
     */
    public function getCurrency()
    {
        return $this->currency;
    }

    /**
     *&#47; Currency of member.
     *
     * Generated from protobuf field <code>string currency = 3 [json_name = "currency"];</code>
     * @param string $var
     * @return $this
     */
    public function setCurrency($var)
    {
        GPBUtil::checkString($var, True);
        $this->currency = $var;

        return $this;
    }

    /**
     *&#47; Credit amount of member.
     *
     * Generated from protobuf field <code>double credit = 4 [json_name = "credit"];</code>
     * @return float
     */
    public function getCredit()
    {
        return $this->credit;
    }

    /**
     *&#47; Credit amount of member.
     *
     * Generated from protobuf field <code>double credit = 4 [json_name = "credit"];</code>
     * @param float $var
     * @return $this
     */
    public function setCredit($var)
    {
        GPBUtil::checkDouble($var);
        $this->credit = $var;

        return $this;
    }

    /**
     *&#47; Last update credit info.
     *
     * Generated from protobuf field <code>int64 last_update = 6 [json_name = "lastUpdate"];</code>
     * @return int|string
     */
    public function getLastUpdate()
    {
        return $this->last_update;
    }

    /**
     *&#47; Last update credit info.
     *
     * Generated from protobuf field <code>int64 last_update = 6 [json_name = "lastUpdate"];</code>
     * @param int|string $var
     * @return $this
     */
    public function setLastUpdate($var)
    {
        GPBUtil::checkInt64($var);
        $this->last_update = $var;

        return $this;
    }

    /**
     *&#47; Lock wallet status of member.
     *
     * Generated from protobuf field <code>bool is_locked = 7 [json_name = "isLocked"];</code>
     * @return bool
     */
    public function getIsLocked()
    {
        return $this->is_locked;
    }

    /**
     *&#47; Lock wallet status of member.
     *
     * Generated from protobuf field <code>bool is_locked = 7 [json_name = "isLocked"];</code>
     * @param bool $var
     * @return $this
     */
    public function setIsLocked($var)
    {
        GPBUtil::checkBool($var);
        $this->is_locked = $var;

        return $this;
    }

    /**
     *&#47; Disable wallet status of member.
     *
     * Generated from protobuf field <code>bool is_disabled = 8 [json_name = "isDisabled"];</code>
     * @return bool
     */
    public function getIsDisabled()
    {
        return $this->is_disabled;
    }

    /**
     *&#47; Disable wallet status of member.
     *
     * Generated from protobuf field <code>bool is_disabled = 8 [json_name = "isDisabled"];</code>
     * @param bool $var
     * @return $this
     */
    public function setIsDisabled($var)
    {
        GPBUtil::checkBool($var);
        $this->is_disabled = $var;

        return $this;
    }

}

// Adding a class alias for backwards compatibility with the previous class name.
class_alias(Data::class, \Wallet\V1\ProvSys\Syncp\SyncCredit_Data::class);

