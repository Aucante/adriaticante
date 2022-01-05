<template>
  <v-container fluid class="mt-15">
    <v-container class="mb-10">
      <p
          class="
          d-flex
          justify-center
          display-3
          my-8
          secondary--text
          font-weight-light
        "
      >
        PROPERTIES
      </p>
      <v-divider></v-divider>
    </v-container>
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
        <v-card class="mx-auto" tile>
          <v-carousel
              height="375"
              delimiter-icon="mdi-square"
              hide-delimiter-background
              progress
              progress-color="secondary"
          >
            <v-carousel-item
                v-for="(property, i) in properties"
                :key="i"
                reverse-transition="fade-transition"
                transition="fade-transition"
            >
              <div class="d-flex justify-center">
                <v-img
                    class="white--text"
                    height="375"
                    width="50%"
                    :src="property.src"
                >
                </v-img>
                <v-img
                    class="d-flex align-center white--text"
                    height="375"
                    width="50%"
                    :src="imgBg"
                    gradient="to top right, rgba(0,0,0,1), rgba(0,0,0,1)"
                >
                  <v-row>
                    <v-col cols="10" offset="1">
                      <v-container>
                        <div class="d-flex justify-start">
                          <p class="text-h5 font-weight-light">
                            {{ property.city }}, {{ property.country }}
                          </p>
                        </div>
                        <div class="d-flex justify-start">
                          <p class="text-h5 font-weight-light">
                            {{ property.content }}
                          </p>
                        </div>
                        <div class="d-flex justify-start">
                          <p class="text-h5 font-weight-light">
                            {{ property.price }}
                          </p>
                        </div>
                        <div class="d-flex justify-center">
                          <v-btn
                              depressed
                              class="white--text rounded-0 mt-10"
                              outlined
                              shaped
                          >
                            ENTER HOME
                          </v-btn>
                        </div>
                      </v-container>
                    </v-col>
                  </v-row>
                </v-img>
              </div></v-carousel-item
            >
          </v-carousel>
        </v-card>
      </v-col>
    </v-row>
  </v-container>
</template>


<script>
export default {
  data() {
    return {
      imgBg: require('./../../assets/logo/backgroundLogo.jpg'),
      properties: [
        {
          city: "Trieste",
          country: "Italy",
          content: "House 4 bedrooms",
          price: 785000,
          src: require("./../../assets/img/property2.jpg"),
        },
        {
          city: "Ljubljana",
          country: "Slovenia",
          content: "Apartment 2 bedrooms",
          price: 525000,
          src: require("./../../assets/img/property5.jpg"),
        },
        {
          city: "Zagreb",
          country: "Croatia",
          content: "Villa 3 bedrooms",
          price: 380000,
          src: require("./../../assets/img/property4.jpg"),
        },
        {
          city: "Kotor",
          country: "Montenegro",
          content: "House 2 bedrooms",
          price: 185000,
          src: require("./../../assets/img/property6.jpg"),
        },
      ],
    };
  },
};
</script>