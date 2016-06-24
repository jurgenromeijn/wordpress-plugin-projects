<?php
/**
 * @author Jurgen Romeijn <jurgen.romeijn@gmail.com>
 */

namespace JurgenRomeijn\Projects\Service;

/**
 * This interface declares all functionality the Projects Portfolio should be able to do.
 * @package JurgenRomeijn\Projects
 */
interface ProjectServiceInterface
{

    /**
     * Register to the required wordpress hooks.
     */
    public function register();

    /**
     * Create the project post type.
     */
    public function createPostType();

    /**
     * Create the project taxonomy.
     */
    public function createTaxonomy();

}
