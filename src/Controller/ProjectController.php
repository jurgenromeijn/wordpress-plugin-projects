<?php
/**
 * @author Jurgen Romeijn <jurgen.romeijn@gmail.com>
 */

namespace JurgenRomeijn\Projects\Controller;

use JurgenRomeijn\Projects\Service\Helper\TranslationHelper;
use JurgenRomeijn\Projects\Service\ProjectService;
use JurgenRomeijn\Projects\Util\SingletonTrait;

/**
 * Controls the application flow for this plugin.
 * @package JurgenRomeijn\Projects\Controller
 */
class ProjectController
{
    use SingletonTrait;

    private $projectService;
    private $translationHelper;

    /**
     * ProjectController constructor.
     */
    private function __construct()
    {
        $this->projectService = ProjectService::getInstance();
        $this->translationHelper = TranslationHelper::getInstance();
    }

    /**
     * Register to the required wordpress hooks.
     */
    public function register()
    {
        $this->translationHelper->loadTextDomain();
        add_action('init', [$this, 'createPostType']);
        add_action('init', [$this, 'createTaxonomy']);
    }

    /**
     * Create the project post type.
     */
    public function createPostType()
    {
        $this->projectService->createPostType();
    }

    /**
     * Create the project taxonomy.
     */
    public function createTaxonomy()
    {
        $this->projectService->createTaxonomy();
    }
}