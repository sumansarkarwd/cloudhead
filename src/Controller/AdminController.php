<?php

namespace App\Controller;
use App\Entity\Address;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\Console\Exception\RuntimeException;
use Symfony\Component\HttpFoundation\Request;
use App\Form\AddressType;

class AdminController extends Controller
{
    public function login()
    {
        return $this->render('admin/login.html.twig', [
            'controller_name' => 'AdminController',
        ]);
    }
    public function logout()
    {
        throw new RuntimeException("This should not be called!");
    }
    public function dashboard()
    {
        return $this->render('admin/dashboard.html.twig', [
            'controller_name' => 'AdminController',
        ]);
    }
    public function address(Request $request){
    $address = new Address();
        
        $form = $this->createForm(AddressType::class, $address, [
            
        ]);
        
        $form->handleRequest($request);
        
        if($form->isSubmitted() && $form->isValid()){
            $em = $this->getDoctrine()->getManager();
            $em->persist($address);
            $em->flush();
        }
        
        return $this->render('admin/address/address.html.twig', [
            'address_form' => $form->createView(),
        ]);
    }
    public function address_index(){
        $reporitory = $this->getDoctrine()->getRepository(Address::class);
        $all = $reporitory->findAll();
        $addresses = $reporitory->find_roots('0');
        $childs = $reporitory->find_roots('a');
        return $this->render('admin/address/address-show.html.twig', array("all" => $all, "addresses"=>$addresses, "childs"=>$childs));
    }
    
}
