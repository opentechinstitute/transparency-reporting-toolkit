module.exports = {
  watch: {
    files: ['src/styles/**/*.scss', 'src/scripts/**/*.js', 'src/**/*.hbs'],
    tasks: ['assemble', 'sass', 'concat', 'csslint'],
  }
}
