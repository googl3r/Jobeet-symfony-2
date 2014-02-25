<?php
/**
 * Created by PhpStorm.
 * User: haxormamad
 * Date: 20/02/14
 * Time: 15:55
 */

namespace Ens\JoobetBundle\Controller;


use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\Config\Definition\Exception\Exception;

class CategoryController extends Controller{

    public function showAction($slug,$page)
    {
        $em=$this->getDoctrine()->getManager();
        $category=$em->getRepository('EnsJoobetBundle:Category')->findOneBySlug($slug);
        if(!$category)
        {
            throw $this->createNotFoundException('Unable to Find Category Entity ');
        }
        $total_jobs = $em->getRepository('EnsJoobetBundle:Job')->countActiveJobs($category->getId());
        $jobs_per_page = $this->container->getParameter('max_jobs_on_category');
        $last_page = ceil($total_jobs / $jobs_per_page);
        $previous_page = $page > 1 ? $page - 1 : 1;
        $next_page = $page < $last_page ? $page + 1 : $last_page;
        $category->setActiveJobs($em->getRepository('EnsJoobetBundle:Job')->getActiveJobs($category->getId(), $jobs_per_page, ($page - 1) * $jobs_per_page));
        return $this->render('EnsJoobetBundle:Category:show.html.twig', array(
            'category' => $category,
            'last_page' => $last_page,
            'previous_page' => $previous_page,
            'current_page' => $page,
            'next_page' => $next_page,
            'total_jobs' => $total_jobs
        ));
    }
} 