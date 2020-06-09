module.exports = {
  dist: {
    options: {
      // cssmin will minify later
      style: 'expanded',
      trace : 'true'
    },
    files: {
      'css/style.css': ['scss/style.scss']
    }
  }
}
