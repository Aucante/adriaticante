<template>
  <div id="about">
    <about-main />
    <about-description />
    <about-skills />
    <about-figures />
    <newsletter />
  </div>
</template>

<script>
import AboutMain from "./About/AboutMain";
import AboutDescription from "./About/AboutDescription";
import AboutSkills from "./About/AboutSkills";
import AboutFigures from "./About/AboutFigures";
import Newsletter from "../../components/Newsletter/Newsletter";
export default {
  name: "About",

  components: {
    Newsletter,
    AboutFigures,
    AboutSkills,
    AboutDescription,
    AboutMain
  },
};
</script>