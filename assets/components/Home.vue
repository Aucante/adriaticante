<template>
  <v-alert
      type="success"
  >{{ message }}test</v-alert>
</template>

<script>
export default {
  name: 'Home',
  props: {},
  data: () => ({
    message: 'Home component vue',
  }),
}
</script>