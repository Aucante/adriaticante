<template>
  <v-container fluid>
    <v-row>
      <v-col
          cols="12"
          sm="10"
          md="10"
          lg="10"
          xl="10"
          offset-sm="1"
          offset-md="1"
          offset-lg="1"
          offset-xl="1"
      >
        <v-row>
          <v-col
              cols="12"
              sm="4"
              md="4"
              lg="4"
              xl="4"
              class="d-flex align-center"
          >
            <v-card
                color="transparent"
                class="d-flex align-center"
                height="500"
                outlined
            >
              <div>
                <div class="display-2 font-weight-light secondary--text my-10">
                  {{ user.title }}
                </div>
                <p class="text-h6 font-weight-light secondary--text">
                  {{ user.content }}
                </p>
              </div>
            </v-card>
          </v-col>
          <v-col
              cols="12"
              sm="12"
              md="5"
              lg="5"
              xl="5"
              offset-md="3"
              offset-lg="3"
              offset-xl="3"
              class="d-flex align-center"
          >
            <v-btn @click="submit">
              bouton
            </v-btn>
          </v-col>
        </v-row>
      </v-col>
    </v-row>
  </v-container>
</template>

<script>
import axios from '../../../api/axios'

export default {
  data() {
    return {
      user: {
        title: "Recup en BDD",
        content: "",
      },
    };
  },
  methods: {
    submit() {
      axios.get('/user?ID=19')
          .then((response) => {
            // handle success
            console.log(response);
            console.debug(this.user);
            this.user.content = response.data.user.email
          })
          .catch(function (error) {
            // handle error
            console.log(error);
          })
          .then(function () {
            // always executed
          });
    }
  }
};
</script>