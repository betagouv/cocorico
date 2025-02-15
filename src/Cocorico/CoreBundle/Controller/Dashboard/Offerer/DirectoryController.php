<?php

/*
 * This file is part of the Cocorico package.
 *
 * (c) Cocolabs SAS <contact@cocolabs.io>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace Cocorico\CoreBundle\Controller\Dashboard\Offerer;

use Cocorico\CoreBundle\Entity\Directory;
use Cocorico\CoreBundle\Form\Type\Dashboard\DirectoryEditType;
use Cocorico\CoreBundle\Form\Type\Dashboard\DirectoryEditCategoriesType;
use Cocorico\CoreBundle\Form\Type\Dashboard\DirectoryEditNetworksType;
use Cocorico\CoreBundle\Form\Type\Dashboard\DirectoryEditOffersType;
use Cocorico\CoreBundle\Form\Type\Dashboard\DirectoryEditClientImagesType;
use Cocorico\UserBundle\Entity\User;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Method;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\ParamConverter;
use Symfony\Component\Routing\Annotation\Route;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Security;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\RedirectResponse;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;

/**
 * Directory Dashboard controller.
 *
 * @Route("/directory")
 */
class DirectoryController extends Controller
{

    /**
     * @param  Directory $structure
     * @return \Symfony\Component\HttpFoundation\Response
     */
    public function statusIndexFormAction($structure)
    {
        return $this->render(
            '@CocoricoCore/Dashboard/Directory/form_status_index.html.twig',
            array(
                'structure' => $structure
            )
        );
    }

    # /**
    #  * @param  Listing $listing
    #  * @return \Symfony\Component\HttpFoundation\Response
    #  */
    # public function statusNavSideFormAction($listing)
    # {
    #     $form = $this->createStatusForm($listing, 'nav_side');

    #     return $this->render(
    #         '@CocoricoCore/Dashboard/Listing/form_status_nav_side.html.twig',
    #         array(
    #             'form' => $form->createView(),
    #             'listing' => $listing
    #         )
    #     );
    # }

    /**
     * Lists all Directory entities.
     *
     * @Route("/{page}", name="cocorico_dashboard_directory", defaults={"page" = 1 })
     *
     * @Method("GET")
     *
     * @param  Request $request
     * @param  int     $page
     *
     * @return \Symfony\Component\HttpFoundation\Response
     */
    public function indexAction(Request $request, $page)
    {
        $structureManager = $this->get('cocorico.directory.manager');
        $structures = $structureManager->findByOwner(
            $this->getUser(),
            $page
        );

        return $this->render(
            'CocoricoCoreBundle:Dashboard/Directory:index.html.twig',
            array(
                'structures' => $structures,
                'pagination' => array(
                    'page' => $page,
                    'pages_count' => ceil($structures->count() / $structureManager->maxPerPage),
                    'route' => $request->get('_route'),
                    'route_params' => $request->query->all()
                )
            )
        );

    }

    # /**
    #  * Form Error
    #  *
    #  * @param $form
    #  */
    # private function addFormErrorMessagesToFlashBag($form)
    # {
    #     $this->get('cocorico.helper.global')->addFormErrorMessagesToFlashBag(
    #         $form,
    #         $this->get('session')->getFlashBag()
    #     );
    # }

    # /**
    #  * Form Success
    #  *
    #  * @param $type
    #  */
    # private function addFormSuccessMessagesToFlashBag($type)
    # {
    #     $session = $this->get('session');

    #     if ($type == 'price') {
    #         $session->getFlashBag()->add(
    #             'success',
    #             $this->get('translator')->trans('listing.edit_price.success', array(), 'cocorico_listing')
    #         );
    #     } elseif ($type == 'status') {
    #         $session->getFlashBag()->add(
    #             'success',
    #             $this->get('translator')->trans('listing.edit_status.success', array(), 'cocorico_listing')
    #         );
    #     }

    # }

    /**
     * @param  Directory $directory
     * @return \Symfony\Component\HttpFoundation\Response
     */
    public function completionNoticeAction(Directory $directory)
    {
        $directoryCompletion = $directory->getCompletionInformations();
        return $this->render(
            '@CocoricoCore/Dashboard/Directory/_completion_notice.html.twig',
            array(
                'directory_id' => $directory->getId(),
                'directory_desc' => $directoryCompletion["description"],
                'directory_website' => $directoryCompletion["website"],
                'directory_prestaType' => $directoryCompletion["prestaType"],
                'directory_cocontracting' => $directoryCompletion["cocontracting"],
                'directory_range' => $directoryCompletion["range"],
                'directory_logos' => $directoryCompletion["logos"],
                'directory_clientImages' => $directoryCompletion["clientImages"],
                'directory_labels' => $directoryCompletion["labels"],
                'directory_offers' => $directoryCompletion["offers"],
                'directory_sectors' => $directoryCompletion["sectors"],
            )
        );
    }

