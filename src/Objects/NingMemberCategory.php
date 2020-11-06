<?php

namespace Ning\NingApiHelper\Objects;

use Ning\NingApiHelper\NingObject;

class NingMemberCategory extends NingObject {

    protected $objectKey = 'MemberCategory';
    protected $extraFields = array(
        'title',
        'slug',
        'hasSubmenu',
        'submenuTitle',
        'hasBadge',
        'textColor',
        'bgColor',
        'opacity',
        'badgePosition',
        'imageId',
        'imageUrl',
        'author.fullName',
        'author.url',
        'author.iconUrl'
        );

}