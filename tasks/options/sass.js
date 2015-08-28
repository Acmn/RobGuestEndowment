module.exports = {
  dist: {
    options: {
      // cssmin will minify later
      style: 'expanded'
    },
    files: {
      'css/style.css': 'scss/style.scss'
    }
  }
}
