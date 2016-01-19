<?php

namespace Nmpolo\RestBundle\Controller;

use Doctrine\Common\Collections\Collection;
use Doctrine\Common\Persistence\ObjectManager;
use FOS\RestBundle\Controller\Annotations as Rest;
use FOS\RestBundle\Routing\ClassResourceInterface;
use FOS\RestBundle\Util\Codes;
use FOS\RestBundle\View\View;
use Symfony\Component\Form\FormFactoryInterface;
use Symfony\Component\Form\FormInterface;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Routing\RouterInterface;
use Nmpolo\RestBundle\Entity\Groups;
use Nmpolo\RestBundle\Entity\GroupsRepository;
use Nmpolo\RestBundle\Form\GroupsType;

class GroupsController implements ClassResourceInterface
{
    private $manager;

    private $repo;

    private $formFactory;

    private $router;

    /**
     * Controller constructor
     * @var ObjectManager $manager
     * @var GroupsRepository $repo
     * @var FormFactoryInterface $formFactory
     * @var RouterInterface $router
     */
    public function __construct(ObjectManager $manager, GroupsRepository $repo, FormFactoryInterface $formFactory, RouterInterface $router)
    {
        $this->manager = $manager;
        $this->repo = $repo;
        $this->formFactory = $formFactory;
        $this->router = $router;
    }

    /**
     * Retrieve all Groupss
     * @return Collection
     *
     * @Rest\View()
     */
    public function cgetAction()
    {
        $Groupss = $this->repo->findAll();
        return $Groupss;
    }

    /**
     * Retrieve an Groups
     * @var Groups $Groups
     * @return Groups
     *
     * @Rest\View()
     */
    public function getAction(Groups $Groups)
    {
        return $Groups;
    }

    /**
     * Create an Groups
     * @var Request $request
     * @return View|FormInterface
     */
    public function cpostAction(Request $request)
    {echo $request;
        $Groups = new Groups();
        $form = $this->formFactory->createNamed('', new GroupsType(), $Groups);
        $form->handleRequest($request);
        if ($form->isValid()) {
            $this->manager->persist($Groups);
            $this->manager->flush($Groups);

            $url = $this->router->generate(
                'get_Groups',
                array('Groups' => $Groups->getId())
            );
            return View::createRedirect($url, Codes::HTTP_CREATED);
        }

        return $form;
    }

    /**
     * Update an Groups
     * @var Groups $Groups
     * @var Request $request
     * @return View|FormInterface
     */
    public function putAction(Groups $Groups, Request $request)
    {
        $form = $this->formFactory->createNamed('', new GroupsType(), $Groups, array('method' => 'PUT'));
        $form->handleRequest($request);
        if ($form->isValid()) {
            $this->manager->flush($Groups);

            return View::create(null, Codes::HTTP_NO_CONTENT);
        }

        return $form;
    }

    /**
     * Delete an Groups
     * @var Groups $Groups
     * @return View
     */
    public function deleteAction(Groups $Groups)
    {
        $this->manager->remove($Groups);
        $this->manager->flush($Groups);

        return View::create(null, Codes::HTTP_NO_CONTENT);
    }
}
