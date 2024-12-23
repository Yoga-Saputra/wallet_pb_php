<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: syncp.proto

namespace Wallet\V1\ProvSys\Syncp\SyncCredit;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 ** Response message that will be returned by sync credit services. 
 *
 * Generated from protobuf message <code>wallet.v1.provsys.SyncCredit.Res</code>
 */
class Res extends \Google\Protobuf\Internal\Message
{
    /**
     *&#47; Status of the response.
     *
     * Generated from protobuf field <code>bool success = 1 [json_name = "success"];</code>
     */
    protected $success = false;
    /**
     *&#47; Code of the response.
     *
     * Generated from protobuf field <code>int32 code = 2 [json_name = "code"];</code>
     */
    protected $code = 0;
    /**
     *&#47; Error info.
     *
     * Generated from protobuf field <code>.google.protobuf.StringValue error = 3 [json_name = "error"];</code>
     */
    protected $error = null;
    /**
     *&#47; Data of the response.
     *
     * Generated from protobuf field <code>.wallet.v1.provsys.SyncCredit.Data data = 4 [json_name = "data"];</code>
     */
    protected $data = null;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type bool $success
     *          &#47; Status of the response.
     *     @type int $code
     *          &#47; Code of the response.
     *     @type \Google\Protobuf\StringValue $error
     *          &#47; Error info.
     *     @type \Wallet\V1\ProvSys\Syncp\SyncCredit\Data $data
     *          &#47; Data of the response.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Syncp::initOnce();
        parent::__construct($data);
    }

    /**
     *&#47; Status of the response.
     *
     * Generated from protobuf field <code>bool success = 1 [json_name = "success"];</code>
     * @return bool
     */
    public function getSuccess()
    {
        return $this->success;
    }

    /**
     *&#47; Status of the response.
     *
     * Generated from protobuf field <code>bool success = 1 [json_name = "success"];</code>
     * @param bool $var
     * @return $this
     */
    public function setSuccess($var)
    {
        GPBUtil::checkBool($var);
        $this->success = $var;

        return $this;
    }

    /**
     *&#47; Code of the response.
     *
     * Generated from protobuf field <code>int32 code = 2 [json_name = "code"];</code>
     * @return int
     */
    public function getCode()
    {
        return $this->code;
    }

    /**
     *&#47; Code of the response.
     *
     * Generated from protobuf field <code>int32 code = 2 [json_name = "code"];</code>
     * @param int $var
     * @return $this
     */
    public function setCode($var)
    {
        GPBUtil::checkInt32($var);
        $this->code = $var;

        return $this;
    }

    /**
     *&#47; Error info.
     *
     * Generated from protobuf field <code>.google.protobuf.StringValue error = 3 [json_name = "error"];</code>
     * @return \Google\Protobuf\StringValue|null
     */
    public function getError()
    {
        return $this->error;
    }

    public function hasError()
    {
        return isset($this->error);
    }

    public function clearError()
    {
        unset($this->error);
    }

    /**
     * Returns the unboxed value from <code>getError()</code>

     *&#47; Error info.
     *
     * Generated from protobuf field <code>.google.protobuf.StringValue error = 3 [json_name = "error"];</code>
     * @return string|null
     */
    public function getErrorUnwrapped()
    {
        return $this->readWrapperValue("error");
    }

    /**
     *&#47; Error info.
     *
     * Generated from protobuf field <code>.google.protobuf.StringValue error = 3 [json_name = "error"];</code>
     * @param \Google\Protobuf\StringValue $var
     * @return $this
     */
    public function setError($var)
    {
        GPBUtil::checkMessage($var, \Google\Protobuf\StringValue::class);
        $this->error = $var;

        return $this;
    }

    /**
     * Sets the field by wrapping a primitive type in a Google\Protobuf\StringValue object.

     *&#47; Error info.
     *
     * Generated from protobuf field <code>.google.protobuf.StringValue error = 3 [json_name = "error"];</code>
     * @param string|null $var
     * @return $this
     */
    public function setErrorUnwrapped($var)
    {
        $this->writeWrapperValue("error", $var);
        return $this;}

    /**
     *&#47; Data of the response.
     *
     * Generated from protobuf field <code>.wallet.v1.provsys.SyncCredit.Data data = 4 [json_name = "data"];</code>
     * @return \Wallet\V1\ProvSys\Syncp\SyncCredit\Data|null
     */
    public function getData()
    {
        return $this->data;
    }

    public function hasData()
    {
        return isset($this->data);
    }

    public function clearData()
    {
        unset($this->data);
    }

    /**
     *&#47; Data of the response.
     *
     * Generated from protobuf field <code>.wallet.v1.provsys.SyncCredit.Data data = 4 [json_name = "data"];</code>
     * @param \Wallet\V1\ProvSys\Syncp\SyncCredit\Data $var
     * @return $this
     */
    public function setData($var)
    {
        GPBUtil::checkMessage($var, \Wallet\V1\ProvSys\Syncp\SyncCredit\Data::class);
        $this->data = $var;

        return $this;
    }

}

// Adding a class alias for backwards compatibility with the previous class name.
class_alias(Res::class, \Wallet\V1\ProvSys\Syncp\SyncCredit_Res::class);
