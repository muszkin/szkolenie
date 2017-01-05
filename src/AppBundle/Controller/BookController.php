<?php
/**
 * Created by PhpStorm.
 * User: muszkin
 * Date: 04.01.17
 * Time: 12:03
 */

namespace AppBundle\Controller;

use AppBundle\Entity\Book;
use AppBundle\Form\BookType;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Security;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Template;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\File\UploadedFile;
use Symfony\Component\HttpFoundation\Request;

/**
 * Class BookController
 * @package AppBundle\Controller
 * @Route("/book")
 */
class BookController extends Controller
{
    /**
     * @param Request $request
     * @Route("/add",name="addBook")
     * @Template()
     * @return mixed
     */
    public function createAction(Request $request)
    {
        $book = new Book();

        $form = $this->createForm(BookType::class,$book);

        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()){
            /**
             * @var UploadedFile $file
             */
            $file = $form->get('image')->getData();
            $fileName = uniqid().'.'.$file->getClientOriginalExtension();

            $file->move('/tmp/'.$fileName);
            $book->setImage($fileName);

            $em = $this->getDoctrine()->getEntityManager();

            $em->persist($book);
            $em->flush();
            return $this->redirectToRoute('showBook',["book_id" => $book->getId()]);
        }

        return ["form" => $form->createView()];
    }

    /**
     * @param Request $request
     * @Route("/update/{book_id}",name="editBook")
     * @Template()
     * @return mixed
     */
    public function updateAction(Request $request,$book_id)
    {
        $book = $this
            ->getDoctrine()
            ->getRepository('AppBundle:Book')
            ->find($book_id);

        if (!$book){
            throw $this->createNotFoundException("Book not found");
        }

        $form = $this->createForm(BookType::class,$book);

        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()){
            $em = $this->getDoctrine()->getEntityManager();

            $em->flush();

            return $this->redirectToRoute('showBook',["book_id" => $book->getId()]);
        }

        return ["form" => $form->createView()];
    }

    /**
     * @param $book_id
     * @Route("/show/{book_id}",name="showBook")
     * @Template()
     * @return array|\Symfony\Component\HttpKernel\Exception\NotFoundHttpException
     * @Security("has_role('ROLE_SUPERADMIN')")
     */
    public function showAction($book_id){
        $book = $this
            ->getDoctrine()
            ->getRepository('AppBundle:Book')
            ->find($book_id);

        if (!$book){
            throw $this->createNotFoundException("Book not found");
        }

        return ["book" => $book];
    }

    /**
     * @Route("/",name="listAction")
     * @Template()
     */
    public function indexAction(){
        $books = $this
            ->getDoctrine()
            ->getRepository('AppBundle:Book')
            ->findAll();

        return ["books" => $books];
    }

    /**
     * @param $book_id
     * @Route("/delete/{book_id}",name="deleteBook")
     * @return mixed
     */
    public function deleteAction($book_id){
        $book = $this
            ->getDoctrine()
            ->getRepository('AppBundle:Book')
            ->find($book_id);

        if (!$book){
            throw $this->createNotFoundException("Book not found");
        }

        $em = $this
            ->getDoctrine()
            ->getEntityManager();
        $em->remove($book);
        $em->flush();

        return $this->redirectToRoute("listAction");
    }
}