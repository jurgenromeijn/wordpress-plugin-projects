<?php
/**
 * @author Jurgen Romeijn <jurgen.romeijn@gmail.com>
 */

namespace JurgenRomeijn\Projects\Service;

use JurgenRomeijn\Projects\Service\Factory\ProjectPostTypeFactoryInterface;
use JurgenRomeijn\Projects\Service\Factory\ProjectTaxonomyFactoryInterface;

/**
 * This class contains the methods that create the post type and taxonomy.
 * @package JurgenRomeijn\Projects
 */
class ProjectService implements ProjectServiceInterface
{
    const PROJECT_POST_TYPE_NAME = 'project';
    const PROJECT_TAXONOMY_NAME = 'project_types';

    private $projectPostTypeFactory;
    private $projectTaxonomyFactory;

    /**
     * ProjectService constructor.
     * @param ProjectPostTypeFactoryInterface $projectPostTypeFactory
     * @param ProjectTaxonomyFactoryInterface $projectTaxonomyFactory
     */
    public function __construct(
        ProjectPostTypeFactoryInterface $projectPostTypeFactory,
        ProjectTaxonomyFactoryInterface $projectTaxonomyFactory
    ) {
        $this->projectPostTypeFactory = $projectPostTypeFactory;
        $this->projectTaxonomyFactory = $projectTaxonomyFactory;
    }

    /**
     * Create the project post type.
     */
    public function createPostType()
    {
        $projectPostType = $this->projectPostTypeFactory->createPostType();
        register_post_type(
            self::PROJECT_POST_TYPE_NAME,
            $projectPostType->toArray()
        );
    }

    /**
     * Create the project taxonomy.
     */
    public function createTaxonomy()
    {
        $projectTaxonomy = $this->projectTaxonomyFactory->createTaxonomy();
        register_taxonomy(
            self::PROJECT_TAXONOMY_NAME,
            self::PROJECT_POST_TYPE_NAME,
            $projectTaxonomy->toArray()
        );
    }
}
