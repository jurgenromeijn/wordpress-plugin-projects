<?php
/**
 * @author Jurgen Romeijn <jurgen.romeijn@gmail.com>
 */

namespace JurgenRomeijn\Projects;

use JurgenRomeijn\Projects\Controller\ProjectController;
use JurgenRomeijn\Projects\Util\SingletonTrait;

/**
 * This class bootstraps the entire project plugin.
 * @package JurgenRomeijn\Projects
 */
class ProjectPlugin
{
    use SingletonTrait;

    private $projectController;

    /**
     * ProjectPlugin constructor.
     */
    private function __construct()
    {
        $this->projectController = ProjectController::getInstance();
    }

    /**
     * Init the plugin.
     */
    public function init()
    {
        $this->projectController->register();
    }
}