    /**
     * Edits Directory presentation.
     *
     * @Route("/{id}/edit_presentation", name="cocorico_dashboard_directory_edit_presentation", requirements={"id" = "\d+"})
     * @Security("is_granted('edit', structure)")
     *
     * @Method({"GET", "PUT", "POST"})
     *
     * @param Request $request
     * @param         $structure
     *
     * @return \Symfony\Component\HttpFoundation\RedirectResponse|\Symfony\Component\HttpFoundation\Response
     */
    public function editPresentationAction(Request $request, Directory $structure)
    {
        $translator = $this->get('translator');
        $editForm = $this->createEditForm($structure);
        $editForm->handleRequest($request);

        if ($editForm->isSubmitted() && $editForm->isValid()) {
            $data = $editForm->getData();
            // dump($data);
            $this->get("cocorico.directory.manager")->save($structure);

            $this->get('session')->getFlashBag()->add(
                'success',
                $translator->trans('directory.edit.success', array(), 'cocorico_directory')

            );

            return $this->redirectToRoute(
                'cocorico_dashboard_directory_edit_presentation',
                array('id' => $structure->getId())
            );
        }

        return $this->render(
            'CocoricoCoreBundle:Dashboard/Directory:edit_presentation.html.twig',
            array(
                'structure' => $structure,
                'form' => $editForm->createView()
            )
        );

    }

    /**
     * Creates a form to edit a Directory entity.
     *
     * @param Directory $directory The entity
     *
     * @return \Symfony\Component\Form\Form The form
     */
    private function createEditForm(Directory $structure)
    {
        $form = $this->get('form.factory')->createNamed(
            'directory',
            DirectoryEditType::class,
            $structure,
            array(
                'action' => $this->generateUrl(
                    'cocorico_dashboard_directory_edit_presentation',
                    array('id' => $structure->getId())
                ),
                'method' => 'POST',
            )
        );

        return $form;
    }

    /**
     * Edit Directory offers.
     *
     * @Route("/{id}/edit_offers", name="cocorico_dashboard_directory_edit_offers", requirements={"id" = "\d+"})
     * @Security("is_granted('edit', structure)")
     * @ParamConverter("structure", class="CocoricoCoreBundle:Directory")
     *
     * @Method({"POST", "GET"})
     *
     * @param Request $request
     * @param         $structure
     *
     * @return \Symfony\Component\HttpFoundation\RedirectResponse|\Symfony\Component\HttpFoundation\Response
     */
    public function editOffersAction(Request $request, Directory $structure)
    {
        $form = $this->createOffersForm($structure);
        $form->handleRequest($request);

        $formIsValid = $form->isSubmitted() && $form->isValid();
        if ($formIsValid) {
            $structure = $this->get("cocorico.directory.manager")->save($structure);

            $this->get('session')->getFlashBag()->add(
                'success',
                $this->get('translator')->trans('directory.edit.success', array(), 'cocorico_directory')
            );
        }

        return $this->render(
            'CocoricoCoreBundle:Dashboard/Directory:edit_offers.html.twig',
            array(
                'structure' => $structure,
                'form' => $form->createView()
            )
        );
    }

    /**
     * @param Directory $structure
     *
     * @return \Symfony\Component\Form\Form|\Symfony\Component\Form\FormInterface
     */
    private function createOffersForm(Directory $structure)
    {
        $form = $this->get('form.factory')->createNamed(
            'directory_offers',
            DirectoryEditOffersType::class,
            $structure,
            array(
                'method' => 'POST',
                'action' => $this->generateUrl(
                    'cocorico_dashboard_directory_edit_offers',
                    array('id' => $structure->getId()),
                ),
            )
        );

        return $form;
    }

    /**
     * Edit Directory networks.
     *
     * @Route("/{id}/edit_networks", name="cocorico_dashboard_directory_edit_networks", requirements={"id" = "\d+"})
     * @Security("is_granted('edit', structure)")
     * @ParamConverter("structure", class="CocoricoCoreBundle:Directory")
     *
     * @Method({"POST", "GET"})
     *
     * @param Request $request
     * @param         $structure
     *
     * @return \Symfony\Component\HttpFoundation\RedirectResponse|\Symfony\Component\HttpFoundation\Response
     */
    public function editNetworksAction(Request $request, Directory $structure)
    {
        $form = $this->createNetworksForm($structure);
        $form->handleRequest($request);

        $formIsValid = $form->isSubmitted() && $form->isValid();
        if ($formIsValid) {
            $structure = $this->get("cocorico.directory.manager")->save($structure);

            $this->get('session')->getFlashBag()->add(
                'success',
                $this->get('translator')->trans('directory.edit.success', array(), 'cocorico_directory')
            );
        }

        return $this->render(
            'CocoricoCoreBundle:Dashboard/Directory:edit_networks.html.twig',
            array(
                'structure' => $structure,
                'form' => $form->createView()
            )
        );
    }

