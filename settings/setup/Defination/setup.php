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
new SettingsSetup('setup/Defination/components', 'BaseComponent');
new SettingsSetup('setup/Defination/components', 'ImportStyleComponent');
new SettingsSetup('setup/Defination/components', 'ImportJavascriptComponent');

//IMPORTA AS Class  DA SETTINGS

new SettingsSetup('setup/Defination/settings', 'RequirimentsSettings');
new SettingsSetup('setup/Defination/settings', 'Settings');
new SettingsSetup('setup/Defination/settings', 'Setup');
new SettingsSetup('setup/Defination/settings', 'ExternalSetup');

// IMPORTA AS CLASSES DO ASSETS
new SettingsSetup('setup/Defination/assets', 'imagePublic');
