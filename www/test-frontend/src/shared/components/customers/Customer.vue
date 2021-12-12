<template>
  <b-card no-body>
    <b-jumbotron>
      <template #header>{{customer.first_name + ' ' + customer.last_name}}</template>

      <hr class="my-4">
      <template #lead>
        {{customer.email}}
      </template>
      <h2 class="ml-4"> Customer Record</h2>

      <b-card-text>
       City:  {{customer.city}}
      </b-card-text>
      <b-card-text>
      Gender:  {{customer.gender}}
      </b-card-text>
      <b-card-text>
       City:  {{customer.city}}
      </b-card-text>
      <b-card-text>
      Company:   {{customer.company}}
      </b-card-text>

      <b-button variant="success" :to="{name: 'customers'}" href="#">Back</b-button>
    </b-jumbotron>
    <div class="accordion" role="tablist">

    </div>
  </b-card>
</template>
<script>
    import {mapGetters} from "vuex";
    import {GET_CUSTOMER} from "../../../store/actions/actions.type";
    import validationMixin from "../../../shared/mixins/validationMixin";


    export default {
        name: 'customerComponent',
        mixins: [validationMixin],

        data() {
            return {
                notification: '',
                color: 'primary'
            };
        },
        methods: {
            getCustomer() {
                    this.$store.dispatch(GET_CUSTOMER, this.slug);
            },

            clearResponse(){
                this.notification = null;
            },
            onSubmit() {
                this.clearResponse()
                const payload = {
                    slug: this.customer._id,
                    name: this.customer.name
                }
            },
            // updateReview(id){
            //     const payload = {slug: this.slug, id, status: 'active'};
            //     this.$store.dispatch(UPDATE_REVIEW, payload)
            //         .then((res) => {
            //                 this.getCustomer();
            //             },
            //             (err) => {
            //                 this.errors = err.response.data.errors;
            //             }
            //         );
            // }
        },
        mounted() {
            this.getCustomer();
        },
        computed: {
            ...mapGetters(['customer']),
            slug() {
                return this.$route.params.slug;
            }
        }
    }


</script>
