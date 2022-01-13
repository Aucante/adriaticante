import Vue from 'vue'
import Vuetify from 'vuetify'
import 'vuetify/dist/vuetify.min.css'
import '@mdi/font/css/materialdesignicons.css'

import colors from 'vuetify/lib/util/colors';


Vue.use(Vuetify)

const opts = {
    icons: {
        iconfont: 'mdi', // default - only for display purposes
    },
    theme: {
        themes: {
            light: {
                primary: colors.teal.lighten5, //#E0F2F1
                secondary: colors.blueGrey.darken4, //#263238
                light: colors.blueGrey.lighten4, //#CFD8DC
                font: colors.blueGrey.lighten1, //#78909C
                medium: colors.blueGrey.lighten2, //#90A4AE
            },
        }
    }
}

export default new Vuetify(opts)