<template>
  <div id="signIn">
    <spacing-container />
    <sign-in-form />
    <spacing-container />
  </div>
</template>

<script>
import SpacingContainer from "./SpacingContainer";
import SignInForm from "./SignIn/SignInForm";
export default {
  name: "SignIn",

  components: {
    SignInForm,
    SpacingContainer
  },
};
</script>