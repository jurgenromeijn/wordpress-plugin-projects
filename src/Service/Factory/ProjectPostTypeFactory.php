<?php
/**
 * @author Jurgen Romeijn <jurgen.romeijn@gmail.com>
 */

namespace JurgenRomeijn\Projects\Service\Factory;

use JurgenRomeijn\Projects\Service\Helper\TranslationHelperInterface;
use JurgenRomeijn\Projects\Model\PostType\PostType;
use JurgenRomeijn\Projects\Model\PostType\SupportOptions;
use JurgenRomeijn\Projects\Model\Rewrite;

/**
 * This factory contains all functionality to create the post type for a project.
 * @package JurgenRomeijn\Projects\Service\Factory
 */
class ProjectPostTypeFactory implements ProjectPostTypeFactoryInterface
{
    const SLUG = 'projectPostTypeSlug';

    private $projectLabelFactory;
    private $translationHelper;

    /**
     * ProjectPostTypeFactory constructor.
     * @param TranslationHelperInterface $translationHelper
     * @param ProjectLabelFactoryInterface $projectLabelFactory
     */
    public function __construct(
        ProjectLabelFactoryInterface $projectLabelFactory,
        TranslationHelperInterface $translationHelper
    ) {
        $this->projectLabelFactory = $projectLabelFactory;
        $this->translationHelper = $translationHelper;
    }

    /**
     * Create the project post type.
     * @return PostType
     */
    public function createPostType()
    {
        $projectPostType = new PostType();

        $projectPostType->setLabels($this->projectLabelFactory->createLabels());
        $projectPostType->setPublic(true);
        $projectPostType->setHasArchive(true);
        $projectPostType->setShowInRest(true);
        $projectPostType->setRewrite(new Rewrite($this->translationHelper->translate(self::SLUG)));
        $projectPostType->setSupports([
            SupportOptions::TITLE,
            SupportOptions::EDITOR,
            SupportOptions::THUMBNAIL,
            SupportOptions::EXCERPT,
            SupportOptions::REVISIONS
        ]);

        return $projectPostType;
    }
}
