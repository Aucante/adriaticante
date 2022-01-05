<template>
  <v-container data-aos="fade-down" fluid class="my-10">
    <v-card
        color="transparent"
        height="900"
        class="d-flex align-center"
        outlined
    >
      <v-container>
        <v-container>
          <p
              class="
              d-flex
              justify-center
              display-2
              my-8
              secondary--text
              font-weight-light
            "
          >
            {{ title }}
          </p>
          <v-divider></v-divider>
        </v-container>
        <v-container>
          <v-row>
            <v-col
                cols="12"
                sm="8"
                md="8"
                lg="6"
                xl="4"
                offset-sm="2"
                offset-md="2"
                offset-lg="3"
                offset-xl="4"
            >
              <v-text-field
                  color="secondary"
                  background-color="primary"
                  label="Email"
                  hint="Example@example.com"
                  class="rounded-0"
                  filled
                  clearable
                  autofocus
                  solo
              ></v-text-field>
            </v-col>
          </v-row>
        </v-container>
        <v-container class="mt-n14">
          <v-row>
            <v-col
                cols="12"
                sm="8"
                md="8"
                lg="6"
                xl="4"
                offset-sm="2"
                offset-md="2"
                offset-lg="3"
                offset-xl="4"
            >
              <v-container>
                <v-row class="my-2" align="center">
                  <v-spacer></v-spacer>

                  <v-progress-circular
                      :value="progress"
                      color="success"
                      class="mr-6"
                  ></v-progress-circular>
                </v-row>

                <v-card color="transparent" outlined>
                  <v-slide-y-transition class="py-0" group tag="v-list">
                    <template v-for="(task, i) in tasks">
                      <v-list-item :key="`${i}-${task.text}`" class="my-n4">
                        <v-list-item-action>
                          <v-checkbox
                              v-model="task.done"
                              :color="(task.done && 'secondary') || 'primary'"
                          >
                            <template v-slot:label>
                              <div
                                  class="secondary--text ml-4"
                                  v-text="task.text"
                              ></div>
                            </template>
                          </v-checkbox>
                        </v-list-item-action>

                        <v-spacer></v-spacer>

                        <v-scroll-x-transition>
                          <v-icon v-if="task.done" color="success">
                            {{ mdi }}
                          </v-icon>
                        </v-scroll-x-transition>
                      </v-list-item>
                    </template>
                  </v-slide-y-transition>
                </v-card>
              </v-container>
            </v-col>
          </v-row>
        </v-container>
        <v-container>
          <v-row>
            <v-col
                cols="12"
                sm="8"
                md="8"
                lg="6"
                xl="4"
                offset-sm="2"
                offset-md="2"
                offset-lg="3"
                offset-xl="4"
                class="d-flex justify-center"
            >
              <p class="caption font--text">
                {{ policyOfConfidentiality }}
              </p>
            </v-col>
          </v-row>
        </v-container>
        <v-container v-if="completedTasks" class="d-flex justify-center">
          <v-btn
              data-aos="fade-up"
              depressed
              color="secondary white--text"
              class="rounded-0"
          >
            {{ btn }}
          </v-btn>
        </v-container>
      </v-container>
    </v-card>
  </v-container>
</template>


<script>
export default {
  data: () => ({
    title: "NEWSLETTER",
    btn: "Sign up",
    policyOfConfidentiality:
        "You confirm that you have read our policy of confidentiality. You can unsubscribe at any time using unsubscribe links or by contacting us at xxx@adriaticante.com.",
    mdi: "mdi-check",
    tasks: [
      {
        done: false,
        text: "You agree to receive our latest blog posts by email",
      },
      {
        done: false,
        text: "You agree to receive advertisements from our partners",
      },
    ],
    newTask: null,
  }),

  computed: {
    completedTasks() {
      return this.tasks.filter((task) => task.done).length;
    },
    progress() {
      return (this.completedTasks / this.tasks.length) * 100;
    },
    remainingTasks() {
      return this.tasks.length - this.completedTasks;
    },
  },

  methods: {
    create() {
      this.tasks.push({
        done: false,
        text: this.newTask,
      });

      this.newTask = null;
    },
  },
};
</script>