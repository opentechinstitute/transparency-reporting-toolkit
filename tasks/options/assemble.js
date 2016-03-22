module.exports = {
  assemble: {
    options: {
      // collections: [{
      //   name: 'home',
      //   sortby: 'posted',
      //   sortorder: 'descending'
      // },
      // {
      //   name: 'portfolio',
      //   sortby: 'posted',
      //   sortorder: 'descending',
      // },
      // {
      //   name: 'other',
      //   sortby: 'posted',
      //   sortorder: 'descending',
      // }],
      helpers: ['./src/template/helpers/**/*.js'],
      layout: 'page.hbs',
      layoutdir: './src/template/layouts/',
      partials: './src/template/partials/**/*'
    },
    files: [{
      cwd: './src/content/',
      dest: './dest/',
      expand: true,
      src: '**/*.hbs'
    }]
  }
}
