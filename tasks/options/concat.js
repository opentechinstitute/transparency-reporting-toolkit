module.exports = {
  concat: {
    files: [{
      src: ['src/scripts/home/*.js'],
      dest: 'dest/scripts/home.js'
    },
    {
      src: ['src/scripts/submit/*.js'],
      dest: 'dest/scripts/submit.js'
    },
    {
      src: ['src/scripts/explore/*.js'],
      dest: 'dest/scripts/explore.js'
    },
    {
      src: ['src/scripts/*.js'],
      dest: 'dest/scripts/main.js'
    }
  ],
  }
}
