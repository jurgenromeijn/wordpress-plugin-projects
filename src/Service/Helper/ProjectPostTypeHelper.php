<?php
/**
 * @author Jurgen Romeijn <jurgen.romeijn@gmail.com>
 */

namespace JurgenRomeijn\Projects\Service\Helper;
use JurgenRomeijn\Projects\Model\PostType\PostType;
use JurgenRomeijn\Projects\Model\PostType\SupportOptions;
use JurgenRomeijn\Projects\Model\Rewrite;

/**
 * This helper contains all functionality to create the post type for a project.
 * @package JurgenRomeijn\Projects\Service\Helper
 */
class ProjectPostTypeHelper implements ProjectPostTypeHelperInterface
{

    const SLUG = 'projects';

    private $labelHelper;
    private static $instance;

    /**
     * Set up all required components for this helper.
     * ProjectPostTypeHelper constructor.
     */
    private function __construct()
    {
        $this->labelHelper = ProjectLabelHelper::getInstance();
    }

    /**
     * Create the project post type.
     * @return PostType
     */
    public function createPostType()
    {
        $projectPostType = new PostType();

        $projectPostType->setLabels($this->labelHelper->createLabels());
        $projectPostType->setPublic(true);
        $projectPostType->setHasArchive(true);
        $projectPostType->setRewrite(new Rewrite(self::SLUG));
        $projectPostType->setSupports(array(
            SupportOptions::TITLE,
            SupportOptions::EDITOR,
            SupportOptions::THUMBNAIL,
            SupportOptions::EXCERPT,
            SupportOptions::REVISIONS
        ));

        return $projectPostType;
    }

    /**
     * return an instance of this singleton.
     * @return ProjectPostTypeHelper
     */
    public static function getInstance()
    {
        if (self::$instance === null)
        {
            self::$instance = new self();
        }
        return self::$instance;
    }

}
