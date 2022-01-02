<template>
  <nav>
    <v-card flat tile>
      <v-app-bar fixed color="white">
        <router-link to="/"
        ><img :src="logo" height="40" width="180" alt="Adriaticante"
        /></router-link>

        <v-spacer></v-spacer>
        <v-tabs
            align-with-title
            class="d-flex justify-end mr-5"
            :color="'font'"
        >
          <v-menu
              v-for="item in itemsNavigation"
              :key="item.title"
              offset-y
              tile
              nudge-width="100"
          >
            <template v-slot:activator="{ on }">
              <v-tab
                  v-on="on"
                  class="hidden-sm-and-down secondary--text"
                  router
                  :to="{ name: item.link }"
              >{{ item.title }}
              </v-tab>
            </template>
            <v-list>
              <!-- v-list-tile is changed to v-list-item -->
              <v-list-item
                  v-for="(dropdown, i) in item.dropdowns"
                  :key="i"
                  router
                  :to="dropdown.link"
              >
                <v-list-item-title>{{ dropdown.name }}</v-list-item-title>
              </v-list-item>
            </v-list>
          </v-menu>
        </v-tabs>
        <v-btn
            depressed
            color="secondary primary--text"
            class="font-weight-light rounded-0 hidden-sm-and-down mr-5"
            router
            :to="'SignIn'"
        >
          {{ btn }}
        </v-btn>

        <v-icon
            size="35"
            color="secondary"
            class="ml-3"
            @click="drawer = !drawer"
        >{{ mdiMenu }}</v-icon
        >
      </v-app-bar>
    </v-card>

    <!-- Navigation Drawer -->

    <v-navigation-drawer v-model="drawer" app width="410">
      <v-list dense class="display-2">
        <v-container class="d-flex justify-center">
          <router-link to="/">
            <img
                :src="logo"
                alt="Adriaticante"
                height="50"
                class="d-flex justify-center"
            />
          </router-link>
          <v-icon
              size="35"
              color="secondary"
              class="ml-3"
              @click="drawer = !drawer"
          >{{ mdiMenu }}</v-icon
          >
        </v-container>
        <v-container class="d-flex justify-center">
          <v-btn
              color="secondary primary--text"
              class="rounded-0 font-weight-light"
              elevation="5"
          >
            {{ btn }}
          </v-btn>
        </v-container>
        <v-divider></v-divider>

        <!-- List Item -->

        <v-list>
          <v-list-group
              v-for="(item, i) in itemsNavigation"
              :key="i"
              :prepend-icon="item.icon"
              color="secondary"
          >
            <template v-slot:activator>
              <v-list-item-content>
                <v-list-item-title
                    v-text="item.title"
                    class="overline text-uppercase"
                ></v-list-item-title>
              </v-list-item-content>
            </template>

            <v-list-item
                v-for="(dropdown, n) in item.dropdowns"
                :key="n"
                router
                :to="dropdown.link"
            >
              <v-list-item-content>
                <v-list-item-title v-text="dropdown.name"></v-list-item-title>
              </v-list-item-content>
            </v-list-item>
          </v-list-group>
        </v-list>
      </v-list>

      <v-divider></v-divider>
    </v-navigation-drawer>
  </nav>
</template>

<script>
import logo from "./../assets/logo/adriaticante.png";

export default {
  name: "Navbar",
  data() {
    return {
      title: "Adriaticante",
      drawer: false,
      logo: logo,
      btn: "Sign In",
      mdiMenu: "mdi-sort-variant",
      itemsNavigation: [
        {
          title: "Real Estate",
          icon: "mdi-office-building-marker-outline",
          dropdowns: [
            {
              name: "Apartments",
              link: "Properties",
            },
            {
              name: "New Building",
              link: "Properties",
            },
            {
              name: "Houses",
              link: "Properties",
            },
            {
              name: "Villas",
              link: "Properties",
            },
            {
              name: "Plots",
              link: "Properties",
            },
          ],
          list: false,
        },
        {
          title: "About us",
          icon: "mdi-account",
          link: "",
          list: false,
          dropdowns: [
            {
              name: "About Us",
              link: "About",
            },
          ],
        },
        {
          title: "Contact",
          icon: "mdi-contacts",
          link: "",
          list: false,
          dropdowns: [
            {
              name: "Contact",
              link: "Contact",
            },
          ],
        },
      ],
    };
  },
};
</script>
