<?php

namespace Ning\NingApiHelper\Objects;

use Ning\NingApiHelper\NingObject;

class NingBundle extends NingObject
{

    protected $objectKey = 'Bundle';
    protected $extraFields = array(
        'contributorTypes',
        'commentType',
        'commentOrdering',
        'htmlComments',
        'customHtml',
        'instructionsHtml',
        'entryContentType',
        'disqusShortname',
        'maxExcerptLength',
        'categoryNames',
        'moderateContent',
        'author.fullName',
        'author.url',
        'author.iconUrl'
    );

}