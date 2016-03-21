module.exports = {
  watch: {
    files: ['src/styles/**/*.scss', 'src/scripts/**/*.js'],
    tasks: ['sass', 'concat', 'uglify', 'csslint'],
  }
}
