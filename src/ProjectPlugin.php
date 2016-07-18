<?php
/**
 * @author Jurgen Romeijn <jurgen.romeijn@gmail.com>
 */

namespace JurgenRomeijn\Projects;

use JurgenRomeijn\Projects\Controller\ProjectController;

/**
 * This class bootstraps the entire project plugin.
 * @package JurgenRomeijn\Projects
 */
class ProjectPlugin
{
    private $projectController;

    /**
     * ProjectPlugin constructor.
     * @param ProjectController $projectController
     */
    public function __construct(ProjectController $projectController)
    {
        $this->projectController = $projectController;
    }

    /**
     * Init the plugin.
     */
    public function init()
    {
        $this->projectController->register();
    }
}
