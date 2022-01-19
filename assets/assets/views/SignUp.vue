<template>
  <div id="signUp">
    <spacing-container />
    <sign-up-form />
    <user-recuperate />
    <spacing-container />
    <footer-app />
  </div>
</template>

<script>
import SpacingContainer from "./SpacingContainer";
import SignUpForm from "./SignUp/SignUpForm";
import UserRecuperate from "./SignUp/UserRecuperate";
export default {
  name: "SignUp",

  components: {
    SignUpForm,
    SpacingContainer,
    UserRecuperate
  },
};
</script>