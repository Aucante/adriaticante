<template>
  <v-app v-cloak>
    <v-app-bar short app >BaseLayout</v-app-bar>
    <navbar />
    <v-main>
      <v-container fluid>
        <router-view></router-view>
      </v-container>
    </v-main>
  </v-app>
</template>

<script>
import Navbar from "./../components/Navbar"

export default {
  name: 'BaseLayout',
  components: {
    Navbar,
  }
}
</script>