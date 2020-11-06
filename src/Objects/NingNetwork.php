<?php

namespace Ning\NingApiHelper\Objects;

use Ning\NingApiHelper\NingObject;

class NingNetwork extends NingObject {

    protected $objectKey = 'Network';
    protected $extraFields = array(
        'subdomain',
        'name',
        'iconUrl',
        'defaultUserIconUrl',
        'apiVersions',
        'profileQuestions'
        );

}