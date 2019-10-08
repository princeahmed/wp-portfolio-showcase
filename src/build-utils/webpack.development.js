const MiniCssExtractPlugin = require('mini-css-extract-plugin');
const FileManagerPlugin = require('filemanager-webpack-plugin');

module.exports = () => ({

    module: {
        rules: [
            {
                test: /\.s?css$/,
                use: [
                    {
                        loader: MiniCssExtractPlugin.loader,
                        options: {
                            url: false,
                            publicPath: '../'
                        }
                    },
                    'css-loader',
                    'sass-loader'
                ]
            },
            {
                test: /\.(jpe?g|png|gif|ttf|eot|svg|woff)$/,
                loader: 'file-loader',
                options: {
                    name: 'images/[name].[ext]'
                }
            },
            {
                test: /\.js$/,
                use: 'babel-loader',
                exclude: '/node_modules/',
            }
        ]
    },

    plugins: [
        new FileManagerPlugin({

            onEnd: {
                copy: [
                    {
                        source: './src/vendor/popup/magnific-popup.css',
                        destination: './assets/css/magnific-popup.css'
                    },
                    {
                        source: './src/vendor/popup/jquery.magnific-popup.min.js',
                        destination: './assets/js/jquery.magnific-popup.min.js'
                    },
                    {
                        source: './src/vendor/responsiveslides/responsiveslides.min.js',
                        destination: './assets/js/responsiveslides.min.js'
                    },
                    {
                        source: './src/vendor/responsiveslides/responsiveslides.css',
                        destination: './assets/css/responsiveslides.css'
                    },
                    {
                        source: './src/vendor/isotope.pkgd.min.js',
                        destination: './assets/js/isotope.pkgd.min.js'
                    }
                ]
            }
        })
    ]

});