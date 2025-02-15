CHANGELOG
=========

This changelog references the relevant changes done in this project.

This project adheres to [Semantic Versioning](http://semver.org/) 
and to the [CHANGELOG recommendations](http://keepachangelog.com/).


## ITOU CHANGELOG

### [6.12] - (2021-09-30)
- Wording dasbhoard SIAE

### [6.11] - (2021-09-28)
- Message déploiement sur l'ancienne fonctionnalité "Demandes de contact"
- Correctif modification données utilisateur
- Correctif champ mot de passe non pré-rempli
- Ajustement du versionnage des assets
- Ajout image metatags
- Page load tracker debugger

### [6.10] - (2021-09-23)
- Page formulaire recherche SIAE convertie en thème itou
- Page fiche SIAE convertie en thème itou
- Correctif fichier temporaire Imagick
- Ajout notification slack déploiement
- Ajout nouveau favicon

### [6.9] - (2021-09-16)
- Correction orthographique
- Correction bug nombre résultats, refactor manager répertoire
- Refactor page admin utilisateur (renommage + filtre type utilisateur)
- Ajout lien vers mentions légales ITOU / Plateforme de l'inclusion
- Correction écran administration ("c4Id")


### [6.8] - (2021-09-10)
- Masquer bouton "être recontacté" si coordonnéés présentes
- Champ description structure optionnel
- Correction bug image logo phantôme

### [6.8] - (2021-09-06)
- Correctif theme itou et tarteaucitron
- Correctif bouton recherche sur page d'accueil
- Modale : valeur cookie récupérable et intégré au tracker

### [6.7] - (2021-09-02)
- Ajout Chatbot CRISP
- Correctif bug adoption de structure
- Retrait mentions régions XP
- Retrait lien vers les offres (anciennes annonces)
- Correction erreur typo

### [6.6] - (2021-09-01)
- Correction des dépendances
- README mis à jour (détails docker)
- Correctif crash DB vide

### [6.5] - (2021-08-06)
- Correctif formulaire structure siae
- Ajout log drain kibana pour test

### [6.4] - (2021-08-05)
- Indicateur complétion fiche structure
- Wording recherche "structures interviennent sur"
- Correction modale intrusive

### [6.3] - (2021-08-03)
- Refactor interface administration : Liste structures SIAE
- Refactor interface administration : Fiche structures SIAE
- Refactor interface administration : Liste utilisateurs
- Ajout colonne "à la une" pour structures SIAE
- Sélection aléatoire des structures "à la une" de ceux disponibles

### [6.2] - (2021-08-02)
- Page d'accueil thème ITOU
- Moteur de recherche sur page d'accueil
- Liste de structures (à la une) sur page d'accueil

### [6.1] - (2021-07-23)
- Ajout modale type utilisateur

### [6.0] - (2021-07-23)
- Intégration du thème ITOU
- Utilisation d'un docker compose complet
- Optimisation dockerfile (unique)
- Migration dockerfile vers debian-bullseye (erreur ARM)

### [5.5] - (2021-07-22)
- Ajout page filière restauration

### [5.4] - (2021-07-20)
- Correctif formulaire recherche SIAE
- Quickfix téléchargement CSV

### [5.3] - (2021-07-15)
- Multiselection type de structure
- Meilleur descriptif type de structure (verbosité)

### [5.2] - (2021-07-08)
- Optimisation requête SQL liste SIAE
- Champs obligatoires adoption structure

### [5.1] - (2021-07-06)
- wording signature email
- Ajout info zone QPV liste excel
- Essai boost dans l'ordre des résultats de la liste

### [5] - (2021-07-01)
- Ajout donnée et concept "Réseaux"
- Ajout tuyauterie Réseau-Structure
- Ajout tuyauterie Annonce-Structure
- Écran administration des réseaux
- Correctifs interface administration
- Écrans d'administration pour le structures : réseaux et offres de prestation
- Refactor des offres proposés par les structures : on repart sur du propre
- Ajout donnée labels et certifications
- Modification lien 'annonces' : orientation vers structure au lieu de l'annonce
- Retrait du bouton "publiez votre offre de prestation"
- Ajout champ "nom" aux logos références clients
- Ajout champ ouverture à la co-traitance pour les structures, et intégration dashboard
- Ajout notification saisie offres de prestation (obsolescence de la partie "offres de prestation")
- Début changement acronymes de l'inlusion par leur nom complet
- Correction écran réinitialisation de mot de passe

### [4.9] - (2021-06-24)
- Ajout fil d'ariane sur page liste des structures
- Utilisateur orienté vers fiche (dashboard) structure après création/adoption
- Recherche par Siren si aucun résultat par Siret
- Wording fiche structure (localisation et périmètre) plus clair

### [4.8] - (2021-06-21)
- Masquer bouton "afficher les donnéés" si pas de données

### [4.7] - (2021-06-10)
- Page C'est Quoi L'inclusion
- Ajout de composants de page pour migration BS4
+ Hotfix JS BS4

### [4.6] - (2021-06-08)
- Mise à jour DB pour intégration données QPV
- Finalisation panneau de gestion (dashboard) des structures

### [4.5] - (2021-05-31)
- Intégration (au choix) de bootstrap 4
- Ajout tarteAuCitron (cookie policy)
- Mise à jour dépendances NodeJS

### [4.4] - (2021-05-28)
- Fix recherche région
- Ajout fiche "consortium"

### [4.3] - (2021-05-18)
- Page filière (recyclage)
- Lien page filière sur page d'accueil
- Mise à jour page d'accueil
- Fix recherche SIAE structures
- Nouveau filtres admin structures
- Readme update

### [4.2] - (2021-05-17)
- Fix recherche DROM-COM
- Fix google map zoom automatique
- Correctif latitude / longitude manquantes ( suppression support )

### [4.1] - (2021-05-11)
- Refactor visuel liste structure
- Refactor visuel fiche structure
- Refactor formulaire de recherche
- Affichage périmêtre d'intervetion
- Correctif tracking affichage coordonnées

### [4] - (2021-05-06)
- Correctif adoption siret (caractères non numériques)
- Correctif siret invalide
- Ajout indicateur typeform
- Nouveau style multiselecteur secteur d'activité
- Retrait champ "recherche antennes"

### [3.9] - (2021-05-04)
- Update fiche structure SIAE
- Couleur du texte et boutons révisée
- Wording page d'accueil
- Correctifs recherche geo SIAE

### [3.8] - (2021-04-29)
- Ajout paramètre périmêtre d'intervention dans le répertoire SIAE
- Refactoring approfondi du moteur de recherche SIAE
- Ajout marquer de campagne au tracker JS
- Correction comportement incongru de Doctrine (`where` et `andwhere`)
- Antennes cochées par défaut


### [3.7] - (2021-04-22)
- Nouvelle page de résultats SIAE
- Accès fiches SIAE via page de résultats
- Correction dossier images clients et logo structure
- Carte google maps interactive sur page de résultats SIAE
- Plus besoin d'authentification pour accédér à la liste
- Bug Fix champ description

### [3.6] - (2021-04-19)
- Tracking opérations d'adoption de structures (recherche et adoption)
- Refactor champ types de prestation pour les structures (valeurs multiples)
- Refactor moteur recherche types de prestation
- Hotfix nom de structure (acheteur et partenaire)
- Annonces publiées par défaut

### [3.5] - (2021-04-14)
- Fix DB : champ source des données importées

### [3.4] - (2021-04-12)
- Merge branches formulaires et liste siae
- Refactor formulaire recherche SIAE (entité symfony)
- Recherche par champ secteur d'activité utilise les données enrichies C4
- Nouveau logo du marché implémenté

### [3.3] - (2021-04-01)
- Nouveau champs structure

### [3.2] - (2021-03-30)
- Fonctionnalité adoption de structure
- Formulaire adoption de structure
- Formulaire spécification de structure
- Modification du parcours inscription pour orienter vers l'adoption de structure

### [3.1] - (2021-03-25)
- Migration références client vers db structure
- Migration images (logo) vers db structure
- Ajout donnée périmêtre d'action structure
- Ajout des annonces utilisateur sur la fiche structure

### [3.0] - (2021-03-23)
- Ajout contrôle des secteurs d'activité aux structures du répertoire
- Migration vers une centralité du marché sur les structures
- Gros réfactor
- Gestion accès et contrôle données structures
- Première version fiche structure (du répertoire exhaustif)
- Fix CSS

### [2.2] - (2021-03-18)
- Fix wording "Raison sociale"
- Remplacement wording "catégorie" par "secteur d'activité"
- Refactor selection "secteur d'activité"
- Fix home page header
- Fix page favoris
- Ajout données contact utilisateur admin répertoire

### [2.1] - (2021-03-12)
- Siret si valide, sinon rien
- Corrections Base de données
- Wording antenne / siege

### [2.0] - (2021-03-08)
- Mise à jour page vendeurs
- Préparation intégration données externes
- Corrections responsivité (module obsolète supprimé, corrections bootstrap)

### [1.9] - (2021-03-02)
- Ajout filtres administration utilisateur
- Remplacement page Statistiques
- Ajout donnéé validité de SIRET
- Fix page statistiques et annonce
- Corrections liste siae (date, siren, ... )
- Logo ministère corrigé
- Suivi click site web OK

### [1.8] - (2021-02-27)
- Écran d'administration des SIAE
- Synchronisation SIAE C1 / C4
- Ajout filtre structure (siège ou antenne)
- Adding filter on structure type (with column) on SIAE list
- Améliorations de la liste

### [1.7] - (2021-02-12)
- Tous les types SIAE Inclus
- Mis à jour catégories
- Nouveaux scripts de gestion

### [1.6.1] - (2021-02-05)
- Fix Recherche Geo
- Fix responsivite menu déroulant
- Single search input for siae area selection
- Fix department and Paris/Lyon/Marseille edge cases
- Fix missing sector for export

### [1.6] - (2021-02-04)
- Ajout Dépendance PhpSpreadsheet
- Choix format de téléchargement liste SIAE
- Fix formulaire inscription
- Recherche SIAE par région
- Fix dasbhoard catégories
- Formulare dépôt besoin si pas de résultats liste SIAE

### [1.5] - (2021-01-28)
- Utilisation de police Roboto (auto-hébergé)
- Refactor écran d'inscription / connexion
- Nouveau parcours inscription partenaire
- Fix panneau administrateur

### [1.4] - (2021-01-25)
- Tracking session et utilisateur amélioré (listener symfony)
- Tracking côté back plus étendu (plus robuste, plus fiable)
- Suivi d'actions spécifiques liés à la liste SIAE
- Context client plus détaille (referer, user-agent)

### [1.3] - (2021-01-21)
- Fix nom de fichier SIAE
- Mise à jour intégrale des dependances
- Fix bug JS Interface admin
- Retrait code inutilisé, déprécié
- Corrections Dépréciations diverses

### [1.3] - (2021-01-21)
- Ajout nouveau type utilisateur "partenaire"
- Amélioration tracking operations liste

### [1.2] - (2021-01-20)
- Fix formulaire nouvelle annonce
- Corrections CSS diverses

### [1.1] - (2021-01-19)
- Retrait infobulle périmêtre
- Nouveaux icônes SVG
- Nouveau graphique de fond
- Corrections CSS

### [1] - (2021-01-17)
- Migration entamée, voir `docs/migration.md` pour plus de détails
- Webpack, suppression de fonctionnalité inutilisée, mise à jour d'une série de composants
- Plus de modale sur le périmêtre lors de l'inscription
- Correction alignement texte

### [0.25.0] - (2020-12-16)
- Ajout module "répertoire" pour afficher des listes de choses
- Export CSV, accès limité, formulaire de recherche, pagination, ...
- Ajout répertoire SIAE (et base de données interne)

### [0.24.1] - (2020-12-14)
- Header mis à jour (bloc marque)
- Ajout font Marianne
- Icônes SVG Ajoutés

### [0.24.0] - (2020-12-08)
- Responsivité améliore
- Formulaire de recherche nouvelles maquettes (résultat et absence de résultat)
- Recherche géo zone ou périmêtre
- Retrait indication horaires (formulaire et annonce)

### [0.23.1] - (2020-12-01)
- Indication format d'image
- Recherche par "zone" géo si adresse pas précise

### [0.23.1] - (2020-11-30)
- Ajout notification mail sur inscription / demande contact flash
- Ajout notification sur message demande contact
- Quickview listing preview on map
- Ajout lien vers annonce dans les nouvelles notifications

### [0.23.0] - (2020-11-24)
- Formulaire devis "FLASH": demande de devis et inscription en même temps
- Page confirmation envoi de devis
- Modification wording (acheteur / prestataire, demande de devis / demande de contact)
- Modifications dashboard (wording, titres, ...)
- favicon update

### [0.22.1] - (2020-11-16)
- Fix chargement des assets not sécurisé
- Wording CTA devis

### [0.22.0] - (2020-11-13)
- Nouvelle page d'accueil

### [0.21.0] - (2020-10-29)
- Duplication des annonces : annonce dupliquée "a valider"
- Retrait de la dépendance MongoDB
- Update dépendences, utilisation de composer2 

### [0.20.4] - (2020-10-29)
- Indication géographique et périmètre améliorés dans la fiche de prestation
- Meilleure calibration des distances par défaut (fix recherche)
- Désactivation drag & drop
- Les illustrations ne sont plus obligatoires lors de la création d'une annonce
- Nouveau type de prestation "Fabrication et commercialisation"

### [0.20.3] - (2020-10-27)
- Nouveau champs de contrôle dans panneau administrateur (annonces)
- Visualisation sur la carte du périmètre d'action d'une prestation
- Update fiche prestation : références clients, type de prestation
- Suivi et notification mise en relation via tracker

### [0.20.2] - (2020-10-26)
- Révision Changelog
- Application nouveau nom : "Le marché de l'inclusion"
- Correction bug expiration mémoire cache

### [0.20.1] - (2020-10-23)
- formulaire typeform récolte besoin acheteurs
- Application du périmètre d'intervention
- Correction bug dashboard utilisateur
- Nouveau panneau administration des devis

### [0.20.0] - (2020-10-20)
- Nouvelle maquette formulaire prestation
- Nouveau champs prestation: type, caractéristiques, référence client
- Refactor de champs existants
- Fix bug cocorico localisation manquante nouvelle prestation
- Ajout fonctions panneau admin (utilisateurs et annonces)
- Mail automatique annonce bloqué
- Nouveau type d'utilisateur : Administrateur
- Nouveaux champs dans le dashboard utilisateur

### [0.19.1] - (2020-10-08)
- Nouvelle maquette fiche prestation
- Correctif CSS
- Retrait possibilité profil hybride (fournisseur / acheteur)
- Favicon
- Page Stats
- Meilleure gestion profil par l'utilisateur


### [0.19.0] - (2020-09-28)
- Nouvelles maquette formulaire inscription
- Correctif interface admin (utilisateurs et annonces)
- Correctif Chrome pour checkbox formulaire
- Nouvelles colonnes et données dans l'interface admin

### [0.18.1] - (2020-09-3)
- Mise à jour bouton catégories
- Integration Tracker JS


### [0.18.0] - (2020-07-28)
- Ajout option de configuration pour durée de cache de la liste des annonces sur la homepage
- Update footer et header
- Formulaire inscription revu et corrigé
- Ajout éditeur texte rich dans interface administration des pages
- Intégration Matomo et Sentry pour monitoring et statistiques de visite
- Update dashboard des offres
- Modification style et couleurs
- Ajout du rayon d'action d'une offre

### [0.17.0] - (2020-07-16)
- Changelog en français - Changelog in french from now on
- Correction de l'interface admin des caracteristiques
- Profils "entreprise classique" et "structure inclusive" lors de l'inscription
- Ajout option de configuration des profils 

### [0.16.0] - (2020-06-20)
- start of ITOU specific fork of Cocorico
- Added frequency period, hours and surface m2 and type to database and translations
- Added config and settings for docker and clever cloud deployment


## [Unreleased]

### Added
- Add default FB og:image

### Fixed
- Fix update "unread" message in dashboard
- Fix multi timezone in day mode  

### Changed
- Add acceptation delay constraint in day mode
- Replace cocorico.booking.min_start_delay parameter by cocorico.booking.min_start_time_delay in day mode
- Change invoice number generation method

## [0.15.0] - (2019-03-21)

### Added
- Add favicon for all devices
- Upgrade Symfony from 2.8 to 3.4
- Upgrade all dependencies to their last stable versions
- Add PHP7.1 compatibility

### Fixed
- Fix js escaping on result
- Simulate user click on a button type submit to make SF isClicked working if the click is done programmatically

### Changed
- Replace app/console by bin/console in bin init scripts
- Update doc for PHP7, Docker usage
- Improve all documentation


## [0.12.0] - (2019-01-30)

### Added
- Add multi timezones functionality
- Add hasBookingsInProgress method in User

### Fixed
- Fix add_time_unit_text filter for duration < 1 hour
- Fix DST while availabilities edition
- Fix localizeddate timezone errors due to old ICU version. (To revert when ICU will be updated to a recent version on servers)
- Fix search without time range in no day mode
- Fix booking availability checking in No Day Mode, add missing user timezone texts
- Fix search by times

### Changed
- Update migration script for times date equal to 1970-01-01
- Update liip image listing image sizes
- Factorize booking validator errors


## [0.11.0] - (2019-01-19)

### Added
- Add payment cards breadcrumbs 
- Add CocoricoElasticSearchBundle compatibility
- Add CocoricoSwiftReaderBundle
- Add Elastic search starting script
- Add multi time range overlapping days functionality

### Fixed
- Fix categories export in sonata
- Replace hasOption by getOption in Cocorico commands conditions
- Fix user language code too short
- Fix various CS
- Add time range form errors
- Set phoneVerified to false by default in user fixtures
- Fix feed blocks on HP if no feed items 
- Prevent bank account data saving in DB in case of wrong bank account data filled
- Fix tel link phone
- Fix bug #71 - Listing status available while duplication
- Remove unneeded '}}' at the end of some meta titles
- Fix user facebook mother tongue
- Fix booking duration in not day mode
- Fix MP BankAccount retrieval when bank account id is not set

### Changed
- Change who we are page content
- Move rating_reviews twig file
- Change new message displaying to modal popin on listing show page 
- Update SMSBundle to v0.3.1
- Add JS escaping on initMultiSelect
- Add app/bootstrap.php.cache to .gitignore
- Replace nl to br in review comments
- Add hours and timeZone to bookings imminent email alert checking
- Split global twig form fields templates
- Remove time_picker parameter and force form time fields to be handled by timepicker
- Update Facebook version to 2.10 (JS SDK and HWI Oauth Bundle)
- Update Elastic search bundle
- Update Listing Deposit Bundle to 0.2
- Update MangoPay Bundle to 0.6.2
- Update Report Bundle to 0.1.2


## [0.10.0] - (2019-01-16)

### Added
- Add compatibility for Mangopay Card Saving Bundle v0.1.0 and MangoPay Bundle v0.6
- Add InsertNewTranslationsCommand to copy existing translatable contents into new locale contents

### Fixed
- Fix listing availabilities checking in not day mode and with availabilities by default unavailable

### Changed


## [0.9.1] - (2019-01-15)

### Added
- Add translations checking functionality
- Add Cookie consent box
- Add 301 redirect to listing show URL when slug has changed

### Fixed
- Fix registration email subject translation
- Fix JS time range minutes comparison
- Fix warning messages while route translations extractions

### Changed
- Ensure that one to many entities are not removing in sonata admin through sonata_type_collection
- Enhance booking button in booking price form


## [0.9.0] - (2019-01-10)

### Added

### Fixed

### Changed
- Add BookingSubscriber for new booking
- Update MangopayBundle to 0.5


## [0.8.1] - (2019-01-10)

### Added
- Add user addresses in admin
- Add user delivery addresses in admin

### Fixed
- Add form errors in edit listing location
- Fix refund amount with 3 decimals

### Changed
- Move date and time js to a separate file
- Set TimeRangeType options overridable
- Set user locale equal to default app locale in User DataFixtures


## [0.8.0] - (2019-01-02)

### Added
- Add bookings accessor by user type in User entity and CS
- Add map drag refreshing results functionality 
- Add ListingDepositBundle functionality

### Fixed
- Optimise user and listing fields in almost admin edition pages (bookingBankWire, PayinRefund, Booking, ...)
- Fix listing address geolocation while listing deposit and listing address edition when no click on validate address
- Add person type in user fixtures
- Add nationality field on registration form
- Fix currency locale format on map infobox
- Fix infobox image loading by loading it only on box click
- Fix google map issue while listing deposit
- Fix translations in HP
- Fix price scales fields in admin if price precision parameter is equal to 0
- Fix missing translator parameters
- Fix IBAN form field length
- Fix bank wire amount in mail send to offerer when booking is canceled by asker
- Fix registration email subject translation

### Changed
- Change labels on registration form when person type is legal
- Remove unused registration handling in new listing form handler
- Set listing user in listing form handler for listing deposit
- Remove unused registration handling in new booking form handler
- Remove sonata admin user show action
- Change reviewer images in reviews list
- Enhance categories edition submission without CategoryFieldBundle
- Remove unused parameters


## [0.7.0] - (2017-03-27)

### Added
- Add new login / registration step before new listing / new booking action
- Update listing characteristics values and types management in admin
- Add MessageBundle sms notification and update sms-bundle to  v0.3
- Add geolocation country filtering

### Fixed
- Remove error when booking duration is less than 1 hour in booking price form
- Remove errors fields message on new booking page when a secondary submission (Voucher, Delivery, ...) is done
- Enhance categories edition submission without CategoryFieldBundle
- Remove unused parameters

### Changed
- Disable 301 redirect when offerer go to the new booking page of its listing
- Change MessageBundle mail notification method


## [0.6.0] - 2018-10-05

### Added
- Add Booking user delivery address
- Add delivery address in new booking form
- Add listing characteristics values and types management in admin
- Add form type for user entity
- Decouple user login/registration from new listing and booking
- Force authentication before listing deposit and booking request
- Add user legal type

### Fixed
- Fix listing favorites search request persisting
- Fix SMS calls when SMS Bundle is not enabled
- Fix SQL for booking expiration and expiring alert
- Fix Google "Browser API keys cannot have referer restrictions when used with this API"
- Fix phone_prefix user form field case
- Fix price scales fields in admin if price precision parameter is equal to 0

### Changed
- Split each dashboard profile actions in multiple controllers
- Factorize profile contact edition
- Change profile payment edition to bank account edition
- Refactor booking actions checking 
- Disable booking cancelation if booking has discount voucher amount
- Accept parameters value equal to 0 from ConfigBundle
- Add a no results message
- Set query hydration to HYDRATE_ARRAY on getHighestRanked 
- Disallow cocorico_user_login_check urls into robots.txt

## [0.5.0] - 2018-03-20

### Added
- Add minimal tests
- Add multi parameters on Booking validator messages
- Add static property access twig function
- Add Booking in Admin Review
- Add security voter to voucher page access
- Add Carrier bundle hatchback field to booking admin
- Add listing search engine on user profile page
- Add error message on listing calendar edition
- Set booking status to STATUS_PAYMENT_REFUSED when booking can not be validated
- Add booking acceptation delay 
- Add listing show query overriding
- Add parameter type in CocoricoConfigBundle
- Add LISTING_SEARCH_HIGH_RANK_QUERY and LISTING_SEARCH_BY_IDS_QUERY events

### Fixed
- Fix js escaping on result
- Fix #116 issue (update "unread" message in dashboard)
- Fix Booking expiration alert
- Replace depreciated 'intention' by 'csrf_token_id' in BookingNewType
- Fix search categories field displaying
- Fix #135 issue error when add to favourite
- Fix booking validation date by adding time to date verification
- Fix discount unicity issue while adding / removing discounts
- Fix similar listings
- Fix favorites listings
- Fix googlemaps MarkerWithLabel issue 393

### Changed
- Update doc
- Move some GlobalHelper methods to Utils\PHP class
- Handle translator provider errors
- Change `cocorico.booking.min_start_time_delay` parameter unit from hours to minutes
- Add minor corrections to ReviewBundle
- Disable listing deposit and new booking to admin user
- Add phone to registration form
- Add phone and email verification message on profile edition 
- Decouple SMSBundle
- Factorize and CS search

## [0.4.1] - 2017-11-22

### Added
- Add PHP 7.1 compatibility
- Add listing location in listing admin
- Add Carrier Bundle compatibility

### Fixed
- Fix user bad credential translation

### Changed
- Update doc for PHP7 and Docker usage
- Facilitate listing search form filters twig modifications in result page

## [0.4.0] - 2017-11-13

### Added
- Add rss feeds to home page
- Add "guzzlehttp/guzzle" to composer.json for DistanceMatrix usage
- Pre-filled reservation fields with the upcoming availability
- Add time_hours_available parameter and relative functionalities
- Add default users time zone parameter and relative functionalities
- Add missing listing link in reviews list
- Add rotating_file handler to monolog
- Add flags icons
- Add function to get culture code from locale
- Strip private info in all user texts (listing, user, reviews, messages)
- Add createdAt index in all timestampable entities

### Fixed
- Fix bug #71 - Listing status available while duplication
- Fix data fixtures for listing geo location
- Fix phone_prefix default value on ProfileContactFormType
- Fix missing breadcrumbs in Listing Categories and Location edition
- Fix hour removing bug in search form
- Fix search form css in day mode
- Fix time zone on booking minimum start time error displaying
- Fix end time of TimeRange validation by removing end time relation with hours_available parameter
- Fix some Symfony 2.8 depreciation
- Fix booking cancelation policy type checking while refunding by verifying also the booking start time
- Fix IPInfoDB dataType of ajax call by changing it to "json" instead of "jsonp"
- Fix Country name in booking new
- Fix missing translations in admin
- Fix listing delivery and options missing on booking new
- Fix booking pre-fill dates on BookingPrice for booking.min_start_time_delay different of 24
- Fix facebook login popup language
- Fix out of memory in admin forms containing a lot of listings
- Fix multi categories displaying in listings search result page and home page
- Fix JMS extraction on admins for subject equal to null
- Fix listing reviews order displaying in frontend and dashboard (listing, user)
- Fix GeocodingController createAction in listing show page
- Fix add_time_unit_text filter for duration < 1 hour
- Fix responsive of search form
- Fix cron docs
- Fix new booking form handler without BOOKING_NEW_FORM_PROCESS listeners
- Fix user label translation in payin refund in sonata admin
- Fix IBAN form field length
- Fix times search fields in range display mode

### Changed
- Upgrade Microsoft Translator API request method from Bing to Azur 
- Change homepage by extending to 100% visual image
- Change monolog action_level to critical
- Factorize DateRange and TimeRange creation in ListingSearchRequest, BookingPriceFormHandler and BookingFormHandler
- Remove dates and times synchronisation from booking price form to listing search form
- Change the maximum date time of the booking acceptation (and refusal )
- Remove duplicate datetimepicker css in all.css
- Enhance getNbUnReadMessages
- Extract js libraries from jquery.main.js
- Replace map markers spider by slider in InfoBox for listings with same locations
- Add markers and cluster overlay effect while listing mouseover
- Update ListingSearchBundle composer dependency to v0.2.2 (Listing search by distance and search extension when insufficient results)
- Change delivery twig templates path scheme for overriding purposes
- Remove bootstrap duplicated datetimepicker from bootstrap.min.js
- Time form field enhancement (timepicker min hour available, nb_minute form label hiding/displaying, time search form error )
- Use flags icons into images/flags folder
- Uniformize users name truncation (ex : Firstname L.)
- Replace method to know which bundles is enabled by using kernel.bundles instead of EntityManager methods
- Update deployment.rst


## [0.3.4] - 2017-05-31

### Added
- Add ListingCategoryFieldBundle support
- Add filter button in result page
- Add jsqueeze JS compiler to compile all js in prod
- Add css minifycsscompressor filter on fullcalendar.css
- Add csrf option to hwi_oauth
- Add characteristics tooltip in offerer dashboard
- Optimisation of mongodb prices and status edition and search
- Add DeliveryBundle support
- Add NumberRange Form type
- Add CAST DQL function
- Add support for search by range values for fields of type numeric and date in ListingCategoryFieldBundle

### Fixed
- Fix jquery warning
- Fix categories displaying
- Fix listing duplication error when listing doesn't have availabilities
- Update guzzlehttp/guzzle to 5.3.1 to Fix Security HTTP Proxy header vulnerability (CVE-2016-5385)
- Fix translations tabs if locales number is equal to 1
- Fix ConfigBundle LoadDataFixture when no parameters are allowed to be edited
- Fix mongodb times storing and search by time range
- Fix init-db command (https://github.com/doctrine/DoctrineBundle/issues/561)

### Changed
- Split listing categories and location dashboard edition and ajaxify categories edition
- New booking page dates displaying
- Change Readme about DB grant
- Create ListingSearchFormBuilder and use it for categories search instead of ListingFormSubscriber 
- Enhance date range options in DateRangeType and in Jquery Datepicker


## [0.3.3] - 2017-04-26

### Added

### Fixed
- Fix admin translation
- Fix duplicate booking options in admin
- Fix similar listings back link
- Fix design related change on manual translations fields 
- Fix user image order in listing result
- Fix Jquery CDN fallback
- Fix duplicate listing dashboard forms name (to display them into Web Profiler)

### Changed
- Change listing availabilities route translation
- Change doc
- Remove arrows in user language select list
- Allow all countries in listing deposit
- Remove SBO characteristics description requirement
- Do not display bill link in asker payments if asker fees are 0
- Add error icon in translation tabs in case of error
- Add Google API account creation explanation into README
- Set disabled property to true in UserAdmin for Mangopay related fields
- Set disabled property to true in ReviewAdmin for almost review fields

### Deprecated



## [0.3.2] - 2017-01-25

### Added
- Add booking policy block informations in listing show page
- Add new LanguageFiltered type to replace LocaleType dynamically poor for multi languages
- Guess lang to translation for auto translation

### Fixed
- Fix User country and nationality default values
- Fix arrows bug display in from and to translations fields
- Expire bookings with start date greater than today date
- Fix duplicate mails send while subscription
- Fix subscription validation page title 
- Fix unused email subject param in registration mail

### Changed
- Change duplicate h1 to h2 in listing show page
- Rename AddressFormType To UserAddressFormType
- Replace LocaleType and LanguageType usages by LanguageFiltered
- Optimize createNewListingThread call

### Deprecated



## [0.3.1] - 2016-12-24

### Added
- Add geo localized breadcrumbs
- Add "Access to site" link in admin
- Add SeoBundle functionality : display seo content on listing search result page
- Add SeoBundle functionality : Sitemap generation
- Add CMSBundle functionality : Footer links management
- Add SeoBundle functionality : JSON-LD Markups data
- Add form tag to message in booking show page

### Fixed
- Fix duplicate rows in `ListingSearchManager->getFindQueryBuilder`
- Fix user profile urls translation
- Fix missing label_catalogue on some Bundles
- Fix admin "go to site" link by disassociating it from translations activation
- Fix missing admin translations
- Fix GeoBundle findAll repositories methods conflict with default findAll method in SonataAdmin
- Fix search form categories list by adding missing fields in findQueryBuilder
- Fix selected countries validation while listing deposit when all countries are enabled
- Fix voucherIsEnabled method when ListingOption bundle is enabled
- Fix characteristics admin translations
- Fix user address fields requirement

### Changed
- Replace condition voucherIsEnabled by mangopayIsEnabled in BookingManager->findPayedByAsker
- Factorize user login in listing deposit form
- Hide ratings in marker popin when no ratings
- Set first name and last name required in user admin form
- CS
- Disable Curl SSL VERIFYHOST in non prod env
- Uniformize breadcrumbs management
- Move bundles services loading from bundles config.yml to bundles extension (UserBundle, PageBundle)
- Change and enhance placeholder method for translations form fields
- Enhance PageBundle translations
- Change Listing repository findPublishedListing method
- Remove all Microdata markups content
- Add sitemap.xml to rsync_exclude.txt
- Add and setting bookings number as asker/offerer in User entity
- Add command to reset bookings number as asker/offerer
- Add drop down icon to flags and currencies switchers
- Change packages repository method in composer.json
- Remove autoescape in show_voucher
- Change duplicate h1 to h2 in listingshow page 
- Move capitalize select box text css in all-override.css
- Change error fields name in edit_contact

## [0.2.6] - 2016-11-29

### Added
- Add multiple methods to geo localize user and add his location on listing location search field
- Set last listing address as default address while listing deposit
- Add user listings link in SBO users view list

### Fixed
- Fix missing user zip address while user geo localization
- Fix invalid country in listing location

### Changed
- Change voucherIsEnabled by mangopayIsEnabled in BookingManager->findPayedByAsker and minor things
- Disable Curl SSL VERIFYHOST in non prod env

### Deprecated


## [0.2.5] - 2016-10-19

### Added
- Add listing markers cluster on map
- Add markers spidering when overlaps

### Fixed
- Fix duplicate search query by removing iterator call in twig
- Fix place autocomplete missing in user profile page

### Changed
- Disable web profiler in staging env
- Display all markers of a listing search request on the map independently of pagination
- Change listings marker aspect on the map depending on whether they are on the current page

### Deprecated


## [0.2.4] - 2016-10-05

### Added

### Fixed
- Fix reviewer name in dashboard reviews
- Fix participant name in reservation thread messages when asker cancel booking
- Fix search by date without time in not day mode
- Fix timepicker compatibility in mobile device
- Fix google map infobox.js remote access disabled
- Fix admin listing images upload by disabling it
- Fix sensio/distribution-bundle / composer 1.1.0 type hint compatibility

### Changed
- Display pay button in admin bank wires if its status is todo
- Default user phone prefix to +33
- Enhance ReviewBundle
- Footer link
- gc_probability setted to 0 for prod env

### Deprecated


## [0.2.3] - 2016-08-23

### Added
- Add booking duration in booking price
- Add DQL MySQL timestamp diff function
- Add ReportBundle support

### Fixed
- Fix flash bags on review manager 
- Fix duration computing without time range 

### Changed
- CS 

### Deprecated


## [0.2.2] - 2016-07-06

### Added
- Add Min/Max listing duration informations on listing show page
- Add time picker in time type fields
- Add timepicker parameter

### Fixed
- Fix error occurring when a date is filled without the other one
- Fix error occurring when a time is filled without the other one
- Fix CS in common.js > getNbUnReadMessages
- Fix Translate manager with missing key or secret param
- Fix ie edge/ipad timepicker compatibility

### Changed
- Reduce number of twig core extension service args
- Factorize and simplify Javascript date and time management
- Fontello icons code
- Remove unused glyphicons halflings
- Remove "updated at" column in admin booking list
- Change default time_unit parameter to 60 min

### Deprecated
- Fix TimeRange form type sf 2.8 depreciation
- Remove TimeHidden form type
 

## [0.2.1] - 2016-06-28

### Fixed
- Fix sensio/distribution-bundle / composer 1.1.0 type hint compatibility
- Fix google map infobox.js remote access disabled
- Disable manual translations on listing and user edition when there is only one locale available on platform
- Set SMS default locale equal to app default locale
- Add booking status "new" criteria to SMS booking acceptation
 
### Changed
- Change listing search by categories by including listings without categories
- Update doc/index.rst


## [0.2.0] - 2016-04-08

### Added
- Add DoctrineMigrationBundle
      
### Changed
- Change version of sonata-project/doctrine-orm-admin-bundle to dev-master instead 2.3 to resolve AuditBlockService
- Change version of sonata-project/admin-bundle to 2.4@dev instead 2.3 to resolve AuditBlockService
- Change version of "knplabs/doctrine-behaviors" from dev-master to ^1.3 release
- Change version of "hwi/oauth-bundle" from "0.4.*@dev" to "^0.4"
- Update "egeloen/ckeditor-bundle" from "~3.0" to "^4.0"
- Update "helios-ag/fm-elfinder-bundle" from "~5.0" to "^6.0"
- Update "fzaninotto/faker" from "1.5.*@dev" to "^1.5"
- Update "jms/di-extra-bundle" from "1.4.*@dev" to "^1.7"
- Update "willdurand/geocoder-bundle" from "3.1.*@dev" to "^4.1"
- Change CocoricoGeoBundle to be compatible with "willdurand/geocoder-bundle" 4.1
- Change credit link
- Change doc index.rst
- Change listing_search_min_result value from 5 to 1
- Change page fixture description

### Deprecated

See https://gist.github.com/mickaelandrieu/5211d0047e7a6fbff925 and 
https://github.com/symfony/symfony/blob/2.8/UPGRADE-3.0.md

- Renamed AbstractType::setDefaultOptions to AbstractType::configureOptions
- Renamed AbstractType::getName to AbstractType::getBlockPrefix
- Renamed @translator service to @translator.default
- Replace @request service call by Request object injection in the action method
- Replace form.csrf_provider service call by security.csrf.token_manager service call
- Replace intention option by csrf_token_id option in security.yml 
- Replace intention form option resolver by csrf_token_id in forms
- Replace Twig initRuntime method by adding needs_environment = true in filters arg functions
- Replace setNormalizers by setNormalizer
- Change setAllowedValues to modify one option at a time
- Add `choices_as_values => true `to the ChoiceType and flip keys and values of choices option
- Split security.context service into security.authorization_checker and security.token_storage
- Rename `precision` option to `scale`
- Remove scope from service definitions
- Replace `sameas` by `same as` in Twig templates
- Replace `form` tag by twig `form_start` function 
- ... 

### Fixed
- Add `__toString` to Contact entity 
- Fix admin datagrid filter status for BookingPayinRefund
- Gmap Markers autoescape html
- Add custom DoctrineCurrencyAdapter to fix Lexik currency bundle convert sql request
- Listing discount editions error displaying
- Change listing category parent label in admin
- Add required attributes to page admin form fields
- Fix links translations in error pages
- Fix find bookings payed by asker when MangoPayBundle is not enabled

## [0.1.1] - 2016-04-04

### Added
- Add currency on booking amount error message 
- Add fees help in sonata admin for bank wire
- Add default currency on admin BankWire "Debited funds" field

### Fixed
- Fix duplicate error message on new booking 
- Fix bookings refusing while booking acceptation
- Fix currency format on all bills
- Fix admin currency vertical align on price fields 
- Fix admin listing "rules" field requirement 
      
### Changed
- Update documentation
- Change min listing price parameter to 1 (default currency)
- Change composer.json support section


## [0.1.0] - 2016-03-23

### Added

- First commit

