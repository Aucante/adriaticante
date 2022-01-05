<template>
  <div id="contact">
    <carousel />
    <discover />
    <gradient-primary-top />
    <explorer />
    <gradient-primary-bottom />
    <carousel-properties-last-added />
    <home-other-properties />
    <home-about />
    <home-contact />
    <newsletter />
  </div>
</template>

<script>
import Carousel from "./Homepage/Carousel.vue";
import Newsletter from "./../../components/Newsletter/Newsletter";
import Discover from "./Homepage/Discover";
import Explorer from "./Homepage/Explorer";
import GradientPrimaryTop from "../../components/Gradient/GradientPrimaryTop";
import GradientPrimaryBottom from "../../components/Gradient/GradientPrimaryBottom";
import HomeAbout from "./Homepage/HomeAbout";
import HomeContact from "./Homepage/HomeContact";
import HomeOtherProperties from "./Homepage/HomeOtherProperties";
import CarouselPropertiesLastAdded from "../../components/Carousel/CarouselPropertiesLastAdded";
export default {
  name: "Contact",

  components: {
    CarouselPropertiesLastAdded,
    HomeOtherProperties,
    HomeContact,
    GradientPrimaryBottom,
    GradientPrimaryTop,
    Explorer,
    Discover,
    Carousel,
    HomeAbout,
    Newsletter,
  },
};
</script>