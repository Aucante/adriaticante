<template>
  <v-container fluid>
    <v-row>
      <v-col cols="12" lg="8" xl="6" offset-lg="2" offset-xl="3">
        <v-card color="transparent" class="d-flex align-center" outlined tile>
          <v-container>
            <v-container class="my-5">
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
                {{ title }}
              </p>
              <v-divider></v-divider>
            </v-container>

            <v-container>
              <v-row>
                <v-col
                    v-for="card in cards"
                    :key="card.id"
                    cols="12"
                    sm="12"
                    md="6"
                    lg="6"
                    xl="6"
                >
                  <v-hover v-slot="{ hover }">
                    <v-card
                        data-aos="flip-up"
                        data-aos-duration="1000"
                        class="mx-auto my-5"
                        color="transparent"
                        height="250"
                        max-width="400"
                        outlined
                        tile
                    >
                      <v-img
                          class="white--text align-end"
                          height="250"
                          :src="card.src"
                      >
                        <v-expand-transition>
                          <div
                              v-if="hover"
                              class="
                              d-flex
                              transition-fast-in-fast-out
                              secondary
                              v-card--reveal
                              white--text
                            "
                              style="height: 100%"
                          >
                            <div>
                              <p
                                  class="
                                  d-flex
                                  justify-center
                                  display-3
                                  font-weight-thin
                                "
                              >
                                {{ card.country }}
                              </p>
                              <div class="d-flex justify-center mt-10">
                                <v-btn class="rounded-0">Discover</v-btn>
                              </div>
                            </div>
                          </div>
                        </v-expand-transition>
                      </v-img>
                    </v-card>
                  </v-hover>
                </v-col>
              </v-row>
            </v-container>
          </v-container>
        </v-card>
      </v-col>
    </v-row>
  </v-container>
</template>

<script>
export default {
  data() {
    return {
      title: "DISCOVER",
      btn: "Discover",
      cards: [
        {
          id: 1,
          city: "Dubrovnik",
          country: "Croatia",
          src: require("./../../img/dubrovnik1.jpg"),
        },
        {
          id: 2,
          city: "Ljubljana",
          country: "Slovenia",
          src: require("./../../img/ljubljana1.jpg"),
        },
        {
          id: 3,
          city: "Roma",
          country: "Italy",
          src: require("./../../img/italy1.jpg"),
        },
        {
          id: 4,
          city: "Kotor",
          country: "Montenegro",
          src: require("./../../img/kotor1.jpg"),
        },
      ],
    };
  },
};
</script>

<style>
.v-card--reveal {
  align-items: center;
  bottom: 0;
  justify-content: center;
  opacity: 0.8;
  position: absolute;
  width: 100%;
}
</style>