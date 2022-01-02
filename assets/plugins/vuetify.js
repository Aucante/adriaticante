import Vue from 'vue'
import Vuetify from 'vuetify'
import 'vuetify/dist/vuetify.min.css'

import colors from 'vuetify/lib/util/colors';


Vue.use(Vuetify)

const opts = {
    theme: {
        themes: {
            light: {
                primary: colors.blueGrey.lighten5, //#ECEFF1
                secondary: colors.blueGrey.darken4, //#263238
                light: colors.blueGrey.lighten4, //#CFD8DC
                font: colors.blueGrey.lighten1, //#78909C
                medium: colors.blueGrey.lighten2, //#90A4AE
            },
        }
    }
}

export default new Vuetify(opts)