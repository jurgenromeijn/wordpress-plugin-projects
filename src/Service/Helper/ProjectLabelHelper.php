<?php
/**
 * @author Jurgen Romeijn <jurgen.romeijn@gmail.com>
 */

namespace JurgenRomeijn\Projects\Service\Helper;

use JurgenRomeijn\Projects\Util\SingletonTrait;
use JurgenRomeijn\Projects\Model\PostType\Labels;

/**
 * This helper contains all functionality to create labels for a project.
 * @package JurgenRomeijn\Projects\Service\Helper
 */
class ProjectLabelHelper implements ProjectLabelHelperInterface
{
    use SingletonTrait;

    const NAME_SINGULAR      = 'singularName';
    const NAME_PLURAL        = 'name';
    const ADD_NEW            = 'addNew';
    const ADD_NEW_ITEM       = 'addNewItem';
    const EDIT_ITEM          = 'editItem';
    const NEW_ITEM           = 'newItem';
    const ALL_ITEMS          = 'allItems';
    const VIEW_ITEM          = 'viewItem';
    const SEARCH_ITEMS       = 'searchItems';
    const NOT_FOUND          = 'notFound';
    const NOT_FOUND_IN_TRASH = 'notFoundInTrash';
    const PARENT_ITEM_COLON  = 'parentItemColon';
    const MENU_NAME          = 'menuName';

    private $translationHelper;

    /**
     * Set up all required components for this helper.
     * ProjectLabelHelper constructor.
     */
    private function __construct()
    {
        $this->translationHelper = TranslationHelper::getInstance();
    }

    /**
     * Create the labels used for the project post type.
     * @return Labels
     */
    public function createLabels()
    {
        $labels = new Labels();

        $labels->setName($this->translationHelper->translate(self::NAME_PLURAL));
        $labels->setSingularName($this->translationHelper->translate(self::NAME_SINGULAR));
        $labels->setAddNew($this->translationHelper->translate(self::ADD_NEW));
        $labels->setAddNewItem($this->translationHelper->translate(self::ADD_NEW_ITEM));
        $labels->setEditItem($this->translationHelper->translate(self::EDIT_ITEM));
        $labels->setNewItem($this->translationHelper->translate(self::NEW_ITEM));
        $labels->setAllItems($this->translationHelper->translate(self::ALL_ITEMS));
        $labels->setViewItem($this->translationHelper->translate(self::VIEW_ITEM));
        $labels->setSearchItems($this->translationHelper->translate(self::SEARCH_ITEMS));
        $labels->setNotFound($this->translationHelper->translate(self::NOT_FOUND));
        $labels->setNotFoundInTrash($this->translationHelper->translate(self::NOT_FOUND_IN_TRASH));
        $labels->setParentItemColon($this->translationHelper->translate(self::PARENT_ITEM_COLON));
        $labels->setMenuName($this->translationHelper->translate(self::MENU_NAME));

        return $labels;
    }
}
