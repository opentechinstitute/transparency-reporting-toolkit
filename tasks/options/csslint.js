module.exports = {
  csslint: {
    options: {
      // CSSLint details here https://github.com/CSSLint/csslint/wiki/Rules
      // false == warnings, 2 == errors
      import: 2,
      important: 2,
      zeroUnits: false,
      overqualifiedElements: false,
      shorthand: false,
      emptyRules: 2,
    },
    src: ['./dest/styles/main.css']
  }
}