<?php

namespace App\Controller;
use App\Entity\Questions;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;


use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\Extension\Core\Type\ChoiceType;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;
use Symfony\Component\Form\Extension\Core\Type\HiddenType;



class QuestionsController extends AbstractController
{

/**
 * @Route("/questions/show", name="question_show")
 */
public function show()
{
    $uid = $this->get('security.token_storage')->getToken()->getUser()->getId();
    $repository = $this->getDoctrine()->getRepository(Questions::class);
    $questions = $repository->GetAllQuestions($uid);


    if (!$questions) {
        throw $this->createNotFoundException(
            'No questions found for user id '.$uid
        );
    }

    return $this->render(
        'questions/index.html.twig',
        array('questionstwig' => $questions, 'repans'=>$repository)
    );

}

/**
 * @Route("/question/edit/{id}")
 */
public function update($id)
{
    $id=11;
    $entityManager = $this->getDoctrine()->getManager();
    $product = $entityManager->getRepository(Product::class)->find($id);

    if (!$product) {
        throw $this->createNotFoundException(
            'No product found for id '.$id
        );
    }

    $product->setName('New product name!');
    $entityManager->flush();

    return $this->redirectToRoute('product_show', [
        'id' => $product->getId()
    ]);
}




    /**
      * @Route("/questions/new", name="question_new"))
   */
      public function new(Request $request)
    {
        // creates a task and gives it some dummy data for this example
        $question = new Questions();
        $form = $this->createFormBuilder($question)
            ->add('qdescription',TextType::class,array('label' => 'Question '))
            ->add('qcategory', ChoiceType::class, array(
                'label' => 'Category',
                'choices'  => array(
                    'Programming' => 1,
                    'Math' => 2,
                    'Finish Languge' => 3
                ),
            ))
            ->add('qdifficultylevel', ChoiceType::class, array(
                'label' => 'Difficulty',
                'choices'  => array(
                    'Easy' => 0,
                    'Medium' => 1,
                    'Hard' => 2
                ),
            ))

            ->add('save', SubmitType::class, array('label' => 'Create Question'))
            ->getForm();

            $form->handleRequest($request);

            if ($form->isSubmitted() && $form->isValid()) {
                $question = $form->getData();
                $form->userid=11;
                $entityManager = $this->getDoctrine()->getManager();
                $entityManager->persist($question);
                $entityManager->flush();

                return $this->redirectToRoute('question_show', array('uid' => 11));
            }

        return $this->render('questions/new.html.twig', array(
            'form' => $form->createView(),
        ));
    }
}
