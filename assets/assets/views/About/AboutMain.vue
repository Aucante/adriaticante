<template>
  <v-container fluid class="my-10">
    <v-row>
      <v-col cols="10" offset="1">
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
                height="400"
                class="d-flex align-center"
                outlined
                color="transparent"
            >
              <div>
                <div class="display-2 font-weight-light secondary--text my-10">
                  ABOUT US
                </div>
                <p class="font-weight-light secondary--text">
                  Lorem ipsum dolor sit amet, consectetur adipisicing elit. Est
                  consequatur tenetur architecto distinctio quis corporis
                  cupiditate fugit minus, placeat impedit, eaque exercitationem
                  hic maxime temporibus et qui, quo repellat quia!
                </p>
              </div>
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
      picture: require("./../../img/adriatic1.jpg"),
    };
  },
};
</script>