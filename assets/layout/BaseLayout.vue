<template>
  <v-app v-cloak>
    <v-app-bar short app >BaseLayout</v-app-bar>
    <navbar />
    <v-main>
      <v-container fluid>
        <router-view></router-view>
      </v-container>
    </v-main>
    <footer-app />
  </v-app>
</template>

<script>
import Navbar from "./../components/Navbar"
import FooterApp from "../components/FooterApp"

export default {
  name: 'BaseLayout',
  components: {
    FooterApp,
    Navbar,
  }
}
</script>