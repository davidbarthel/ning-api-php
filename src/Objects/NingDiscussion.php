<?php

namespace Ning\NingApiHelper\Objects;

use Ning\NingApiHelper\NingObject;

class NingDiscussion extends NingObject
{

    protected $objectKey = 'Discussion';
    protected $extraFields = array(
        'title',
        'description',
        'url',
        'featureTime',
        'slug',
        'tagNames',
        'categoryNames',
        'author.fullName',
        'author.url',
        'author.iconUrl'
    );

}