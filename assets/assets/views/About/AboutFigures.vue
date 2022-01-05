<template>
  <v-container fluid class="secondary my-10 py-15">
    <v-row>
      <v-col
          v-for="asset in assets"
          :key="asset.id"
          cols="6"
          sm="3"
          md="3"
          lg="3"
          xl="3"
      >
        <v-card
            data-aos="flip-up"
            class="d-flex align-center justify-center"
            color="transparent"
            height="400"
            outlined
        >
          <div>
            <div
                class="
                d-flex
                justify-center
                display-4
                white--text
                font-weight-thin
                mb-10
              "
            >
              {{ asset.figure }}
            </div>
            <v-divider class="white"></v-divider>
            <div
                class="
                d-flex
                justify-center
                display-2
                white--text
                font-weight-thin
                mt-10
              "
            >
              {{ asset.content }}
            </div>
          </div>
        </v-card>
      </v-col>
    </v-row>
  </v-container>
</template>

<script>
export default {
  data() {
    return {
      assets: [
        {
          id: 1,
          figure: 4,
          content: "Countries",
        },
        {
          id: 2,
          figure: 17,
          content: "Cities",
        },
        {
          id: 3,
          figure: 82,
          content: "Projects",
        },
        {
          id: 4,
          figure: 10,
          content: "Years",
        },
      ],
    };
  },
};
</script>