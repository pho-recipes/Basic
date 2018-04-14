<?php

namespace PhoNetworksAutogenerated;

use Pho\Framework;
use Pho\Kernel\Kernel;
use Pho\Kernel\Traits;
use Pho\Kernel\Foundation;




/*****************************************************
 * This file was auto-generated by pho-compiler
 * For more information, visit http://phonetworks.org
 ******************************************************/

class Status extends Foundation\AbstractObjectDP {

    const T_EDITABLE = false;
    const T_PERSISTENT = true;
    const T_EXPIRATION =  0;
    const T_VERSIONABLE = false;
    
    const DEFAULT_MOD = 0x07555;
    const DEFAULT_MASK = 0xfffff;

    const FIELDS = "{\"status\":{\"constraints\":{\"minLength\":null,\"maxLength\":\"140\",\"id\":null,\"regex\":null,\"greaterThan\":null,\"lessThan\":null,\"format\":null},\"directives\":{\"sha1\":false,\"md5\":false,\"now\":false,\"default\":\"|_~_~NO!-!VALUE!-!SET~_~_|\",\"unique\":false,\"index\":false}},\"create_time\":{\"constraints\":{\"minLength\":null,\"maxLength\":null,\"id\":null,\"regex\":null,\"greaterThan\":null,\"lessThan\":null,\"format\":null},\"directives\":{\"sha1\":false,\"md5\":false,\"now\":true,\"default\":\"|_~_~NO!-!VALUE!-!SET~_~_|\",\"unique\":false,\"index\":false}}}";

    const FEED_SIMPLE = "";
    const FEED_AGGREGATED = "";

    public function __construct(\Pho\Kernel\Kernel $kernel, \Pho\Kernel\Foundation\AbstractActor $actor, \Pho\Lib\Graph\GraphInterface $graph , string $status)
    {
        $this->registerIncomingEdges(UserOut\Post::class);
        $this->registerIncomingEdges(UserOut\Like::class);
        $this->registerIncomingEdges(UserOut\Consume::class);
        if(class_exists(PhoNetworksAutogenerated\Edges\Mention::class))
            $this->registerOutgoingEdges(PhoNetworksAutogenerated\Edges\Mention::class);
        parent::__construct($kernel, $actor, $graph);
                $this->setStatus($status, true);
        $this->setCreateTime(time(), true);

        $this->persist();
    }

}

/*****************************************************
 * Timestamp: 1523673254
 * Size (in bytes): 2177
 * Compilation Time: 12
 * cb44f3bcc1f088e5b75ae177cf709ba3
 ******************************************************/