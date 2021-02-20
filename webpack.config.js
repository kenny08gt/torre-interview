const path = require('path');

module.exports = {
    resolve: {
        alias: {
            '@': path.resolve('resources/js'),
        },
    },
    module: {
        rules: [
            {
                test: /\.scss$/,
                use: [
                    'sass-loader',
                    'vue-style-loader',
                    'css-loader',
                ]
            }
        ]
    }
};
