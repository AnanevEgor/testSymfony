<?php
/**
 * Created by PhpStorm.
 * User: green
 * Date: 27.11.18
 * Time: 10:59
 */

namespace App\Controller;

use App\Entity\User;
use Doctrine\ORM\EntityManager;
use Doctrine\ORM\EntityManagerInterface;
use Doctrine\ORM\Mapping\Entity;
use FOS\RestBundle\Controller\Annotations as Rest;
use FOS\RestBundle\Controller\FOSRestController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;


class UsersController extends FOSRestController
{
    /**
     * @var EntityManagerInterface
     */
    protected $em;

    /**
     * UsersController constructor.
     * @param EntityManagerInterface $em
     */
    public function __construct(EntityManagerInterface $em)
    {
        $this->em = $em;
    }

    /**
     * @Route("/users/{id}",name="update_user", defaults={"id"=""}, methods={"PATCH"})
     *
     */
    public function update(Request $request, $id)
    {
        $view = $this->view("wfwe", 200);

        return $view;
    }

    /**
     * @Route("/users/{id}",name="info_user", defaults={"id"=""}, methods={"GET"})
     */
    public function info(Request $request, $id)
    {
        if ($id) {
            $user = $this->em->getRepository(User::class)->find($id);
            $view = $this->view($user, 200);
            return $view;
        }
        return new Response();

    }

    /**
     * @Route("/users/{id}",name="delete_user", defaults={"id"=""})
     */
    public function delete(Request $request, $id)
    {
        if ($id) {
        }
        return new Response();
    }

    /**
     * @Route("/users",name="add_user", methods={"POST"})
     */
    public function add(Request $request)
    {

        return new Response();
    }

    /**
     * @Route("/users",name="list_user", methods={"GET"})
     */
    public function list(Request $request)
    {
        return new Response();
    }
}