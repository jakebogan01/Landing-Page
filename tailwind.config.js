module.exports = {
  purge: [],
  darkMode: false, // or 'media' or 'class'
  theme: {
      extend: {
        backgroundColor: theme => ({
          'blue-950': '#111827',
          'gray-250': '#E6E6E6',
          'purple-750': '#6246F5',
        }),
        maxWidth: {
          'screen-3xl': '120rem',
        },
        minWidth: {
          '460': '28.75rem',
          '500': '31.25rem',
          '550': '34.375rem',
          '581': '36.3125rem',
          '605': '37.8125rem',
          'screen-3xl': '120rem',
        },
        width: {
          '48': '48.5rem',
          '226': '14.125rem',
          '460': '28.75rem',
          '581': '36.3125rem',
          '605': '37.8125rem',
          '835': '52.1875rem',
        },
        inset: {
          '665': '-41.5625rem',
          '765': '-47.8125rem',
          '865': '-54.0625rem',
        },
        height: {
          '1248': '78rem',
        },
        margin: {
          'negative': '-12.5rem',
          '123': '7.6875rem',
          '439': '27.4375rem',
        },
        fontSize: {
          '22': '1.375rem',
          '45': '2.8125rem',
          '58': '3.625rem',
          '73': '4.5625rem',
        },
        textColor: {
          'orange-550': '#F07D19',
          'blue-450': '#0798D8',
          'gray-750': '#404040',
          'gray-350': '#8D8D8D',
          'blue-250': '#00FFC2',
        },
        borderRadius: {
          'rg': '0.3125rem',
          '2xl-1/2': '1.25rem',
          '4xl': '2.5rem',
        },
        placeholderColor: {
          'gray-250': '#6a707d',
        },
        screens: {
          'small-desktop': '106.25rem',
          'desktop': '120rem',
        },
        boxShadow: {
          'extra-small-cards': '-8px 13px 15px rgba(0,0,0,0.21)',
          'long-cards': '-15px 15px 13px rgba(0,0,0,0.17)',
          'small-cards': '-19px 18px 35px rgba(0,0,0,0.17)',
          'big-cards': '-23px 30px 60px rgba(0,0,0,0.17)',
          none: 'none',
        }
      },
  },
  variants: {
      extend: {},
  },
  plugins: [],
}