<?php

namespace Ning\NingApiHelper\Objects;

use Ning\NingApiHelper\NingObject;

class NingComment extends NingObject
{

    protected $objectKey = 'Comment';
    protected $extraFields = array(
        'approved',
        'attachedTo',
        'attachedToAuthor',
        'attachedToType',
        'description',
        'attachedToAuthor.fullName',
        'attachedToAuthor.url',
        'attachedToAuthor.iconUrl',
        'author.fullName',
        'author.url',
        'author.iconUrl'
    );

}