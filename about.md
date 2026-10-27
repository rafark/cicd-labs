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

This tool uses `header-injector` so an env.php file is expected on the *repo*

# playwright.config.js*

If you choose to run playwright tests
