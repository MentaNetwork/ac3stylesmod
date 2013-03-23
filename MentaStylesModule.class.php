<?php

class MentaStylesModule extends AngieModule
{

    protected $name = 'menta_styles';

    protected $version = '0.1';

    public function getDisplayName()
    {
        return lang('Menta Styles');
    }

    public function getDescription()
    {
        return lang('CSS customization module');
    }

}