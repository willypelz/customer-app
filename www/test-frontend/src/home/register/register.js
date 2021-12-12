 import validationMixin from "../../shared/mixins/validationMixin";
 import {REGISTER_USER} from "../../store/actions/actions.type";
 import {saveUserData} from "../../util/cache";


export default {
  name: "authRegister",
  mixins: [validationMixin],

  data() {
    return {
      model: {
        name: '',
        email: '',
        phone_number: '',
        department: '',
        address: '',
      },
      errors: null
    }
  },

  methods: {
    onSubmit() {
      const payload = {...this.model};
      this.$store.dispatch(REGISTER_USER, payload)
        .then((res) => {
            this.$router.push({name: 'home'})        },
          (err)=>{
            this.errors = err.response.data.message;
          });
    }

  },
  mounted() {},
  computed: {
    // ...mapGetters(['loading', 'isCreated', 'validationErrorMessages'])
  },
  beforeDestroy() {
    this.$store.commit('isCreated', false);
  }
}
