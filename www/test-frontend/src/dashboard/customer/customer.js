import validationMixin from "../../shared/mixins/validationMixin";
import Customer from "./../../shared/components/customers/Customer";
export default {
  name: 'Home',
  components: {
    Customer,
  },
  data() {
    return {
      currentPage: 1
    };
  }
}
