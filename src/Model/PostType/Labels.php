<?php
/**
 * @author Jurgen Romeijn <jurgen.romeijn@gmail.com>
 */

namespace JurgenRomeijn\Projects\Model\PostType;
use JurgenRomeijn\Projects\Model\WordpressModelInterface;
use JurgenRomeijn\Projects\Model\WordpressModelToArrayTrait;

/**
 * This class contains all labels displayed by wordpress for a post type
 * @package JurgenRomeijn\Projects\Model\PostType
 */
class Labels implements WordpressModelInterface
{

    use WordpressModelToArrayTrait;

    private $name;
    private $singularName;
    private $addNew;
    private $addNewItem;
    private $editItem;
    private $newItem;
    private $allItems;
    private $viewItem;
    private $searchItems;
    private $notFound;
    private $notFoundInTrash;
    private $parentItemColon;
    private $menuName;
    
    /**
     * Labels constructor.
     * @param string $name
     * @param string $singularName
     * @param string $addNew
     * @param string $addNewItem
     * @param string $editItem
     * @param string $newItem
     * @param string $allItems
     * @param string $viewItem
     * @param string $searchItems
     * @param string $notFound
     * @param string $notFoundInTrash
     * @param string $parentItemColon
     * @param string $menuName
     */
    public function __construct(
        $name = null,
        $singularName = null,
        $addNew = null,
        $addNewItem = null,
        $editItem = null,
        $newItem = null,
        $allItems = null,
        $viewItem = null,
        $searchItems = null,
        $notFound = null,
        $notFoundInTrash = null,
        $parentItemColon = null,
        $menuName = null)
    {
        $this->name = $name;
        $this->singularName = $singularName;
        $this->addNew = $addNew;
        $this->addNewItem = $addNewItem;
        $this->editItem = $editItem;
        $this->newItem = $newItem;
        $this->allItems = $allItems;
        $this->viewItem = $viewItem;
        $this->searchItems = $searchItems;
        $this->notFound = $notFound;
        $this->notFoundInTrash = $notFoundInTrash;
        $this->parentItemColon = $parentItemColon;
        $this->menuName = $menuName;
    }

    /**
     * @return string
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * @param string $name
     */
    public function setName($name)
    {
        $this->name = $name;
    }

    /**
     * @return string
     */
    public function getSingularName()
    {
        return $this->singularName;
    }

    /**
     * @param string $singularName
     */
    public function setSingularName($singularName)
    {
        $this->singularName = $singularName;
    }

    /**
     * @return string
     */
    public function getAddNew()
    {
        return $this->addNew;
    }

    /**
     * @param string $addNew
     */
    public function setAddNew($addNew)
    {
        $this->addNew = $addNew;
    }

    /**
     * @return string
     */
    public function getAddNewItem()
    {
        return $this->addNewItem;
    }

    /**
     * @param string $addNewItem
     */
    public function setAddNewItem($addNewItem)
    {
        $this->addNewItem = $addNewItem;
    }

    /**
     * @return string
     */
    public function getEditItem()
    {
        return $this->editItem;
    }

    /**
     * @param string $editItem
     */
    public function setEditItem($editItem)
    {
        $this->editItem = $editItem;
    }

    /**
     * @return string
     */
    public function getNewItem()
    {
        return $this->newItem;
    }

    /**
     * @param string $newItem
     */
    public function setNewItem($newItem)
    {
        $this->newItem = $newItem;
    }

    /**
     * @return string
     */
    public function getAllItems()
    {
        return $this->allItems;
    }

    /**
     * @param string $allItems
     */
    public function setAllItems($allItems)
    {
        $this->allItems = $allItems;
    }

    /**
     * @return string
     */
    public function getViewItem()
    {
        return $this->viewItem;
    }

    /**
     * @param string $viewItem
     */
    public function setViewItem($viewItem)
    {
        $this->viewItem = $viewItem;
    }

    /**
     * @return string
     */
    public function getSearchItems()
    {
        return $this->searchItems;
    }

    /**
     * @param string $searchItems
     */
    public function setSearchItems($searchItems)
    {
        $this->searchItems = $searchItems;
    }

    /**
     * @return string
     */
    public function getNotFound()
    {
        return $this->notFound;
    }

    /**
     * @param string $notFound
     */
    public function setNotFound($notFound)
    {
        $this->notFound = $notFound;
    }

    /**
     * @return string
     */
    public function getNotFoundInTrash()
    {
        return $this->notFoundInTrash;
    }

    /**
     * @param string $notFoundInTrash
     */
    public function setNotFoundInTrash($notFoundInTrash)
    {
        $this->notFoundInTrash = $notFoundInTrash;
    }

    /**
     * @return string
     */
    public function getParentItemColon()
    {
        return $this->parentItemColon;
    }

    /**
     * @param string $parentItemColon
     */
    public function setParentItemColon($parentItemColon)
    {
        $this->parentItemColon = $parentItemColon;
    }

    /**
     * @return string
     */
    public function getMenuName()
    {
        return $this->menuName;
    }

    /**
     * @param string $menuName
     */
    public function setMenuName($menuName)
    {
        $this->menuName = $menuName;
    }

}
