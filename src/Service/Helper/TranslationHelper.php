<?php
/**
 * @author Jurgen Romeijn <jurgen.romeijn@gmail.com>
 */

namespace JurgenRomeijn\Projects\Service\Helper;
use JurgenRomeijn\Projects\Util\SingletonTrait;

/**
 * This helper contains all functionality for localization of this plugin.
 * @package JurgenRomeijn\Projects\Service\Helper
 */
class TranslationHelper implements TranslationHelperInterface
{

    use SingletonTrait;

    const DOMAIN = "wordpress-plugin-projects";
    const PATH_LANGUAGES = '/../../../resources/languages/';

    /**
     * Empty private constructor as this is a application wide component.
     * TranslationHelper constructor.
     */
    private function __construct() {}

    /**
     * Load the Wordpress plugin text domain.
     */
    public function loadTextDomain()
    {
        load_plugin_textdomain(
            self::DOMAIN,
            false, dirname(plugin_basename( __FILE__ )) . self::PATH_LANGUAGES);
    }

    /**
     * Translate a string for this plugin.
     * @param $string
     * @return string
     */
    public function translate($string)
    {
        return __($string, self::DOMAIN);
    }

}
