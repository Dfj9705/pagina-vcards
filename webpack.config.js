const path = require('path');
const MiniCssExtractPlugin = require('mini-css-extract-plugin');

module.exports = {
  mode: 'development',
  entry: {
    'js/app': './src/js/app.js',
    'js/main': './src/js/main.js',

    'js/inicio': {
      import: './src/js/inicio.js',
      dependOn: 'js/app',
    },
    'js/pages/contacto': {
      import: './src/js/pages/contacto.js',
      dependOn: 'js/app',
    },
    'js/pages/home': {
      import: './src/js/pages/home.js',
      dependOn: 'js/app',
    },
    'css/styles': ['./src/scss/app.scss'],
  },
  output: {
    filename: '[name].js',
    path: path.resolve(__dirname, 'public/build'),
    publicPath: '/public/build/'
  },
  plugins: [
    new MiniCssExtractPlugin({
      filename: 'css/styles.css',
      chunkFilename: '[id].css',
    })
  ],
  module: {
    rules: [
      {
        test: /\.(c|sc|sa)ss$/,
        use: [
          {
            loader: MiniCssExtractPlugin.loader,
          },
          {
            loader: 'css-loader',
          },
          'sass-loader',
        ],
      },
      {
        test: /\.(png|svg|jpe?g|gif)$/,
        type: 'asset/resource',
      },
    ],
  },
};
