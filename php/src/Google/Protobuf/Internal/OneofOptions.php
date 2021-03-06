<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/protobuf/descriptor.proto

namespace Google\Protobuf\Internal;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\GPBWire;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\InputStream;

use Google\Protobuf\Internal\GPBUtil;

/**
 * Protobuf type <code>google.protobuf.OneofOptions</code>
 */
class OneofOptions extends \Google\Protobuf\Internal\Message
{
    /**
     * <pre>
     * The parser stores options it doesn't recognize here. See above.
     * </pre>
     *
     * <code>repeated .google.protobuf.UninterpretedOption uninterpreted_option = 999;</code>
     */
    private $uninterpreted_option;
    private $has_uninterpreted_option = false;

    public function __construct() {
        \GPBMetadata\Google\Protobuf\Internal\Descriptor::initOnce();
        parent::__construct();
    }

    /**
     * <pre>
     * The parser stores options it doesn't recognize here. See above.
     * </pre>
     *
     * <code>repeated .google.protobuf.UninterpretedOption uninterpreted_option = 999;</code>
     */
    public function getUninterpretedOption()
    {
        return $this->uninterpreted_option;
    }

    /**
     * <pre>
     * The parser stores options it doesn't recognize here. See above.
     * </pre>
     *
     * <code>repeated .google.protobuf.UninterpretedOption uninterpreted_option = 999;</code>
     */
    public function setUninterpretedOption(&$var)
    {
        $arr = GPBUtil::checkRepeatedField($var, \Google\Protobuf\Internal\GPBType::MESSAGE, \Google\Protobuf\Internal\UninterpretedOption::class);
        $this->uninterpreted_option = $arr;
        $this->has_uninterpreted_option = true;

        return $this;
    }

    public function hasUninterpretedOption()
    {
        return $this->has_uninterpreted_option;
    }

}

