<?php

/**
 * This code was generated by
 * \ / _    _  _|   _  _
 * | (_)\/(_)(_|\/| |(/_  v1.0.0
 * /       /
 */

namespace Twilio\TwiML\Fax;

use Twilio\TwiML\TwiML;

class Receive extends TwiML
{
    /**
     * Receive constructor.
     *
     * @param array $attributes Optional attributes
     */
    public function __construct($attributes = array())
    {
        parent::__construct('Receive', $attributes);
    }

    /**
     * Add Action attribute.
     *
     * @param url $action Receive action URL
     *
     * @return TwiML $this.
     */
    public function setAction($action)
    {
        return $this->setAttribute('action', $action);
    }

    /**
     * Add Method attribute.
     *
     * @param httpMethod $method Receive action URL method
     *
     * @return TwiML $this.
     */
    public function setMethod($method)
    {
        return $this->setAttribute('method', $method);
    }
}