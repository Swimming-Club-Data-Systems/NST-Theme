const path = require('path')

export default {
    root: path.resolve(__dirname),
    resolve: {
        alias: {
            '~bootstrap': path.resolve(__dirname, 'node_modules/bootstrap'),
        }
    },
    build: {
        // generate manifest.json in outDir
        manifest: true,
        rollupOptions: {
            // overwrite default .html entry
            input: './js/main.js',
        },
    },
    server: {
        port: 8080,
        hot: true
    }
}
