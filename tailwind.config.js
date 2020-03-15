module.exports = {
  theme: {
    fontFamily: {
      'sans': 'Montserrat, sans-serif -apple-system, BlinkMacSystemFont',
    },
    extend: {}
  },
  variants: {},
  corePlugins: {
    container: false,
  },
  plugins: [
    require('tailwind-bootstrap-grid')({
      gridGutterWidth: '32px',
    })
  ]
}