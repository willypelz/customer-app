<template>
  <div>
    <!-- Header -->
    <div class="header py-7 py-lg-5 pt-lg-9"></div>

    <!-- Page content -->
    <b-container class="mt--8 pb-5">
      <!-- Table -->
      <b-row class="justify-content-center">
        <b-col lg="6" md="8" >
          <b-card no-body class="bg-secondary border-0">
            <b-card-body class="px-lg-5 py-lg-5">
              <div class="text-center text-muted mb-4">
              Customer Registration
              </div>
              <validation-observer v-slot="{handleSubmit}" ref="formValidator">
                <b-alert show dismissible variant="danger" v-if="errors">
                  <span class="alert-text"><strong>Failed!</strong> {{errors}}!</span>
                </b-alert>
                <b-form role="form" @submit.prevent="handleSubmit(onSubmit)">
                  <base-input alternative
                              class="mb-3"
                              prepend-icon="ni ni-hat-3"
                              placeholder="Name"
                              name="name"
                              :rules="{required: true}"
                              v-model="model.name">
                  </base-input>

                  <base-input alternative
                              class="mb-3"
                              prepend-icon="ni ni-email-83"
                              placeholder="Email"
                              name="Email"
                              :rules="{required: true, email: true}"
                              v-model="model.email">
                  </base-input>
                  <base-input alternative
                              class="mb-3"
                              prepend-icon="ni ni-email-83"
                              placeholder="Phone Number"
                              name="Phone Number "
                              :rules="{required: true}"
                              v-model="model.phone_number">
                  </base-input>
                  <base-input alternative
                              class="mb-3"
                              prepend-icon="ni ni-email-83"
                              placeholder="Department"
                              name="department"
                              :rules="{required: true}"
                              v-model="model.department">
                  </base-input>
                  <base-input alternative
                              class="mb-3"
                              prepend-icon="ni ni-email-83"
                              placeholder="Address"
                              name="Address"
                              :rules="{required: true, min: 10}"
                              v-model="model.address">
                  </base-input>
                  <div class="text-center">
                    <base-button type="primary" native-type="submit"   class="mt-4">Create account</base-button>
                  </div>
                </b-form>
              </validation-observer>
            </b-card-body>
          </b-card>
        </b-col>
      </b-row>
    </b-container>
  </div>
</template>

<script src="./register.js"></script>

<style scoped>
    @import "./register.scss";
</style>
