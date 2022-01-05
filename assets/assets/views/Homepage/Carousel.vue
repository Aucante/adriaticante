<template>
  <v-carousel
      height="900"
      cycle
      show-arrows-on-hover
      delimiter-icon="mdi-minus"
  >
    <v-carousel-item
        v-for="(slide, i) in slides"
        :key="i"
        :src="slide"
        gradient="to top left, rgba(100,115,201,.1), rgba(0,0,0,.9)"
    >
      <v-row>
        <v-col
            cols="10"
            sm="5"
            md="5"
            lg="5"
            xl="5"
            class="d-flex justify-start"
        >
          <v-container class="d-flex justify-center fill-height ml-10 mt-16">
            <v-responsive
                class="d-flex align-center mx-auto mt-10"
                height="100%"
                max-width="700"
                width="100%"
            >
              <v-row>
                <v-container>
                  <base-body class="display-2 white--text">
                    {{ slide.content }}
                  </base-body>
                </v-container>
              </v-row>
              <v-row>
                <v-container>
                  <v-btn large class="rounded-0 white secondary--text">
                    {{ slide.btn }}
                  </v-btn>
                </v-container>
              </v-row>
            </v-responsive>
          </v-container>
        </v-col>
      </v-row>
    </v-carousel-item>
  </v-carousel>
</template>

<script>
export default {
  data() {
    return {
      slides: [
        {
          src: require("./../../img/adriatic1.jpg"),
          content: "DISCOVER ADRIATIC",
          colorText: "white",
          btn: "Discover",
        },
        {
          src: require("./../../img/property1.jpg"),
          content: "PURCHASE PROPERTIES",
          colorText: "white",
          btn: "Purchase",
        },
        {
          src: require("./../../img/kotor1.jpg"),
          content: "CONTACT US",
          colorText: "white",
          btn: "Contact",
        },
      ],
    };
  },
};
</script>
