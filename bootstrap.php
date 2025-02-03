<?php

use TightenCo\Jigsaw\Jigsaw;

/** @var \Illuminate\Container\Container $container */
/** @var \TightenCo\Jigsaw\Events\EventBus $events */

/*
 * You can run custom code at different stages of the build process by
 * listening to the 'beforeBuild', 'afterCollections', and 'afterBuild' events.
 *
 * For example:
 *
 * $events->beforeBuild(function (Jigsaw $jigsaw) {
 *     // Your code here
 * });
 */

 $events->afterBuild(function (Jigsaw $jigsaw) {
    copy('source/assets/Thomas-di-luccio_product-advocacy-leader.pdf', $jigsaw->getDestinationPath() . '/assets/Thomas-di-luccio_product-advocacy-leader.pdf');
});
