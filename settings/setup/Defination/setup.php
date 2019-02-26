<?php

include get_template_directory() . "/settings/setup/Defination/settings/SettingsSetup.php";

//IMPORTA AS CLASSES DO COMPONENTS

new SettingsSetup('setup/Defination/components', 'Component');
new SettingsSetup('setup/Defination/components', 'ComponentBackend');
new SettingsSetup('setup/Defination/components', 'ComponentFrontend');
new SettingsSetup('setup/Defination/components', 'Components');
new SettingsSetup('setup/Defination/components', 'ClassComponent');
new SettingsSetup('setup/Defination/components', 'ComponentTwig');
new SettingsSetup('setup/Defination/components', 'ImportComponent');

//IMPORTA AS Class  DA SETTINGS

new SettingsSetup('setup/Defination/settings', 'RequirimentsSettings');
new SettingsSetup('setup/Defination/settings', 'Settings');
new SettingsSetup('setup/Defination/settings', 'Setup');
