<?php
/**
 * @author Jurgen Romeijn <jurgen.romeijn@gmail.com>
 */

namespace JurgenRomeijn\Projects\Service;
use JurgenRomeijn\Projects\Service\Helper\ProjectPostTypeHelper;
use JurgenRomeijn\Projects\Service\Helper\ProjectTaxonomyHelper;

/**
 * This class contains the methods that create the post type and taxonomy.
 * @package JurgenRomeijn\Projects
 */
class ProjectService implements ProjectServiceInterface
{
    const PROJECT_POST_TYPE_NAME = "project";
    const PROJECT_TAXONOMY_NAME = "projects";

    private $postTypeHelper;
    private $taxonomyHelper;

    private static $instance;

    /**
     * ProjectsService constructor.
     */
    private function __construct()
    {
        $this->postTypeHelper = ProjectPostTypeHelper::getInstance();
        $this->taxonomyHelper = ProjectTaxonomyHelper::getInstance();
    }

    public function register()
    {
        add_action('init', array($this, 'createPostType'));
        add_action('init', array($this, 'createTaxonomy'));
    }

    public function createPostType()
    {
        $projectPostType = $this->postTypeHelper->createPostType();
        var_dump($projectPostType->toArray());
        register_post_type(
            self::PROJECT_POST_TYPE_NAME,
            $this->convertModelToArray($projectPostType));
    }

    public function createTaxonomy()
    {
        $projectTaxonomy = $this->taxonomyHelper->createTaxonomy();
        print_r($this->convertModelToArray($projectTaxonomy));
        register_taxonomy(
            self::PROJECT_TAXONOMY_NAME,
            self::PROJECT_POST_TYPE_NAME,
            $this->convertModelToArray($projectTaxonomy));
    }

    private function convertModelToArray($model)
    {
        return json_encode($model);
    }

    public static function getInstance()
    {
        if (self::$instance === null)
        {
            self::$instance = new self();
        }
        return self::$instance;
    }

}
