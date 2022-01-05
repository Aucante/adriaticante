<template>
  <v-container fluid>
    <v-row>
      <v-col cols="12" sm="12" md="8" lg="8" xl="8">
        <v-row>
          <v-card height="1200" tile outlined>
            <v-img class="white--text" height="1200" :src="map"> </v-img>
          </v-card>
        </v-row>
      </v-col>
      <v-col cols="12" sm="12" md="4" lg="4" xl="4">
        <v-row>
          <v-card height="300" tile outlined
          ><v-img
              class="d-flex align-center white--text"
              height="300"
              :src="search"
              gradient="to top right, rgba(0,0,0,0.7), rgba(0.9,0.9,0.9,.9)"
          >
            <v-row>
              <v-col cols="8" offset="2">
                <v-container>
                  <div>
                    <div class="mb-4">
                      <v-text-field
                          label="Search"
                          color="white"
                          append-icon="mdi-magnify"
                          dark
                          single-line
                      ></v-text-field>
                    </div>
                    <div>
                      <v-chip
                          v-for="chip in chips"
                          :key="chip.id"
                          color="white"
                          class="ma-1"
                      >{{ chip.content }}</v-chip
                      >
                    </div>
                  </div>
                </v-container>
              </v-col>
            </v-row>
          </v-img></v-card
          >
        </v-row>
        <v-row v-for="property in properties" :key="property.id">
          <v-card height="300" tile outlined>
            <v-img
                class="d-flex align-end white--text"
                height="300"
                :src="property.img"
                gradient="to top right, rgba(100,115,201,.1), rgba(0,0,0,.7)"
            >
              <v-container class="subtitle">
                <div class="d-flex justify-center text-h6 font-weight-light">
                  {{ property.content }}
                </div>
                <div
                    class="
                    d-flex
                    justify-center
                    medium--text
                    text-h5
                    font-weight-light
                  "
                >
                  <v-icon color="medium" size="40" class="mr-2">{{
                      mdi
                    }}</v-icon>
                  {{ property.city }}, {{ property.country }}
                </div>
              </v-container>
            </v-img>
          </v-card>
        </v-row>
      </v-col>
    </v-row>
  </v-container>
</template>

<script>
export default {
  data() {
    return {
      map: require("./../../img/map.png"),
      search: require("./../../img/adriatic1.jpg"),
      mdi: "mdi-map-marker-outline",
      properties: [
        {
          id: 1,
          city: "Trieste",
          country: "Italy",
          content: "Flat with balcony in front of Adriatic",
          img: require("./../../img/property1.jpg"),
        },
        {
          id: 2,
          city: "Trieste",
          country: "Italy",
          content: "Flat with balcony in front of Adriatic",
          img: require("./../../img/property7.jpg"),
        },
        {
          id: 3,
          city: "Trieste",
          country: "Italy",
          content: "Flat with balcony in front of Adriatic",
          img: require("./../../img/property5.jpg"),
        },
      ],
      chips: [
        { id: 1, content: "All" },
        { id: 2, content: "Sold" },
        { id: 3, content: "New Developments" },
        { id: 4, content: "Fully Leased" },
        { id: 5, content: "For Lease" },
      ],
    };
  },
};
</script>

<style scoped>
.subtitle {
  background-color: rgba(0, 0, 0, 0.7);
  height: 90px;
}
</style>