<?php

namespace Ning\NingApiHelper\Objects;

use Ning\NingApiHelper\NingObject;

class NingSitePage extends NingObject
{

    protected $objectKey = 'SitePage';
    protected $extraFields = array(
        'title',
        'viewerTypes',
        'tabLabel',
        'targetType',
        'target',
        'windowTarget',
        'published',
        'categoryNames',
        'author.fullName',
        'author.url',
        'author.iconUrl'
    );

}