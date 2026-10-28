# Your composer.json requires the following scripts:

* optional

| script name | desc |
| --- | --- |
| install-scripts-ci | runs before `build-scripts` |
| build-scripts | this is meant for your plugin's javascript apps.  |
| pre-build* | runs before `edp-build` |
| edp-build | this is meant for building your plugin files. It **must** write to the last line of stdout the abs path of the build dir |

# Expected config files

# env.php

A file that returns an array with the following fields:

| field | desc | example |
|  ---  |  --- | --- |
| slug  | the final official slug of the plugin, used for plugin-check and for deploying to .org | coupons-plus-for-woocommerce |
| pluginFile | main plugin file | index.php | 
| *other fields* | for the rest of the **required** and *optional* fields, please look at [header-injector](https://github.com/neblabs/header-injector#configuration-envphp) | n/a | 

# playwright.config.js*

If you choose to run playwright tests

