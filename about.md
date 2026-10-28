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

A file that must be present in the git repo and returns an array with the following fields:

```php
<?php

return [
    'slug' => 'coupon-urls-for-woocommerce', # the slug of the plugin as it is observed in prod (eg. the slug of the plugin in .org)
    'pluginFile' => 'index.php', # the main index file, may be rewritten with the final name to the target build by the header-injector when doing the transformations
    'requires' => [
        'wp' => 5.1,
        'php' => 7.2
    ],
    'urls' => [
        'plugin' => '',
        'organization' => '',
    ],
    'files' => [
        'plugin' => [
            'in' => 'index.php', # main plugin file as observed in the git repo
            'out' => '((slug)).php' # this is the filename of the final main plugin file in the distributable builds. 
        ],
        'readme' => 'readme.md' # .org readme file
    ],
    'runtimes' => [
        'php' => [
            'build'       => '8.2', # the version when building the plugin (edp build)
            'lint_source' => '8.4', # the version when linting all the .php files in the repo. Why? the workflow runs a premeditated lint on the changed php files.
            'lint_build'  => '8.4', # this is is post edp-build, the linting used after the source has been built.
            'tests_e2e'   => 'latest', # the version for plugin-check and playwright. This is the version used by wp-env
            'tests_php'   => '8.2', # the version for running the php unit tests
        ],
        'node' => [ 
            'build' => '20', # the version to use when building your app's js scripts (composer run build-scripts)
        ],
    ],
    'tests' => [
        # enable or disable depending on whether your source has tests for these:
        'playwright' => true, # run playwright tests?
        'php'    => false, // # run phpunit tests?
    ],
];

```

# playwright.config.js*

If you choose to run playwright tests

# .wp-env.e2e.json (optional)

This file is for the wp-env instance of the **deploy.yml** workflow. It will be renamed to .wp-env.json.

**This file is NOT used on the wp-env instance on **build.yml** since that re-uses the plugin-check action instance**

Example file:
```yml
{
    "testsEnvironment": false,
    "plugins": [
        "https://downloads.wordpress.org/plugin/woocommerce.latest-stable.zip"
    ],
    "config": {
        "WP_DEBUG": true,
        "WP_DEBUG_LOG": true,
        "WP_DEBUG_DISPLAY": false
    }
}

```
