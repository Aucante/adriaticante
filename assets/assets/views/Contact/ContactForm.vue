<template>
  <v-container fluid class="primary">
    <v-card
        color="transparent"
        class="d-flex align-center"
        height="700"
        outlined
    >
      <v-container>
        <v-row>
          <v-col
              cols="12"
              sm="10"
              md="10"
              lg="10"
              xl="8"
              offset-sm="1"
              offset-md="1"
              offset-lg="1"
              offset-xl="2"
          >
            <v-row>
              <v-col cols="6" sm="6" md="4" lg="4" xl="4">
                <v-text-field v-model="firstName" label="First Name"></v-text-field>
                <div v-for="(error, i) of v$.firstName.$errors" :key="i">
                  <p class="red--text">
                    {{ error.$message }}
                  </p>
                </div>
              </v-col>
              <v-col cols="6" sm="6" md="4" lg="4" xl="4">
                <v-text-field v-model="lastName" label="Last Name"></v-text-field>
                <div v-for="(error, i) of v$.lastName.$errors" :key="i">
                  <p class="red--text">
                    {{ error.$message }}
                  </p>
                </div>
              </v-col>
            </v-row>
            <v-row>
              <v-col cols="6" sm="6" md="4" lg="4" xl="4">
                <v-text-field v-model="email" label="Email"></v-text-field>
                <div v-for="(error, i) of v$.email.$errors" :key="i">
                  <p class="red--text">
                    {{ error.$message }}
                  </p>
                </div>
              </v-col>
              <v-col cols="6" sm="6" md="4" lg="4" xl="4">
                <v-text-field v-model="phone" label="Phone"></v-text-field>
                <div v-for="(error, i) of v$.phone.$errors" :key="i">
                  <p class="red--text">
                    {{ error.$message }}
                  </p>
                </div>
              </v-col>
            </v-row>
            <v-row>
              <v-col cols="12" sm="12" md="8" lg="8" xl="8">
                <v-textarea
                    v-model="message"
                    label="Message"
                    color="secondary"
                    append-icon="mdi-message"
                    clearable
                    clear-icon="mdi-close-circle"
                ></v-textarea>
                <div v-for="(error, i) of v$.message.$errors" :key="i">
                  <p class="red--text">
                    {{ error.$message }}
                  </p>
                </div>
              </v-col>
              <v-col
                  cols="12"
                  sm="12"
                  md="4"
                  lg="4"
                  xl="4"
                  class="d-flex justify-center"
              >
                <v-btn
                    color="secondary primary--text"
                    class="font-weight-light rounded-0"
                    width="200"
                    height="48"
                    @click="submit"
                >
                  {{ btn }}
                </v-btn>
              </v-col>
            </v-row>
          </v-col>
        </v-row>
      </v-container>
    </v-card>
  </v-container>
</template>


<script>
import axios from "../../../api/axios";
import { required, minLength, maxLength,  email } from "@vuelidate/validators";
import { useVuelidate } from "@vuelidate/core";


export default {
  setup() {
    return { v$: useVuelidate() };
  },
  data() {
    return {
      btn: "send",
      lastName: '',
      firstName: '',
      email: '',
      phone: '',
      message: '',
      requiredMinLength: 2,
      requiredMaxNameLength: 25,
      requiredMaxMessageLength: 255,
    };
  },
  validations() {
    return {
      lastName: {
        minLength: minLength(this.requiredMinLength),
        maxLength: maxLength(this.requiredMaxNameLength),
        required,
      },
      firstName: {
        minLength: minLength(this.requiredMinLength),
        maxLength: maxLength(this.requiredMaxNameLength),
        required,
      },
      email: {
        email,
        required,
      },
      phone: {
        required,
      },
      message: {
        minLength: minLength(this.requiredMinLength),
        maxLength: maxLength(this.requiredMaxMessageLength),
        required,
      },
    };
  },
  methods: {
    // submit() {
    //   this.v$.$validate();
    //   if (!this.v$.$error) {
    //     alert("Form successfully submitted");
    //   } else {
    //     alert("Form failed");
    //   }
    // },

    submit() {
      this.v$.$validate();
      axios.post('/contact', {
        contact: {
          lastname: this.lastName,
          firstname: this.firstName,
          email: this.email,
          phone: this.phone,
          message: this.message,
        }
      })
          .then(function (response) {
            console.log(response);
          })
          .catch(function (error) {
            console.log(error);
          });

    }
    },
};
</script>