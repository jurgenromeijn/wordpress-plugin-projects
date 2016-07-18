<?php
/**
 * @author Jurgen Romeijn <jurgen.romeijn@gmail.com>
 */

namespace JurgenRomeijn\Projects\Controller;

use JurgenRomeijn\Projects\Service\Helper\TranslationHelperInterface;
use JurgenRomeijn\Projects\Service\ProjectServiceInterface;

/**
 * Controls the application flow for this plugin.
 * @package JurgenRomeijn\Projects\Controller
 */
class ProjectController
{
    private $projectService;
    private $translationHelper;

    /**
     * ProjectController constructor.
     * @param ProjectServiceInterface $projectService
     * @param TranslationHelperInterface $translationHelper
     */
    private function __construct(ProjectServiceInterface $projectService, TranslationHelperInterface $translationHelper)
    {
        $this->projectService = $projectService;
        $this->translationHelper = $translationHelper;
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