<?php

/*
 * This file is part of the Cocorico package.
 *
 * (c) Cocolabs SAS <contact@cocolabs.io>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace Cocorico\UserBundle\Admin;

use A2lix\TranslationFormBundle\Form\Type\TranslationsType;
use Cocorico\UserBundle\Entity\User;
use Doctrine\ORM\Query\Expr;
use Sonata\AdminBundle\Datagrid\DatagridMapper;
use Sonata\AdminBundle\Datagrid\ListMapper;
use Sonata\AdminBundle\Form\FormMapper;
use Sonata\AdminBundle\Route\RouteCollection;
use Sonata\UserBundle\Admin\Model\UserAdmin as SonataUserAdmin;
use Symfony\Component\Form\Extension\Core\Type\ChoiceType;
use Symfony\Component\Validator\Constraints\NotBlank;

class UserAdmin extends SonataUserAdmin
{
    protected $baseRoutePattern = 'user';
    protected $bundles;
    protected $locales;

    protected $datagridValues = array(
        '_sort_order' => 'DESC',
        '_sort_by' => 'createdAt',
    );

    public function setBundlesEnabled($bundles)
    {
        $this->bundles = $bundles;
    }

    public function setLocales($locales)
    {
        $this->locales = $locales;
    }

    /** @inheritdoc */
    protected function configureFormFields(FormMapper $formMapper): void
    {
        /* @var $subject \Cocorico\UserBundle\Entity\User */
        $subject = $this->getSubject();

        $formMapper
            ->with('Info Structure')
            ->add(
                'enabled',
                null,
                array(
                    'required' => false,
                )
            )
            ->add(
                'idCardVerified',
                null,
                array(
                    'required' => false,
                )
            )
            ->add(
                'id',
                null,
                array(
                    'required' => true,
                    'disabled' => true,
                )
            )
            ->add(
                'personType',
                ChoiceType::class,
                array(
                    'empty_data' => User::PERSON_TYPE_CLASSIC,
                    'required' => true,
                    'disabled' => false,
                    'multiple' => false,
                    'expanded' => true,
                    'choices' => array_flip(User::$personTypeValues),
                    'label' => 'Type',
                    'translation_domain' => 'cocorico_user'
                )
            )
            ->add(
                'companyName',
                null,
                array(
                    'required' => false,
                    'disabled' => false,
                )
            )
            ->add(
                'firstName',
                null,
                array(
                    'required' => true,
                    'disabled' => false,
                )
            )
            ->add(
                'lastName',
                null,
                array(
                    'required' => true,
                    'disabled' => false,
                )
            )
            ->add(
                'email',
                null,
                array(
                    'required' => true,
                    'disabled' => false,
                )
            )
            ->add(
                'plainPassword',
                'text',
                array(
                    'required' => (!$subject || is_null($subject->getId())),
                )
            )
            ->end();

        //Translations fields
        $descriptions = array();
        foreach ($this->locales as $i => $locale) {
            $descriptions[$locale] = array(
                'label' => 'Description',
                'constraints' => array(new NotBlank())
            );
        }
        $formMapper->with('Info Contact')
            ->add(
                'translations',
                TranslationsType::class,
                array(
                    'locales' => $this->locales,
                    'required_locales' => $this->locales,
                    'fields' => array(
                        'description' => array(
                            'field_type' => 'textarea',
                            'locale_options' => $descriptions,
                            'required' => true,
                            'empty_data' => 'Description',
                        ),
                    ),
                    /** @Ignore */
                    'label' => false,
                )
            )
            ->add(
                'phonePrefix',
                null,
                array(
                    'required' => false,
                )
            )
            ->add(
                'phone',
                null,
                array(
                    'required' => false,
                )
            )
            ->add(
                'phoneVerified',
                null,
                array(
                    'required' => false,
                )
            )
            ->add(
                'emailVerified',
                null,
                array(
                    'required' => false,
                )
            )
            ->add(
                'createdAt',
                null,
                array(
                    'disabled' => true,
                )
            )
            ->end();

        $formMapper
            ->with('Address')
            ->add(
                'addresses',
                'sonata_type_collection',
                array(
                    // IMPORTANT!: Disable this field otherwise if child form has all its fields disabled
                    // then the child entities will be removed while saving
                    'disabled' => true,
                    'type_options' => array(
                        'delete' => false,
                        'delete_options' => array(
                            // You may otherwise choose to put the field but hide it
                            'type' => 'hidden',
                            // In that case, you need to fill in the options as well
                            'type_options' => array(
                                'mapped' => false,
                                'required' => false,
                            ),
                        ),
                    ),
                    'disabled' => true,
                    'label' => false,
                ),
                array(
                    'edit' => 'inline',
                    'inline' => 'table',
                    'delete' => 'false',
                )
            )
            ->end();

    }


    /** @inheritdoc */
    protected function configureListFields(ListMapper $listMapper): void
    {
        $listMapper
            ->addIdentifier(
                'id',
                null,
                array()
            );

        // if (array_key_exists('CocoricoMangoPayBundle', $this->bundles)) {
        //     $listMapper->add(
        //         'mangopayId',
        //         null,
        //         array()
        //     );
        // }

        $listMapper
            ->addIdentifier('fullname')
//            ->add('email')
            ->add('companyName', null, array('editable' => true, 'label' => 'Raison sociale'))
            ->add('personType', 'choice', array('label' => 'Type Utilisateur', 'choices' => User::$personTypeValuesFrench))
            ->add('enabled', null, array('editable' => true))
            ->add('idCardVerified', null, array('editable' => true))
//            ->add('locked', null, array('editable' => true))
            // ->add('feeAsAsker', null, array('editable' => true))
            // ->add('feeAsOfferer', null, array('editable' => true))
            //->add('listings', null, array('associated_property' => 'getTitle'))
            ->add('structures', null, array('associated_property' => 'getName', 'label' => 'Structures'))
            ->add('createdAt', null, array());

        if ($this->isGranted('ROLE_ALLOWED_TO_SWITCH')) {
            $listMapper
                ->add(
                    'impersonating',
                    'string',
                    array(
                        'template' => 'CocoricoSonataAdminBundle::impersonating.html.twig',
                    )
                );
        }

        $listMapper
            ->add(
                '_action',
                'actions',
                array(
                    'actions' => array(
                        'view' => [
                            'template' => 'CocoricoSonataAdminBundle::list_action_list_user_view.html.twig',
                        ],
                        'edit' => array(),
                        'list_user_listings' => array(
                            'template' => 'CocoricoSonataAdminBundle::list_action_list_user_listings.html.twig',
                        ),
                    ),
                )
            );
    }


    /** @inheritdoc */
    protected function configureDatagridFilters(DatagridMapper $filterMapper): void
    {
        $filterMapper
            ->add('id')
            ->add(
                'fullname',
                'doctrine_orm_callback',
                array(
                    'callback' => array($this, 'getFullNameFilter'),
                    'field_type' => 'text',
                    'operator_type' => 'hidden',
                    'operator_options' => array(),
                )
            )
//            ->add('locked')
            ->add('companyName', null, ['label' => 'Nom Entreprise'])
            ->add('personType',
                'doctrine_orm_number',
                ['label'=> 'Type Utilisateur'],
                'choice',
                ['choices' => array_flip( User::$personTypeValuesFrench)]
            )
            ->add('idCardVerified')
            ->add('enabled')
            ->add('email')
            ->add('groups')
            ->add('structures', null, ['label' => 'Gestion structures']);
    }

    public function getFullNameFilter($queryBuilder, $alias, $field, $value)
    {
        if (!$value['value']) {
            return false;
        }

        $exp = new Expr();
        $queryBuilder
            ->andWhere(
                $exp->orX(
                    $exp->like($alias . '.firstName', $exp->literal('%' . $value['value'] . '%')),
                    $exp->like($alias . '.lastName', $exp->literal('%' . $value['value'] . '%')),
                    $exp->like(
                        $exp->concat(
                            $alias . '.firstName',
                            $exp->concat($exp->literal(' '), $alias . '.lastName')
                        ),
                        $exp->literal('%' . $value['value'] . '%')
                    )
                )
            );

        return true;
    }

    public function getBatchActions()
    {
        $actions = parent::getBatchActions();
        unset($actions['delete']);

        $label = $this->getConfigurationPool()->getContainer()->get('translator')->trans(
            'action_reset_fees',
            array(),
            'SonataAdminBundle'
        );

        $actions['reset_fees'] = array(
            /** @Ignore */
            'label' => $label,
            'ask_confirmation' => true,
        );

        return $actions;
    }

    public function getExportFields()
    {
        $fields = array(
            'Id' => 'id',
            'First name' => 'firstName',
            'Last name' => 'lastName',
            'Email' => 'email',
            'Enabled' => 'enabled',
//            'Locked' => 'locked',
            'Created At' => 'createdAt',
        );

        // if (array_key_exists('CocoricoMangoPayBundle', $this->bundles)) {
        //     $mangopayFields = array(
        //         'Mangopay Id' => 'mangopayId',
        //     );

        //     $fields = array_merge($fields, $mangopayFields);
        // }

        return $fields;
    }

    public function getDataSourceIterator()
    {
        $datagrid = $this->getDatagrid();
        $datagrid->buildPager();

        $dataSourceIt = $this->getModelManager()->getDataSourceIterator($datagrid, $this->getExportFields());
        $dataSourceIt->setDateTimeFormat('d M Y');

        return $dataSourceIt;
    }

    protected function configureRoutes(RouteCollection $collection)
    {
        $collection->remove('create');
        $collection->remove('delete');
        $collection->remove('show');
    }
}
