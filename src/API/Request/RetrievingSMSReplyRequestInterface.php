<?php

/*
 * This file is part of the smsmode-library package.
 *
 * (c) 2019 WEBEWEB
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace WBW\Library\SMSMode\API\Request;

use DateTime;
use WBW\Library\SMSMode\API\RequestInterface;

/**
 * Retrieving SMS reply request interface.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\SMSMode\API\Request
 */
interface RetrievingSMSReplyRequestInterface extends RequestInterface {

    /**
     * Retrieving SMS reply resource path.
     *
     * @var string
     */
    const RETRIEVING_SMS_REPLY_RESOURCE_PATH = "/1.6/responseList.do";

    /**
     * Get the end date.
     *
     * @return DateTime Returns the end date.
     */
    public function getEndDate();

    /**
     * Get the offset.
     *
     * @return int Returns the offset.
     */
    public function getOffset();

    /**
     * Get the start.
     *
     * @return int Returns the start.
     */
    public function getStart();

    /**
     * Get the start date.
     *
     * @return DateTime Returns the start date.
     */
    public function getStartDate();

    /**
     * Set the end date.
     *
     * @param DateTime|null $endDate The end date.
     * @return AddingContactRequestInterface Returns this adding contact request.
     */
    public function setEndDate(DateTime $endDate = null);

    /**
     * Set the offset.
     *
     * @param int $offset The offset.
     * @return RetrievingSMSReplyRequestInterface Returns this retrieving SMS reply request.
     */
    public function setOffset($offset);

    /**
     * Set the start.
     *
     * @param int $start The start.
     * @return RetrievingSMSReplyRequestInterface Returns this retrieving SMS reply request.
     */
    public function setStart($start);

    /**
     * Set the start date.
     *
     * @param DateTime|null $startDate The start date.
     * @return RetrievingSMSReplyRequestInterface Returns this retrieving SMS reply request.
     */
    public function setStartDate(DateTime $startDate = null);
}
