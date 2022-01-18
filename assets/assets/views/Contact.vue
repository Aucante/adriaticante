<template>
  <div id="contact">
    <contact-base />
    <gradient-primary-top />
    <contact-form />
    <contact-recuperate />
    <gradient-primary-bottom />
    <contact-details />
    <newsletter />
  </div>
</template>

<script>
import ContactBase from "./Contact/ContactBase.vue";
import ContactForm from "./Contact/ContactForm.vue";
import ContactDetails from "./Contact/ContactDetails.vue";
import GradientPrimaryBottom from "./../../components/Gradient/GradientPrimaryBottom";
import GradientPrimaryTop from "./../../components/Gradient/GradientPrimaryTop";
import Newsletter from "./../../components/Newsletter/Newsletter";
import ContactRecuperate from "./Contact/ContactRecuperate";
export default {
  name: "Contact",

  components: {
    ContactRecuperate,
    ContactBase,
    ContactForm,
    ContactDetails,
    GradientPrimaryBottom,
    GradientPrimaryTop,
    Newsletter,
  },
};
</script>