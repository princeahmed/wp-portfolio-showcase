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
                        source: './src/vendor/jquery.jplayer.min.js',
                        destination: './assets/js/jquery.jplayer.min.js'
                    },
                    {
                        source: './src/vendor/jquery.hideseek.min.js',
                        destination: './assets/js/jquery.hideseek.min.js'
                    }
                ]
            }
        })
    ]

});