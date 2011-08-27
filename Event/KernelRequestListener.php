<?php

namespace DeBaasMedia\Bundle\HttpHeaderBundle\Event;

use Symfony\Component\HttpKernel\Event\FilterResponseEvent;

/**
 * Request listenerHTTP headers for all requests of a certain request format.
 *
 * @author  Marijn Huizendveld <marijn.huizendveld@gmail.com>
 */
final class KernelRequestListener
{

    /**
     * Listener for the kernel.request event.
     *
     * @param   FilterRequestEvent $arg_event
     *
     * @return  void
     */
    public function onKernelRequest (FilterRequestEvent $arg_event)
    {
        $response = $arg_event->getResponse();
        $request  = $arg_event->getRequest();

        // check the request format and add the http headers
    }

}
