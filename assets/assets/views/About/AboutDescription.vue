<template>
  <v-container fluid>
    <v-row>
      <v-col
          cols="12"
          sm="12"
          md="4"
          lg="4"
          xl="4"
          class="d-flex align-center primary"
      >
        <v-col cols="10" offset="1">
          <v-card height="400" tile>
            <v-img
                class="white--text align-end"
                height="400"
                :src="description.picture"
                gradient="to top right, rgba(100,115,201,.1), rgba(0,0,0,.7)"
            >
            </v-img>
          </v-card>
        </v-col>
      </v-col>
      <v-col
          cols="12"
          sm="12"
          md="8"
          lg="8"
          xl="8"
          class="d-flex align-center primary"
      >
        <v-col cols="10" offset="1">
          <v-card
              height="700"
              class="d-flex align-center"
              color="transparent"
              outlined
          >
            <div>
              <div class="display-1 font-weight-light mb-5">
                {{ description.title }}
              </div>
              <p class="subtitle font-weight-light">
                {{ description.content1 }}
              </p>
              <p class="subtitle font-weight-bold secondary--text">
                {{ description.content2 }}
              </p>
            </div>
          </v-card>
        </v-col>
      </v-col>
    </v-row>
  </v-container>
</template>

<script>
export default {
  data() {
    return {
      description: {
        title: "OUR HERITAGE",
        content1:
            "Lorem ipsum dolor sit, amet consectetur adipisicing elit. Ea velnecessitatibus nesciunt suscipit provident natus asperioreslaudantium, adipisci perspiciatis laboriosam neque sed odiorecusandae autem obcaecati placeat dolore. Nihil, commodi. Loremipsum dolor sit amet consectetur adipisicing elit. Deseruntdolorem pariatur nulla harum dolorum veritatis corruptivoluptatibus atque soluta, delectus suscipit numquam, fugiatipsa placeat obcaecati nesciunt neque sint itaque? Lorem ipsumdolor, sit amet consectetur adipisicing elit. Autem nulla,adipisci dolorem tempore nam quas eius ipsam blanditiisaccusamus saepe nostrum cum obcaecati vitae esse, accusantium",
        content2:
            "Lorem ipsum dolor sit, amet consectetur adipisicing elit. Ea velnecessitatibus nesciunt suscipit provident natus asperioreslaudantium, adipisci perspiciatis laboriosam neque sed odiorecusandae autem obcaecati placeat dolore. Nihil, commodi. Loremipsum dolor sit amet consectetur adipisicing elit. Deseruntdolorem pariatur nulla harum dolorum veritatis corruptivoluptatibus atque soluta, delectus suscipit numquam, fugiatipsa placeat obcaecati nesciunt neque sint itaque? Lorem ipsumdolor, sit amet consectetur adipisicing elit. Autem nulla,adipisci dolorem tempore nam quas eius ipsam blanditiisaccusamus saepe nostrum cum obcaecati vitae esse, accusantium",
        picture: require("./../../img/adriatic1.jpg"),
      },
    };
  },
};
</script>