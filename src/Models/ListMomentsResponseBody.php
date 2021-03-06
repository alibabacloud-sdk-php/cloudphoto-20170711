<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\CloudPhoto\V20170711\Models;

use AlibabaCloud\SDK\CloudPhoto\V20170711\Models\ListMomentsResponseBody\moments;
use AlibabaCloud\Tea\Model;

class ListMomentsResponseBody extends Model
{
    /**
     * @var string
     */
    public $action;

    /**
     * @var int
     */
    public $totalCount;

    /**
     * @var string
     */
    public $nextCursor;

    /**
     * @var string
     */
    public $requestId;

    /**
     * @var string
     */
    public $message;

    /**
     * @var moments[]
     */
    public $moments;

    /**
     * @var string
     */
    public $code;
    protected $_name = [
        'action'     => 'Action',
        'totalCount' => 'TotalCount',
        'nextCursor' => 'NextCursor',
        'requestId'  => 'RequestId',
        'message'    => 'Message',
        'moments'    => 'Moments',
        'code'       => 'Code',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->action) {
            $res['Action'] = $this->action;
        }
        if (null !== $this->totalCount) {
            $res['TotalCount'] = $this->totalCount;
        }
        if (null !== $this->nextCursor) {
            $res['NextCursor'] = $this->nextCursor;
        }
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }
        if (null !== $this->message) {
            $res['Message'] = $this->message;
        }
        if (null !== $this->moments) {
            $res['Moments'] = [];
            if (null !== $this->moments && \is_array($this->moments)) {
                $n = 0;
                foreach ($this->moments as $item) {
                    $res['Moments'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }
        if (null !== $this->code) {
            $res['Code'] = $this->code;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return ListMomentsResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Action'])) {
            $model->action = $map['Action'];
        }
        if (isset($map['TotalCount'])) {
            $model->totalCount = $map['TotalCount'];
        }
        if (isset($map['NextCursor'])) {
            $model->nextCursor = $map['NextCursor'];
        }
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }
        if (isset($map['Message'])) {
            $model->message = $map['Message'];
        }
        if (isset($map['Moments'])) {
            if (!empty($map['Moments'])) {
                $model->moments = [];
                $n              = 0;
                foreach ($map['Moments'] as $item) {
                    $model->moments[$n++] = null !== $item ? moments::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['Code'])) {
            $model->code = $map['Code'];
        }

        return $model;
    }
}
