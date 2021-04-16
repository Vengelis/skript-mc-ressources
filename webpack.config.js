const Encore = require('@symfony/webpack-encore')
Encore
  .setOutputPath('public/build/')
  .setPublicPath('/build')
  .addStyleEntry('tailwindcss', './assets/css/tailwind.css')
  .addStyleEntry('fontawesome', './assets/fontawesome/fontawesome.js')
  .enableSingleRuntimeChunk()
  // enable post css loader
  .enablePostCssLoader()
module.exports = Encore.getWebpackConfig()