import { defineConfig } from '@playwright/test';

const config = defineConfig({
    testDir: './e2e',
	globalSetup: require.resolve( './e2e/config/global-setup.js' ),
    fullyParallel: false,
    use: {
        baseURL: process.env.WP_BASE_URL || 'http://localhost:8888',
        trace: 'on-first-retry',
        channel: 'chrome',
    },
    projects: [
        {
        name: 'Google Chrome',
        use: {
            channel: 'chrome', // Must be explicitly set inside the project's 'use' block
        },
        },
    ],
});

export default config;
