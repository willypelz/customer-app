import validationMixin from "../../shared/mixins/validationMixin";

import {mapGetters} from "vuex";
import {LOGIN_USER} from "../../store/actions/actions.type";
import {saveUserData} from "../../util/cache";

export default {
  name: "authLogin",
  mixins: [validationMixin],

  data() {
    return {
      model: {
        email: '',
        password: '',
      },
      error: null
    }
  },

  methods: {

    onSubmit() {
      const payload = {
        ...this.model
      };
      this.$store.dispatch(LOGIN_USER, payload)
        .then((res) => {
          saveUserData(res.user);
          this.$router.push({name: 'home'})
          },
          (err) => {
            this.error = err.response.data.message;
          }
        );
    }
  },
  mounted() {

  },
  computed: {
  },
  beforeDestroy() {
    // this.$store.commit('isCreated', false);
  }
}
