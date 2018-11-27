<?php
/**
 * Created by PhpStorm.
 * User: green
 * Date: 27.11.18
 * Time: 10:59
 */

namespace App\Controller;

use Sensio\Bundle\FrameworkExtraBundle\Configuration\Method;
use \Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;


class UsersController extends Controller
{

    /**
     * @Route("/users/{id}",name="update_user", defaults={"id"=""}))
     * @Method("PATCH")
     */
    public function update($id){
        if($id){

        }else{
            echo "передайте id юзера";
        }
        return new Response();
    }

    /**
     * @Route("/users/{id}",name="info_user", defaults={"id"=""}))
     * @Method("GET")
     */
    public function info($id){
        if($id){
        }else{
            echo "передайте id юзера";
        }
        return new Response();

    }

    /**
     * @Route("/users/{id}",name="delete_user", defaults={"id"=""}))
     * @Method("DELETE")
     */
    public function delete($id){
        if($id){
        }else{
            echo "передайте id юзера";
        }
        return new Response();
    }

    /**
     * @Route("/users",name="add_user"))
     * @Method("POST")
     */
    public function add(){
        echo "передайте id юзера";
        return new Response();
    }

    /**
     * @Route("/users",name="list_user"))
     * @Method("GET")
     */
    public function list(){
        return new Response();
    }
}