    /**
     * @param Directory $structure
     *
     * @return \Symfony\Component\Form\Form|\Symfony\Component\Form\FormInterface
     */
    private function createNetworksForm(Directory $structure)
    {
        $form = $this->get('form.factory')->createNamed(
            'directory_networks',
            DirectoryEditNetworksType::class,
            $structure,
            array(
                'method' => 'POST',
                'action' => $this->generateUrl(
                    'cocorico_dashboard_directory_edit_networks',
                    array('id' => $structure->getId())
                ),
            )
        );

        return $form;
    }

    /**
     * Edit Directory categories.
     *
     * @Route("/{id}/edit_categories", name="cocorico_dashboard_directory_edit_categories", requirements={"id" = "\d+"})
     * @Security("is_granted('edit', structure)")
     * @ParamConverter("structure", class="CocoricoCoreBundle:Directory")
     *
     * @Method({"POST", "GET"})
     *
     * @param Request $request
     * @param         $structure
     *
     * @return \Symfony\Component\HttpFoundation\RedirectResponse|\Symfony\Component\HttpFoundation\Response
     */
    public function editCategoriesAction(Request $request, Directory $structure)
    {
        $form = $this->createCategoriesForm($structure);
        $form->handleRequest($request);

        $formIsValid = $form->isSubmitted() && $form->isValid();
        if ($formIsValid) {
            $structure = $this->get("cocorico.directory.manager")->save($structure);

            //Tmp solution to resolve the problem of fields values not removed from Form when category is removed from
            // listing, whereas fields values are removed from database.
            //todo: Avoid this and see why it is not done in form
//            $form = $this->createCategoriesForm($listing);

            $this->get('session')->getFlashBag()->add(
                'success',
                $this->get('translator')->trans('directory.edit.success', array(), 'cocorico_directory')
            );

            return $this->redirectToRoute(
                'cocorico_dashboard_directory_edit_categories',
                array('id' => $structure->getId())
            );
        }

        return $this->render(
            'CocoricoCoreBundle:Dashboard/Directory:edit_categories.html.twig',
            array(
                'structure' => $structure,
                'form' => $form->createView()
            )
        );
    }

    /**
     * @param Listing $listing
     *
     * @return \Symfony\Component\Form\Form|\Symfony\Component\Form\FormInterface
     */
    private function createCategoriesForm(Directory $structure)
    {
        $form = $this->get('form.factory')->createNamed(
            'directory_categories',
            DirectoryEditCategoriesType::class,
            $structure,
            array(
                'method' => 'POST',
                'action' => $this->generateUrl(
                    'cocorico_dashboard_directory_edit_categories',
                    array('id' => $structure->getId())
                ),
            )
        );

        return $form;
    }

    /**
     * Edit Structure client images entities.
     *
     * @Route("/{id}/edit_client_images", name="cocorico_dashboard_directory_edit_client_images", requirements={"id" = "\d+"})
     * @Security("is_granted('edit', directory)")
     * @ParamConverter("directory", class="CocoricoCoreBundle:Directory")
     *
     * @Method({"GET", "PUT", "POST"})
     *
     * @param Request $request
     * @param         $directory
     *
     * @return \Symfony\Component\HttpFoundation\RedirectResponse|\Symfony\Component\HttpFoundation\Response
     */
    public function editClientImagesAction(Request $request, Directory $directory)
    {
        $editForm = $this->createEditClientImagesForm($directory);
        $editForm->handleRequest($request);

        if ($editForm->isSubmitted() && $editForm->isValid()) {
            $this->get("cocorico.directory.manager")->save($directory);

            return $this->redirectToRoute(
                'cocorico_dashboard_directory_edit_client_images',
                array('id' => $directory->getId())
            );
        }

        return $this->render(
            'CocoricoCoreBundle:Dashboard/Directory:edit_client_images.html.twig',
            array(
                'structure' => $directory,
                'form' => $editForm->createView()
            )
        );

    }

    /**
     * Creates a form to edit a Directiry entity.
     *
     * @param Directory $directory The entity
     *
     * @return \Symfony\Component\Form\Form The form
     */
    private function createEditClientImagesForm(Directory $directory)
    {
        $form = $this->get('form.factory')->createNamed(
            'directory',
            DirectoryEditClientImagesType::class,
            $directory,
            array(
                'action' => $this->generateUrl(
                    'cocorico_dashboard_directory_edit_client_images',
                    array('id' => $directory->getId())
                ),
                'method' => 'POST',
            )
        );

        return $form;
    }



}
