<?php
/**
 * @author Jurgen Romeijn <jurgen.romeijn@gmail.com>
 */

namespace JurgenRomeijn\Projects\Service\Factory;

use JurgenRomeijn\Projects\Service\Helper\TranslationHelper;
use JurgenRomeijn\Projects\Util\SingletonTrait;
use JurgenRomeijn\Projects\Model\PostType\PostType;
use JurgenRomeijn\Projects\Model\PostType\SupportOptions;
use JurgenRomeijn\Projects\Model\Rewrite;

/**
 * This factory contains all functionality to create the post type for a project.
 * @package JurgenRomeijn\Projects\Service\Factory
 */
class ProjectPostTypeFactory implements ProjectPostTypeFactoryInterface
{
    use SingletonTrait;

    const SLUG = 'projectPostTypeSlug';

    private $translationHelper;
    private $labelHelper;

    /**
     * Set up all required components for this factory.
     * ProjectPostTypeHelper constructor.
     */
    private function __construct()
    {
        $this->translationHelper = TranslationHelper::getInstance();
        $this->labelHelper = ProjectLabelFactory::getInstance();
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
