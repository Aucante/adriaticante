<template>
  <v-container>
    <v-row>
      <v-col cols="12">
        <v-card
            class="d-flex justify-center my-12"
            color="transparent"
            outlined
        >
          <v-row>
            <v-col
                cols="10"
                md="6"
                lg="4"
                xl="4"
                offset-md="3"
                offset-lg="4"
                offset-xl="4"
                offset="1"
            >
              <v-container class="my-5">
                <p
                    class="
                    d-flex
                    justify-center
                    display-3
                    mb-10
                    secondary--text
                    font-weight-light
                  "
                >
                  Sign In
                </p>
                <v-divider></v-divider>
              </v-container>
              <div class="d-flex justify-center secondary--text">
                <p>ID / EMAIL</p>
              </div>
              <v-text-field
                  v-model="title"
                  :rules="[rules.required, rules.counter]"
                  outlined
              ></v-text-field>
              <div class="d-flex justify-center secondary--text">
                <p>PASSWORD</p>
              </div>
              <v-text-field
                  v-model="password"
                  :append-icon="show1 ? 'mdi-eye' : 'mdi-eye-off'"
                  :rules="[rules.required, rules.min]"
                  :type="show1 ? 'text' : 'password'"
                  name="input-10-1"
                  hint="At least 8 characters"
                  outlined
                  counter
                  @click:append="show1 = !show1"
              ></v-text-field>
              <v-container class="d-flex justify-center">
                <v-btn color="secondary" class="rounded-0" @click="submit">
                  Submit
                </v-btn>
              </v-container>
              <v-container class="d-flex justify-center">
                <v-btn color="secondary" text router :to="'SignUp'"
                >No account? Sign Up here</v-btn
                >
              </v-container>
            </v-col>
          </v-row>
        </v-card>
      </v-col>
    </v-row>
  </v-container>
</template>

<script>
export default {
  data() {
    return {
      show1: false,
      password: "Password",
      rules: {
        required: (value) => !!value || "Required.",
        min: (v) => v.length >= 8 || "Min 8 characters",
        emailMatch: () => `The email and password you entered don't match`,
        title: "Preliminary report",
        email: "",
        rules: {
          required: (value) => !!value || "Required.",
          counter: (value) => value.length <= 20 || "Max 20 characters",
          email: (value) => {
            const pattern =
                /^(([^<>()[\]\\.,;:\s@"]+(\.[^<>()[\]\\.,;:\s@"]+)*)|(".+"))@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}])|(([a-zA-Z\-0-9]+\.)+[a-zA-Z]{2,}))$/;
            return pattern.test(value) || "Invalid e-mail.";
          },
        },
      },
    };
  },
  methods: {
    submit() {
      this.formHasErrors = false;

      Object.keys(this.form).forEach((f) => {
        if (!this.form[f]) this.formHasErrors = true;

        this.$refs[f].validate(true);
      });
    },
  },
};
</script>