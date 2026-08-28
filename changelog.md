## [unreleased]

### 🚀 Features

- Added changelog injector
- Added changelog injector
- Added playwright tests to the workflow
- Added optional prebuild step (#65)
- Added repo tokenn to plugin check action (#75)
- Show wp-env error logs on failure (#86)
- Upload build artifact on success

### 🐛 Bug Fixes

- Removed extra single quotes
- Added readme with expected struct
- Added wp env json file to supress warnings
- Added stable_tag_mismatch
- Added write permissions to the test workflow file
- Suppress notices and warnings when calling edp build (#62)
- Fixed edp build
- Changed wp_base_url env to 127.0.0.1:8888 and added some early network checks (#74)
- The $maybeLatest variable in the changelog injector is now passed unquoted (#76)
- Auto-detect the docker wp-env ports (#77)
- Use localhost isntead of the ip address for WP_BASE_URL (#79)
- Edp include index.php (#84)

### 🚜 Refactor

- Renamed the file to smoke-tests
- [**breaking**] Converted the smoke tests into a reusable workflow
- The smoke tests is now a reusable workflow
- Get the WP_BASE_URL from the wp cli from the wp-env container (#85). Fixes #81

### ⚡ Performance

- Added timeouts and log debugging to playwright tests (#78)

### ⚙️ Miscellaneous Tasks

- Removed paths-ignore: .github/** from pr trigger workflow (#83)
cat: /home/runner/work/_temp/build/changelog.md: No such file or directory