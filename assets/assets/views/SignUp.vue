<template>
  <div id="signUp">
    <spacing-container />
    <sign-up-form />
    <spacing-container />
    <footer-app />
  </div>
</template>

<script>
import SpacingContainer from "./SpacingContainer";
import SignUpForm from "./SignUp/SignUpForm";
export default {
  name: "SignUp",

  components: {
    SignUpForm,
    SpacingContainer
  },
};
</script>