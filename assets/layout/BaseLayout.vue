<template>
  <v-app v-cloak>
    <v-app-bar short app >Symfony + Vuetify !!! OK</v-app-bar>
    <v-main>
      <v-container fluid>
        <router-view></router-view>
      </v-container>
    </v-main>
  </v-app>
</template>

<script>
export default {
  name: 'BaseLayout',
}
</script>