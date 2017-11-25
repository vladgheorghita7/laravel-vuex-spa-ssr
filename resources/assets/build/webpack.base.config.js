const path = require("path");
const config = {
  entry: {
    app: path.resolve(__dirname, "../src/client-entry.js")
  },
  module: {
    rules: [{
      test: /\.vue$/,
      loader: 'vue-loader',
      options:{
        css: 'css-loader',
        'scss':'css-loader|sass-loader'
      }
    },{
      test: /\.js$/,
      loader: 'babel-loader',
      exclude: /node_modules/
    }]
  },
  output: {
    path: path.resolve(__dirname, "../../../public/dist"),
    publicPath: "/",
    filename: "assets/[name].js"
  }
};

module.exports = config;
