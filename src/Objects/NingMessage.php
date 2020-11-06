<?php

namespace Ning\NingApiHelper\Objects;

use Ning\NingApiHelper\NingObject;

class NingMessage extends NingObject {

    protected $objectKey = 'Message';
    protected $extraFields = array(
        'title',
        'description',
        'url',
        'recipients',
        'sender',
        'subject',
        'body',
        'forwardedDate',
        'repliedDate',
        'read',
        'hasReplies',
        'forwarded',
        'author.fullName',
        'author.url',
        'author.iconUrl'
        );

}