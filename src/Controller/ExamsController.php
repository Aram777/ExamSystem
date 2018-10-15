<?php

namespace App\Controller;
use App\Entity\Exams;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;

class ExamsController extends AbstractController
{

  /**
   * @Route("/exams/show", name="exams_show")
   */
  public function show()
  {
      $uid = $this->get('security.token_storage')->getToken()->getUser()->getId();
      $repository = $this->getDoctrine()->getRepository(Exams::class);
      $exams = $repository->GetAllExams($uid);


      if (!$exams) {
          throw $this->createNotFoundException(
              'No Exam found for user id '.$uid
          );
      }

      return $this->render(
          'exams/index.html.twig',
          array('examstwig' => $exams)
      );

  }


    /**
     * @Route("/exams", name="exams")
     */
    public function index()
    {
        return $this->render('exams/index.html.twig', [
            'controller_name' => 'ExamsController',
        ]);
    }
}
