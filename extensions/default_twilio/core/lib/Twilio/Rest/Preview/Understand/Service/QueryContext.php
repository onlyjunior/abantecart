<?php

/**
 * This code was generated by
 * \ / _    _  _|   _  _
 * | (_)\/(_)(_|\/| |(/_  v1.0.0
 * /       /
 */

namespace Twilio\Rest\Preview\Understand\Service;

use Twilio\InstanceContext;
use Twilio\Options;
use Twilio\Values;
use Twilio\Version;

/**
 * PLEASE NOTE that this class contains preview products that are subject to change. Use them with caution. If you currently do not have developer preview access, please contact help@twilio.com.
 */
class QueryContext extends InstanceContext
{
    /**
     * Initialize the QueryContext
     *
     * @param \Twilio\Version $version    Version that contains the resource
     * @param string          $serviceSid The service_sid
     * @param string          $sid        The sid
     *
     * @return \Twilio\Rest\Preview\Understand\Service\QueryContext
     */
    public function __construct(Version $version, $serviceSid, $sid)
    {
        parent::__construct($version);

        // Path Solution
        $this->solution = array('serviceSid' => $serviceSid, 'sid' => $sid,);

        $this->uri = '/Services/'.rawurlencode($serviceSid).'/Queries/'.rawurlencode($sid).'';
    }

    /**
     * Fetch a QueryInstance
     *
     * @return QueryInstance Fetched QueryInstance
     */
    public function fetch()
    {
        $params = Values::of(array());

        $payload = $this->version->fetch(
            'GET',
            $this->uri,
            $params
        );

        return new QueryInstance(
            $this->version,
            $payload,
            $this->solution['serviceSid'],
            $this->solution['sid']
        );
    }

    /**
     * Update the QueryInstance
     *
     * @param array|Options $options Optional Arguments
     *
     * @return QueryInstance Updated QueryInstance
     */
    public function update($options = array())
    {
        $options = new Values($options);

        $data = Values::of(array('SampleSid' => $options['sampleSid'], 'Status' => $options['status'],));

        $payload = $this->version->update(
            'POST',
            $this->uri,
            array(),
            $data
        );

        return new QueryInstance(
            $this->version,
            $payload,
            $this->solution['serviceSid'],
            $this->solution['sid']
        );
    }

    /**
     * Deletes the QueryInstance
     *
     * @return boolean True if delete succeeds, false otherwise
     */
    public function delete()
    {
        return $this->version->delete('delete', $this->uri);
    }

    /**
     * Provide a friendly representation
     *
     * @return string Machine friendly representation
     */
    public function __toString()
    {
        $context = array();
        foreach ($this->solution as $key => $value) {
            $context[] = "$key=$value";
        }
        return '[Twilio.Preview.Understand.QueryContext '.implode(' ', $context).']';
    }
}