<?php
/**
 * @author Jurgen Romeijn <jurgen.romeijn@gmail.com>
 */

namespace JurgenRomeijn\Projects\Model\PostType;

/**
 * This enum contains all options a post type can support.
 * @package JurgenRomeijn\Projects\Model\PostType
 */
abstract class SupportOptions
{
    const TITLE = 'title';
    const EDITOR = 'editor';
    const THUMBNAIL = 'thumbnail';
    const REVISIONS = 'revisions';
    const EXCERPT = 'excerpt';
}
