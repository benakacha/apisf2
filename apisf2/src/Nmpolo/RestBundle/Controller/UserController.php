<?php

namespace Nmpolo\RestBundle\Controller;

use Doctrine\Common\Collections\Collection;
use Doctrine\Common\Persistence\ObjectManager;
use FOS\RestBundle\Controller\Annotations as Rest;
use FOS\RestBundle\Routing\ClassResourceInterface;
use FOS\RestBundle\Util\Codes;
use FOS\RestBundle\View\View;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\ParamConverter;
use Symfony\Component\Form\FormFactoryInterface;
use Symfony\Component\Form\FormInterface;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Routing\RouterInterface;
use Nmpolo\RestBundle\Entity\Groups;
use Nmpolo\RestBundle\Entity\User;
use Nmpolo\RestBundle\Entity\UserRepository;
use Nmpolo\RestBundle\Form\UserType;

class UserController implements ClassResourceInterface
{
    private $manager;

    private $repo;

    private $formFactory;

    private $router;

    /**
     * Controller constructor
     * @var ObjectManager $manager
     * @var UserRepository $repo
     * @var FormFactoryInterface $formFactory
     * @var RouterInterface $router
     */
    public function __construct(ObjectManager $manager, UserRepository $repo, FormFactoryInterface $formFactory, RouterInterface $router)
    {
        $this->manager = $manager;
        $this->repo = $repo;
        $this->formFactory = $formFactory;
        $this->router = $router;
    }

    /**
     * Retrieve all users for an Groups
     * @var Groups $Groups
     * @return Collection
     *
     * @Rest\View()
     */
    public function cgetAction(Groups $Groups)
    {
        $users = $this->repo->findByGroups($Groups);
        return $users;
    }

    /**
     * Retrieve a user
     * @var Groups $Groups
     * @var User $user
     * @return User
     *
     * @Rest\View()
     * @ParamConverter("user", options={"mapping": {"Groups": "Groups", "user": "id"}})
     */
    public function getAction(Groups $Groups, User $user)
    {
        return $user;
    }

    /**
     * Create a user for an Groups
     * @var Groups $Groups
     * @var Request $request
     * @return View|FormInterface
     */
    public function cpostAction(Groups $Groups, Request $request)
    {
        $user = new User($Groups);
        $form = $this->formFactory->createNamed('', new UserType(), $user);
        $form->handleRequest($request);
        if ($form->isValid()) {
            $this->manager->persist($user);
            $this->manager->flush($user);

            $url = $this->router->generate(
                'get_Groups_user',
                array('Groups' => $Groups->getId(), 'user' => $user->getId())
            );
            return View::createRedirect($url, Codes::HTTP_CREATED);
        }

        return $form;
    }

    /**
     * Update a user
     * @var Groups $Groups
     * @var User $user
     * @var Request $request
     * @return View|FormInterface
     *
     * @ParamConverter("user", options={"mapping": {"Groups": "Groups", "user": "id"}})
     */
    public function putAction(Groups $Groups, User $user, Request $request)
    {
        $form = $this->formFactory->createNamed('', new UserType(), $user, array('method' => 'PUT'));
        $form->handleRequest($request);
        if ($form->isValid()) {
            $this->manager->flush($user);

            return View::create(null, Codes::HTTP_NO_CONTENT);
        }

        return $form;
    }

    /**
     * Delete a user
     * @var Groups $Groups
     * @var User $user
     * @return View
     * 
     * @ParamConverter("user", options={"mapping": {"Groups": "Groups", "user": "id"}})
     */
    public function deleteAction(Groups $Groups, User $user)
    {
        $this->manager->remove($user);
        $this->manager->flush($user);

        return View::create(null, Codes::HTTP_NO_CONTENT);
    }
}
