<?php
/**
* IDE PhpStorm
* Date 19/04/2015 16:06
* @author david
**/

namespace Iad\TrainingBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Response;
use Hip\MandrillBundle\Message;

/**
* Class MyServiceController
* @package Iad\TrainingBundle\Controller
*/
class MyServiceController extends Controller
{
    /**
    * MY first service
    *
    */
    public function serviceAction()
    {
        return new Response($this->get('iad_training_my_service')->display());
    }

    /**
    * Send mail with IaD mailer
    *
    * @return Response
    */
    public function sendMailAction()
    {
        // Call 'hip_mandrill' service
        $dispatcher = $this->get('hip_mandrill.dispatcher');

        $message = new Message();

        $message
            ->setFromEmail('symfony@example.com')
            ->setFromName('David Loth')
            ->addTo('david.loth@iadfrance.fr')
            ->setSubject('Test send mail')
            ->setHtml('<html><body><h1>Some Content</h1></body></html>');

        $result = $dispatcher->send($message);

        return new Response('<pre>' . print_r($result, true) . '</pre>');
    }
}
?>