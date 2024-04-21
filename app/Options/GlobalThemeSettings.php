<?php

namespace App\Options;

use Log1x\AcfComposer\Builder;
use Log1x\AcfComposer\Options as Field;

class GlobalThemeSettings extends Field
{
    /**
     * The option page menu name.
     *
     * @var string
     */
    public $name = 'Global Theme Settings';

    /**
     * The option page menu slug.
     *
     * @var string
     */
    public $slug = 'global-theme-settings';

    /**
     * The option page document title.
     *
     * @var string
     */
    public $title = 'Global Theme Settings | Options';

    /**
     * The option page permission capability.
     *
     * @var string
     */
    public $capability = 'edit_theme_options';

    /**
     * The option page menu position.
     *
     * @var int
     */
    public $position = PHP_INT_MAX;

    /**
     * The option page visibility in the admin menu.
     *
     * @var boolean
     */
    public $menu = true;

    /**
     * The slug of another admin page to be used as a parent.
     *
     * @var string
     */
    public $parent = null;

    /**
     * The option page menu icon.
     *
     * @var string
     */
    public $icon = null;

    /**
     * Redirect to the first child page if one exists.
     *
     * @var boolean
     */
    public $redirect = true;

    /**
     * The post ID to save and load values from.
     *
     * @var string|int
     */
    public $post = 'options';

    /**
     * The option page autoload setting.
     *
     * @var bool
     */
    public $autoload = true;

    /**
     * The additional option page settings.
     *
     * @var array
     */
    public $settings = [];

    /**
     * Localized text displayed on the submit button.
     */
    public function updateButton(): string
    {
        return __('Update', 'acf');
    }

    /**
     * Localized text displayed after form submission.
     */
    public function updatedMessage(): string
    {
        return __('Global Theme Settings Updated', 'acf');
    }

    /**
     * The option page field group.
     */
    public function fields(): array
    {
        $globalThemeSettings = Builder::make('global_theme_settings');

        $globalThemeSettings
            ->addTab('Header')
            ->addImage('logo', ['label' => 'Logo', 'return_format' => 'id'])
            ->addTab('Footer')
            ->addImage('footer_logo', ['label' => 'Logo', 'return_format' => 'id'])
            ->addTextarea('footer_text', [
                'label' => 'Text',
                'rows' => 4,
                'instructions' => 'To add blue text wrap your blue text around this &lt;span class="text-primary">BLUE TEXT&lt;/span>'
            ]);

        return $globalThemeSettings->build();
    }
}
