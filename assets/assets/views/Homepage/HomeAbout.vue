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
              height="550"
              :src="img"
              gradient="to top right, rgba(200,200,200,.5), rgba(200,200,200,.5)"
          >
            <v-row>
              <v-col cols="10" offset="1">
                <v-container>
                  <div class="d-flex justify-center">
                    <p class="text-h6 font-weight-light secondary--text">
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
      title: "CONTACT US",
      subtitle: "NEED FOR SUPPORT?",
      btn: "CONTACT",
      img: require("./../../img/contact1.jpg"),
    };
  },
};
</script>