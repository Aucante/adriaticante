<template>
  <v-container fluid>
    <v-card
        color="transparent"
        class="d-flex align-center"
        height="500"
        outlined
    >
      <v-container>
        <v-row>
          <v-col
              v-for="(contact, i) in contacts"
              :key="i"
              cols="12"
              md="4"
              lg="4"
              xl="4"
              class="d-flex justify-center"
          >
            <v-container
                class="justify-center px-5"
                color="primary"
                width="400"
                outlined
            >
              <v-icon
                  data-aos="fade-right"
                  color="secondary"
                  size="110"
                  class="d-flex justify-center mb-4"
              >{{ contact.icon }}</v-icon
              >
              <div data-aos="fade-left" class="mt-7">
                <p class="d-flex justify-center title font-weight-light">
                  {{ contact.content }}
                </p>
              </div>
            </v-container>
            <v-divider
                v-show="contact.divider"
                class="hidden-sm-and-down secondary"
                vertical
            ></v-divider>
          </v-col>
        </v-row>
      </v-container>
    </v-card>
  </v-container>
</template>

<script>
export default {
  data() {
    return {
      contacts: [
        {
          id: 1,
          icon: "mdi-email",
          content: "adriaticante@adriaticante.com",
          divider: true,
        },
        {
          id: 2,
          icon: "mdi-cellphone",
          content: "+33449911775",
          divider: true,
        },
        {
          id: 3,
          icon: "mdi-map-marker-outline",
          content: "Trieste ITALY",
          divider: false,
        },
      ],
    };
  },
};
</script>