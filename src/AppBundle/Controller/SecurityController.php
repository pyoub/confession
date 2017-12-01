<?php


namespace AppBundle\Controller;
    use Symfony\Component\HttpFoundation\Request;
    use Symfony\Component\HttpFoundation\RedirectResponse;
    use FOS\UserBundle\Controller\SecurityController as BaseSecurityController;

class SecurityController extends BaseSecurityController
{

    /**
     * Overriding login to add custom logic.
     */
    public function loginAction(Request $request)
    {
        if( $this->container->get('security.authorization_checker')->isGranted('IS_AUTHENTICATED_ANONYMOUSLY') ){

            // IS_AUTHENTICATED_FULLY also implies IS_AUTHENTICATED_REMEMBERED, but IS_AUTHENTICATED_ANONYMOUSLY doesn't

            return new RedirectResponse($this->container->get('router')->generate('some_route_name_in_my_project', array()));
            // of course you don't have to use the router to generate a route if you want to hard code a route
        }

        return parent::loginAction($request);
    }

    protected function renderLogin(array $data)
    {
        if (false === $this->container->get('security.context')->isGranted('IS_AUTHENTICATED_ANONYMOUSLY')) {
            return new RedirectResponse('/', 403);
        }

        $template = sprintf('FOSUserBundle:Security:login.html.%s', $this->container->getParameter('fos_user.template.engine'));

        return $this->container->get('templating')->renderResponse($template, $data);
    }

    public function checkAction()
    {
        throw new \RuntimeException('You must configure the check path to be handled by the firewall using form_login in your security firewall configuration.');
    }

    public function logoutAction()
    {
        throw new \RuntimeException('You must activate the logout in your security firewall configuration.');
    }
}
