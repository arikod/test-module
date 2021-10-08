<?php

use Arikod\Module\ModuleRegistrar;

ModuleRegistrar::register(
    'Arikod_TestModule',
    \Arikod\TestModule\TestModuleServiceProvider::class
);
