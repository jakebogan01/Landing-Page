module.exports = {
  purge: [],
  darkMode: false, // or 'media' or 'class'
  theme: {
      extend: {
        backgroundColor: theme => ({
          'blue-950': '#111827',
          'gray-250': '#E6E6E6',
        }),
        maxWidth: {
          'screen-3xl': '120rem',
        },
        minWidth: {
          '581': '36.3125rem',
          '605': '37.8125rem',
          'screen-3xl': '120rem',
        },
        width: {
          '48': '48.5rem',
          '581': '36.3125rem',
        },
        height: {
          '1248': '78rem',
        },
        margin: {
          '123': '7.6875rem',
          '439': '27.4375rem',
        },
        fontSize: {
          '22': '1.375rem',
          '58': '3.625rem',
        },
        textColor: {
          'orange-550': '#F07D19',
          'blue-450': '#0798D8',
          'gray-750': '#404040',
          'gray-350': '#8D8D8D',
        },
        borderRadius: {
          'rg': '0.3125rem',
          '4xl': '2.5rem',
        },
        placeholderColor: {
          'gray-250': '#6a707d',
        }
      },
  },
  variants: {
      extend: {},
  },
  plugins: [],
}