<?php
/**
 * @author Jurgen Romeijn <jurgen.romeijn@gmail.com>
 */

namespace JurgenRomeijn\Projects\Service;

use JurgenRomeijn\Projects\Service\Factory\ProjectPostTypeFactoryInterface;
use JurgenRomeijn\Projects\Service\Factory\ProjectTaxonomyFactoryInterface;
use JurgenRomeijn\Projects\Service\Mapper\ArrayMapperInterface;

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
    private $arrayMapper;

    /**
     * ProjectService constructor.
     * @param ProjectPostTypeFactoryInterface $projectPostTypeFactory
     * @param ProjectTaxonomyFactoryInterface $projectTaxonomyFactory
     * @param ArrayMapperInterface $arrayMapper
     */
    public function __construct(
        ProjectPostTypeFactoryInterface $projectPostTypeFactory,
        ProjectTaxonomyFactoryInterface $projectTaxonomyFactory,
        ArrayMapperInterface $arrayMapper
    ) {
        $this->projectPostTypeFactory = $projectPostTypeFactory;
        $this->projectTaxonomyFactory = $projectTaxonomyFactory;
        $this->arrayMapper = $arrayMapper;
    }

    /**
     * Create the project post type.
     */
    public function createPostType()
    {
        $projectPostType = $this->projectPostTypeFactory->createPostType();
        register_post_type(
            self::PROJECT_POST_TYPE_NAME,
            $this->arrayMapper->toArray($projectPostType)
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
            $this->arrayMapper->toArray($projectTaxonomy)
        );
    }
}
