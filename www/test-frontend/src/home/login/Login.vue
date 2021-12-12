<template>
    <div>
        <!-- Header -->
        <div class="header py-7 py-lg-5 pt-lg-9"></div>

        <!-- Page content -->
        <b-container class="mt--8 pb-5">
            <b-row class="justify-content-center">
                <b-col lg="5" md="7">
                    <b-card no-body class="bg-secondary border-0 mb-0">
                        <b-card-body class="px-lg-5 py-lg-5">
                            <div class="text-center text-muted mb-4">
                               <h3>Customer portal </h3>
                            </div>
                            <validation-observer v-slot="{handleSubmit}" ref="formValidator">
                              <b-alert show dismissible variant="danger" v-if="error">
                                <span class="alert-text"><strong>Failed! </strong> {{error}}!</span>
                              </b-alert>

                                <b-form role="form" @submit.prevent="handleSubmit(onSubmit)">
                                    <base-input alternative
                                                class="mb-3"
                                                name="Customer ID"
                                                :rules="{required: true}"
                                                prepend-icon="ni ni-key-25"
                                                placeholder="Customer ID"
                                                v-model="model.customer_id">
                                    </base-input>

                                    <base-input alternative
                                                class="mb-3"
                                                name="Password"
                                                :rules="{required: true, min: 6}"
                                                prepend-icon="ni ni-lock-circle-open"
                                                type="password"
                                                placeholder="Password"
                                                v-model="model.password">
                                    </base-input>

                                    <div class="text-center">
                                        <base-button type="primary" native-type="submit" class="my-4">Sign in</base-button>
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

<script src="./login.js"></script>

<style lang="scss" scoped>
    @import "./login.scss";
</style>
