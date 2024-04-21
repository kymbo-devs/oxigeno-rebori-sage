<?php

namespace App\Fields;

use App\Fields\Partials\ListItems;
use Log1x\AcfComposer\Builder;
use Log1x\AcfComposer\Field;

class Examplefield extends Field
{
    /**
     * The field group.
     */
    public function fields(): array
    {
        $examplefield = Builder::make('examplefield');

        $examplefield
            ->setLocation('post_type', '==', 'post');

        $examplefield
            ->addPartial(ListItems::class);

        return $examplefield->build();
    }
}
