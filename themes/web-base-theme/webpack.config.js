const path = require("path");

module.exports = {
  mode:"development",
  devtool: "inline-source-map",
  entry: {
    index: "./js/index.js"
  },
  output: {
    filename: "[name].bundle.js",
    path: path.resolve(__dirname, "dist"),
    clean: true
  },
  optimization: {
    splitChunks: {
      chunks: "all"
    }
  }
};
