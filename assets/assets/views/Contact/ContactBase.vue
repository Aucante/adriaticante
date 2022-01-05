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
                  {{ contact.title }}
                </div>
                <p class="text-h6 font-weight-light secondary--text">
                  {{ contact.content }}
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
            <v-card class="d-flex align-center" tile>
              <v-img
                  height="250"
                  :src="contact.picture"
                  gradient="to top right, rgba(100,115,201,.1), rgba(0,0,0,.7)"
              >
              </v-img>
            </v-card>
          </v-col>
        </v-row>
      </v-col>
    </v-row>
  </v-container>
</template>

<script>
export default {
  data() {
    return {
      contact: {
        title: "CONTACT US",
        content:
            "Lorem ipsum dolor sit amet, consectetur adipisicing elit. Est consequatur tenetur architecto distinctio quis corporis cupiditate fugit minus, placeat impedit, eaque exercitationem hic maxime temporibus et qui, quo repellat quia!",
        picture: require("./../../img/contact.jpg"),
      },
    };
  },
};
</script>