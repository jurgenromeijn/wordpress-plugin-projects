<?php
/**
 * @author Jurgen Romeijn <jurgen.romeijn@gmail.com>
 */

namespace JurgenRomeijn\Projects\Model;

/**
 * This class contains information about url rewriting.
 * @package JurgenRomeijn\Projects\Model
 */
class Rewrite
{
    private $slug;
    private $hierarchical;

    /**
     * Rewrite constructor.
     * @param string $slug
     * @param bool $hierarchical
     */
    public function __construct($slug, $hierarchical)
    {
        $this->slug = $slug;
        $this->hierarchical = $hierarchical;
    }

    /**
     * @return string
     */
    public function getSlug()
    {
        return $this->slug;
    }

    /**
     * @param string $slug
     */
    public function setSlug($slug)
    {
        $this->slug = $slug;
    }

    /**
     * @return bool
     */
    public function getHierarchical()
    {
        return $this->hierarchical;
    }

    /**
     * @param bool $hierarchical
     */
    public function setHierarchical($hierarchical)
    {
        $this->hierarchical = $hierarchical;
    }


}