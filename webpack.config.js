// eslint-disable-next-line import/no-commonjs, node/no-unpublished-require
const Encore = require('@symfony/webpack-encore');

if (!Encore.isRuntimeEnvironmentConfigured())
    Encore.configureRuntimeEnvironment(process.env.NODE_ENV || 'dev');

Encore.setOutputPath('public/build/')
    .setPublicPath('/build')
    .addEntry('tailwindcss', './assets/css/tailwind.css')
    .addEntry('fontawesome', './assets/js/fontawesome.js')
    .splitEntryChunks()
    .enableSingleRuntimeChunk()
    .cleanupOutputBeforeBuild()
    .enableBuildNotifications()
    .enablePostCssLoader()
    .enableSourceMaps(!Encore.isProduction())
    .enableVersioning(Encore.isProduction());

module.exports = Encore.getWebpackConfig();
