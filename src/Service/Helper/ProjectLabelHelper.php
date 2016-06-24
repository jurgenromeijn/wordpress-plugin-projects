<?php
/**
 * @author Jurgen Romeijn <jurgen.romeijn@gmail.com>
 */

namespace JurgenRomeijn\Projects\Service\Helper;
use JurgenRomeijn\Projects\Model\PostType\Labels;

/**
 * This helper contains all functionality to create labels for a project.
 * @package JurgenRomeijn\Projects\Service\Helper
 */
class ProjectLabelHelper implements ProjectLabelHelperInterface
{

    const NAME_SINGULAR      = 'Project';
    const NAME_PLURAL        = 'Projecten';
    const ADD_NEW            = 'Nieuw project';
    const ADD_NEW_ITEM       = 'Voeg nieuw project toe';
    const EDIT_ITEM          = 'Pas project aan';
    const NEW_ITEM           = 'Nieuw Project';
    const ALL_ITEMS          = 'Alle projecten';
    const VIEW_ITEM          = 'Bekijk project';
    const SEARCH_ITEMS       = 'Zoek in projecten';
    const NOT_FOUND          = 'Geen projecten gevonden';
    const NOT_FOUND_IN_TRASH = 'Geen projecten in de vuilnisbak';
    const PARENT_ITEM_COLON  = 'Projecten';
    const MENU_NAME          = 'Projecten';

    private static $instance;

    /**
     * Empty private constructor as this is a application wide component.
     * ProjectLabelHelper constructor.
     */
    private function __construct() {}

    /**
     * Create the labels used for the project post type.
     * @return Labels
     */
    public function createLabels()
    {
        $labels = new Labels();

        $labels->setName($this->translateLabel(self::NAME_PLURAL));
        $labels->setSingularName($this->translateLabel(self::NAME_SINGULAR));
        $labels->setAddNew($this->translateLabel(self::ADD_NEW));
        $labels->setAddNewItem($this->translateLabel(self::ADD_NEW_ITEM));
        $labels->setEditItem($this->translateLabel(self::EDIT_ITEM));
        $labels->setNewItem($this->translateLabel(self::NEW_ITEM));
        $labels->setAllItems($this->translateLabel(self::ALL_ITEMS));
        $labels->setViewItem($this->translateLabel(self::VIEW_ITEM));
        $labels->setSearchItems($this->translateLabel(self::SEARCH_ITEMS));
        $labels->setNotFound($this->translateLabel(self::NOT_FOUND));
        $labels->setNotFoundInTrash($this->translateLabel(self::NOT_FOUND_IN_TRASH));
        $labels->setParentItemColon($this->translateLabel(self::PARENT_ITEM_COLON));
        $labels->setMenuName($this->translateLabel(self::MENU_NAME));

        return $labels;
    }

    /**
     * Translate a given label.
     * @param $label
     * @return string
     */
    private function translateLabel($label)
    {
        return __($label);
    }

    /**
     * return an instance of this singleton.
     * @return ProjectLabelHelper
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
