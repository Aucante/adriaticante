<template>
  <v-container fluid class="mt-15">
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
        <v-card data-aos="fade-right" class="mx-auto" tile outlined>
          <v-img
              class="white--text align-center"
              height="375"
              :src="img"
          >
            <v-row>
              <v-col cols="12" md="6" lg="6" xl="6">
                <v-container fluid class="gradient">
                  <div class="d-flex justify-center">
                    <p class="text-h6 secondary--text">
                      {{ subtitle }}
                    </p>
                  </div>
                  <div class="d-flex justify-center my-10">
                    <p class="text-h3 font-weight-light secondary--text">
                      {{ title }}
                    </p>
                  </div>
                  <div class="d-flex justify-center">
                    <v-btn
                        depressed
                        class="secondary--text rounded-0"
                        outlined
                        shaped
                        x-large
                    >
                      {{ btn }}
                    </v-btn>
                  </div>
                </v-container>
              </v-col>
            </v-row>
          </v-img>
        </v-card>
      </v-col>
    </v-row>
  </v-container>
</template>

<script>
export default {
  data() {
    return {
      title: "MORE PROPERTIES",
      subtitle: "NEED TO SEE MORE PROPERTIES?",
      btn: "DISCOVER",
      img: require("./../../img/property7.jpg"),
    };
  },
};
</script>

<style scoped>
.gradient {
  width: 100%;
  height: 100%;
  padding-top: 15%;
  padding-bottom: 15%;
  opacity: 0.7;
  background-color: white;
}
</style>