module.exports = {
    plugins: [
        require('postcss-sort-media-queries'),
        require('tailwindcss')('tailwind.config.js')
    ]
}